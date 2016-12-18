<?php
//数据库配置
$DB_NAME = 'localhost';
$DB_USER = 'root';
$DB_PSW = '111555a';

$con = mysql_connect($DB_NAME,$DB_USER,$DB_PSW);

if(!$con){
	die("数据库连接失败".mysql_error());
}

//数据库选择
mysql_select_db("snma",$con);
mysql_query("set character set 'UTF8'");

?>