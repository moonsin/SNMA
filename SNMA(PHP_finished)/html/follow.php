<?php
require 'init.php';

if(empty($_POST)){
	echo "非法访问";
	exit();
}
$user_id = $_SESSION['user_id'];
$blog_id = $_POST['blog_id'];
$is_follow = $_POST['is_follow'];
$follow_time = time();
if($is_follow == 1){
$sql = "insert into follow(user_id,blog_id,follow_time) values($user_id,$blog_id,$follow_time)";
mysql_query($sql);
}
else{
	$sql = "delete from follow where user_id=$user_id and blog_id=$blog_id";
	mysql_query($sql);
}
?>
