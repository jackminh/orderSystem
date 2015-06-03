<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html><!--[if IE 8]><html lang="en" class="ie8 no-js"><![endif]--><!--[if IE 9]><html lang="en" class="ie9 no-js"><![endif]--><!--[if !IE]><!--><html lang="en" class="no-js"><!--<![endif]--><!-- BEGIN HEAD --><head><meta charset="utf-8" /><title><?php echo ($webtitle); ?>－管理后台</title><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta content="width=device-width, initial-scale=1.0" name="viewport" /><meta content="" name="description" /><meta content="" name="author" /><meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Bootstrap --><!-- BEGIN GLOBAL MANDATORY STYLES --><link href="__ROOT__/Public/css/bootstrap.min.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/Public/css/admin.css" rel="stylesheet" type="text/css"/><link href="__ROOT__/Public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/><!-- END GLOBAL MANDATORY STYLES --><!-- BEGIN THEME STYLES --><!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --><!-- WARNING: Respond.js doesn't work if you view the page via file:// --><!--[if lt IE 9]><script src="__ROOT__/Public/js/html5shiv.min.js"></script><script src="__ROOT__/Public/js/respond.min.js"></script><![endif]--><!-- END THEME STYLES --></head><!-- BEGIN BODY --><body><!-- BEGIN nav --><!-- BEGIN nav --><div role="navigation" class="navbar  navbar-default navbar-fixed-top"><div class=" container" ><div class="navbar-header"><button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a href="/" class="navbar-brand"><i class="fa fa-cloud"></i> 超级外卖</a></div><p class="navbar-text" style="color:#FFF;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><div class="navbar-collapse collapse"><ul class="nav navbar-nav"><li class="nli"><a href="<?php echo U('Config/index/');?>" ><i class="fa fa-cog"></i> 基本设置</a></li><li class="nli"><a href="<?php echo U('Foodcat/index/');?>"><i class="fa fa-th"></i> 商品</a></li><li class="nli"><a href="<?php echo U('Order/index/');?>"><i class="fa fa-shopping-cart"></i> 订单</a></li><li class="nli"><a href="<?php echo U('Credit/index/');?>"><i class="fa fa-leaf"></i> 积分</a></li><li class="nli"><a href="<?php echo U('Member/index/');?>"><i class="fa fa-user"></i> 会员</a></li><li class="nli"><a href="<?php echo U('Message/index/');?>"><i class="fa fa-rss-square"></i>留言</a></li><li class="nli"><a href="<?php echo U('Article/index/');?>"><i class="fa fa-user"></i> 文章</a></li><li class="nli"><a href="#"><i class="fa fa-comments"></i> 微信</a></li></ul><ul class="nav navbar-nav navbar-right"><li><a href="<?php echo U('Config/unrunfile/');?>"> 清除缓存</a></li><li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">更多 <b class="caret"></b></a><ul class="dropdown-menu"><li><a href="<?php echo U('Public/logout/');?>">退出</a></li><li><a href="<?php echo U('Dbak/index/');?>">数据库备份</a></li><li><a href="<?php echo U('Link/aindex/');?>">幻灯片</a></li><li><a href="<?php echo U('Link/index/');?>">友情链接</a></li></ul></li></ul></div><!--/.nav-collapse --></div></div><!-- end nav --><!-- begin container --><!-- end nav --><!-- begin container --><div class=" container " style="margin-top:60px"><div class="row"><div class=" col-lg-2 col-md-2 col-xs-12"><ul class="list-group list-unstyled"><li class=""><a href="<?php echo U('Articlecate/index/');?>" class="list-group-item active"><i class="fa fa-calendar"></i> 文章模块</a></li><?php if(is_array($leftlist)): $i = 0; $__LIST__ = $leftlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class=""><a href="<?php echo U('Article/alist/','id='.$vo['acid']);?>" class="list-group-item"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["aname"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?><li class=""><a href="<?php echo U('Page/index/');?>" class="list-group-item active"><i class="fa fa-list-ul"></i> 单页模块 </a></li><?php if(is_array($pageslist)): $i = 0; $__LIST__ = $pageslist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class=""><a href="<?php echo U('Page/edit/','id='.$vo['pagid']);?>" class="list-group-item"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($vo["page_title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?></ul></div><div class="col-lg-10 col-md-10 col-xs-12" style="background-color: #FFF;"><!-- begin tab --><ul class="nav nav-tabs " ><li ><a href="<?php echo U('Articlecate/index/');?>" ><b>文章分类</b></a></li><li class="active"><a href="<?php echo U('Articlecate/add/');?>" ><b>分类增加</b></a></li><li ><a href="<?php echo U('Article/index/');?>" ><b>文章管理</b></a></li><li ><a href="<?php echo U('Article/add/');?>" ><b>文章增加</b></a></li></ul><p></P><div class="row"><div class="col-lg-2 col-md-2 col-xs-2" ></div><div class="col-lg-6 col-md-6 col-xs-6" ><span class="help-block"></span></div><div class="col-lg-4 col-md-4 col-xs-4" ></div></div><!-- end 添加 --><p></P><form class="form-horizontal" role="form" enctype="multipart/form-data"  method="post" action="__APP__/<?php echo (MODULE_NAME); ?>/addsave"><div class="form-group"><label for="inputEmail3" class="col-sm-2 control-label">分类名称</label><div class="col-sm-4"><input type="text" class="form-control" id="inputEmail3" name="aname"  placeholder=""></div><div class="col-sm-6"><span class="help-block"><i class="fa fa-exclamation"></i> 输入分类名称</span></span></div></div><div class="form-group"><label for="inputPassword3" class="col-sm-2 control-label">分类</label><div class="col-sm-4"><select class="form-control" name="afid"><option value="0">顶级分类</option><?php if(is_array($clist)): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["acid"]); ?>"><?php echo ($vo["cname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></div><div class="col-sm-6"><span class="help-block"><i class="fa fa-exclamation"></i> 选择所属父类,建议不要超过二级</span></div></div><div class="form-group"><label for="inputEmail8" class="col-sm-2 control-label">列表图片</label><div class="col-sm-4"><input type="file"  name="pic" id="exampleInputFile"></div><div class="col-sm-6"><span class="help-block"><i class="fa fa-exclamation"></i> 仅支持jpg,可不设置，建议设置图片大小640*480,</span></div></div><div class="form-group"><label for="inputPassword3" class="col-sm-2 control-label">排序</label><div class="col-sm-2"><input type="text" class="form-control" name="sort" value="0" placeholder=""></div><div class="col-sm-8"><span class="help-block"><i class="fa fa-exclamation"></i>值为0-99，值越大，越靠前</span></div></div><hr><div class="form-group"><label for="inputPassword3" class="col-sm-4 control-label"></label><div class="col-sm-2"><button type="sumbit" class="btn btn-primary">保存</button></div><div class="col-sm-6"><span class="help-block"></div></div></form></div><!-- col end --></div><!-- end row --></div><!-- end container --><!-- END FOOTER --><!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) --><!-- BEGIN CORE PLUGINS --><script src="__ROOT__/Public/js/jquery.js"></script><script src="__ROOT__/Public/js/bootstrap.min.js"></script><script >	$('#myModal').on('hidden.bs.modal', function (e) {
	location.reload()

})
$('#ajax').on('hidden.bs.modal', function (e) {
	location.reload()

})






</script><!-- END CORE PLUGINS --><!-- END JAVASCRIPTS --></body><!-- END BODY --></html>