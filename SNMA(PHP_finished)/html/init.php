<?php
	require_once '../Smarty/libs/Smarty.class.php';
	require 'conn.php';

	$lifeTime = 2 * 3600;  // session生命周期
	session_set_cookie_params($lifeTime); 
	session_start();

    //创建smarty对象
    $smarty = new Smarty;//建立smarty实例对象$smarty
    $smarty -> caching = false;//是否使用缓存
    $smarty -> template_dir = "../html";//设置模板目录
    $smarty -> compile_dir = "../Smarty/templates_c";//设置编译目录
    $smarty -> cache_dir = "../Smarty/smarty_cache";//缓存文件夹
    //修改左右边界符号
    $smarty -> left_delimiter="<{";
    $smarty -> right_delimiter="}>";
?>