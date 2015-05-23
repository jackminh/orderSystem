<?php
/*订单处理
0为提交成功，
1商家确认，
2商家出单　
3送货中,
4收货成功　  
5取消订单　
6商家拒绝　  
7等待付款
8退款成功
9付款成功

*货到付款：
在线支付：
*/ 

class OrderAction extends CommonAction {
	 public function index(){
        $Order=M('Foodorder');
		import('ORG.Util.Page');// 导入分页类
        $count      = $Order->count();// 查询满足要求的总记录数
        $Page       = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
        $show       = $Page->show();// 分页显示输出
          // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $orderlist= $Order->limit($Page->firstRow.','.$Page->listRows)->order('oid desc')->select();
		$this->assign('page',$show);// 赋值分页输出
		
		$this->assign('orderlist',$orderlist);
       
      $this->display();
   }
public function detail(){
	   	 $data['oid']=I('id');
	   	  $Order=D('Foodorder');
	  
	  $orderdetail=$Order->where($data)->find();//推荐商铺列表
	 
      $this->assign('odetail',$orderdetail);// 赋值数据集
	   $Orders=M('Foodorderext');
	 $orderextlist=$Orders->where($data)->select();
	  $this->assign('orderextlist',$orderextlist);// 赋值数据集
      $this->assign('oid',$data['oid']);// 赋值数据集
      $this->display();
   }
  
       public function orderone(){
	   		 $data['oid']=I('id');
	   	  $Order=M('Foodorder');
	     $map['orderstatus']=1;
		 $result=$Order->where($data)->save($map);
	     if($result){$this->success('操作成功');//redirect(U(Articlecate/index));
             }else {//错误页面的默认跳转页面是返回前一页，通常不需要设置
                    $this->error('操作失败');}
   } 
 
       public function ordertwo(){
	   		 $data['oid']=I('id');
	   	  $Order=M('Foodorder');
	     $map['orderstatus']=2;
		 $result=$Order->where($data)->save($map);
	     if($result){$this->success('操作成功');//redirect(U(Articlecate/index));
             }else {//错误页面的默认跳转页面是返回前一页，通常不需要设置
                    $this->error('操作失败');}
   } 
       public function orderthree(){
	   		 $data['oid']=I('id');
	   	  $Order=M('Foodorder');
	     $map['orderstatus']=3;
		 $result=$Order->where($data)->save($map);
	     if($result){$this->success('操作成功');//redirect(U(Articlecate/index));
             }else {//错误页面的默认跳转页面是返回前一页，通常不需要设置
                    $this->error('操作失败');}
   } 
       public function orderfour(){
	   		 $data['oid']=I('id');
	   	  $Order=M('Foodorder');
	     $map['orderstatus']=4;
		 $result=$Order->where($data)->save($map);
	     if($result){
			$oitem=$Order->where($data)->find();
			$Credit=M('Credit');
			$datas['typename']='消费累积：订单号'.$oitem['oid'];
	  $datas['type']=1;
	  $datas['uid']=$oitem['uid'];
	 

	  $datas['crecount']=floor($oitem['orderprice']);
	  $datas['ctime']=time();
	  $datas['ip']=get_client_ip();
	  $Credit->add($datas);
		 $this->success('操作成功');//redirect(U(Articlecate/index));
             }else {//错误页面的默认跳转页面是返回前一页，通常不需要设置
                    $this->error('操作失败');}
   } 

       public function orderfive(){
	   		 $data['oid']=I('id');
	   	  $Order=M('Foodorder');
	     $map['orderstatus']=5;
		 $result=$Order->where($data)->save($map);
	     if($result){$this->success('操作成功');//redirect(U(Articlecate/index));
             }else {//错误页面的默认跳转页面是返回前一页，通常不需要设置
                    $this->error('操作失败');}
   } 
       public function ordersix(){
	   		 $data['oid']=I('id');
	   	  $Order=M('Foodorder');
	     $map['orderstatus']=6;
		 $result=$Order->where($data)->save($map);
	     if($result){$this->success('操作成功');//redirect(U(Articlecate/index));
             }else {//错误页面的默认跳转页面是返回前一页，通常不需要设置
                    $this->error('操作失败');}
   } 
       public function delete(){
	   		 $data['oid']=I('id');
	   	  $Order=M('Foodorder');
	    
		 $result=$Order->where($data)->delete();
	     if($result){$this->success('操作成功');//redirect(U(Articlecate/index));
             }else {//错误页面的默认跳转页面是返回前一页，通常不需要设置
                    $this->error('操作失败');}
   } 

}