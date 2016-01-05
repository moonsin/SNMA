<?php /* Smarty version Smarty-3.0.6, created on 2016-01-02 21:20:13
         compiled from "../html/personalpage.html" */ ?>
<?php /*%%SmartyHeaderCode:19869057775687ce8dd1d6c3-57087982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd85f180f0417a5cf002c6e172b88adbc90175209' => 
    array (
      0 => '../html/personalpage.html',
      1 => 1451740787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19869057775687ce8dd1d6c3-57087982',
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

<link rel="stylesheet" href="../public/css/personalpage.css">
<link rel="stylesheet" href="../public/css/index.css">
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

 $.post("follow.php",{key:'if'},function(data){
  datah=JSON.parse(data);

 })


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
      <ul class="nav navbar-nav yincanggp"  id="GP">
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
			<div style="float:left;"><img src="../photo/<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
.png"  alt="请去设置个头像" onerror="this.src='../photo/default.jpg'" class=" img-responsive" style="width: 90px;height:90px;margin:15px 0 0 20px;">
       <span style="float:left;margin:10px 0 0 40px;font-size:13px;cursor:pointer;" data-toggle="modal" data-target="#genggaiph">更改头像</span>
     </div>

			<div style="margin:20px 0 0 125px;" ><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span style="margin:0 0 0 10px"><?php echo $_smarty_tpl->getVariable('user_info')->value['address'];?>
</span></div>
			<div style="margin:5px 0 0 125px;" ><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span><span style="margin:0 0 0 10px" id="xingbiechu"><?php echo $_smarty_tpl->getVariable('user_info')->value['sex'];?>
</span></div>
			<div style="margin:5px 0 0 125px;" ><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span><span style="margin:0 0 0 10px"><?php echo $_smarty_tpl->getVariable('user_info')->value['email'];?>
</span></div>
      <div style="margin:5px 0 0 125px;" ></span><a href="#"><span style="font-size:12px" id="editorziliao" data-toggle="modal" data-target="#editor">编辑资料</span></a></div>
			<div style="margin:0 0 0 125px;" ><HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10></div>
			<div style="margin:0 0 0 125px;" ><p style="font-size:13px"><?php echo $_smarty_tpl->getVariable('user_info')->value['signature'];?>
</p></div>
			<HR style="FILTER: alpha(opacity=100,finishopacity=0,style=3)" width="100%" color=#987cb9 SIZE=10 />
			<div style="margin:0 0 0 15px;" ><p style="font-size:13px">获得&nbsp<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>&nbsp<?php echo $_smarty_tpl->getVariable('user_info')->value['get_follow'];?>
&nbsp关注</p></div>
		</div>

     <!-- 更改头像大模态框 -->
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="genggaiph">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">更改头像</h4>
      </div>
                  <div class="container" style="margin-bottom:15px">
                  <div class="imageBox">
                    <div class="thumbBox"></div>
                    <div class="spinner" style="display: none"></div>
                  </div>
                  <div class="action"> 
                    <div class="new-contentarea tc"> <a href="javascript:void(0)" class="upload-img">
                      <label for="upload-file">请先选择图片...</label>
                      </a>
                      <input type="file" class="" name="upload-file" id="upload-file" />
                    </div>
                    <form action="photo.php" method="post" >
                      <input type="hidden" value="" id="yincang" name="imgsrc" />
                    <input type="submit"   class="Btnsty_peyton" value="OK">
                    </form>
                    <input type="button" id="btnZoomIn" class="Btnsty_peyton" value="+"  >
                    <input type="button" id="btnZoomOut" class="Btnsty_peyton" value="-" >
                  </div>
                  <div class="cropped"></div>
                </div>


          </div>
        </div>
      </div> <!--end modal -->

           <!-- 编辑资料大模态框 -->
     <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="editor">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
         <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">编辑资料</h4>
          </div>
          <div class="modal-body">
               <form action="update_personal.php" method="post">
                      <div class="radio">
                              <label for="xingbie">sex</label>
                              <label>
                                <input type="radio" name="sex" id="optionsRadios1" value="1" checked>
                                 男
                              </label>
                             <label>
                                <input type="radio" name="sex" id="optionsRadios2" value="2" checked>
                                 女
                              </label>
                               <label>
                                <input type="radio" name="sex" id="optionsRadios3" value="0" checked>
                                 保密
                              </label>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="email" name="email" value="<?php echo $_smarty_tpl->getVariable('user_info')->value['email'];?>
">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">job</label>
                        <input type="text" class="form-control" id="job" placeholder="job" name="job" value="<?php echo $_smarty_tpl->getVariable('user_info')->value['job'];?>
">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">address</label>
                        <input type="text" class="form-control" id="address" placeholder="address" name="address" value="<?php echo $_smarty_tpl->getVariable('user_info')->value['address'];?>
">
                      </div>
                       <div class="form-group">
                        <label for="exampleInputEmail1">signature</label>
                       <textarea name="signature" id="signature" style="width:90%;height:150px;" ><?php echo $_smarty_tpl->getVariable('user_info')->value['signature'];?>
</textarea>
                      </div>

            </div>
            <div class="modal-footer"> 
              
                 <button type="submit" class="btn btn-default">Submit</button>

               </form>
            </div>
          </div>
        </div>
      </div> <!--end modal -->

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
 
$(window).load(function() {
  //$('#btnCrop').click();$("#idName").css("cssText","background-color:red!important");
  
  //$(".imageBox").css("cssText","background-position:88px 88px!important");$(".imageBox").css("cssText","background-size:222px 222px!important");
  var options =
  {
    thumbBox: '.thumbBox',
    spinner: '.spinner',
    imgSrc: ''
  }
  var cropper = $('.imageBox').cropbox(options);
  var img="";
  $('#upload-file').on('change', function(){
    var reader = new FileReader();
    reader.onload = function(e) {
      options.imgSrc = e.target.result;
      cropper = $('.imageBox').cropbox(options);
      getImg();
    }
    reader.readAsDataURL(this.files[0]);
    this.files = [];
    //getImg();
  })
  $('#btnCrop').on('click', function(){
    alert("图片上传喽");
  })
  function getImg(){
    img = cropper.getDataURL();
    $('.cropped').html('');
    $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:180px;margin-top:4px;border-radius:180px;box-shadow:0px 0px 12px #7E7E7E;"><p>180px*180px</p>');
    $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:128px;margin-top:4px;border-radius:128px;box-shadow:0px 0px 12px #7E7E7E;"><p>128px*128px</p>');
    $('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:64px;margin-top:4px;border-radius:64px;box-shadow:0px 0px 12px #7E7E7E;" ><p>64px*64px</p>');
    $("#yincang").val(img);
    console.log(img);
    }
    
  $(".imageBox").on("mouseup",function(){
    getImg();
      });
    
    
  $('#btnZoomIn').on('click', function(){
    cropper.zoomIn();
  })
  $('#btnZoomOut').on('click', function(){
    cropper.zoomOut();
  })
});

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