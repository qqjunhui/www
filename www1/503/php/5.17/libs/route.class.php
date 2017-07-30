<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/17
 * Time: 15:00
 */

if(!defined("MVC")){
    echo "非法入侵！";
    exit();
}
class route{
    private static $dir="";
    private static $file="";
    private static $action="";

    public function init(){
        $this->getInfo();
    }

    private function getInfo(){
        self::$dir=isset($_REQUEST['d'])&&!empty($_REQUEST['d'])?$_REQUEST['d']:"index";
        self::$file=isset($_REQUEST['f'])&&!empty($_REQUEST['f'])?$_REQUEST['f']:'index';
        self::$action=isset($_REQUEST['a'])&&!empty($_REQUEST['a'])?$_REQUEST['a']:'aa';
        $fulldir=MODULE_PATH.self::$dir;
//        var_dump(is_dir($fulldir));
        if(is_dir($fulldir)){
            $fullfile=$fulldir."/".self::$file.".class.php";
//            var_dump(is_file($fullfile));
            if(is_file($fullfile)){
                include $fullfile;
                if(class_exists(self::$file,false)){
                    $obj=new self::$file;
                    if(method_exists($obj,self::$action)){
                        $method=self::$action;
                        $obj->$method();
                    }else{
                        echo "方法不存在";
                    }
                }else{
                    echo self::$action."类不存在";
                }
            }else{
                echo $fullfile."文件不存在";
            }
        }else{
            echo $fulldir."这个文件夹不存在";
        }
    }

}