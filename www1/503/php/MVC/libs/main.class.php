<?php
/**
 * Created by PhpStorm.
 * User: 康康
 * Date: 2017/6/27
 * Time: 9:42
 */
class main{
    function __construct(){
        $smarty=new Smarty();
        $smarty->setCompileDir("compile");
        $smarty->setTemplateDir("template");
        $this->smarty=$smarty;
        $session=new session();
        $this->session=$session;
    }
    function jump($message,$url){
        echo "<script>alert('{$message}');location.href='{$url}'</script>";
    }
}