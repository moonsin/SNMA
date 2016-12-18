<?php
require 'init.php';

if(empty($_POST)){
	echo "非法访问";
	exit();
}
$user_id = $_SESSION['user_id'];
$sex = $_POST['sex'];
$email = $_POST['email'];
$job = $_POST['job'];
$address = $_POST['address'];
$signature = $_POST['signature'];
$sql = "update user set sex=$sex,email='$email',job='$job',address='$address',signature='$signature' where user_id=$user_id";
mysql_query($sql);
header('Location:index.php?action=personal');
?>