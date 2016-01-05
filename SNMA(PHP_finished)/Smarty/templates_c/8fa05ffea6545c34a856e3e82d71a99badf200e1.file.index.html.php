<?php /* Smarty version Smarty-3.0.6, created on 2015-12-09 23:34:52
         compiled from "../html\index.html" */ ?>
<?php /*%%SmartyHeaderCode:957356684a1c62d497-04473958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fa05ffea6545c34a856e3e82d71a99badf200e1' => 
    array (
      0 => '../html\\index.html',
      1 => 1449675127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '957356684a1c62d497-04473958',
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
      <a class="navbar-brand" href="#" style="font-family:biaotifontfamily;">SNMA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <!--   <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
       <!--  <li><a href="#">Link</a></li> -->
        


        <li class="dropdown" style="font-family:biaotifontfamily;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Great People <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Moon</a></li>
            <li><a href="#">SunSky</a></li>
            <li><a href="#">NorthSea</a></li>
            <li><a href="#">ThreeGold</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">WhiteCloud</a></li>
            <li><a href="#">PeachSister</a></li>
            <li><a href="#">Amiao</a></li>
            <!-- <li role="separator" class="divider"></li> -->
          </ul>
        </li>
      </ul>
<!--       <form class="navbar-form navbar-left" role="search" >
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search" style="width:500px; ">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
 -->     

    <div id="biaotizikuang" style="position: relative; margin:0 auto;width:870px;">
         <p class="navbar-text biaotizi"  id="biatizix" style="color:black;">SUNSKY NORTHSEA MOON & THE BLESSED GIRL AMIAO</p>
    </div>

<?php if ($_smarty_tpl->getVariable('user_id')->value!=0){?>

        <ul class="nav navbar-nav">
   
          <li class="dropdown" style="font-family:biaotifontfamily;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">  <span class="glyphicon glyphicon-user" aria-hidden="true">&nbsp</span><?php echo $_smarty_tpl->getVariable('username')->value;?>
<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="#">Personal Page</a></li>
            <li><a href="/addblog/">Add Blog</a></li>
                  <li role="separator" class="divider"></li>
            <li><a href="outlog.php">Exit</a></li>

          </ul>
        </li>
      </ul>


    <?php }else{ ?>
      <div class="btn-group" role="group" aria-label="..." style="float:right;">
      <a href="register.html"><button type="button" class="btn btn-default navbar-btn navbar-right btn-sm" style="outline:none;font-family:biaotifontfamily;">register</button></a>
     <a href="login.html"><button type="button" class="btn btn-default navbar-btn navbar-right btn-sm" style="outline:none;margin:10px 10px 0 0;font-family:biaotifontfamily";>Sign in</button></a>
      </div>

<?php }?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



<div  class="quanbu">
    
    <img src="../public/imgs/jiachangbanner.jpg" style="width:100%;">

<div style="float: left;width:30%">
<ul id="accordion" class="accordion" >
    <li>
      <div class="link"></i>技术博客<i class="fa fa-chevron-down" style="color:white"></i></div>
      <ul class="submenu">
        <li><a href="#">.Net技术</a></li>
        <li><a href="#">编程语言</a></li>
        <li><a href="#">软件设计</a></li>
        <li><a href="#">Web前端</a></li>
        <li><a href="#">架构设计</a></li>
        <li><a href="#">手机开发</a></li>
        <li><a href="#">软件工程</a></li>
        <li><a href="#">数据库技术</a></li>
        <li><a href="#">操作系统</a></li>
        <li><a href="#">其他分类</a></li>
        <li><a href="#">综合</a></li>
      </ul>
    </li>
    <li>
       <div class="link"></i>个人随笔<i class="fa fa-chevron-down" style="color:white"></i></div>
      <ul class="submenu">
        <li><a href="#">生活记录</a></li>
        <li><a href="#">个人感悟</a></li>
        <li><a href="#">文学博客</a></li>
        <li><a href="#">趣事见闻</a></li>
        <li><a href="#">各类知识</a></li>
        <li><a href="#">不知道怎么编了</a></li>
        <li><a href="#">其他</a></li>
      </ul>
    </li>
 
     <li>
       <div class="link"></i>非原创<i class="fa fa-chevron-down" style="color:white"></i></div>
      <ul class="submenu">
        <li><a href="#">技术类</a></li>
        <li><a href="#">文学类</a></li>
        <li><a href="#">生活常识</a></li>
        <li><a href="#">冷门知识</a></li>
        <li><a href="#">有意思的知识</a></li>
        <li><a href="#">不知道怎么编了</a></li>
        <li><a href="#">其他</a></li>
      </ul>
    </li>

 
     <li>
       <div class="link"></i>所有<i class="fa fa-chevron-down" style="color:white"></i></div>
      <ul class="submenu">
        <li><a href="#">技术博客</a></li>
        <li><a href="#">个人随笔</a></li>
        <li><a href="#">非原创</a></li>
        <li><a href="#">全部</a></li>
      </ul>
    </li>

  </ul>
  </div>
  
  <div style="float: left;width:60%" >
       <form  >
          <div >
           
             <div class="form-group col-xs-7" style="margin:0 0 0 50px" >
        
             <input type="text" class="form-control" id="exampleInputEmail1" placeholder="输入要搜索的博客题目关键字">
             </div>
             <button type="submit" class="btn btn-default"  >Search</button>
          </div>


      </form>


         <div >
      <ul class="nav nav-tabs nav-justified" id="paixufangshi" style="margin:10px 0 0 0;">
        <li role="presentation" style="margin:0 0 0 10px;"  class="active"><a href="#">新度</a></li>
        <li role="presentation" style="margin:0 0 0 10px;" ><a href="#">热度</a></li>
        <li role="presentation" style="margin:0 0 0 10px;" ><a href="#">关注</a></li>
        <li role="presentation" style="margin:0 0 0 10px;" ><a href="#">评论过</a></li>


      </ul>

         </div>

<div style="width:100%;margin:20px 0 0 15px;">
   <h4>【web前端】<a href="" >如何制作一个网站</a></h4>
   <img src="../public/imgs/touxiang.jpg" alt="..." class="img-circle img-responsive" style="width: 70px;height:70px;margin:0 0 5px 20px;float:left;">
   <div style="margin:0 0 0 15px;float:left;font-size:12px;width:80%;word-break:break-all;">写网页真是难，尤其是自适应的网页，真是吃屎,写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎...</div>

   <div style="width:100%;margin:105px 0 0 0;"><span style="margin:0 10px 0 25px;"><a href="">MoonSin</a></span>发布于<span style="margin:0 0 0 5px;">2015-10-23 &nbsp19:38:24</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论(13)</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读(29)</div>

   <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10>
</div>


<div style="width:100%;margin:20px 0 0 15px;">
   <h4>【web前端】<a href="">如何制作一个网站</a></h4>
   <img src="../public/imgs/touxiang.jpg" alt="..." class="img-circle img-responsive" style="width: 70px;height:70px;margin:0 0 5px 20px;float:left;">
   <div style="margin:0 0 0 15px;float:left;font-size:12px;width:80%;word-break:break-all;">写网页真是难，尤其是自适应的网页，真是吃屎,写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎...</div>

   <div style="width:100%;margin:105px 0 0 0;"><span style="margin:0 10px 0 25px;"><a href="">MoonSin</a></span>发布于<span style="margin:0 0 0 5px;">2015-10-23 &nbsp19:38:24</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论(13)</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读(29)</div>

   <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10>
</div>

<div style="width:100%;margin:20px 0 0 15px;">
   <h4>【web前端】<a href="">如何制作一个网站</a></h4>
   <img src="../public/imgs/touxiang.jpg" alt="..." class="img-circle img-responsive" style="width: 70px;height:70px;margin:0 0 5px 20px;float:left;">
   <div style="margin:0 0 0 15px;float:left;font-size:12px;width:80%;word-break:break-all;">写网页真是难，尤其是自适应的网页，真是吃屎,写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎...</div>

   <div style="width:100%;margin:105px 0 0 0;"><span style="margin:0 10px 0 25px;"><a href="">MoonSin</a></span>发布于<span style="margin:0 0 0 5px;">2015-10-23 &nbsp19:38:24</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论(13)</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读(29)</div>

   <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10>
</div>

<div style="width:100%;margin:20px 0 0 15px;">
   <h4>【web前端】<a href="">如何制作一个网站</a></h4>
   <img src="../public/imgs/touxiang.jpg" alt="..." class="img-circle img-responsive" style="width: 70px;height:70px;margin:0 0 5px 20px;float:left;">
   <div style="margin:0 0 0 15px;float:left;font-size:12px;width:80%;word-break:break-all;">写网页真是难，尤其是自适应的网页，真是吃屎,写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎...</div>

   <div style="width:100%;margin:105px 0 0 0;"><span style="margin:0 10px 0 25px;"><a href="">MoonSin</a></span>发布于<span style="margin:0 0 0 5px;">2015-10-23 &nbsp19:38:24</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论(13)</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读(29)</div>

   <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10>
</div>

<div style="width:100%;margin:20px 0 0 15px;">
   <h4>【web前端】<a href="">如何制作一个网站</a></h4>
   <img src="../public/imgs/touxiang.jpg" alt="..." class="img-circle img-responsive" style="width: 70px;height:70px;margin:0 0 5px 20px;float:left;">
   <div style="margin:0 0 0 15px;float:left;font-size:12px;width:80%;word-break:break-all;">写网页真是难，尤其是自适应的网页，真是吃屎,写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎...</div>

   <div style="width:100%;margin:105px 0 0 0;"><span style="margin:0 10px 0 25px;"><a href="">MoonSin</a></span>发布于<span style="margin:0 0 0 5px;">2015-10-23 &nbsp19:38:24</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论(13)</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读(29)</div>

   <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10>
</div>

<div style="width:100%;margin:20px 0 0 15px;">
   <h4>【web前端】<a href="">如何制作一个网站</a></h4>
   <img src="../public/imgs/touxiang.jpg" alt="..." class="img-circle img-responsive" style="width: 70px;height:70px;margin:0 0 5px 20px;float:left;">
   <div style="margin:0 0 0 15px;float:left;font-size:12px;width:80%;word-break:break-all;">写网页真是难，尤其是自适应的网页，真是吃屎,写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎写网页真是难，尤其是自适应的网页，真是吃屎...</div>

   <div style="width:100%;margin:105px 0 0 0;"><span style="margin:0 10px 0 25px;"><a href="">MoonSin</a></span>发布于<span style="margin:0 0 0 5px;">2015-10-23 &nbsp19:38:24</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论(13)</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读(29)</div>

   <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10>
</div>




  </div>

<div style="width:120px;margin:10px auto;font-size:13px;font-family:biaotifontfamily;">
<button type="button" class="btn btn-default">Load More</button>
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
         <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9">&nbsp</div>
          <div class="col-xs-12 col-md-2" style="font-size:23px;color:red;margin:-10px 0 0 0;">SNMA</div>
             <div class="col-xs-4 col-md-1" style="font-size:13px;color:#987cb9">&nbsp</div>
           <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9">AboutUs</div>
          <div class="col-xs-4 col-md-2" style="font-size:13px;color:#987cb9"> Help</div>

    </div>

</div>





</div>




</div>


  <script src='../public/js/jquery.js'></script>

  <script src="../public/js/index.js"></script>
</body>

</html>