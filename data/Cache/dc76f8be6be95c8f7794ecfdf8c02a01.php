<?php if (!defined('THINK_PATH')) exit();?><form class="form-horizontal" role="form1" method="post" action="<?php echo U('Address/save/');?>">
  	
<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">增加地址</h4>
      </div>
      <div class="modal-body">
       

   <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">收餐人：</div>
    <div class="col-sm-6">
	
	<input type="text" class="form-control" name="name" placeholder="请输入收餐人姓名" datatype="*"  sucmsg="" nullmsg="请输入收货人姓名！" errormsg="" >
	



	

      
    </div>
	 <div class="col-sm-4 col-xs-12"><div class="Validform_checktip "></div></div>
  </div>
  
  	   <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">手机号：</div>
    <div class="col-sm-6">
	
	<input type="text" class="form-control" name="tel" placeholder="请输入手机号" datatype="*"  sucmsg="" nullmsg="请输入手机号！" errormsg="" >
	



	

      
    </div>
	 <div class="col-sm-4 col-xs-12"><div class="Validform_checktip "></div></div>
  </div>
  
  	   <div class="form-group fps">
    <div for="inputEmail3" class="col-sm-2 control-label">地址：</div>
    <div class="col-sm-6">
	
	<input type="text" class="form-control" name="address" placeholder="地址" datatype="*"  sucmsg="" nullmsg="请输入地址！" errormsg="" >
	



	

      
    </div>
	 <div class="col-sm-4 col-xs-12"><div class="Validform_checktip "></div></div>
  </div>
  
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"name="istop" value="1"> 默认地址
        </label>
      </div>
    </div>
  </div>



      </div>
      <div class="modal-footer">
       <button type="submit" class="btn btn-primary">保存地址</button>
      </div>
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  
   	<script src="__ROOT__/Public/js/Validform_v5.3.2_min.js"></script> 
	
<script >
	$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
		
	$(".form-horizontal").Validform({
		tiptype:2
	});
})

	
</script>