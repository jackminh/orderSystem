<?php if (!defined('THINK_PATH')) exit();?><div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">积分兑换</h4>
      </div>
      <div class="modal-body">
       


<form class="form-horizontal" role="form" action="<?php echo U('Gift/addsave/');?>" method="post">
 <p align="center"><img alt="<?php echo ($gitem["goodname"]); ?>" width="200px" height="200px" src="<?php echo ($gitem["goodpic"]); ?>"></p>
<br>商品名称：<?php echo ($gitem["goodname"]); ?><br>
所需积分：<span style="color:#FF7700;font-weight:600;font-size:14px" ><?php echo ($gitem["credits"]); ?></span><br>
当前积分数：<span style="color:#FF7700;font-weight:600;font-size:14px" ><?php echo ($usercredit); ?></span><br>
<div style="width:200px;">
 <?php if(($usercredit) >= $gitem['credits']): ?><input type="hidden" class="form-control" name="cgid"  value="<?php echo ($gitem["cgid"]); ?>">
<input type="hidden" class="form-control" name="goodname"  value="<?php echo ($gitem["goodname"]); ?>">
<input type="hidden" class="form-control" name="credit" value="<?php echo ($gitem["credits"]); ?>">
<input type="hidden" class="form-control" name="usercredit" value="<?php echo ($usercredit); ?>" > 
<p> 联系人： <input type="text" class="form-control" name="man" value="" > </p> 
 <p> 电话： <input type="text" class="form-control" name="tel" value="" > </p> 

<p> 地址：<input type="text" class="form-control" name="address" value="" > </p> 


  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">兑换</button>
    </div>
  </div>
 
 
 <?php else: ?>
 您的积分不足<?php endif; ?>
</div>

      </div>
  
	  </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
  
   	<script src="__ROOT__/Public/js/Validform_v5.3.2_min.js"></script>