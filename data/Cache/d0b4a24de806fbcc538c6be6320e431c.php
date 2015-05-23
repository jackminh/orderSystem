<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>订单提交成功_<?php echo ($name); ?></title>
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

    <!--[if lt IE 9]>
        <script src="__ROOT__/Public/js/html5shiv.min.js"></script>
        <script src="__ROOT__/Public/js/respond.min.js"></script>
    <![endif]-->

		    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	 <script type="text/javascript" src="__ROOT__/Public/js/simpleCart.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                simpleCart.empty();
            })
        </script>


	
</head>
<!-- BEGIN BODY -->
<body>






<div class="head_top hidden-xs" style="margin-bottom:20px;">
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
  <div class="container " > 
     <div class="row hidden-xs">
        <div class="col-md-3 col-xs-7">
		<a href="/"><img src="templates/mall/images/logo/logo.png"></a>
		</div>
		<div class="col-md-1"></div>
        <div class="col-md-5">
		
		</div>
		<div class="col-md-1"></div>
		<div class="col-md-2 col-xs-5">
		
	
		<?php if(empty($uid)): if(($isorder) == "0"): ?><a rel="nofollow" class="btn btn-cart btn-lg " style="margin-top:15px;" href="/index.php?m=public&a=login&reurl=<?php echo urlencode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']); ?>" ><i class="fa fa-shopping-cart"></i> 立刻结算</a>
	     
		<?php else: ?>
			<a data-toggle="modal" data-target="#myModal"  class="btn btn-cart btn-lg" style="margin-top:15px;"><i class="fa fa-shopping-cart"></i> 购物车 <span class="simpleCart_quantity"></span></a><?php endif; ?>

	<?php else: ?> 
	<a href="<?php echo U('Cart/index/');?>" class="btn btn-cart btn-lg" style="margin-top:15px;"><i class="fa fa-shopping-cart"></i> 购物车 <span class="simpleCart_quantity"></span></a><?php endif; ?>
		</div>
  
      </div>
	 




<nav class="navbar bs-docs-nav" role="navigation" style="margin-top:10px;">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand navone hidden-xs" href="#">商品分类</a>
  	<a class="navbar-brand visible-xs" href="#"><?php echo ($name); ?></a>
  	
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
	<ul class="nav navbar-nav">
      <li><a href="/">首页</a></li>
     
	  <li><a href="<?php echo U('Article/l/','id=15');?>">促销</a></li>
	  <li><a href="<?php echo U('Gift/index/');?>">积分</a></li>
	   <li><a href="<?php echo U('Message/index/');?>">留言</a></li>
    
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
     <?php if(empty($uid)): ?><li><a href="<?php echo U('Members/index/');?>">我的订单</a></li>
     <?php else: ?> 
	  <li><a href="<?php echo U('Member/order/');?>">我的订单</a></li><?php endif; ?>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>


	 
	  
	  
	  
  </div>














   
         
<!-- begin container -->

<div class="container" style="margin-top:5px;min-height:450px;">

