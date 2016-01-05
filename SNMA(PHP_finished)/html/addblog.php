<?php

require 'init.php';
$user_id = $_SESSION['user_id'];
$title = $_POST['title'];
$summary = $_POST['summary'];
$class1 = $_POST['class1'];
$class2 = $_POST['class2'];
$type = $_POST['type'];
$content = $_POST['content'];
$addtime = time();

$sql = "insert into blog(user_id,title,summary,class1,class2,type,content,addtime) 
values($user_id,'$title','$summary','$class1','$class2',$type,'$content',$addtime)";
// var_dump($sql);die;
$res = mysql_query($sql);
if($res){
	header('Location:index.php');
	exit();
}else{
	var_dump(mysql_error());die();
	header('Location:addblog.html');
}
?>