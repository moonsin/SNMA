<?php /* Smarty version Smarty-3.0.6, created on 2016-11-26 23:05:51
         compiled from "../html/edit.html" */ ?>
<?php /*%%SmartyHeaderCode:19752151885839a4cf6c5427-19000543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b6f2b651520079a03bc6b4c4d32241b10e4b923d' => 
    array (
      0 => '../html/edit.html',
      1 => 1468770960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19752151885839a4cf6c5427-19000543',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!doctype html>
<html >
  <head>
   <meta charset="utf-8">
   <title>EditBlog</title>
   <!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="../public/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="../public/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../public/css/addblog.css">
<link rel="shortcut icon" href="../photo/bitbug_favicon.ico" type="image/x-icon">
<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="../public/js/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="../public/js/bootstrap.min.js"></script>

<script type="text/javascript" src="../public/js/tiny_mce/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
tinymce.init({
    selector: "#Content",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image ",
    toolbar2:'上传本地图片',
  setup: function (editor) {
    editor.addButton('上传本地图片', {
      text: '上传本地图片',
      icon: false,
      onclick: function () {

        // editor.insertContent('&nbsp;<b>It\'s my button!</b>&nbsp;');
        $("#yincangtest").click();
        $("#Savechange").click(function(){
          var blogcontented =tinymce.get('Content').getContent({format: 'raw'});
          var reader = new FileReader();
          var file = document.getElementById('InputFile').files[0];
          reader.readAsDataURL(file);
          reader.onload = function(e){
           var jiadeng = e.target.result;
           blogcontented+='<p><img src="'+jiadeng+'" alt="" width="394" ></p>'
           tinymce.get('Content').setContent(blogcontented);

          }
        
        $("#modalclose").click();
        })
      
      }
    });
  }

});
</script>

<link rel="stylesheet" href="../public/css/index.css">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="../public/css/index-style.css" media="screen" type="text/css" />
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



        <ul class="nav navbar-nav">
   
          <li class="dropdown" style="font-family:biaotifontfamily;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> edit Blog<span class="caret"></span></a>
          <ul class="dropdown-menu">
              <li><a href="index.php?action=personal">Personal Page</a></li>
            <li><a href="postlist.php">Blog List</a></li>
            <li role="separator" class="divider"></li>
            <li id="invitationcodegt" data-toggle="modal" data-target="#yaoqingmakuang"><a href="#">InvitationCode</a></li>
            <li><a href="outlog.php">Exit</a></li>

          </ul>
        </li>
      </ul>



    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div  class="quanbu">
   <div  data-toggle="modal" data-target="#shangchuantupian" id="yincangtest" style="display:none">123</div>

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

<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="shangchuantupian">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">上传图片</h4>
      </div>
    <div class="modal-body">
    <div class="form-group">
    <label for="exampleInputFile">选择图片</label>
    <input type="file" id="InputFile">
   <!--  <p class="help-block">Example block-level help text here.</p> -->
  </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" id="modalclose">Close</button>
        <button type="button" class="btn btn-primary" id="Savechange">Save changes</button>
      </div>
    </div>
  </div>
</div>

<img src="../public/imgs/jiachangbanner.jpg" style="width:100%;">
<ul class="nav nav-tabs" style="font-family:biaotifontfamily;">
  <li role="presentation" class="active"><a href="#">Add BLog</a></li>
  <li role="presentation" ><a href="postlist.php">BlogList</a></li>
  <li role="presentation"><a href="#"></a></li>
</ul>
<br>


<form method="post" action="save.php" style="font-family:biaotifontfamily;">
<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="<?php echo $_smarty_tpl->getVariable('blog')->value['title'];?>
">
  </div>

<div class="form-group">
    <label for="exampleInputEmail1">classification</label>
    <br>
<div class="btn-group" role="group" aria-label="...">
 <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span id="dropclass"><?php echo $_smarty_tpl->getVariable('blog')->value['class1'];?>
</span>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu dropclass1" >
       <li><a href="#">技术博客</a></li>
      <li><a href="#">个人随笔</a></li>
      <li><a href="#">非原创</a></li>
    </ul>
  </div>
   <div class="btn-group" role="group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span id="dropclass3"><?php echo $_smarty_tpl->getVariable('blog')->value['class2'];?>
</span>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu " id="dropclass2">

    </ul>
  </div>
</div>

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">acess right of this blog</label>
    <br>
    <label class="radio-inline">
  <input type="radio" name="type" id="inlineRadio1" value="1" checked = "checked" > Public
  <br><small>Anyone can see this blog</small>
</label>
<br>
  <label class="radio-inline">
  <input type="radio" name="type" id="inlineRadio2" value="0"> Private
  <br><small>Nobody can see this blog except you and me</small>
</label>
 </div>

  <div class="form-group">
    <label for="exampleInputEmail1">summary</label>
   <textarea name="summary" id="summary" style="width:100%;height:150px;"><?php echo $_smarty_tpl->getVariable('blog')->value['summary'];?>
</textarea>
 </div>

<div class="form-group">
    <label for="exampleInputEmail1">Content</label>
   <textarea name="content" style="width:90%;height:700px;" id="Content"><?php echo $_smarty_tpl->getVariable('blog')->value['content'];?>
</textarea>
  </div>


 <div style="width:120px;margin:10px auto;font-size:13px;font-family:biaotifontfamily;">
<input type="hidden" value="" name="class1" id="class1">
<input type="hidden" value="" name="class2" id="class2">
<!-- <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('blog')->value['content'];?>
" id="smartycontent"> -->
<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('blog')->value['type'];?>
" id="blogtype">
<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('blog')->value['blog_id'];?>
" name="blog_id" >
 <input class="text-center btn btn-default " type="submit" value="SAVE BLOG" id="addbloganniu">
</div>
<p class="text-center" style="font-size:16px">tips:<del>PLEASE</del>&nbspDon't Hei Northsea and Amiao Here</p>


</form>



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

</body>
<script src="../public/js/addblog.js"></script>
</html>
<script type="text/javascript">

var jishublog = new Array(".Net技术","编程语言","软件设计","Web前端","架构设计","手机开发","软件工程","数据库技术","操作系统","其他分类","综合")
var personalwrite=new Array("生活记录","个人感悟","文学博客","趣事见闻","各类知识","不知道怎么编了","其他")
var notself=new Array("技术类","文学类","生活常识","冷门知识","有意思的知识","不知道怎么编了","其他")
$(document).ready(function(){
  if ($("#blogtype").val()==0) {
    $("#inlineRadio2").attr("checked","checked");
  };
 
  if ($("#dropclass").html()=="技术博客") {
     
       var jilu="";
    for(i=0;i<jishublog.length;i++)
    {
     
      jilu+="<li><a href='#'>"+jishublog[i]+"</a></li>";
    }
    $("#dropclass2").html(jilu);
    $("#dropclass2 li a").click(function(){
         // alert($(this).html())
      $("#dropclass3").html($(this).html());
      })

    }
    else if($("#dropclass").html()=="个人随笔")
    {    
             var jilu="";
    for(i=0;i<personalwrite.length;i++)
    {
     
      jilu+="<li><a href='#'>"+personalwrite[i]+"</a></li>";
    }
    $("#dropclass2").html(jilu);
    $("#dropclass2 li a").click(function(){
         // alert($(this).html())
      $("#dropclass3").html($(this).html());
      })
    }
    else if($("#dropclass").html()=="非原创")
    { 
             var jilu="";
    for(i=0;i<notself.length;i++)
    {
     
      jilu+="<li><a href='#'>"+notself[i]+"</a></li>";
    }
    $("#dropclass2").html(jilu);
    $("#dropclass2 li a").click(function(){
         // alert($(this).html())
      $("#dropclass3").html($(this).html());
      })
    }

    $("#dropclass2 li a").click(function(){
    // alert($(this).html())
      $("#dropclass3").html($(this).html());
    })
 
})



$(".dropclass1 li a").click(function () {
  // alert($(this).html());
  $("#dropclass").html($(this).html());
      
    if ($("#dropclass").html()=="技术博客") {
      $("#dropclass3").html(".Net技术");
       var jilu="";
    for(i=0;i<jishublog.length;i++)
    {
     
      jilu+="<li><a href='#'>"+jishublog[i]+"</a></li>";
    }
    $("#dropclass2").html(jilu);
    $("#dropclass2 li a").click(function(){
         // alert($(this).html())
      $("#dropclass3").html($(this).html());
      })

    }
    else if($("#dropclass").html()=="个人随笔")
    {     $("#dropclass3").html("生活记录");
             var jilu="";
    for(i=0;i<personalwrite.length;i++)
    {
     
      jilu+="<li><a href='#'>"+personalwrite[i]+"</a></li>";
    }
    $("#dropclass2").html(jilu);
    $("#dropclass2 li a").click(function(){
         // alert($(this).html())
      $("#dropclass3").html($(this).html());
      })
    }
    else if($("#dropclass").html()=="非原创")
    { $("#dropclass3").html("技术类");
             var jilu="";
    for(i=0;i<notself.length;i++)
    {
     
      jilu+="<li><a href='#'>"+notself[i]+"</a></li>";
    }
    $("#dropclass2").html(jilu);
    $("#dropclass2 li a").click(function(){
         // alert($(this).html())
      $("#dropclass3").html($(this).html());
      })
    }
})
    $("#dropclass2 li a").click(function(){
    // alert($(this).html())
      $("#dropclass3").html($(this).html());
    })


$("#addbloganniu").click(function(){
    var blogcontent;


  if ($("#title").val()=="") {
    alert("标题不能不写啊大兄弟");
      return false;
  };

  if ($(summary).val()=="") {
    alert("简介不能为空啊妹子");
    return false;
  };

  if($("#dropclass").html()=="Dropdown"){
    alert("分类不能为空！");
    return false;
  };
    if($("#dropclass3").html()=="Dropdown"){
    alert("分类不能为空！");
    return false;
  };
  
  blogcontent = tinymce.get('Content').getContent({format: 'raw'});
  blogcontent = blogcontent.replace(new RegExp("'",'g'), "\\'");
  tinymce.get('Content').setContent(blogcontent);

  $("#class1").val($("#dropclass").html());
  $("#class2").val($("#dropclass3").html());
  // alert($("#class2").val());
})

$("#invitationcodegt").click(function(){
  $.post("get_invitationcode.php",{key:1},function(data){
      datah=JSON.parse(data)
     $("#yaoqingma1").html(datah[0].invitationcode+'&nbsp可用状态:'+datah[0].enable)
     $("#yaoqingma2").html(datah[1].invitationcode+'&nbsp可用状态:'+datah[0].enable)
  })
})
</script>