<div class="row">
	  <div class="col-lg-12 col-md-12 col-xs-12">
	  <!-- shopstart-->
	      <div class="panel panel-default">
		      <div class="panel-heading">
    <h3 class="panel-title">订单确认</h3>
  </div>
             <div class="panel-body"style="min-height:400px;">
         
	         
		
				<p align="center" style="font-size:30px;"> <i class="fa fa-check-circle-o" style="color:#1D943B;font-size:30px;margin-top:10px;"></i>　您的订单已提交成功！</p>
			 <br>
		<div class="row">
		     <div class="col-md-1"> </div>
			  <div class="col-md-3">
	
			 <p>订单编号：<?php echo ($orderdetail["oid"]); ?></p>
			 <p>下单时间：<?php echo (date("Y-m-d H:i",$orderdetail["order_ctime"])); ?></p>
			 <p>送达时间：<?php echo (substr($orderdetail["order_dtime"],0,16)); ?></p>
	 
			 <p>客户姓名：<?php echo ($orderdetail["oman"]); ?></p>
			 <p>手机号码：<?php echo ($orderdetail["otel"]); ?></p>
			 <p>收货地址：<?php echo ($orderdetail["oaddress"]); ?></p>
			 <p>订单备注：<?php echo ($orderdetail["morecontent"]); ?></p>
			 
			 
			 </div>
			 <div class="col-md-6"> 
			 <div class="panel panel-default">
            <div class="panel-heading">
              <b>商户：</b><?php echo ($orderdetail["shopname"]); ?>　<span class="pull-right">订单状态：<span class="orderd"><?php switch($vo["orderstatus"]): case "4": ?>已完成<?php break;?>
													<?php case "5": ?>送货中<?php break;?>
                                                    <?php default: ?> 提交成功<?php endswitch;?></span></span>
            </div>
        <div class="panel-body">
			 
			   <table class="table tp">
         <thead>
          <tr>
            <td >  菜品</td>
            <td >  单价</td>
            <td >  数量</td>
            <td>  小计</td>
			<td></td>
          </tr>
         </thead>
		 <tbody style="font-size:12px;">
       <?php if(is_array($orderdetail["Foodorderext"])): $i = 0; $__LIST__ = $orderdetail["Foodorderext"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td >  <?php echo ($vo["fname"]); ?></td>
			<td >  <?php echo ($vo["fprice"]); ?></td>
            <td ><?php echo ($vo["fcount"]); ?></td>
			<td ><?php echo ($vo["prices"]); ?></td>
       </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          
     </tbody>
        
      </table>
	   </div>
	   <div class="panel-footer">配送费用：<span class="orderd"><?php echo ($orderdetail["shopspay"]); ?></span>元　　订单总额：<span class="orderd"><?php echo ($orderdetail["orderprice"]); ?></span>元</div>
			 </div>
			 </div>
		
			 
			 </div>
			 
	 
			 
			 
			 
			 
			  </div>
 
			 
			 </div>
	         </div>
	 </div><!-- col end -->
    

</div><!-- end row -->


  

</div>
    
</div><!-- end container -->



<div class="footer">

<div class="container">


<p align="center">© 2014 <?php echo ($name); ?> 　<?php echo ($icp); ?> 　　</p>
<p align="center" class="ps">程序由<a title="超级外卖" href="http://www.bijiadao.net/">超级外卖</a>提供</p>
</div>


  </div>  
    <script src="__ROOT__/Public/js/simpleCart.min.js"></script> 
	 
	

<div class="container navbar-fixed-bottom visible-xs" style="background-color:#FFF;">
  <div class="row ">
  
       <div class="col-md-3 col-xs-3"><a class="icon-btn" href="<?php echo U('Index/index/');?>">
								<i class="fa fa-home"></i>
								<div>首页</div>
								
							</a></div>
	 <div class=" col-xs-3">
	 <div class="btn-group dropup">
	 <a class="icon-btn dropdown-toggle" data-toggle="dropdown" >
								<i class="fa fa-th-large"></i>
								<div>菜品分类</div>
								
							</a>
							<ul class="dropdown-menu" style="min-width:245px;" role="menu">
							<?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = $foodcatlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a class="btn" href="<?php echo U('index/flist/','id='.$vo['fcid']);?>"><?php echo ($vo["fcname"]); ?></a></li>
							 <li class="divider"></li><?php endforeach; endif; else: echo "" ;endif; ?>
							
                             </ul>
							</div>
							
							</div>
	<div class="col-md-3 col-xs-3">
	 <div class="btn-group dropup">
	 <a class="icon-btn" href="<?php echo U('Member/index/');?>">
								<i class="fa fa-user"></i>
								<div>我的订单</div>
								
							</a>
						
							</div>
							
							</div>
	 
	 
	 
	
	 <div class="col-md-3 col-xs-3">
	 <a class="icon-btn" href="<?php echo U('Cart/index/');?>">
								<i class="fa fa-shopping-cart"></i>
								<div>购物车</div>
								<span class="badge" > <span class="simpleCart_quantity "></span>
		</span>
							</a>
							
	 </div>
  
   <!-- <div class="col-md-3 col-xs-3"><a class="icon-btn" href="<?php echo U('Home/map/');?>">
								<i class="fa fa-map-marker"></i>
								<div>店铺位置</div>
								
							</a></div>-->
  </div>

</div>

	


<!-- /.modal -->

				



	

	
	
	
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   

	<!-- 配置文件 -->

	









  
	<!-- END CORE PLUGINS -->
	
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>