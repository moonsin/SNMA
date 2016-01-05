<?php /* Smarty version Smarty-3.0.6, created on 2016-01-03 17:44:55
         compiled from "../html/index.html" */ ?>
<?php /*%%SmartyHeaderCode:10362566595688ed97e69472-69915809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61496b2bd2a4639a5a36b0bfc8a2480936fce1a1' => 
    array (
      0 => '../html/index.html',
      1 => 1451814203,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10362566595688ed97e69472-69915809',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html >
  <head>
   <meta charset="utf-8">
   <title>SUNSKY NORTHSEA MOON & THE BLESSED GIRL AMIAO</title>
   <!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="../public/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
<link rel="shortcut icon" href="../photo/bitbug_favicon.ico" type="image/x-icon">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="../public/js/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="../public/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="../public/css/index.css">


  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../public/css/index-style.css" media="screen" type="text/css" />

  </head>
<!-- 
<style> 
    html { 
        -webkit-filter: grayscale(100%); 
        -moz-filter: grayscale(100%); 
        -ms-filter: grayscale(100%); 
        -o-filter: grayscale(100%); 
        filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);  
        _filter:none; 
    } 
</style> 
 -->
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



<div  class="quanbu">
    
  <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
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


    <img src="../public/imgs/jiachangbanner.jpg" style="width:100%;">

<div style="float: left;width:30%">
<ul id="accordion" class="accordion" >
    <li>
      <div class="link"></i>技术博客<i class="fa fa-chevron-down" style="color:white"></i></div>
      <ul class="submenu">
        <li><a href="search.php?action=class2&class2=.Net技术">.Net技术</a></li>
        <li><a href="search.php?action=class2&class2=编程语言">编程语言</a></li>
        <li><a href="search.php?action=class2&class2=软件设计">软件设计</a></li>
        <li><a href="search.php?action=class2&class2=Web前端">Web前端</a></li>
        <li><a href="search.php?action=class2&class2=架构设计">架构设计</a></li>
        <li><a href="search.php?action=class2&class2=手机开发">手机开发</a></li>
        <li><a href="search.php?action=class2&class2=软件工程">软件工程</a></li>
        <li><a href="search.php?action=class2&class2=数据库技术">数据库技术</a></li>
        <li><a href="search.php?action=class2&class2=操作系统">操作系统</a></li>
        <li><a href="search.php?action=class2&class2=其他分类">其他分类</a></li>
        <li><a href="search.php?action=class2&class2=综合">综合</a></li>
      </ul>
    </li>
    <li>
       <div class="link"></i>个人随笔<i class="fa fa-chevron-down" style="color:white"></i></div>
      <ul class="submenu">
        <li><a href="search.php?action=class2&class2=生活记录">生活记录</a></li>
        <li><a href="search.php?action=class2&class2=个人感悟">个人感悟</a></li>
        <li><a href="search.php?action=class2&class2=文学博客">文学博客</a></li>
        <li><a href="search.php?action=class2&class2=趣事见闻">趣事见闻</a></li>
        <li><a href="search.php?action=class2&class2=各类知识">各类知识</a></li>
        <li><a href="search.php?action=class2&class2=不知道怎么编了">不知道怎么编了</a></li>
        <li><a href="search.php?action=class2&class2=其他">其他</a></li>
      </ul>
    </li>
 
     <li>
       <div class="link"></i>非原创<i class="fa fa-chevron-down" style="color:white"></i></div>
      <ul class="submenu">
        <li><a href="search.php?action=class2&class2=技术类">技术类</a></li>
        <li><a href="search.php?action=class2&class2=文学类">文学类</a></li>
        <li><a href="search.php?action=class2&class2=生活常识">生活常识</a></li>
        <li><a href="search.php?action=class2&class2=冷门知识">冷门知识</a></li>
        <li><a href="search.php?action=class2&class2=有意思的知识">有意思的知识</a></li>
        <li><a href="search.php?action=class2&class2=不知道怎么编了">不知道怎么编了</a></li>
        <li><a href="search.php?action=class2&class2=其他">其他</a></li>
      </ul>
    </li>

 
     <li>
       <div class="link"></i>所有<i class="fa fa-chevron-down" style="color:white"></i></div>
      <ul class="submenu">
        <li><a href="search.php?action=class1&class1=技术博客">技术博客</a></li>
        <li><a href="search.php?action=class1&class1=个人随笔">个人随笔</a></li>
        <li><a href="search.php?action=class1&class1=非原创">非原创</a></li>
        <li><a href="index.php">全部</a></li>
      </ul>
    </li>

  </ul>
  </div>
  
  <div style="float: left;width:60%" >
       <form action="search.php" method="post">
          <div >
           
             <div class="form-group col-xs-7" style="margin:0 0 0 50px" >
        
             <input type="text" class="form-control" id="keyword" name="keyword" placeholder="输入要搜索的博客题目关键字">
             </div>
             <button type="submit" class="btn btn-default"  >Search</button>
          </div>


      </form>


         <div >
      <ul class="nav nav-tabs nav-justified" id="paixufangshi" style="margin:10px 0 0 0;">
        <li role="presentation" style="margin:0 0 0 10px;"  class="active" id="timeli"><a href="search.php?action=time">新度</a></li>
        <li role="presentation" style="margin:0 0 0 10px;"  id="checkli"><a href="search.php?action=check">热度</a></li>
        <li role="presentation" style="margin:0 0 0 10px;"  id="followli"><a href="search.php?action=follow">关注</a></li>
        <li role="presentation" style="margin:0 0 0 10px;"  id="commentli"><a href="search.php?action=comment">评论过</a></li>


      </ul>

         </div>
<div id="indexcontent">
<?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('blog')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
?>
<div style="width:100%;margin:20px 0 0 15px;">
   <h4>【<?php echo $_smarty_tpl->tpl_vars['foo']->value['class2'];?>
】<a href="blogcontent.php?blog_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['blog_id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</a></h4>
   <img src="../photo/<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
.png" alt="..." class="img-circle img-responsive" onerror="this.src='../photo/default.jpg'" style="width: 70px;height:70px;margin:0 0 5px 20px;float:left;">
   <div style="margin:0 0 0 15px;float:left;font-size:12px;width:80%;word-break:break-all;"><?php echo $_smarty_tpl->tpl_vars['foo']->value['summary'];?>
</div>

   <div style="width:100%;margin:105px 0 0 0;"><span style="margin:0 10px 0 25px;"><a href="index.php?action=personal_other&username=<?php echo $_smarty_tpl->tpl_vars['foo']->value['username'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['username'];?>
</a></span>发布于<span style="margin:0 0 0 5px;"><?php echo $_smarty_tpl->tpl_vars['foo']->value['addtime'];?>
</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论(<?php echo $_smarty_tpl->tpl_vars['foo']->value['comment_num'];?>
)</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读(<?php echo $_smarty_tpl->tpl_vars['foo']->value['check_num'];?>
)</div>

   <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10>
</div>
<?php }} ?>
</div>

  </div>

<div style="width:120px;margin:10px auto;font-size:13px;font-family:biaotifontfamily;">
<button type="button" class="btn btn-default" id="loadmore">Load More</button>
</div>






<div style="font-size:13px;font-family:biaotifontfamily;" >

    <div class="row">
         <div class="col-xs-12 col-md-2" style="font-size:15px;">Friends links:</div>
         <div class="col-xs-4 col-md-2">github</div>
         <div class="col-xs-4 col-md-2">facebook</div>
         <div class="col-xs-4 col-md-2">youtube</div>
         <div class="col-xs-4 col-md-2">instagram</div>
         <div class="col-xs-4 col-md-2">helloworld</div>
    </div>
    <div class="row" style="">
         <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9">© 2015 SNMA, DB</div>
         <div class="col-xs-4 col-md-1" style="font-size:13px;color:#987cb9">AboutUs</div>
         <div class="col-xs-0 col-md-2" style="font-size:13px;color:#987cb9">&nbsp</div>
          <div class="col-xs-12 col-md-2" style="font-size:23px;color:red;margin:-10px 0 0 0;">SNMA</div>
             <div class="col-xs-0 col-md-1" style="font-size:13px;color:#987cb9">&nbsp</div>
           <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9">AboutUs</div>
          <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9"> Help</div>

    </div>

</div>

</div>

</div>


  <script src='../public/js/jquery.js'></script>

  <script src="../public/js/index.js"></script>
</body>
<script type="text/javascript">
$(".submenu li a").click(function(){
 // alert($(this).html())
$.post("index.php",{class:$(this).html()},function(data){

});
})

$(".dropdown-menu li a").click(function(){
  // alert($(this).html());
  $.post("index.php",{greatpeople:$(this).html()},function(data){

});
})

$("#invitationcodegt").click(function(){
  $.post("get_invitationcode.php",{key:1},function(data){
      datah=JSON.parse(data)
     $("#yaoqingma1").html(datah[0].invitationcode+'&nbsp可用状态:'+datah[0].enable)
     $("#yaoqingma2").html(datah[1].invitationcode+'&nbsp可用状态:'+datah[0].enable)
  })
})

function getQueryString(name) { 
var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i"); 
var r = window.location.search.substr(1).match(reg); 
if (r != null) return unescape(r[2]); return null; 
} 


$(document).ready(function(){
if ($("#indexcontent").html()==false) {
  $("#indexcontent").html('<div style="height:200px"></div>')
};
if(window.location.href=="http://snma.science/html/search.php"){
  $("#loadmore").hide();
}
// alert(getQueryString("action"));
if (getQueryString("action")=="time") {
  $("li").removeClass("active");
  $("#timeli").addClass('active');
  // alert($(this).html());

}
else if(getQueryString("action")=="check"){
// $("#loadmore").hide();
  $("li").removeClass("active");
  $("#checkli").addClass('active');
}

else if(getQueryString("action")=="follow"){
// $("#loadmore").hide();
  $("li").removeClass("active");
  $("#followli").addClass('active');
}
else if(getQueryString("action")=="comment"){
// $("#loadmore").hide();
  $("li").removeClass("active");
  $("#commentli").addClass('active');
}

})

$("#loadmore").click(function(){
  // console.log(document.getElementById("indexcontent").children.length);
        var strin = window.location.href;
        console.log(strin);
        var jiequurl=strin.substr(57);

        console.log(decodeURI(jiequurl));

  $.post("get_blog.php",{now_node:document.getElementById("indexcontent").children.length,get_num:10,action:getQueryString("action"),classcontent:decodeURI(jiequurl)},function(data){
      datah=JSON.parse(data);

      for(i=0;i<datah.length;i++)
      {
        $("#indexcontent").append('<div style="width:100%;margin:20px 0 0 15px;"><h4>【'+datah[i].class2+'】<a href="blogcontent.php?blog_id='+datah[i].blog_id+'" >'+datah[i].title+'</a></h4><img src="../photo/'+datah[i].user_id+'.png" alt="..." class="img-circle img-responsive" style="width: 70px;height:70px;margin:0 0 5px 20px;float:left;"><div style="margin:0 0 0 15px;float:left;font-size:12px;width:80%;word-break:break-all;">'+datah[i].summary+'</div><div style="width:100%;margin:105px 0 0 0;"><span style="margin:0 10px 0 25px;"><a href="index.php?action=personal_other&username='+datah[i].username+'">'+datah[i].username+'</a></span>发布于<span style="margin:0 0 0 5px;">'+datah[i].addtime+'</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论('+datah[i].comment_num+')</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读('+datah[i].check_num+')</div><HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10></div>');
      }
  })
})
</script>
</html>