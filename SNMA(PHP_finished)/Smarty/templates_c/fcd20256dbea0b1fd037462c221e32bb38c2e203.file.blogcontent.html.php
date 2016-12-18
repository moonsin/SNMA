<?php /* Smarty version Smarty-3.0.6, created on 2016-11-26 22:10:03
         compiled from "../html/blogcontent.html" */ ?>
<?php /*%%SmartyHeaderCode:799679800583997bbc1aff3-31324194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcd20256dbea0b1fd037462c221e32bb38c2e203' => 
    array (
      0 => '../html/blogcontent.html',
      1 => 1468770960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '799679800583997bbc1aff3-31324194',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html >
  <head>
   <meta charset="utf-8">
   <title>Blogcontent</title>
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
<link rel="stylesheet" href="../public/css/blogcontent.css">

 <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<script type="text/javascript" src="../public/js/tiny_mce/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
tinymce.init({
    selector: "#pinglunkuang",
    plugins: [
        // "advlist autolink lists link image charmap print preview anchor",
        // "searchreplace visualblocks code fullscreen",
        // "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo  | bold italic | alignleft aligncenter alignright alignjustify "
});

$("document").ready(function(){
 if ($("#xingbie").html()==0) {
  $("#xingbie").html("保密");
 }
 else if($("#xingbie").html()==1)
  {
  $("#xingbie").html("男");
 }
 else {
   $("#xingbie").html("女");
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
 		<div class="quanbu" style="border:1px solid #eee;border-radius:8px;overflow:auto;padding:10px 10px 10px 10px;">

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

 			<div class="leftkuang">
 				<div class="leftkuangkuang">
 					<h5><strong>个人资料</strong></h5>
 					<img src="../photo/<?php echo $_smarty_tpl->getVariable('blog_info')->value['user_info']['user_id'];?>
.png" alt="..." onerror="this.src='../photo/default.jpg'" class="img-circle img-responsive text-center" style="width: 50%;margin:0 auto;">
 					<p class="text-center"><strong><?php echo $_smarty_tpl->getVariable('blog_info')->value['user_info']['username'];?>
</strong></p>
 					<div style="border-bottom:1px solid #999;"></div>
 					<p style="margin:15px 0 0 0;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span style="margin:0 0 0 10px"><?php echo $_smarty_tpl->getVariable('blog_info')->value['user_info']['address'];?>
</span></p>
 					<p><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span><span style="margin:0 0 0 10px" id="xingbie"><?php echo $_smarty_tpl->getVariable('blog_info')->value['user_info']['sex'];?>
</span></p>
 					<p style="margin:-10px 0 10px 0;"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span><span style="margin:0 0 0 10px"><?php echo $_smarty_tpl->getVariable('blog_info')->value['user_info']['email'];?>
</span></p>
 					<div style="border-bottom:1px solid #999;"></div>
 					<p style="font-size:13px;"><span>原创：<?php echo $_smarty_tpl->getVariable('blog_info')->value['yuanchuang'];?>
篇</span><span style="float:right;">转载：<?php echo $_smarty_tpl->getVariable('blog_info')->value['feiyuanchuang'];?>
篇</span></p>
 					<p style="font-size:13px;"><span>评论：<?php echo $_smarty_tpl->getVariable('blog_info')->value['user_num'];?>
条</span>
 				</div>

 			</div>
 			




 			<div class="rightkuang">
 				<div class="rightkuangkuang">
 					<h3><strong><?php echo $_smarty_tpl->getVariable('blog_info')->value['title'];?>
</strong></h3>
 					<br>
 					<p style="float:right;"><span style="margin:0 0 0 5px;"><?php echo $_smarty_tpl->getVariable('blog_info')->value['addtime'];?>
</span><i class="fa fa-comment-o" style="margin:-5px 0 0 15px;"></i><span>评论(<?php echo $_smarty_tpl->getVariable('blog_info')->value['blog_num'];?>
)</span><span class="glyphicon glyphicon-hand-up" aria-hidden="true" style="margin:-5px 0 0 15px;"></span> 阅读(<?php echo $_smarty_tpl->getVariable('blog_info')->value['check_num'];?>
)</p>
                    <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=7>
                    <p><span class="glyphicon glyphicon-list" aria-hidden="true"></span>&nbsp分类：<?php echo $_smarty_tpl->getVariable('blog_info')->value['class1'];?>
&nbsp&nbsp<?php echo $_smarty_tpl->getVariable('blog_info')->value['class2'];?>
</p>
                     <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=7>
                      <?php echo $_smarty_tpl->getVariable('blog_info')->value['content'];?>

                     <br>
                    
         <?php if ($_smarty_tpl->getVariable('blog_info')->value['is_follow']==0){?>    
        <P class=" text-center" ><span class="glyphicon glyphicon-star" style="font-size:25px;" aria-hidden="true"></span><br><span class="guanzhu" style="cursor:pointer">关注</span></P> 
        <?php }else{ ?>
        <P class=" text-center" ><span class="glyphicon glyphicon-star" style="font-size:25px;" aria-hidden="true"></span><br><span class="guanzhu" style="cursor:pointer">已关注</span></P> 
        <?php }?>    


                    <?php if ($_smarty_tpl->getVariable('blog_info')->value['last_id']!=0){?>
                      <p><a href="blogcontent.php?blog_id=<?php echo $_smarty_tpl->getVariable('blog_info')->value['last_id'];?>
"><button type="button" class="btn btn-default">上一篇</button></a> &nbsp<?php echo $_smarty_tpl->getVariable('blog_info')->value['last_title'];?>
</p>
                    <?php }?>
                     <?php if ($_smarty_tpl->getVariable('blog_info')->value['next_id']!=0){?>
                     <p><a href="blogcontent.php?blog_id=<?php echo $_smarty_tpl->getVariable('blog_info')->value['next_id'];?>
"><button type="button" class="btn btn-default">下一篇</button></a> &nbsp<?php echo $_smarty_tpl->getVariable('blog_info')->value['next_title'];?>
</p>
                     <?php }?>
 				</div>

        <div class="rightkuangkuang">
          <h5><strong>查看评论</strong></h5>
          <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=7>
         <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('blog_info')->value['comment']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
?>
          <div class="pinglunlou">
            <p><?php echo $_smarty_tpl->tpl_vars['foo']->value['id'];?>
楼&nbsp用户&nbsp<strong><?php echo $_smarty_tpl->tpl_vars['foo']->value['username'];?>
</strong>&nbsp发表于<?php echo $_smarty_tpl->tpl_vars['foo']->value['comment_addtime'];?>
</p>
            <img src="../photo/<?php echo $_smarty_tpl->tpl_vars['foo']->value['user_id'];?>
.png" alt="..." onerror="this.src='../photo/default.jpg'" class="img-circle img-responsive text-center" style="width:50px;height:50px;float:left;margin-bottom:10px;">
            <div style="width:750px;float:left;margin:0 0 10px 10px;"><?php echo $_smarty_tpl->tpl_vars['foo']->value['content'];?>
</div>
            <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=7>
          </div>
       
        <?php }} ?>
          </div>
         <?php if ($_smarty_tpl->getVariable('user_id')->value!=''){?>
          <h5>发表评论</h5>
          <form action="comment.php" method="post">
            <textarea id="pinglunkuang" name="content"></textarea>
            <input class="text-center btn btn-default " type="submit" value="comment" style="margin:auto;">
             <input type="hidden" id="blog_idhidden" name="blog_id" value="<?php echo $_smarty_tpl->getVariable('blog_info')->value['blog_id'];?>
">
          </form>
        <?php }else{ ?>
        <h5><strong>登陆方可评论。</strong></h5>
        <?php }?> 
 			</div>
 		</div>

 		</div><!-- /.container-fluid -->

 </body>
<script type="text/javascript">
  $(".guanzhu").click(function(){
  var zhuangtai=1
  // alert("guanzhu");
  if ($(".guanzhu").html()=="已关注") {
    zhuangtai=0;
  };
  console.log($("#blog_idhidden").val()+zhuangtai)
  // alert($("#blog_idhidden").val())
  $.post("follow.php",{blog_id:$("#blog_idhidden").val(),is_follow:zhuangtai},function(data){
     location.reload();
    //  if (zhuangtai==0) {
    //   $(".guanzhu").html()="关注"
    // }
    // else{
    //   $(".guanzhu").html()="已关注"
    // }
  });
  
   
  });

$("#invitationcodegt").click(function(){
  $.post("get_invitationcode.php",{key:1},function(data){
      datah=JSON.parse(data)
     $("#yaoqingma1").html(datah[0].invitationcode+'&nbsp可用状态:'+datah[0].enable)
     $("#yaoqingma2").html(datah[1].invitationcode+'&nbsp可用状态:'+datah[0].enable)
  })
})
</script>
 </html>