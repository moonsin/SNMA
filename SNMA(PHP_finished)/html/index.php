<?php
require 'init.php';
//error_reporting(0);

$act = $_GET['action'];
if($act == null){
	if($_SESSION['user_id']){
		$sql = "select * from blog where type=1 order by addtime DESC limit 10";
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
		$smarty->assign('blog',$blog);
		$smarty->assign('user_id',$_SESSION['user_id']);
		$smarty->assign('username',$_SESSION['username']);
		$smarty->display('index.html');
	}else{
		$sql = "select * from blog where type=1 order by addtime DESC limit 10";
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
		$smarty->assign('blog',$blog);
		$smarty->assign('user_id',0);
		$smarty->display('index.html');
	}
}
elseif($act == 'login'){
	$smarty->display('login.html');
}
elseif ($act == 'personal') {
	if($_SESSION['user_id']){
		$user_id = $_SESSION['user_id'];
		$sql = "select * from user where user_id=$user_id";
		$res = mysql_query($sql);
		$user_info =array();
		$user_info = mysql_fetch_assoc($res);
		//关注博客数量
		$sql = "select * from follow where user_id=$user_id";
		$res = mysql_query($sql);
		$follow_num = mysql_num_rows($res);
		$user_info['follow_num'] = $follow_num;
		//发表博客数量
		$sql = "select * from blog where user_id=$user_id";
		$res = mysql_query($sql);
		$publish_num = mysql_num_rows($res);
		$user_info['publish_blog_num'] = $publish_num;
		//发表评论数量
		$sql = "select * from comment where user_id=$user_id";
		$res = mysql_query($sql);
		$publish_comment_num = mysql_num_rows($res);
		$user_info['publish_comment_num'] = $publish_comment_num;
		//获得关注
		$get_follow = 0;
		$sql = "select * from blog where user_id=$user_id";
		$res = mysql_query($sql);
		while ($row = mysql_fetch_assoc($res)) {
			$key = $row['blog_id'];
			$sql_key = "select * from follow where blog_id=$key";
			$res_key = mysql_query($sql_key);
			$num_key = mysql_num_rows($res_key);
			$get_follow += $num_key;
		}
		//最新发表
		$sql = "select * from blog where user_id=$user_id order by addtime DESC limit 4";
		$res = mysql_query($sql);
		$i = 0;
		$blog = array();
		while ($row = mysql_fetch_assoc($res)) {
			$blog[$i] = $row;
			$blog[$i]['addtime'] = date("Y-m-d H:i:s",$blog[$i]['addtime']);
			$i++;
		}
		//最新关注
		$sql = "select * from follow where user_id=$user_id order by follow_time DESC limit 4";
		$res = mysql_query($sql);
		$follow = array();
		$i = 0;
		while ($row = mysql_fetch_assoc($res)) {
			$follow[$i] = $row;
			$follow[$i]['follow_time'] = date("Y-m-d H:i:s",$follow[$i]['follow_time']);
			$key = $row['blog_id'];
			$sql_key = "select * from blog where blog_id=$key";
			$res_key = mysql_query($sql_key);
			$row_key = mysql_fetch_assoc($res_key);
			$follow[$i]['info'] = $row_key;
			$i++;
		}
		$user_info['get_follow'] = $get_follow;
		$smarty->assign('user_info',$user_info);
		$smarty->assign('blog',$blog);
		$smarty->assign('follow',$follow);
		$smarty->assign('user_id',$_SESSION['user_id']);
		$smarty->assign('username',$_SESSION['username']);
		$smarty->display('personalpage.html');
	}else{
		$smarty->assign('user_id',0);
		$smarty->display('personalpage.html');
	}
	
}
elseif($act == 'personal_other'){
		$username = $_GET['username'];
		$sql = "select user_id from user where username='$username'";
		$res = mysql_query($sql);
		$row = mysql_fetch_assoc($res);
		$user_id = $row['user_id'];
		$sql = "select * from user where user_id=$user_id";
		$res = mysql_query($sql);
		$user_info =array();
		$user_info = mysql_fetch_assoc($res);
		//关注博客数量
		$sql = "select * from follow where user_id=$user_id";
		$res = mysql_query($sql);
		$follow_num = mysql_num_rows($res);
		$user_info['follow_num'] = $follow_num;
		//发表博客数量
		$sql = "select * from blog where user_id=$user_id";
		$res = mysql_query($sql);
		$publish_num = mysql_num_rows($res);
		$user_info['publish_blog_num'] = $publish_num;
		//发表评论数量
		$sql = "select * from comment where user_id=$user_id";
		$res = mysql_query($sql);
		$publish_comment_num = mysql_num_rows($res);
		$user_info['publish_comment_num'] = $publish_comment_num;
		//获得关注
		$get_follow = 0;
		$sql = "select * from blog where user_id=$user_id";
		$res = mysql_query($sql);
		while ($row = mysql_fetch_assoc($res)) {
			$key = $row['blog_id'];
			$sql_key = "select * from follow where blog_id=$key";
			$res_key = mysql_query($sql_key);
			$num_key = mysql_num_rows($res_key);
			$get_follow += $num_key;
		}
		//最新发表
		$sql = "select * from blog where user_id=$user_id and type=1 order by addtime DESC limit 4";
		$res = mysql_query($sql);
		$i = 0;
		$blog = array();
		while ($row = mysql_fetch_assoc($res)) {
			$blog[$i] = $row;
			$blog[$i]['addtime'] = date("Y-m-d H:i:s",$blog[$i]['addtime']);
			$i++;
		}
		//最新关注
		$sql = "select * from follow where user_id=$user_id order by follow_time DESC limit 4";
		$res = mysql_query($sql);
		$follow = array();
		$i = 0;
		while ($row = mysql_fetch_assoc($res)) {
			$follow[$i] = $row;
			$follow[$i]['follow_time'] = date("Y-m-d H:i:s",$follow[$i]['follow_time']);
			$key = $row['blog_id'];
			$sql_key = "select * from blog where blog_id=$key";
			$res_key = mysql_query($sql_key);
			$row_key = mysql_fetch_assoc($res_key);
			$follow[$i]['info'] = $row_key;
			$i++;
		}
		$user_info['get_follow'] = $get_follow;
		$smarty->assign('user_info',$user_info);
		$smarty->assign('blog',$blog);
		$smarty->assign('follow',$follow);
		$smarty->assign('other_user_id',$user_id);
		$smarty->assign('user_id',$_SESSION['user_id']);
		$smarty->assign('username',$_SESSION['username']);
		$smarty->display('personal_other.html');
}
?>