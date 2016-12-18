<?php
require 'init.php';
if(empty($_POST)){
	echo "非法访问";
	exit();
}else{
	$user_id = $_SESSION['user_id'];
	$sql = "select invitationcode,enable from invitation where user_id=$user_id";
	$res = mysql_query($sql);
	$key = array();
	$i = 0;
	while($row = mysql_fetch_assoc($res)){
		$key[$i] = $row;
		$i++;
	}
	echo json_encode($key);
}
?>