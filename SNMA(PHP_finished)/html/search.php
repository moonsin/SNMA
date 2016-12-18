<?php

require 'init.php';
if($_SESSION['user_id']){
}else{
	$_SESSION['user_id'] = 0;
}

if(!empty($_GET)){
	$act = $_GET['action'];
	if($act == 'time'){
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
	}
	if($act == 'check'){
		$sql = "select * from blog where type=1 order by check_num DESC  limit 10";
		$res = mysql_query($sql);
		$blog = array();
		$i =0;
		while ($row = mysql_fetch_assoc($res)) {
			$user_id = $row['user_id'];
			$sql = "select username from user where user_id=$user_id";
			$res_name = mysql_query($sql);
			$res_row = mysql_fetch_assoc($res_name);
			$username = $res_row['username'];

			$blog[$i] = $row;

			$id 	  =  $row['blog_id'];
			$sql1  	=	"select count(*) as count from comment where blog_id =$id";
			$res1 = mysql_query($sql1);
			$row1 = mysql_fetch_row($res1);
			$blog[$i]['comment_num']=$row1[0];

			$time = date("Y-m-d H:i:s",$row['addtime']);
			
			$blog[$i]['addtime'] = $time;
			$blog[$i]['username'] = $username;
			$i++;
		}
		$smarty->assign('blog',$blog);
		$smarty->assign('user_id',$_SESSION['user_id']);
		$smarty->assign('username',$_SESSION['username']);
		$smarty->display('index.html');
	}
	if($act == 'follow'){
		$sql = "select blog_id from follow where user_id=$_SESSION[user_id] order by follow_time DESC ";
		$res = mysql_query($sql);
		$i = 0;
		$blog = array();
		while($row = mysql_fetch_assoc($res)){
			$blog_id = $row['blog_id'];
			$sql_key = "select * from blog where blog_id=$blog_id and type=1";
			$res_key = mysql_query($sql_key);
			$row_key = mysql_fetch_assoc($res_key);
			$user_id = $row_key['user_id'];
			$sql = "select username from user where user_id=$user_id";
			$res_name = mysql_query($sql);

			$res_row = mysql_fetch_assoc($res_name);
			$username = $res_row['username'];
			$time = date("Y-m-d H:i:s",$row_key['addtime']);
			$blog[$i] = $row_key;

			$id 	  =  $row_key['blog_id'];
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
	}
	if($act == 'comment'){
		$sql = "select blog_id from comment where user_id=$_SESSION[user_id] order by comment_addtime DESC limit 10 ";
		$res = mysql_query($sql);
		$i = 0;
		$blog = array();
		while($row = mysql_fetch_assoc($res)){
			$blog_id = $row['blog_id'];
			$sql_key = "select * from blog where blog_id=$blog_id and type=1";
			$res_key = mysql_query($sql_key);
			$row_key = mysql_fetch_assoc($res_key);
			$user_id = $row_key['user_id'];
			$sql = "select username from user where user_id=$user_id";
			$res_name = mysql_query($sql);
			$res_row = mysql_fetch_assoc($res_name);
			$username = $res_row['username'];

			$blog[$i] = $row;
			$id 	  =  $row['blog_id'];
			$sql1  	=	"select count(*) as count from comment where blog_id =$id";
			$res1 = mysql_query($sql1);
			$row1 = mysql_fetch_row($res1);
			$blog[$i]['comment_num']=$row1[0];

			$time = date("Y-m-d H:i:s",$row_key['addtime']);
			$blog[$i] = $row_key;

			$id 	  =  $row_key['blog_id'];
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
	}
	if($act == 'class1'){
		$class1 = $_GET['class1'];
		$sql = "select * from blog where type=1 and class1='$class1' order by addtime DESC limit 10 ";
		$res = mysql_query($sql);
		$blog = array();
		$i =0;
		while ($row = mysql_fetch_assoc($res)) {
			$user_id = $row['user_id'];
			$sql = "select username from user where user_id=$user_id";
			$res_name = mysql_query($sql);
			$res_row = mysql_fetch_assoc($res_name);
			$username = $res_row['username'];

			$blog[$i] = $row;
			$id 	  =  $row['blog_id'];
			$sql1  	=	"select count(*) as count from comment where blog_id =$id limit 10";
			$res1 = mysql_query($sql1);
			$row1 = mysql_fetch_row($res1);
			$blog[$i]['comment_num']=$row1[0];

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
	}
	if($act == 'class2'){
		$class2 = $_GET['class2'];
		$sql = "select * from blog where type=1 and class2='$class2' order by addtime DESC limit 10";
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
			$blog[$i]['addtime'] = $time;

			$blog[$i] = $row;
			$id 	  =  $row['blog_id'];
			$sql1  	=	"select count(*) as count from comment where blog_id =$id";
			$res1 = mysql_query($sql1);
			$row1 = mysql_fetch_row($res1);
			$blog[$i]['comment_num']=$row1[0];

			$blog[$i]['username'] = $username;
			$i++;
		}
		$smarty->assign('blog',$blog);
		$smarty->assign('user_id',$_SESSION['user_id']);
		$smarty->assign('username',$_SESSION['username']);
		$smarty->display('index.html');
	}
}
if(!empty($_POST)){
	$key = '%'.$_POST['keyword'].'%';
	$sql = "select * from blog where type=1 and title like '$key' order by addtime DESC  ";
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

			$blog[$i] = $row;
			$blog[$i]['addtime'] = $time;
			$blog[$i]['username'] = $username;
			$i++;
		}
		$smarty->assign('blog',$blog);
		$smarty->assign('user_id',$_SESSION['user_id']);
		$smarty->assign('username',$_SESSION['username']);
		$smarty->display('index.html');
}
?>