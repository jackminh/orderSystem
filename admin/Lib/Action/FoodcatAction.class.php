<?php
class FoodcatAction extends CommonAction
{
    public function index() {
        $Foodcat = M('Foodcat');
        $foodcatlist = $Foodcat->select();
        
        $this->assign('foodcatlist', $foodcatlist);
        $this->display();
    }
    public function add() {
        $this->display();
    }
    public function addsave() {
        $Foodcat = M('Foodcat');
        $map['fcname'] = $_POST['fcname'];
        $map['fcsort'] = $_POST['fcsort'];
        $map['ctime'] = time();
        if ($map['fcname']) {
            
            $result = $Foodcat->add($map);
            if ($result) {
                $this->redirect('Foodcat/index');
            } 
            else {
                $this->error('新增失败');
            }
        } 
        else {
            $this->error('分类名不可以为空');
        }
    }
    public function edit() {
        $Foodcat = M('Foodcat');
        $map['fcid'] = $_GET['id'];
        $foodcatitem = $Foodcat->where($map)->find();
        
        $this->assign('item', $foodcatitem);
        
        $this->display();
    }
    public function editsave() {
        $Foodcat = M('Foodcat');
        $map['fcid'] = $_POST['fcid'];
        $data['fcname'] = $_POST['fcname'];
        $data['fcsort'] = $_POST['fcsort'];
        $foodedititem = $Foodcat->where($map)->save($data);
        if ($foodedititem) {
            $this->redirect(U('Foodcat/index'));
        } 
        else {
            $this->error('新增失败');
        }
    }
    public function del() {
        $Foodcat = M('Foodcat');
        $map['fcid'] = $_GET['id'];
        $Foodcat->where($map)->delete();
        $this->redirect(U('Foodcat/index'));
    }
}
?>