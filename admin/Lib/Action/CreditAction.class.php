<?php

// 积分管理
/* 积分记录查询 type 0为收1为支出
 *积分商品维护
 *
 *
 *
 *
 *
*/

class CreditAction extends CommonAction
{
    public function index() {
        $Credit = M('Credit');
        import('ORG.Util.Page');
         // 导入分页类
        $count = $Credit->count();
         // 查询满足要求的总记录数
        $Page = new Page($count, 10);
         // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();
         // 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
        $creditlist = $Credit->limit($Page->firstRow . ',' . $Page->listRows)->order('creid desc')->select();
        $this->assign('page', $show);
         // 赋值分页输出
        $this->assign('creditlist', $creditlist);
        $this->display();
    }
    public function indexs() {
        $da = I('id');
        $Credit = M('Credit');
        $map['uid'] = $da;
        import('ORG.Util.Page');
         // 导入分页类
        $count = $Credit->where($map)->count();
         // 查询满足要求的总记录数
        $Page = new Page($count, 20);
         // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();
         // 分页显示输出
        $creditlist = $Credit->where($map)->limit($Page->firstRow . ',' . $Page->listRows)->order('creid desc')->select();
        
        $this->assign('page', $show);
         // 赋值分页输出
        $this->assign('creditlist', $creditlist);
        $this->display();
    }
    public function good() {
        $Creditgood = M('Creditgood');
        import('ORG.Util.Page');
         // 导入分页类
        $count = $Creditgood->count();
         // 查询满足要求的总记录数
        $Page = new Page($count, 10);
         // 实例化分页类 传入总记录数和每页显示的记录数
        $show = $Page->show();
         // 分页显示输出
        $cgoodlist = $Creditgood->limit($Page->firstRow . ',' . $Page->listRows)->order('cgid desc')->select();
        $this->assign('page', $show);
         // 赋值分页输出
        $this->assign('cgoodlist', $cgoodlist);
        $this->display();
    }
    public function add() {
        $this->display();
    }
    
    public function addsave() {
        import('ORG.Net.UploadFile');
        $upload = new UploadFile();
         // 实例化上传类
        $upload->maxSize = 2145728;
         // 设置附件上传大小
        $upload->allowExts = array('jpg');
         // 设置附件上传类型
        $upload->savePath = './uploads/gift/';
         // 设置附件上传目录
        $upload->thumb = true;
        $upload->thumbMaxWidth = '100,220';
        $upload->thumbMaxHeight = '100,220';
        $upload->thumbPrefix = '';
        $upload->thumbSuffix = 's,m';
        $upload->thumbType = 0;
        $upload->autoSub = true;
        $upload->subType = 'date';
        if (!$upload->upload()) {
             // 上传错误提示错误信息
            $this->error($upload->getErrorMsg());
        } 
        else {
             // 上传成功 获取上传文件信息
            $info = $upload->getUploadFileInfo();
        }
        $Creditgood = M('Creditgood');
         // 实例化User对象
        $map['goodname'] = I('goodname');
        if (!$map['goodname']) {
            $this->error('礼品不可以为空');
        }
        $map['goodcontent'] = I('goodcontent');
        $map['credits'] = I('credits');
        $map['count'] = I('count');
        $map['sort'] = I('sort');
        if (!$map['credits']) {
            $this->error('消费积分数量不可以为空');
        }
        if (!$map['count']) {
            $this->error('礼品数量不可以为空');
        }
        $map['goodpic'] = $info[0]["savepath"] . $info[0]['savename'];
        $map['ctime'] = time();
        $result = $Creditgood->add($map);
        if ($result) {
            $this->success('操作成功', U('Credit/good'));
        } 
        else {
            $this->error('操作失败');
        }
    }
    public function edit() {
        $id = trim($_GET['id']);
        if (!$id) {
            $this->error('产品id不可以为空');
        }
        $data['cgid'] = $id;
        $Creditgood = M('Creditgood');
        $prouductitem = $Creditgood->where($data)->find();
        $this->assign('item', $prouductitem);
        $this->display();
    }
    public function editsave() {
        $id = trim($_POST['cgid']);
        if (!$id) {
            $this->error('产品id不可以为空');
        }
         //判定ＩＤ是否为空
        $data["cgid"] = $id;
        if (!$_FILES["pic"]["name"]) {
            $Creditgood = M('Creditgood');
             // 实例化User对象
            $map['goodname'] = I('goodname');
            if (!$map['goodname']) {
                $this->error('礼品不可以为空');
            }
            $map['goodcontent'] = I('goodcontent');
            $map['credits'] = I('credits');
            $map['count'] = I('count');
            $map['sort'] = I('sort');
            if (!$map['credits']) {
                $this->error('消费积分数量不可以为空');
            }
            if (!$map['count']) {
                $this->error('礼品数量不可以为空');
            }
            $map['ctime'] = time();
            $Creditgood->where($data)->save($map);
            $this->redirect(U('Credit/good'));
             //图片为空时处理完成进入产品首页
            
        } 
        else {
            import('ORG.Net.UploadFile');
            $upload = new UploadFile();
             // 实例化上传类
            $upload->maxSize = 2145728;
             // 设置附件上传大小
            $upload->allowExts = array('jpg');
             // 设置附件上传类型
            $upload->savePath = './uploads/gift/';
             // 设置附件上传目录
            $upload->thumb = true;
            $upload->thumbMaxWidth = '100,220';
            $upload->thumbMaxHeight = '100,220';
            $upload->thumbPrefix = '';
            $upload->thumbSuffix = 's,m';
            $upload->thumbType = 0;
            $upload->autoSub = true;
            $upload->subType = 'date';
            if (!$upload->upload()) {
                 // 上传错误提示错误信息
                $this->error($upload->getErrorMsg());
            } 
            else {
                 // 上传成功 获取上传文件信息
                $info = $upload->getUploadFileInfo();
            }
            
            $Creditgood = M('Creditgood');
             // 实例化User对象
            $map['goodname'] = I('goodname');
            if (!$map['goodname']) {
                $this->error('礼品不可以为空');
            }
            $map['goodcontent'] = I('goodcontent');
            $map['credits'] = I('credits');
            $map['count'] = I('count');
            $map['sort'] = I('sort');
            if (!$map['credits']) {
                $this->error('消费积分数量不可以为空');
            }
            if (!$map['count']) {
                $this->error('礼品数量不可以为空');
            }
            $map['goodpic'] = $info[0]["savepath"] . $info[0]['savename'];
            $map['ctime'] = time();
            $Creditgood->where($data)->save($map);
            $this->redirect(U('Credit/good'));
             //图片为空时处理完成进入产品首页
            
        }
        $this->display();
    }
    public function delete() {
        $Creditgood = M('Creditgood');
        $id = trim($_GET['id']);
        if (!$id) {
             //判定是否为空
            $this->error('商品不可以为空');
        } 
        else {
            $data['cgid'] = $id;
            $result = $Creditgood->where($data)->delete();
            if ($result) {
                $this->success('删除成功');
            } 
            else {
                $this->error('删除失败');
            }
        }
    }
}
