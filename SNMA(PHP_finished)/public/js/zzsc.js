//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
var zhuangtaima=0;

    $("#username").blur(function(){
    	$.post("check_user.php",{invitationcode:$("#invitationcode").val(),username:$("#username").val()},function(data){
    	 datah=JSON.parse(data)

    	if (datah.username_errorcode==0) {
    		alert("用户已存在。");
    	    zhuangtaima=0;
    	}
    	if (datah.invitationcode_errorcode==0) {
    		alert("邀请码错误。");
    	    zhuangtaima=0;
    	}
        

    	if (datah.username_errorcode==1&&datah.invitationcode_errorcode==1) {  zhuangtaima=1;};

    });
    })

    $("#invitationcode").blur(function(){
    	$.post("check_user.php",{invitationcode:$("#invitationcode").val(),username:$("#username").val()},function(data){
    	 datah=JSON.parse(data)

    	if (datah.username_errorcode==0) {
    	    zhuangtaima=0;
    	}
    	if (datah.invitationcode_errorcode==0) {
    	    zhuangtaima=0;
    	}
    	if (datah.username_errorcode==1&&datah.invitationcode_errorcode==1) {  zhuangtaima=1;};
       });
    })
$(".next").click(function(){
	if(animating) return false;
    // alert(zhuangtaima);
	if($("#invitationcode").val()=="")
	{
		alert("邀请码不能为空！");
		return false;
	};
	if($("#username").val()=="")
	{
		alert("用户名不能为空");
		return false;
	};
	if ($("#username").val().length>16) {
		alert("用户名最长为16位");
		return false;
	};
	if($("#cpass").val()!=$("#pass").val())
	{
		alert("两次密码输入不同");
		return false;
	};
	if($("#cpass").val().length<6)
	{
		alert("密码不能小于6位");
		return false;
	};
    
    if (zhuangtaima==0) {
       alert("invitationcode/username error!:)");
		return false;
    };

    // $.post("check_user.php",{invitationcode:$("#invitationcode").val(),username:$("#username").val()},zhuangtaima=function(data){
    // 	 datah=JSON.parse(data)

    // 	if (datah.username_errorcode=='0') {
    // 		alert("用户已存在。");
    // 		return 0;
    // 	}
    // 	if (datah.invitationcode_errorcode=='0') {
    // 		alert("邀请码错误。");
    // 		document.getElementById("Previous").click();  
    // 	}
       

    // });

	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})