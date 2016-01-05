<?php /* Smarty version Smarty-3.0.6, created on 2015-12-14 12:53:42
         compiled from "../html/login.html" */ ?>
<?php /*%%SmartyHeaderCode:972736969566e4b56e02485-88989946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e6c3757291865164d3ee3c3ca27bcce2a72cd07' => 
    array (
      0 => '../html/login.html',
      1 => 1450068743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '972736969566e4b56e02485-88989946',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>Fullscreen Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
 
        <!-- CSS -->
        <link rel="stylesheet" href="../public/css/reset.css">
        <link rel="stylesheet" href="../public/css/supersized.css">
        <link rel="stylesheet" href="../public/css/login-style.css">
        <link rel="shortcut icon" href="../photo/bitbug_favicon.ico" type="image/x-icon">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<link rel="stylesheet" href="../public/css/index.css">
    </head>

    <body oncontextmenu="return false">

        <div class="page-container" style="font-family:biaotifontfamily;">
            <h1>Login</h1>
            <form action="login.php" method="post">
				<div>
					<span><?php echo $_smarty_tpl->getVariable('login_err')->value;?>
</span>
					<input type="text" name="username" class="username" placeholder="Username" autocomplete="off" style="font-family:biaotifontfamily;"/>
				</div>
                <div>
					<input type="password" name="password" class="password" placeholder="Password" oncontextmenu="return false" onpaste="return false" style="font-family:biaotifontfamily;" />
                </div>
              <!--   <div style="width:400px;margin:20px 0 0 -40px;">{{login_err}}</div> -->
                <button id="submit" type="submit" style="font-family:biaotifontfamily;">Sign in</button>
            </form>
            <div class="connect">
                <p>With Great Power Comes Great Responsibility</p>
				<p style="margin-top:20px;">能力越大，责任越大。</p>
            </div>
        </div>
		<div class="alert" style="display:none">
			<h2>消息</h2>
			<div class="alert_con">
				<p id="ts"></p>
				<p style="line-height:70px"><a class="btn">确定</a></p>
			</div>
		</div>

        <!-- Javascript -->
		<script src="http://apps.bdimg.com/libs/jquery/1.6.4/jquery.min.js" type="text/javascript"></script>
        <script src="../public/js/supersized.3.2.7.min.js"></script>
        <script src="../public/js/supersized-init.js"></script>
		<script>
		$(".btn").click(function(){
			is_hide();
		})
		var u = $("input[name=username]");
		var p = $("input[name=password]");
		$("#submit").live('click',function(){
			if(u.val() == '' || p.val() =='')
			{
				$("#ts").html("用户名或密码不能为空~");
				is_show();
				return false;
			}
			//  else{
			// 	var reg = /^[0-9A-Za-z]+$/;
			// 	if(!reg.exec(u.val()))
			// 	{
			// 	   	 $("#ts").html("用户名错误");
			// 	     is_show();
			// 	     return false;
			// 	}
			}
		});
		window.onload = function()
		{
			$(".connect p").eq(0).animate({"left":"0%"}, 600);
			$(".connect p").eq(1).animate({"left":"0%"}, 400);
		}
		function is_hide(){ $(".alert").animate({"top":"-40%"}, 300) }
		function is_show(){ $(".alert").show().animate({"top":"45%"}, 300) }
		</script>
    </body>

</html>

