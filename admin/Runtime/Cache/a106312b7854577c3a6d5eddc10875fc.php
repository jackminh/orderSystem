<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8 no-js"><![endif]--><!--[if IE 9]><html lang="en" class="ie9 no-js"><![endif]--><!--[if !IE]><!--><html lang="en" class="no-js"><!--<![endif]--><!-- BEGIN HEAD --><head><meta charset="utf-8" /><title><?php echo ($webtitle); ?>－管理后台</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1.0" name="viewport" /><meta content="" name="description" /><meta content="" name="author" /><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Bootstrap --><!-- BEGIN GLOBAL MANDATORY STYLES --><link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/Public/css/admin.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/><!-- END GLOBAL MANDATORY STYLES --><!-- BEGIN THEME STYLES --><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]><script src="__ROOT__/Public/js/html5shiv.min.js"></script><script src="__ROOT__/Public/js/respond.min.js"></script><![endif]--><!-- END THEME STYLES --><script src="__ROOT__/Public/js/jquery.js"></script><script src="__ROOT__/Public/js/bootstrap.min.js"></script><script src="__ROOT__/Public/js/sco.ajax.js"></script><link href="__ROOT__/Public/css/print.css" rel="stylesheet" type="text/css"/><script src="__ROOT__/Public/js/jquery-1.4.4.min.js" type="text/javascript"></script><script src="__ROOT__/Public/js/jquery.printPage.js" type="text/javascript"></script><script type="text/javascript">  $(document).ready(function() {
    $(".btnrint").printPage();
  });
