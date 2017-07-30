<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/22
 * Time: 9:19
 */
class adminmain{
    public function __construct(){
        $smarty = new Smarty();
        $smarty->setTemplateDir('template');
        $smarty->setCompileDir('com');
        $this->smarty=$smarty;
    }
}