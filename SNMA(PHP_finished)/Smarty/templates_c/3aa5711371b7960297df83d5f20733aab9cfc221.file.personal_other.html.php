<?php /* Smarty version Smarty-3.0.6, created on 2016-01-03 17:44:09
         compiled from "../html/personal_other.html" */ ?>
<?php /*%%SmartyHeaderCode:16051923515688ed698bcc59-51367877%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aa5711371b7960297df83d5f20733aab9cfc221' => 
    array (
      0 => '../html/personal_other.html',
      1 => 1451814174,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16051923515688ed698bcc59-51367877',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include '/usr/local/nginx/Smarty/libs/plugins/modifier.date_format.php';
?><!doctype html>
<html >
  <head>
   <meta charset="utf-8">
   <title>PersonalPage</title>
   <!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="../public/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="../public/js/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="../public/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../public/js/cropbox.js"></script>

<link rel="shortcut icon" href="../photo/bitbug_favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="../public/css/style.css" type="text/css" />
<link rel="stylesheet" href="../public/css/index.css">
<link rel="stylesheet" href="../public/css/personalpage.css">

 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript">
  
  $("document").ready(function(){
 if ($("#xingbiechu").html()==0) {
  $("#xingbiechu").html("保密");
 }
 else if($("#xingbiechu").html()==1)
  {
  $("#xingbiechu").html("男");
 }
 else {
   $("#xingbiechu").html("女");
 }


})
</script>
 </head>
 <body>
 	<div class="container-fluid" style="padding-right:0px;padding-left:0px;">
<nav class="navbar navbar-default navbar-fixed-top" style="line-height:1;z-index:999;" >
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php" style="font-family:biaotifontfamily;">SNMA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav yincanggp">

        


        <li class="dropdown" style="font-family:biaotifontfamily;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Great People <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?action=personal_other&username=moon">Moon</a></li>
            <li><a href="#">ThreeGold</a></li>
            <li><a href="index.php?action=personal_other&username=尹俊民">TCH.Yin</a></li>
            <li><a href="index.php?action=personal_other&username=SunskyXH">SunSky</a></li>
            <li><a href="#">NorthSea</a></li>

            <li role="separator" class="divider"></li>
            <li><a href="index.php?action=personal_other&username=Ether">WhiteCloud</a></li>
            <li><a href="index.php?action=personal_other&username=amiao">Amiao</a></li>
            <!-- <li role="separator" class="divider"></li> -->
          </ul>
        </li>
      </ul>
    

    <div id="biaotizikuang" style="position: relative; margin:0 auto;width:870px;">
         <p class="navbar-text biaotizi"  id="biatizix" style="color:black;">SUNSKY NORTHSEA MOON & THE BLESSED GIRL AMIAO</p>
    </div>

<?php if ($_smarty_tpl->getVariable('user_id')->value!=0){?>

        <ul class="nav navbar-nav">
   
          <li class="dropdown" style="font-family:biaotifontfamily;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp</span><?php echo $_smarty_tpl->getVariable('username')->value;?>
<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="index.php?action=personal">Personal Page</a></li>
            <li><a href="addblog.html">Add Blog</a></li>
            <li><a href="postlist.php">Blog List</a></li>
            <li role="separator" class="divider"></li>
            <li id="invitationcodegt" data-toggle="modal" data-target=".bs-example-modal-sm"><a href="#">InvitationCode</a></li>
            <li><a href="outlog.php">Exit</a></li>

          </ul>
        </li>
      </ul>


    <?php }else{ ?>
      <div class="btn-group" role="group" aria-label="..." style="float:right;">
      <a href="register.html"><button type="button" class="btn btn-default navbar-btn navbar-right btn-sm" style="outline:none;font-family:biaotifontfamily;">register</button></a>
     <a href="index.php?action=login"><button type="button" class="btn btn-default navbar-btn navbar-right btn-sm" style="outline:none;margin:10px 10px 0 0;font-family:biaotifontfamily";>Sign in</button></a>
      </div>

<?php }?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

 	
	<div class="quanbu">
 <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="yaoqingmakuang">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">My InvitationCode</h4>
      </div>
      <div class="modal-body">
       <p style="margin:10px 20px 10px 20px;font-size:15px;" id="yaoqingma1"></p>
      <p style="margin:10px 20px 10px 20px;font-size:15px;" id="yaoqingma2"></p>
    </div>
    </div>
  </div>
</div>
         
		<div class="topkuang">
			<h4 style="margin:20px 0 0 20px"><strong><?php echo $_smarty_tpl->getVariable('user_info')->value['username'];?>
</strong>，<?php echo $_smarty_tpl->getVariable('user_info')->value['job'];?>
</h4>
			<div style="float:left;"><img src="../photo/<?php echo $_smarty_tpl->getVariable('other_user_id')->value;?>
.png"  alt="..." class=" img-responsive" onerror="this.src='../photo/default.jpg'" style="width: 90px;height:90px;margin:15px 0 0 20px;">
     </div>

			<div style="margin:20px 0 0 125px;" ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span style="margin:0 0 0 10px"><?php echo $_smarty_tpl->getVariable('user_info')->value['address'];?>
</span></div>
			<div style="margin:5px 0 0 125px;" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span><span style="margin:0 0 0 10px" id="xingbiechu"><?php echo $_smarty_tpl->getVariable('user_info')->value['sex'];?>
</span></div>
			<div style="margin:5px 0 0 125px;" ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span><span style="margin:0 0 0 10px"><?php echo $_smarty_tpl->getVariable('user_info')->value['email'];?>
</span></div>
			<div style="margin:0 0 0 125px;" ><HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10></div>
			<div style="margin:0 0 0 125px;" ><p style="font-size:13px"><?php echo $_smarty_tpl->getVariable('user_info')->value['signature'];?>
</p></div>
			<HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10 />
			<div style="margin:0 0 0 15px;" ><p style="font-size:13px">获得&nbsp<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp<?php echo $_smarty_tpl->getVariable('user_info')->value['get_follow'];?>
&nbsp关注</p></div>
		</div>

   
       <div class="rightkuang">
          <div class="guanzhuge">
             <div style="border-right:1px solid #BBB;width:70px;float:left;height:60px;">
                <span style="color:#999;font-size:14px;"><strong>关注了</strong></span>
                <br>
                <div style="margin:10px 0 0 0">
                <strong><?php echo $_smarty_tpl->getVariable('user_info')->value['follow_num'];?>
</strong>
                <label>博客</label>
                </div>
             </div> 
             <div style="width:230px;position:relative;left:15px">
                <span style="color:#999;font-size:14px;"><strong>发表了</strong></span>
                <br>
                <div style="margin:10px 0 0 0">
                <strong><?php echo $_smarty_tpl->getVariable('user_info')->value['publish_blog_num'];?>
</strong>
                <label>博客</label>
                </div>
              </div>
          </div>

          <div style="margin:5px 0 0 0;padding:10px 10px 0 10px;">
           <span>发表了&nbsp&nbsp<strong><?php echo $_smarty_tpl->getVariable('user_info')->value['publish_comment_num'];?>
个评论</strong></span>
          </div>
          <div class="rightfenge"></div>

           <div style="margin:5px 0 0 0;padding:10px 10px 0 10px;">
           <span>该用户注册于&nbsp&nbsp<strong><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('user_info')->value['user_addtime'],"%Y-%m-%d %H:%M:%S");?>
</strong></span>
          </div>
          <div class="rightfenge"></div>
       </div>
      
         	<div class="bomkuang">
			<h5 style="margin:5px 0 0 15px"><strong>最新动态</strong></h5>
			<HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=7>
     

          <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('blog')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
?>
          
          <div style="margin:5px 20px 3px 20px;height:70px">
          <p><span style="font-size:13px;color:#777;">发表了该博客</span><span style="float:right;font-size:13px;color:#777;"><?php echo $_smarty_tpl->tpl_vars['foo']->value['addtime'];?>
</span></p>
          <p style="font-size:14px;"><a href="blogcontent.php?blog_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['blog_id'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</strong></a></p>
          <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=7>
          </div>
         
          <?php }} ?>

           <div style="border-bottom:2px solid #999;width:100%;margin:-3px 0 0 0;"></div>

       <!--    <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3);color:#999" width="100%"  SIZE=11> -->



         <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('follow')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
?>
          
          <div style="margin:5px 20px 3px 20px;height:70px">
          <p><span style="font-size:13px;color:#777;">关注了该博客</span><span style="float:right;font-size:13px;color:#777;"><?php echo $_smarty_tpl->tpl_vars['foo']->value['follow_time'];?>
</span></p>
          <p style="font-size:14px;"><a href="blogcontent.php?blog_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['info']['blog_id'];?>
"><strong><?php echo $_smarty_tpl->tpl_vars['foo']->value['info']['title'];?>
</strong></a></p>
          <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=7>
          </div>
         
          <?php }} ?>

		</div>




	</div>




 	</div><!-- /.container-fluid -->

<script type="text/javascript">
  
  $("#invitationcodegt").click(function(){
  $.post("get_invitationcode.php",{key:1},function(data){
      datah=JSON.parse(data)
     $("#yaoqingma1").html(datah[0].invitationcode+'&nbsp可用状态:'+datah[0].enable)
     $("#yaoqingma2").html(datah[1].invitationcode+'&nbsp可用状态:'+datah[0].enable)
  })
})
</script>
 </body>
 </html>