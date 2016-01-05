<?php

require 'init.php';

$data = $_POST['imgsrc'];
$s = base64_decode(str_replace('data:image/png;base64,', '', $data));

$user_id = $_SESSION['user_id'];
$imgDir = '../photo/';
$filename = $user_id.".png";
$filepath = $imgDir.$filename;
file_put_contents($filepath, $s);
$sql = "update user set  touxiang='$filename' where user_id=$user_id";
mysql_query($sql);
header('Location:index.php?action=personal');
?>