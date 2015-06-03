<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8 no-js"><![endif]--><!--[if IE 9]><html lang="en" class="ie9 no-js"><![endif]--><!--[if !IE]><!--><html lang="en" class="no-js"><!--<![endif]--><!-- BEGIN HEAD --><head><meta charset="utf-8" /><title><?php echo ($webtitle); ?>－管理后台</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1.0" name="viewport" /><meta content="" name="description" /><meta content="" name="author" /><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Bootstrap --><!-- BEGIN GLOBAL MANDATORY STYLES --><link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/Public/css/admin.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/><!-- END GLOBAL MANDATORY STYLES --><!-- BEGIN THEME STYLES --><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]><script src="__ROOT__/Public/js/html5shiv.min.js"></script><script src="__ROOT__/Public/js/respond.min.js"></script><![endif]--><!-- END THEME STYLES --></head><!-- BEGIN BODY --><body><!-- BEGIN nav --><!-- BEGIN nav --><div role="navigation" class="navbar  navbar-default navbar-fixed-top"><div class=" container" ><div class="navbar-header"><button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand"><i class="fa fa-cloud"></i> 超级外卖</a></div><p class="navbar-text" style="color:#FFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><div class="navbar-collapse collapse"><ul class="nav navbar-nav"><li class="nli"><a href="<?php echo U('Config/index/');?>" ><i class="fa fa-cog"></i> 基本设置</a></li><li class="nli"><a href="<?php echo U('Foodcat/index/');?>"><i class="fa fa-th"></i> 商品</a></li><li class="nli"><a href="<?php echo U('Order/index/');?>"><i class="fa fa-shopping-cart"></i> 订单</a></li><li class="nli"><a href="<?php echo U('Credit/index/');?>"><i class="fa fa-leaf"></i> 积分</a></li><li class="nli"><a href="<?php echo U('Member/index/');?>"><i class="fa fa-user"></i> 会员</a></li><li class="nli"><a href="<?php echo U('Message/index/');?>"><i class="fa fa-rss-square"></i>留言</a></li><li class="nli"><a href="<?php echo U('Article/index/');?>"><i class="fa fa-user"></i> 文章</a></li><li class="nli"><a href="#"><i class="fa fa-comments"></i> 微信</a></li></ul><ul class="nav navbar-nav navbar-right"><li><a href="<?php echo U('Config/unrunfile/');?>"> 清除缓存</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo U('Public/logout/');?>">退出</a></li><li><a href="<?php echo U('Dbak/index/');?>">数据库备份</a></li><li><a href="<?php echo U('Link/aindex/');?>">幻灯片</a></li><li><a href="<?php echo U('Link/index/');?>">友情链接</a></li></ul></li></ul></div><!--/.nav-collapse --></div></div><!-- end nav --><!-- begin container --><!-- end nav --><!-- begin container --><div class=" container " style="margin-top:60px"><div class="row"><div class="col-lg-12 col-md-12 col-xs-12" style="background-color: #FFF;"><!-- begin tab --><ul class="nav nav-tabs " ><li ><a href="<?php echo U('Credit/index/');?>" ><b>兑换记录</b></a></li><li ><a href="<?php echo U('Credit/good/');?>" ><b>礼品管理</b></a></li><li class="active"><a href="<?php echo U('Credit/add/');?>" ><b>礼品增加</b></a></li></ul><p></P><div class="row"><div class="col-lg-2 col-md-2 col-xs-2" ></div><div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block"></span></div><div class="col-lg-4 col-md-4 col-xs-4" ></div></div><p></P><form class="form-horizontal"role="form" enctype="multipart/form-data" action="<?php echo U('Credit/addsave/');?>" method="post"><div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">礼品名称</label><div class="col-sm-4"><input type="text" class="form-control" id="inputEmail3" name="goodname" value=""></div><div class="col-sm-6"><span class="help-block"><i class="fa fa-exclamation"></i></span></div></div><div class="form-group"><label for="inputEmail6" class="col-sm-2 control-label">消费积分</label><div class="col-sm-2"><input type="text" class="form-control" id="inputEmail6" name="credits" value=""></div><div class="col-sm-8"><span class="help-block">兑换此礼品消费积分数量</span></div></div><div class="form-group"><label for="inputEmail10" class="col-sm-2 control-label">数量</label><div class="col-sm-2"><input type="text" class="form-control" id="inputEmail10" name="count" value=""></div><div class="col-sm-8"><span class="help-block"></span></div></div><div class="form-group"><label for="inputEmail8" class="col-sm-2 control-label">图片</label><div class="col-sm-4"><input type="file" name="pic" id="exampleInputFile"></div><div class="col-sm-6"><span class="help-block"> 请选择上传图片,仅支持jpg格式</span></div></div><!-- end 
    <div class="form-group"><label for="inputEmail9" class="col-sm-2 control-label">产品相册</label><div class="col-sm-4"></div><div class="col-sm-6"><span class="help-block"></span></div></div>添加 --><div class="form-group"><label for="inputEmail10" class="col-sm-2 control-label">备注</label><div class="col-sm-4"><textarea class="form-control" rows="3" name="goodcontent"></textarea></div><div class="col-sm-6"><span class="help-block"></span></div></div><div class="modal-footer"><button type="button" class="btn btn-default" data-dismiss="modal">取消</button><button type="sumbit" class="btn btn-primary">保存</button></div></div></form></div><!-- col end --></div><!-- end row --></div><!-- end container --><!-- /.modal --><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><!-- 配置文件 --><script src="__ROOT__/Public/js/jquery.js"></script><script src="__ROOT__/Public/js/bootstrap.min.js"></script><script >	$('#myModal').on('hidden.bs.modal', function (e) {
	location.reload()

})
$('#ajax').on('hidden.bs.modal', function (e) {
	location.reload()

})


function delcfm() {
if (!confirm("确认要删除？")) {
window.event.returnValue = false;
}
}




</script><!-- END CORE PLUGINS --><!-- END JAVASCRIPTS --></body><!-- END BODY --></html>