<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>购餐车_<?php echo ($name); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
 
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	
		<link href="__ROOT__/templates/mall/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/templates/mall/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/templates/mall/css/css.css" rel="stylesheet" type="text/css"/>

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="__ROOT__/Public/js/html5shiv.min.js"></script>
        <script src="__ROOT__/Public/js/respond.min.js"></script>
    <![endif]-->
	<!-- END THEME STYLES -->
	
	  <script src="__ROOT__/Public/js/jquery.js"></script>
 <script src="__ROOT__/Public/js/simpleCart.min.js"></script> 
	 <link href="__ROOT__/templates/mall/css/cart.css" rel="stylesheet" type="text/css"/>

	
</head>
<!-- BEGIN BODY -->
<body>

<div class="head_top hidden-xs">
  <div class="container">
     你好，欢迎光临<?php echo ($name); ?>！

 <span class="pull-right">
 	<?php if(empty($uid)): ?><a href="<?php echo U('Public/register/');?>" rel="nofollow">注册</a>
	    <a rel="nofollow" href="/index.php?m=public&a=login&reurl=<?php echo urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>" >登录</a>
	     <a href="<?php echo U('Member/index/');?>" rel="nofollow">我的外卖</a>
	<?php else: ?>    
	 <a href="<?php echo U('Member/index/');?>"><i class="fa fa-user-md"></i> <?php if(empty($nickname)): echo ($username); else: echo ($nickname); endif; ?></a></li>
	 <a href="<?php echo U('Member/index/');?>" rel="nofollow"><i class="fa fa-list"></i> 我的外卖</a>
          <a href="<?php echo U('Public/logout/');?>" rel="nofollow"><i class="fa fa-power-off"></i> 退出</a><?php endif; ?>
  </span>
  </div>
</div>
  

  <!-- begin container -->
  <div class="container " style="margin-top:5px;"> 
     <div class="row hidden-xs">
        <div class="col-md-3 col-xs-7">
		<a href="/"><img src="templates/mall/images/logo/logo.png"></a>
		</div>
		<div class="col-md-1"></div>
        <div class="col-md-5">
		
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-2 col-xs-5">
		
		
		</div>
  
      </div>
	 
 </div>



<div class=" container " style="margin-top:10px">

   <div class="panel panel-cart">
    <div class="panel-heading">
    <h3 class="panel-title">购物车</h3>
  </div>
             <div class="panel-body">

<div class="row">
	  
			 
	   <div class="col-md-12">
	     

<div class="simpleCart_items" ></div>
<div style="clear:left"></div>

<hr>
<div class="">
<div class="count">
数量: <span class="simpleCart_quantity"></span></div>
<div class="ship">
配送费: <span class="simpleCart_shipping"></span></div>
<p class="grand">
合计总额: <span class="simpleCart_grandTotal"></span></p>

</div>

	 

	  
	   
	   
	   
	   
	   
	   
	   </div>
 
	   
	   
	   </div>


<div class="well">	
<!--判定是否为登录用户-->
<?php if(empty($uid)): ?><div class="form-horizontal" >
			   <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">收货人：</div>
    <div class="col-sm-3">
	
	<input type="text" class="form-control" name="oman" id="oman" placeholder="请输入收货人姓名" datatype="*"  sucmsg="" nullmsg="请输入收货人姓名！" errormsg="" >
	



	

      
    </div>
	 <div class="col-sm-7 col-xs-12"><div class="Validform_checktip "></div></div>
  </div>
  <div class="form-group fps">
    <div for="inputPassword3" class="col-sm-2 control-label">手机号：</div>
    <div class="col-sm-3">
	
      <input type="text" class="form-control" name="otel" id="otel" placeholder="请输入手机号" datatype="m"  sucmsg="" nullmsg="请输入手机号！" errormsg="手机号码不正确">
	 
	  
    </div>
	<div class="col-sm-7"><div class="Validform_checktip "></div></div>
  </div>
  <!--<?php if(empty($oman)): ?><div class="form-group fps">
    <div for="inputPassword3" class="col-sm-2 control-label">验证码：</div>
    <div class="col-sm-3">

      <input type="text" class="form-control" name="ote" placeholder="" datatype="*6-6"  sucmsg="" nullmsg="请输入正确的验证码！" errormsg="验证码错误!">
	 
	 
	  
    </div>
	<div class="col-sm-6"><span class="Validform_checktip "></span> <button type="button" data-loading-text="正在发送..." class="btn btn-default btn-sm pull-left">获取验证码</button></div>
	<div class="col-sm-1"></div>
  </div>
  <?php else: endif; ?>-->
  <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">地址：</div>
    <div class="col-sm-4">
	
      <input type="text" class="form-control" id="oaddress" name="oaddress" placeholder="请输入地址" datatype="*"  sucmsg="" nullmsg="请输入地址！" errormsg="" >
	 
	 
    </div>
	<div class="col-sm-6"><div class="Validform_checktip "></div></div>
  </div>
  <!--
  <div class="form-group">
    <div for="inputPassword3" class="col-sm-3 control-label">支付方式</div>
    <div class="col-sm-9">
      <div class="radio">
  <label>
    <input type="radio" name="" id="optionsRadios1" value="1" checked>
   
  </label>
