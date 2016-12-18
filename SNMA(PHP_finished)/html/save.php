<?php
	require 'init.php';
	$user_id = $_SESSION['user_id'];
	$title 	      = $_POST['title'];
	$type 	     = $_POST['type'];
	$summary=$_POST['summary'];
	$content   =$_SESSION['content'] ;
	$class1	      =$_POST['class1'];
	$class2        = $_POST['class2'];
	$blog_id     =  $_POST['blog_id'];
	$content    =  $_POST['content'];

	$sql = "update blog set title='$title' ,summary='$summary',class1='$class1',class2='$class2',type='$type',content='$content' where blog_id=$blog_id";
	$res = mysql_query($sql);
	if($res){
		//echo $sql;

		header('Location:postlist.php');
		exit();
	}else{
		//var_dump(mysql_error());
		echo "<script>alert('success');history.back(-1);</script>";
	}
?>