<?php
require 'init.php';

if(empty($_POST)){
	echo "非法访问";
	exit();
}
$user_id = $_SESSION['user_id'];
$blog_id = $_POST['blog_id'];
$content = $_POST['content'];
$comment_addtime = time();
$sql = "insert into comment(user_id,blog_id,content,comment_addtime) values($user_id,$blog_id,'$content',$comment_addtime)";
mysql_query($sql);
header("Location:blogcontent.php?blog_id=$blog_id");
?>