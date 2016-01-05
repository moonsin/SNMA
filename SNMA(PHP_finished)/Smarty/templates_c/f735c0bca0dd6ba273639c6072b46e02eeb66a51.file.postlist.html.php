<?php /* Smarty version Smarty-3.0.6, created on 2016-01-02 21:33:10
         compiled from "../html/postlist.html" */ ?>
<?php /*%%SmartyHeaderCode:3071408925687d1965b9a17-70180875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f735c0bca0dd6ba273639c6072b46e02eeb66a51' => 
    array (
      0 => '../html/postlist.html',
      1 => 1451741487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3071408925687d1965b9a17-70180875',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html >
  <head>
   <meta charset="utf-8">
   <title>POSTLIST</title>
   <!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="../public/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="../public/js/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="../public/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="../photo/bitbug_favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="../public/css/index.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="../public/css/index-style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="../public/css/postlist.css" media="screen" type="text/css" />
  </head>


  <body>


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
<img src="../public/imgs/jiachangbanner.jpg" style="width:100%;">

<ul class="nav nav-tabs" style="font-family:biaotifontfamily;">
  <li role="presentation" ><a href="addblog.html">Add BLog</a></li>
  <li role="presentation" class="active"><a href="#">BlogList</a></li>

</ul>
<br><br>


    <div class="table-responsive">
      <table class="table table-striped ">
          <tr>
            <td ><strong>#</strong></td>
            <td class="col-md-8" ><strong>标题</strong></td>
            <td><strong>阅读</strong></td>
            <td><strong>评论</strong></td>
            <td><strong>操作</strong></td>
          </tr>

 <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('blog')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
?>
            <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['order'];?>
</td>
            <td class="col-md-8" ><a href="blogcontent.php?blog_id=<?php echo $_smarty_tpl->tpl_vars['foo']->value['blog_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['check_num'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['foo']->value['comment_num'];?>
</td>
            <td ><span class="caozuoanniu editor" name="<?php echo $_smarty_tpl->tpl_vars['foo']->value['blog_id'];?>
" >edit</span>/<span class="caozuoanniu delete" name="<?php echo $_smarty_tpl->tpl_vars['foo']->value['blog_id'];?>
">delete</span></td>

          </tr>
 <?php }} ?>


      </table>
    </div>
<nav class="text-center">
  <ul class="pagination">
    <li>
      <a href="#" aria-label="Previous" id="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li id="page1"></li>
    <li id="page2"></li>
    <li id="page3"></li>
    <li id="page4"></li>
    <li id="page5"></li>
    <li>
      <a href="#" aria-label="Next" id="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

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
          <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9">&nbsp</div>
          <div class="col-xs-12 col-md-2" style="font-size:23px;color:red;margin:-10px 0 0 0;">SNMA</div>
          <div class="col-xs-4 col-md-1" style="font-size:13px;color:#987cb9">&nbsp</div>
          <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9">TouchUs</div>
          <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9"> Help</div>
          <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('total')->value;?>
" id="total">
    </div>

</div>
</div>


  </body>
  <script type="text/javascript">

function getQueryString(name) { 
var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i"); 
var r = window.location.search.substr(1).match(reg); 
if (r != null) return unescape(r[2]); return null; 
} 



$(document).ready(function(){
    var i = 1;
    var total_num=$("#total").val();
    var yeshu=parseInt(total_num/10);
    if (total_num%10>0) {yeshu=yeshu+1;};
    console.log(yeshu);
  if(getQueryString("page")<=3||getQueryString("page")==null){
    
    if (yeshu<5) {
    for(i=1;i<=yeshu;i++)
    { 
      $("#page"+i).html("<a href='postlist.php?page="+i+"'>"+i+"</a>")
    }
    }
    else{
    for(i=1;i<=5;i++)
    { 
      $("#page"+i).html("<a href='postlist.php?page="+i+"'>"+i+"</a>")
    }
  }
  }
  else{
    var str=getQueryString("page");
    var jianshu = 2;
    for(i=1;i<=5&&str-jianshu<=yeshu;i++)
    {  
      $("#page"+i).html("<a href='postlist.php?page="+(str-jianshu)+"'>"+(str-jianshu)+"</a>")
      jianshu--;
    }
  }

 // $("#Previous").attr("href","www.baidu.com");

 var dangqian = getQueryString("page");
 if (dangqian>=2) {$("#Previous").attr("href","postlist.php?page="+(dangqian-1));};
 if (dangqian<yeshu) {$("#Next").attr("href","postlist.php?page="+(parseInt(dangqian)+1));};
 if(dangqian==null){
  if (yeshu>1) {$("#Next").attr("href","postlist.php?page=2");}
  else{
    $("#Next").attr("href","#");
  }}


 $(".delete").click(function(){
  var mes=confirm("确定删除该博客吗？:P")
  if(mes==true)
  {
   window.location.href="delete.php?id="+$(this).attr("name");
  }
  else{
    alert("1")
  }

 })
 $(".editor").click(function(){
  window.location.href="edit.php?id="+$(this).attr("name")
 }) 
})

$("#invitationcodegt").click(function(){
  $.post("get_invitationcode.php",{key:1},function(data){
      datah=JSON.parse(data)
     $("#yaoqingma1").html(datah[0].invitationcode+'&nbsp可用状态:'+datah[0].enable)
     $("#yaoqingma2").html(datah[1].invitationcode+'&nbsp可用状态:'+datah[0].enable)
  })
})
  </script>
  </html>