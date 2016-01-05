<?php
require 'init.php';
if(empty($_POST)){
	echo "非法访问";
	exit();
}
$username = $_POST['username'];
$password = md5($_POST['pass']);
$sex = 0;
$qq = isset($_POST['qqnumber'])?$_POST['qqnumber']:'';
$wechat_id = isset($_POST['wechat'])?$_POST['wechat']:'';
$weibo = isset($_POST['SinaMicroblog'])?$_POST['SinaMicroblog']:'';
$first_name = isset($_POST['fname'])?$_POST['fname']:'';
$last_name = isset($_POST['lname'])?$_POST['lname']:'';
$phone = isset($_POST['phone'])?$_POST['phone']:'';
$email = isset($_POST['email'])?$_POST['email']:'';
$signature = isset($_POST['signature'])?$_POST['signature']:'';
$sql = "select * from user where username = '$username'";
$res = mysql_query($sql);
if($res&&mysql_num_rows($res)>0){
	header('Location:register.html');
	echo "<script>alert('Users already exist');</script>";
	exit();
}
$user_addtime = time();
$sql = "insert into user(username,password,sex,qq,wechat_id,weibo,first_name,last_name,phone,email,signature,user_addtime) values 
('$username','$password',$sex,'$qq','$wechat_id','$weibo','$first_name','$last_name','$phone','$email','$signature',$user_addtime)";

$res1 = mysql_query($sql);
$invitationcode = $_POST['invitationcode'];
$newid = mysql_insert_id();
$sql = "update invitation set enable=0 where invitationcode='$invitationcode'";
mysql_query($sql);

for ($i=0; $i <2 ; $i++) { 
	$key = creatchar(17);
	$sql = "insert into invitation(user_id,invitationcode,enable) values($newid,'$key',1)";
	mysql_query($sql);
}


if(!res1){
	echo "注册失败";
	header('Location:register.html');
	exit();
}else{
	$user_id = $newid;
	$_SESSION['username'] = $username;
	$_SESSION['user_id'] = $user_id;
}

header('Location:index.php');

//生成邀请码
function creatchar($length){
	$str = "";
	$key = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz";
	$max = strlen($key)-1;
	for ($i=0; $i <$length ; $i++) { 
		$num = rand(0,$max);
		$str.=$key[$num];
	}
	return $str;
}
?>