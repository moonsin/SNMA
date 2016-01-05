<?php
require 'init.php';
ini_set("display_errors","On");
error_reporting(E_ALL);
if(empty($_POST)){
	echo "非法访问";
	exit();
}
$now_node = $_POST['now_node'];
$get_num = $_POST['get_num'];
$get_action=$_POST['action'];

$uid 	      =	$_SESSION['user_id'] ;
if(($get_action==null)||$get_action=="time"){
	$sql = "select * from blog where type=1 order by addtime DESC limit $now_node,$get_num ";
}elseif ($get_action=="check"){
	$sql =	 "select * from blog where type=1 order by check_num DESC limit $now_node,$get_num";
}elseif($get_action=="follow"){
	if(!$uid){
		return ;
	}
	$sql =	"select * from follow left join blog on follow.blog_id =blog.blog_id where follow.user_id  order by id desc limit $now_node,$get_num";

}elseif ($get_action=="comment") {
	if(!$uid){
		return ;
	}
	$sql =	"select * from comment left join blog on comment.blog_id =blog.blog_id where follow.user_id  order by id desc  limit $now_node,$get_num";
}else{
	//$pattern =	"/class\d&(class\d)=(.*)/";
	$class 	      =  $_POST['classcontent'];
	if(!$class){
		return 0;
	}
	//$get 	=	preg_match_all($pattern, $get_action,$matches);
	/*if($get 		==	false){
		header("location: 404.html");
	}else{*/
	$class1 	=	$get_action;
	$class2  =	$class;
	$now_node =	$now_node+1;
	if($class1=="class1"){
		$sql =	"select * from blog where class1 = '{$class2}' order by blog_id desc  limit $now_node,$get_num";

	}elseif($class1=="class2"){
		$sql =	"select * from blog where class2 = '{$class2}' order by blog_id desc  limit $now_node,$get_num";
	}
	//echo $sql;
	
}
$res = mysql_query($sql);
$blog = array();
$i =0;
while ($row = mysql_fetch_assoc($res)) {
	$user_id = $row['user_id'];
	$sql = "select username from user where user_id=$user_id";
	$res_name = mysql_query($sql);
	$res_row = mysql_fetch_assoc($res_name);
	$username = $res_row['username'];
	$time = date("Y-m-d H:i:s",$row['addtime']);
	$blog[$i] = $row;

	$id 	  =  $row['blog_id'];
	$sql1  	=	"select count(*) as count from comment where blog_id =$id";
	$res1 = mysql_query($sql1);
	$row1 = mysql_fetch_row($res1);
	$blog[$i]['comment_num']=$row1[0];

	$blog[$i]['addtime'] = $time;
	$blog[$i]['username'] = $username;
	$i++;
}
echo json_encode($blog);

?>