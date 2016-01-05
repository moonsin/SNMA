<?php

require 'init.php';
if(empty($_POST)){
	echo "非法访问";
	exit();
}
$username = $_POST['username'];
$password = MD5($_POST['password']);
$sql = "select user_id from user where username='$username' and password='$password'";
$res = mysql_query($sql);
$num = mysql_num_rows($res);
if($num != 0){
$row = mysql_fetch_assoc($res);
$user_id = $row['user_id'];
$_SESSION['username'] = $username;
$_SESSION['user_id'] = $user_id;
header('Location:index.php');
exit();
}else{
	$smarty->assign('login_err','username or password error');
	$smarty->display('login.html');
}
?>