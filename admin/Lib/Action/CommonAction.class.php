<?php


class CommonAction extends Action
{
    function _initialize() {
        
        import('ORG.Net.UploadFile');
        import("ORG.Util.Category");
        $this->assign('webtitle', C('web_title'));
        if (!$_SESSION['admin_key']) {
            $this->redirect(U('Public/login'));
        }
        
        $Articlecat = M('Article_cat');
        $leftlist = $Articlecat->limit(4)->order('acid desc')->select();
        $this->assign('leftlist', $leftlist);
        $Pages = M('Pages');
        $pageslist = $Pages->limit(7)->order('pagid desc')->select();
        
        $this->assign('pageslist', $pageslist);
    }
}
