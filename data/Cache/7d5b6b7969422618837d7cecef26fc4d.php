<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>用户注册-<?php echo ($name); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	

	<link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/templates/kfc/css/kfc.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES --> 
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="__ROOT__/Public/js/html5shiv.min.js"></script>
        <script src="__ROOT__/Public/js/respond.min.js"></script>
    <![endif]-->
	<!-- END THEME STYLES -->
	
</head>
<!-- BEGIN BODY -->
<body style="background:url(/Public/images/regbg.jpg) no-repeat scroll center top #DBF1FC;">


<div class="container" style="min-height: 350px;padding-top:20px" >
<a href="/">
<p align="center"><img src="<?php echo ($logo); ?>"></p>
</a>
<p ><a class="pull-right" href="/">返回首页</a></p>
<div class="clearfix"></div>
<div class="panel panel-default">
  <div class="panel-body">
  
  <div class="row">
  
    
<p class="lead" style="border-bottom: 1px solid #eee;padding: 0 10px;">用户注册   </p>
	
	
	
	    <div class="col-md-offset-1 col-lg-7 col-xs-12">

		
		<br>




<form class="form-horizontal"    action="/index.php?m=Public&a=doregister" method="post"   role="form">


 <div class="form-group">
    <label class="col-sm-3 control-label" for="inputE">用户名：</label>
    <div class="col-sm-5">
      <input type="text" placeholder="" name="username" id="inputE" datatype="*6-18" ajaxurl="/index.php?m=Public&a=checkuser" errormsg="昵称至少6个字符,最多18个字符！" class="form-control"> 
    </div>
	<div class="col-sm-4">
<span class="help-block"><div class="Validform_checktip">用户名为6~18个字符</div></span>
 </div>
  </div>

   <div class="form-group">
    <label class="col-sm-3 control-label" for="inputEmail">邮箱：</label>
    <div class="col-sm-5">
      <input type="email" placeholder="" name="useremail" id="inputEmail" class="form-control" datatype="e" ajaxurl="/index.php?m=Public&a=checkemail" nullmsg="请输入邮箱号！" errormsg="您输入的邮箱号不正确！"> 
    </div>
	<div class="col-sm-4">
<span class="help-block"><div class="Validform_checktip">用来登录超级外卖，需要接收到激活邮件 ​</div></span></div>
  </div>
 
  
   <div class="form-group">
    <label class="col-sm-3 control-label" for="inputEm">输入密码：</label>
    <div class="col-sm-5">
      <input type="password" placeholder="" name="userpass" id="inputEm" class="form-control" datatype="*6-16" nullmsg="请设置密码！" errormsg="密码范围在6~16位之间！" > 
    </div>
	<div class="col-sm-4">
<span class="help-block"><div class="Validform_checktip">6~16位之间字母、数字或者英文符号​</div></span>
 </div>
  </div>
  
  
  
   <div class="form-group">
    <label class="col-sm-3 control-label" for="inputEma">确认密码：</label>
    <div class="col-sm-5">
      <input type="password" placeholder="" name="reuserpass" id="inputEma" class="form-control" datatype="*" recheck="userpass" nullmsg="请再输入一次密码！" errormsg="您两次输入的账号密码不一致！" > 
    </div>
	<div class="col-sm-4">
<span class="help-block"><div class="Validform_checktip">两次输入密码需一致</div></span>
 </div>
  </div>

  
       <div class="form-group">
    <label class="col-sm-3 control-label" for="inputEmail">验证码：</label>
    <div class="col-sm-3">
      <input type="text" placeholder="" name="verify" id="inputEmail" class="form-control" datatype="*" ajaxurl="/index.php?m=Public&a=checkverify" nullmsg="请再输入验证码" errormsg="请输入正确的验证码！"> 
    </div>
	<div class="col-sm-6">
<span class="help-block"> <img src="__APP__?m=Public&a=verify" />
     <span class="Validform_checktip"></span></span> 
 </div>

  </div>
  <div class="form-group">
    <div class="col-sm-offset-3 col-sm-3">
      <button class="btns green btn-block" data-loading-text="正在提交..." type="submit">立刻注册</button>
	   
    </div>
  </div>
</form>


		
	已有帐号点击 <a href="<?php echo U('Public/login/');?>&reurl=<?php echo urlencode('http://'.$_SERVER['HTTP_HOST']); ?>" ><strong> 登录</strong> </a>	
		

		</div><!-- end col-8-->
		<div class="col-lg-4 col-xs-4">
		<div style=" border-left: 1px solid #E5E5E5;min-height:300px;">
		
		
		
         




              

        
		
		
		</div>
		
		
		
		</div><!-- end col-4-->
		
		
		
		
		
		
      </div><!-- end row -->
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
   
  </div>
  
</div><!-- "panel end -->

	  
	  
</div><!-- end container -->



         
	


			
			
			
			
		
			
				
				
				
			
	
	
	
	
	
	
	
	
	
	
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<!--[if lt IE 9]>
	<script src="img/js/respond.min.js"></script>
	<script src="img/js/html5shiv.min.js"></script> 
	<![endif]-->   
	
	
	

    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	<script src="__ROOT__/Public/js/Validform_v5.3.2_min.js"></script> 
	
<script >
	$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
		
	$(".form-horizontal").Validform({
		tiptype:2
	});
})

	
</script>	

	<!-- END CORE PLUGINS -->
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>