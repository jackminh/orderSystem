<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="no-js"> 
<head>
	<meta charset="utf-8" />
	<title>用户登录-<?php echo ($name); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
</head>
<body style="background:url(/Public/images/regbg.jpg) no-repeat scroll center top #DBF1FC;">
<div class="container" style="min-height: 350px;padding-top:10px" >
<a href="/">
<p align="center"><img src="<?php echo ($logo); ?>"></p>
</a>
  <div class="row">
  	    <div class=" col-lg-4 col-xs-12">
		</div>
			<div class="col-lg-4 col-xs-12">
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">用户登录</h3>
  </div>
  <div class="panel-body">
   <form class="form-horizontal" action="__APP__?m=Public&a=dologin&reurl=<?php echo ($reurl); ?>" method="post"  role="form">
  <div class="form-group"style="margin-left:0px;margin-right:0px;">
    <label for="exampleInputEmail1">用户名</label>
    <input type="text" class="form-control " id="exampleInputEmail1" name="username" placeholder="" datatype="*"  errormsg="用户名不可以为空！" class="form-control">
  </div>
  <div class="form-group " style="margin-left:0px;margin-right:0px;">
    <label for="exampleInputPassword1">密码</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" datatype="*"  errormsg="密码不可以为空！"　placeholder="">
  </div>
 <div class="form-group" style="margin-left:0px;margin-right:0px;">
   </div>
  <div class="form-group">
    <div class=" col-sm-12">
  <button type="submit" class="btns blue btn-block">登录</button>
    </div>
  </div>
</form>
<div class="row">
     <div class="col-sm-8"></div>
	 <div class="col-sm-4"><a href="<?php echo U('Public/register/');?>&reurl=<?php echo urlencode('http://'.$_SERVER['HTTP_HOST']); ?>">免费注册</a></div>
</div>
  </div>
</div>		
		</div>
		<div class=" col-lg-4 col-xs-7"></div>
      </div>
</div>
<p style="text-align:center"></p>
    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	<script src="__ROOT__/Public/js/Validform_v5.3.2_min.js"></script> 
<script >
	$(function(){
	$(".orm-horizontal").Validform({
		tiptype:function(msg,o,cssctl){
			var objtip=$("#msgdemo2");
			cssctl(objtip,o.type);
			objtip.text(msg);
		},
		ajaxPost:true
	});
})
</script>	
</body>
</html>