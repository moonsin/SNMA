<?php
	/*ini_set("display_errors","On");
	error_reporting(E_ALL);*/
	require 'init.php';
	$user_id 	=	$_SESSION['user_id'];
	if(empty($_SESSION['user_id'])){
		header('404.php');
	}
	$page  = $_GET['page'];
	if(empty($page)){
		$page 	=	1;
	}
	$sql2 = "select count(*) from blog where user_id=$user_id ";
	$res2 = mysql_query($sql2);
	$row2 = mysql_fetch_row($res2);
	$total =$row2[0];

	$pageCount 	=	10;
	$start 		=	$pageCount*($page-1);
	$sql = "select * from blog where user_id=$user_id order by addtime DESC limit $start,$pageCount ";

	$res = mysql_query($sql);
	$blog = array();
	$i =0;
	while ($row = mysql_fetch_assoc($res)) {

		$time = date("Y-m-d H:i:s",$row['addtime']);
		$blog[$i] = $row;
		$blog[$i]['order']=$start+$i+1;
		$blog[$i]['addtime'] = $time;
		$id 	=	$blog[$i]['blog_id'];
		$sql1  	=	"select count(*) as count from comment where blog_id =$id";

		$res1 = mysql_query($sql1);
		$row1 = mysql_fetch_row($res1);
		$blog[$i]['comment_num']=$row1[0];


		$i++;
	}
	$smarty->assign('blog',$blog);
	$smarty->assign('user_id',$_SESSION['user_id']);
	$smarty->assign('username',$_SESSION['username']);
	$smarty->assign('total',$total);
	$smarty->display('postlist.html');
?>