<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>在线留言_<?php echo ($name); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="{key}" name="description" />
	<meta content="{des}" name="author" />
	   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	
	<link href="__ROOT__/templates/mall/css/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/templates/mall/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="__ROOT__/templates/mall/css/css.css" rel="stylesheet" type="text/css"/>

    <!--[if lt IE 9]>
        <script src="__ROOT__/Public/js/html5shiv.min.js"></script>
        <script src="__ROOT__/Public/js/respond.min.js"></script>
    <![endif]-->
	<!-- END THEME STYLES -->
	
	    <script src="__ROOT__/Public/js/jquery.js"></script>
    <script src="__ROOT__/Public/js/bootstrap.min.js"></script> 
	

	
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
  <div class="container">
      
         <div class="row">
             <div class="col-md-3">
 <ul class="list-unstyled left-border hidden-xs">
  <?php if(is_array($foodcatlist)): $i = 0; $__LIST__ = array_slice($foodcatlist,0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><li> <a href="<?php echo U('List/index','id='.$sub['fcid']);?>" class="list-group-item"><span style="margin-left:60px;"><?php echo ($sub["fcname"]); ?></span><span class="fa fa-caret-right pull-right"></span></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
  
  
</ul>	 
			 
			 
			 
			 </div>
			 <div class="col-md-9 ">
			 



<div class="btn-group " style="margin-top:10px;">
  <button type="button" class="btn btn-warning">全部留言</button>
  <?php if(empty($uid)): ?><a class="btn btn-warning " href="<?php echo U('Public/login/');?>" rel="nofollow">
 <span class="glyphicon glyphicon-plus"></span> 发表留言
</a>
	
	<?php else: ?> 
	
	<button class="btn btn-warning " data-toggle="modal" data-target="#myModalss">
 <span class="glyphicon glyphicon-plus"></span> 发表留言
</button><?php endif; ?>

  </div>


	  <div class="panel panel-default">
             <div class="panel-body">
		




			 
		<?php if(is_array($mslist)): $i = 0; $__LIST__ = $mslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="row">
          <div class="col-sm-1"><img src="http://static11.elemecdn.com/forward/img/global/default-avatar.gif"> </div>
		  <div class="col-sm-11">
           <div style="color:#999"><?php echo ($vo["uname"]); ?>  <?php echo (date("Y-m-d H:i",$vo["create_time"])); ?></div>		  
		  <p>  <?php echo ($vo["mcontent"]); ?></p>
		  
		    <?php if(is_array($vo['_child'])): $i = 0; $__LIST__ = $vo['_child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub): $mod = ($i % 2 );++$i;?><hr style="margin-bottom:5px;">
		  <p style="color:#999">回复：<?php echo ($sub["mcontent"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
		  </div>
	   </div><!--list-->
	   <hr><?php endforeach; endif; else: echo "" ;endif; ?>
	   <div class="pagination">
	 <?php echo ($page); ?>
	 </div>
	   </div></div><!--panel-body-->
			


 
			 
			 
			 
			 
			 
			 
			
			
			 
	
			 
			 </div>
		
			 
		</div>
 
   </div>
   
  
 <!-- begin container -->


<div class="footer">

<div class="container">
<div class="row">
    <div class="col-md-3"> 
	<h4><i class="fa fa-truck"></i> 支付说明</h4>
	<ul >
                <li>起送金额：<?php echo ($startpay); ?>元</li>
                   <li>配送费用：<?php echo ($pspay); ?>元</li>
                  
                
				  </ul>
	</div>
	<div class="col-md-3">
	<h4><i class="fa fa-th-list"></i> 关于我们</h4>
	<ul >
	<li>店铺地址：<?php echo ($address); ?></li>
	<li>店铺公告：<?php echo ($notice); ?></li>
	
                  
                  </ul>
	</div>
	<div class="col-md-3">
	<h4><span class="glyphicon glyphicon-question-sign"></span> 配送范围</h4>
	<ul>
                  <li>配送范围：<?php echo ($psarea); ?></li>
				  </ul>
	
	</div>
	<div class="col-md-3">
	<ul>
                  	<li>
                     <h4><span class="glyphicon glyphicon-earphone"></span> 服务热线:<?php echo ($tel); ?></h4>
					 
					 </li>
                      <li>
                      	<h4><span class="glyphicon glyphicon-phone-alt"></span> 配送时间:<?php echo ($openstime); ?>-<?php echo ($openetime); ?></h4>
                          
                      </li>
                      
					   <!--  <li >
                    	<h4>
						<a target="_blank" href=""><span class="glyphicon glyphicon-phone"></span> 手机浏览</a>
                      	</h4>
                      </li>-->
					  
                  </ul>
	
	</div>
</div>

<p align="center">© 2014 <?php echo ($name); ?> 　<?php echo ($icp); ?> 　　</p>
<p align="center" class="ps">程序由<a title="超级外卖" href="http://www.bijiadao.net/">超级外卖</a>提供</p>
</div>


  </div>  
    
	


	
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">提示</h4>
      </div>
      <div class="modal-body">
       
   <p style="text-align:center">   
   <a href="<?php echo U('Public/register/');?>" class="btn btn-danger">注册成为会员更多优惠</a>
　　　　　
   <a href="<?php echo U('Cart/index/');?>" class="btn btn-default">不注册直接下单</a>

  </p>
  



      </div>
       
	 
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->	
 <script src="__ROOT__/Public/js/simpleCart.min.js"></script> 
	 <link href="__ROOT__/templates/mall/css/cart-min.css" rel="stylesheet" type="text/css"/>
<script>

simpleCart({
 	currency: "JPY",
	shippingQuantityRate: 0,
	shippingTotalRate: 0,
	 shippingFlatRate: <?php echo ($pspay); ?>,
	cartColumns: [
{ attr: "name" , label: "商品" } ,
//{ attr: "price" , label: "单价", view: 'currency' } ,
{ view: "decrement" , label: false , text: "-" } ,
{ attr: "quantity" , label: "数量" } ,
{ view: "increment" , label: false , text: "+" } ,
{ attr: "total" , label: "总价", view: 'currency' } ,
//{ view: "remove" ,  label: ''}
]
  });
  
 



</script>
 <script>
   
    $("div[role='dialog']").on("show.bs.modal", function() {  
        // 具体css样式调整  
        $(this).css({  
            "display": "block",  
            "margin-top": function() {  
                return ($(this).height() / 3);  
            }  
        });  
    });  

 </script>		
	
		<script type="text/javascript">

	
	
simpleCart.bind( "update" , function(){

 if(simpleCart.total()<=0){
 $("#cartSubmit").hide();
 $("#cartIsEmpty").show();
 $("#cartCha").hide();
 }
 else{
	 if( <?php echo ($startpay); ?>- simpleCart.total() <=0){
      $("#cartSubmit").show();
	$("#cartIsEmpty").hide();
	  $("#cartCha").hide();
    } else {
	$("#cartCha").show();
	$("#cartSubmit").hide();
    $("#cartIsEmpty").hide();
   var showimg = <?php echo ($startpay); ?>- simpleCart.total();
$("#cha").text(showimg);
    }}
 
});



	
	 </script>
	
	
	
	
	

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




<!-- Modal -->
<div class="modal fade" id="myModalss" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">发表留言</h4>
      </div>
      <div class="modal-body">
       

<form class="form-horizontal" role="form" method="post" action="<?php echo U('Message/save/');?>">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">内容</label>
    <div class="col-sm-9">
       

<textarea class="form-control" rows="5" name="content"></textarea>


	</div>
  </div>
  
  
  



      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-primary">提交留言</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->	
	
	
	
  	


	<!-- copy right:超级外卖  www.bijiadao.net-->
</body>
<!-- END BODY -->
</html>