<?php

require 'init.php';
if($_POST){
	$username = $_POST['username'];
	$invitationcode = $_POST['invitationcode'];
	$sql = "select * from user where username='$username'";
	$res = mysql_query($sql);
	$num = mysql_num_rows($res);
	$key = array();
	if($num != 0){
		$key['username_errorcode'] = 0;
	}else{
		$key['username_errorcode'] = 1;
	}
	$sql1 = "select * from invitation where invitationcode='$invitationcode' and enable=1";
	$res1 = mysql_query($sql1);
	$num1 = mysql_num_rows($res1);
	if($num1 != 0){
		$key['invitationcode_errorcode'] = 1;
	}else{
		$key['invitationcode_errorcode'] = 0;
	}
	echo json_encode($key);
}else{
	echo "非法访问";
}
?>