</div>
    </div>
	 </div>-->
	 <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">送货时间</div>
	
	    <div class="col-sm-2">
		<select class="form-control" id="days" name="days">
		 

<option value="<?php echo date('Y-m-d'); ?>"><?php echo date('Y-m-d'); ?></option>
 <option value="<?php echo date('Y-m-d',strtotime('+1 day')); ?>"><?php echo date('Y-m-d',strtotime('+1 day')); ?></option>
                 
                         
	     </select>
	
					
   </div>
    <div class="col-sm-2">
	

	<select class="form-control" id="times" name="times">
					
 <?php $__FOR_START_17270__=substr((intval($openstime)),0,2);$__FOR_END_17270__=substr((intval($openetime)),0,2);for($i=$__FOR_START_17270__;$i < $__FOR_END_17270__;$i+=1){ if(($i) >= "10"): ?><option value="<?php echo ($i); ?>:00"><?php echo ($i); ?>:00</option>
                           <option value="<?php echo ($i); ?>:30"><?php echo ($i); ?>:30</option>
						   

						<?php else: ?>
						     <option value="0<?php echo ($i); ?>:00">0<?php echo ($i); ?>:00</option>
                           <option value="0<?php echo ($i); ?>:30">0<?php echo ($i); ?>:30</option><?php endif; } ?>
</select>
					
   </div>
	<div class="col-sm-6"></div>
  </div>
	   <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">备注：</div>
    <div class="col-sm-4">
    <span class="help-block">  

<textarea class="form-control"  id="ocontent" name="ocontent"   row="3"></textarea></span>
 



    </div>
	<div class="col-sm-6"></div>
  </div>
     <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">支付方式：</div>
    <div class="col-sm-4">
   
<label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="paytyle1" value="1" checked> 货到付款
</label>
<label class="radio-inline">
<!-- Modal 
  <input type="radio" name="inlineRadioOptions" id="paytyle2"  value="2"> 在线支付
-->
  </label>



    </div>
	<div class="col-sm-6"></div>
  </div>
  
 <p align="center"> <a href="javascript:;" class="btn btn-danger simpleCart_checkout" ><i class="fa fa-shopping-cart"></i> 提交订单</a></p>
	
</div>	


</div>



<?php else: ?> <!--用户登录状态-->

				   <div class="form-horizontal" >
<div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">地址：</div>
    <div class="col-sm-8">
	<?php if(empty($addlist)): ?><input type="radio" name="optionad" checked id="optionsRadios2" value="">
    
	
	
	
	<?php else: ?> 
	<?php if(is_array($addlist)): $i = 0; $__LIST__ = $addlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="radio">
  <label>
  <?php if(($vo["addtop"]) == "1"): ?><input type="radio" name="optionad" checked id="optionad" value="<?php echo ($vo["name"]); ?>,<?php echo ($vo["tel"]); ?>,<?php echo ($vo["address"]); ?>">
    
  <?php else: ?>
   <input type="radio" name="optionad"  id="optionad" value="<?php echo ($vo["name"]); ?>,<?php echo ($vo["tel"]); ?>,<?php echo ($vo["address"]); ?>"><?php endif; ?>

   <?php echo ($vo["name"]); ?>,<?php echo ($vo["tel"]); ?>,<?php echo ($vo["address"]); ?>
	
  </label>
</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>

	

	

      
    </div>
	 <div class="col-sm-2 col-xs-12"><a href="<?php echo U('Address/add/');?>" data-toggle="modal" data-target="#myModal">增加地址</a></div>
  </div>

 <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">送餐时间</div>
	
	
     <div class="col-sm-2">
		<select class="form-control" id="days" name="days">
		 

