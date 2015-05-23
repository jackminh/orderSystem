<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title><?php echo ($webtitle); ?>－管理后台</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	
	<link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
<body style="background-color:#f6f6f6;">


<!-- begin container -->

<div class=" container " style="margin-top:250px">

<div class="row">

	  <div class="col-lg-12 col-md-12 col-xs-12" style="min-height:450px;">
	  
        
		
		
           <div class="row"> 
             <div class="col-lg-4 col-md-4 col-xs-12" ></div>
			 <div class="col-lg-4 col-md-4 col-xs-12" >
			 <div class="panel panel-default">
  <div class="panel-body">
    
	
	
	
				 
			 <?php if(isset($message)): ?><h1 style="color:green"><span class="glyphicon glyphicon-ok"></span> <small><?php echo($message); ?></small></h1>
			 <?php else: ?>
             <h1 style="color:red"><span class="glyphicon glyphicon-remove"></span><small><?php echo($error); ?></small></h1><?php endif; ?>
			 
			 
			 页面自动 <a id="href" href="<?php echo($jumpUrl); ?>">跳转</a> 等待时间： <b id="wait"><?php echo($waitSecond); ?></b>
			 <span class="help-block"></span>
	
	
	
	
  </div>
</div>
			 

			 
			 </div>
			 <div class="col-lg-4 col-md-4 col-xs-3" ></div>
		  
		  </div>
		  
             



			  
<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>
			  
			
             
	
     

	  
	  
	  
	
	 </div><!-- col end -->

</div><!-- end row -->


  


    
</div><!-- end container -->

	
</body>
<!-- END BODY -->
</html>