</script></head><!-- BEGIN BODY --><body><!-- BEGIN nav --><!-- BEGIN nav --><div role="navigation" class="navbar  navbar-default navbar-fixed-top"><div class=" container" ><div class="navbar-header"><button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand"><i class="fa fa-cloud"></i> 超级外卖</a></div><p class="navbar-text" style="color:#FFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><div class="navbar-collapse collapse"><ul class="nav navbar-nav"><li class="nli"><a href="<?php echo U('Config/index/');?>" ><i class="fa fa-cog"></i> 基本设置</a></li><li class="nli"><a href="<?php echo U('Foodcat/index/');?>"><i class="fa fa-th"></i> 商品</a></li><li class="nli"><a href="<?php echo U('Order/index/');?>"><i class="fa fa-shopping-cart"></i> 订单</a></li><li class="nli"><a href="<?php echo U('Credit/index/');?>"><i class="fa fa-leaf"></i> 积分</a></li><li class="nli"><a href="<?php echo U('Member/index/');?>"><i class="fa fa-user"></i> 会员</a></li><li class="nli"><a href="<?php echo U('Message/index/');?>"><i class="fa fa-rss-square"></i>留言</a></li><li class="nli"><a href="<?php echo U('Article/index/');?>"><i class="fa fa-user"></i> 文章</a></li><li class="nli"><a href="#"><i class="fa fa-comments"></i> 微信</a></li></ul><ul class="nav navbar-nav navbar-right"><li><a href="<?php echo U('Config/unrunfile/');?>"> 清除缓存</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo U('Public/logout/');?>">退出</a></li><li><a href="<?php echo U('Dbak/index/');?>">数据库备份</a></li><li><a href="<?php echo U('Link/aindex/');?>">幻灯片</a></li><li><a href="<?php echo U('Link/index/');?>">友情链接</a></li></ul></li></ul></div><!--/.nav-collapse --></div></div><!-- end nav --><!-- begin container --><!-- end nav --><!-- begin container --><div class=" container " style="margin-top:60px"><div class="row"><div class="col-lg-12 col-md-12 col-xs-12" style="background-color: #FFF;"><!-- begin tab --><ul class="nav nav-tabs " ><li class="active"><a href="<?php echo U('Order/index/');?>" ><b>订单列表</b></a></li></ul><p></P><div class="row"><div class="col-lg-10 col-md-10 col-xs-12" ><form class="form-inline" role="form" method="post" action="<?php echo U('Member/indexs/');?>"><div class="form-group"><label class="sr-only" for="exampleInputPassword2"></label><input type="text" class="form-control" name="id" placeholder=""></div><button type="submit" class="btn default">查找</button></form></div><div class="col-lg-4 col-md-4 col-xs-12" ><span class="help-block">输入订单号，用户名</span></div></div><!-- end 添加 --><p><span class="help-block">订单流程：订单提交－商家确认订单是否有效－商家出单进行配货－商家送货中－送货完成</span></P><table class="table table-striped table-bordered table-hover"><thead><thead><tr><th>订单号</th><th>用户名/微信号</th><th>手机号</th><th>下单时间</th><th>订单金额</th><th>结束时间</th><th>订单状态</th><th>操作</th></tr></thead><tbody><?php if(is_array($orderlist)): $i = 0; $__LIST__ = $orderlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr><td><?php echo ($vo["oid"]); ?></td><td><?php echo ($vo["uname"]); ?>/<?php if(empty($vo["gid"])): else: ?><i class="fa fa-comments" style="color:green;"></i><?php endif; ?></td><td><?php echo ($vo["tel"]); ?></td><td><?php echo (date("Y-m-d H:i",$vo["order_ctime"])); ?></td><td><?php echo ($vo["orderprice"]); ?></td><td><?php if(empty($vo["order_endtime"])): else: echo (date("Y-m-d H:i",$vo["order_endtime"])); endif; ?></td><td><span style="color:#428BCA;font-size:10px;"><?php switch($vo["orderstatus"]): case "0": ?>订单提交<?php break; case "1": ?>已确认<?php break; case "2": ?>已出单<?php break; case "3": ?>送货中<?php break; case "4": ?>收货完成<?php break; case "5": ?>取消订单<?php break; case "6": ?>无效订单<?php break; default: ?>默认情况<?php endswitch;?></span></td><td><a class="btn btn-default btn-xs" href="<?php echo U('Order/detail/','id='.$vo['oid']);?>" > 查看</a><?php switch($vo["orderstatus"]): case "0": ?><a class="btn btn-primary btn-xs" href="<?php echo U('Order/orderone/','id='.$vo['oid']);?>" >确认</a><a class="btn btn-default btn-xs" href="<?php echo U('Order/ordersix/','id='.$vo['oid']);?>" >无效</a><a class="btn btn-default btn-xs" href="<?php echo U('Order/delete/','id='.$vo['oid']);?>" >删除</a><?php break; case "1": ?><a class="btn btn-primary btn-xs" href="<?php echo U('Order/ordertwo/','id='.$vo['oid']);?>" >出单</a><a class="btn btn-default btn-xs btnrint" href="<?php echo U('Order/delete/','id='.$vo['oid']);?>" >打印</a><a class="btn btn-default btn-xs" href="<?php echo U('Order/delete/','id='.$vo['oid']);?>" >删除</a><?php break; case "2": ?><a class="btn btn-primary btn-xs" href="<?php echo U('Order/orderthree/','id='.$vo['oid']);?>" >送货</a><a class="btn btn-default btn-xs btnrint" href="<?php echo U('Order/delete/','id='.$vo['oid']);?>" >打印</a><a class="btn btn-default btn-xs" href="<?php echo U('Order/delete/','id='.$vo['oid']);?>" >删除</a><?php break; case "3": ?><a class="btn btn-primary btn-xs" href="<?php echo U('Order/orderfour/','id='.$vo['oid']);?>" >完成</a><a class="btn btn-default btn-xs" href="<?php echo U('Order/delete/','id='.$vo['oid']);?>" >删除</a><?php break; case "4": break; case "5": break; case "6": break; default: ?>默认情况<?php endswitch;?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></tbody></table><ul class="pagination"><?php echo ($page); ?></ul></div><!-- tab1 --></div><!-- col end --></div><!-- end row --></div><!-- end container --><!-- /.modal --><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --></body><!-- END BODY --></html>