<option value="<?php echo date('Y-m-d'); ?>"><?php echo date('Y-m-d'); ?></option>
 <option value="<?php echo date('Y-m-d',strtotime('+1 day')); ?>"><?php echo date('Y-m-d',strtotime('+1 day')); ?></option>
                 
                         
	     </select>
	
					
   </div>
    <div class="col-sm-2">
	

	<select class="form-control" id="times" name="times">
					
 <?php $__FOR_START_23927__=substr((intval($openstime)),0,2);$__FOR_END_23927__=substr((intval($openetime)),0,2);for($i=$__FOR_START_23927__;$i < $__FOR_END_23927__;$i+=1){ if(($i) >= "10"): ?><option value="<?php echo ($i); ?>:00"><?php echo ($i); ?>:00</option>
                           <option value="<?php echo ($i); ?>:30"><?php echo ($i); ?>:30</option>
						   

						<?php else: ?>
						     <option value="0<?php echo ($i); ?>:00">0<?php echo ($i); ?>:00</option>
                           <option value="0<?php echo ($i); ?>:30">0<?php echo ($i); ?>:30</option><?php endif; } ?>
</select>
					
   </div>
	<div class="col-sm-6"></div>
  </div>
	   <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">备注：</div>
    <div class="col-sm-4">
    <span class="help-block">  

<textarea class="form-control" id="ocontent" name="ocontent"   row="3"></textarea></span>
 



    </div>
	<div class="col-sm-6"></div>
  </div>
	   <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">支付方式</div>
    <div class="col-sm-7">
  <label class="radio-inline">
  <input type="radio" name="inlineRadioOptions" id="paytyle" value="1" checked> 货到付款
</label>
<label class="radio-inline">
<!-- Modal 
  <input type="radio" name="inlineRadioOptions" id="paytyle"  value="2"> 在线支付
-->
  </label>
    </div>
	<div class="col-sm-3"></div>
  </div>
 <p align="center"> <a href="javascript:;" class="btn btn-danger simpleCart_checkout" ><i class="fa fa-shopping-cart"></i> 提交订单</a></p>
	



  </div>

 
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
</div><!-- /.modal --><?php endif; ?><!--if login end--> 	


		 
</div>	











 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
				  
	 
		
			</div>
</div>


			


</div>

			   


<script>
  simpleCart({
   checkout: {
        type: "SendForm" ,
url: "index.php?m=cart&a=save" ,
method: "POST" , 
    },
	currency: "JPY",
	shippingQuantityRate: 0,
	shippingTotalRate: 0,
	 shippingFlatRate: 10,
	cartColumns: [
{ attr: "name" , label: "商品" } ,
{ attr: "price" , label: "单价", view: 'currency' } ,
{ view: "decrement" , label: false , text: "-" } ,
{ attr: "quantity" , label: "数量" } ,
{ view: "increment" , label: false , text: "+" } ,
{ attr: "total" , label: "总价", view: 'currency' } ,
{ view: "remove" , text: "删除" , label: false }
]
  });
 </script>
<?php if(empty($uid)): ?><script> 
simpleCart.bind( 'beforeCheckout' , function( data ){
  
  //data.first_name = document.getElementById("first_name").value;
 
   
   data.oman = document.getElementById("oman").value;
   data.otel = document.getElementById("otel").value;
   data.oaddress = document.getElementById("oaddress").value;
   data.days = document.getElementById("days").value;
    data.times = document.getElementById("times").value;
   
   data.ocontent = document.getElementById("ocontent").value;
  //data.paytype = document.getElementById("paytyle").value;
  var zt = document.getElementsByName("inlineRadioOptions"); for(var i=0;i<zt.length;i++){
if(zt[i].checked) {

data.paytype=zt[i].value;
}
}
 data.item_totals = simpleCart.grandTotal();
   data.shopspay = simpleCart.shipping(); 
});
</script>
 <?php else: ?>
 <script>
 simpleCart.bind( 'beforeCheckout' , function( data ){
  
 
   data.address = document.getElementById("optionad").value;
  data.ocontent = document.getElementById("ocontent").value;
   data.days = document.getElementById("days").value;
    data.times = document.getElementById("times").value;
   var zt = document.getElementsByName("inlineRadioOptions"); for(var i=0;i<zt.length;i++){
if(zt[i].checked) {

data.paytype=zt[i].value;
}
}
 data.item_totals = simpleCart.grandTotal();
   data.shopspay = simpleCart.shipping(); 
});
 </script><?php endif; ?>





	
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