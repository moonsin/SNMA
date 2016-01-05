<?php
	
	require 'init.php';
	$user_id 	=	$_SESSION['user_id'];
	if(empty($_SESSION['user_id'])){
		header('404.php');
	}
	$id 	=	$_GET['id'];
	$sql 	= 	"select user_id from blog where blog_id=$id ";
	//echo $sql;
	$res = mysql_query($sql);
	$row = mysql_fetch_row($res);
	$author =$row[0];
	//header('Content-Type: text/xml; charset=UTF-8');
	if($author!=$user_id){
		header('404.php');
	}else{
		$sql 	=	"delete from blog where blog_id=$id";
		//echo $sql;
		$res = mysql_query($sql);
		//var_dump($res);
		if($res){
			echo "<script>alert('success');history.back(-1);</script>";
		}else{
			//die(mysql_error());
			echo "<script>alert('success');history.back(-1);</script>";
		}
	}
?>

