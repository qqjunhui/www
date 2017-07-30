<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/17
 * Time: 15:16
 */
class index{
    function aa(){
        echo 'ok';
    }
    function submit(){
        echo "我是提交";
    }
    function init(){
        $smarty = new Smarty();
        $smarty->setTemplateDir(ROOT_PATH.'template/');
        $smarty->setCompileDir(ROOT_PATH.'com/');
        $smarty->assign('name','Ned');
        $smarty->display('qyh-index.html');
    }

}