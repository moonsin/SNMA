<?php

require 'init.php';
$blog_id = $_GET['blog_id'];

$sql = "select * from blog where blog_id=$blog_id";
$res = mysql_query($sql);
$row = mysql_fetch_assoc($res);
$blog_info = array();
$blog_info = $row;
$blog_info['check_num'] = $blog_info['check_num']+1;
$sql = "update blog set check_num=$blog_info[check_num] where blog_id=$blog_id";
mysql_query($sql);
$user_id = $row['user_id'];
$sql1 = "select * from user where user_id=$user_id";
$res1 = mysql_query($sql1);
$user_info = mysql_fetch_assoc($res1);
$blog_info['user_info'] = $user_info;
$sql2 = "select count(*) as yuanchuang from blog where (class1='技术博客' or class1='个人随笔') and user_id=$user_id";
$res2 = mysql_query($sql2);
$key = mysql_fetch_assoc($res2);
$blog_info['yuanchuang'] = $key['yuanchuang'];
$sql3 = "select count(*) as feiyuanchuang from blog where class1='非原创' and user_id=$user_id";
$res3 = mysql_query($sql3);
$key = mysql_fetch_assoc($res3);
$blog_info['feiyuanchuang'] = $key['feiyuanchuang'];
$sql4 = "select blog_id from blog where user_id=$user_id and type=1 order by addtime DESC";
$res4 = mysql_query($sql4);
$i = 0;
while($key1 = mysql_fetch_array($res4)){
	$id_info[$i] = $key1['blog_id'];
	$i++;
}
for($k=0;;$k++){
	if ($id_info[$k]==$blog_id) {
		if($id_info[$k-1]){
			$next_id = $id_info[$k-1];
		}else{
			$next_id = 0;
		}
		if($id_info[$k+1]){
			$last_id = $id_info[$k+1];
		}else{
			$last_id = 0;
		}
		break;
	}
	continue;
}
if($last_id != 0){
	$sql = "select title from blog where blog_id=$last_id";
	$res = mysql_query($sql);
	$key = mysql_fetch_assoc($res);
	$blog_info['last_title'] = $key['title'];
}
if($next_id != 0){
	$sql = "select title from blog where blog_id=$next_id";
	$res = mysql_query($sql);
	$key = mysql_fetch_assoc($res);
	$blog_info['next_title'] = $key['title'];
}

$blog_info['last_id'] = $last_id;
$blog_info['next_id'] = $next_id;
$blog_info['addtime'] = date("Y-m-d H:i:s",$blog_info['addtime']);

if($_SESSION['user_id']){
		$smarty->assign('user_id',$_SESSION['user_id']);
		$smarty->assign('username',$_SESSION['username']);
	}else{
		$smarty->assign('user_id',0);
	}
$sql = "select * from follow where user_id=$_SESSION[user_id] and blog_id=$blog_id";
$res = mysql_query($sql);
$is_follow = mysql_num_rows($res);
$blog_info['is_follow'] = $is_follow;

$sql_comment = "select * from comment where blog_id=$blog_id order by comment_addtime ASC";
$res_comment = mysql_query($sql_comment);
$comment = array();
$i = 1;
while($row_comment = mysql_fetch_assoc($res_comment)){
	$comment[$i] = $row_comment;
	$key = $row_comment['user_id'];
	$sql = "select username from user where user_id=$key";
	$res = mysql_query($sql);
	$row = mysql_fetch_assoc($res);
	$comment[$i]['id'] = $i;
	$comment[$i]['username'] = $row['username'];
	$comment[$i]['comment_addtime'] = date("Y-m-d H:i:s",$comment[$i]['comment_addtime']);
	$i++;
}
$blog_info['comment'] = $comment;
$sql = "select * from comment where user_id=$user_id";
$res = mysql_query($sql);
$user_num = mysql_num_rows($res);
$blog_info['user_num'] = $user_num;
$sql = "select * from comment where blog_id=$blog_id";
$res = mysql_query($sql);
$blog_num = mysql_num_rows($res);
$blog_info['blog_num'] = $blog_num;
$smarty->assign('user_id',$_SESSION['user_id']);
$smarty->assign('blog_info',$blog_info);
$smarty->display('blogcontent.html');

?>