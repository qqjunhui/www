<?php
class index extends main {
    function init(){
        $obj=new db("category");
        $result=$obj->select();
        $this->smarty->assign("result",$result);
        $this->smarty->display("index/index.html");
    }
    function del(){
        echo "删除";
    }

    function login(){
        $this->smarty->display("login.html");
    }
}