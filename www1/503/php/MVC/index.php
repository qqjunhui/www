<?php
//session_start();
header("content-type:text/html;charset=utf-8");
define("MVC","yes");
/*
 * include 只支持文件路径  服务器路径
 * */
include "libs/function.php";
$server=$_SERVER;
define("ROOT_PATH",$server["DOCUMENT_ROOT"]);
//var_dump($server);

//e(ROOT_PATH);
//功能文件目录
define("APP_PATH",ROOT_PATH."503/php/MVC/");
define("LIBS_PATH",APP_PATH."libs/");
define("MODULE_PATH",APP_PATH."module/");
define("TPL_PATH",APP_PATH."template/");
//e(MODULE_PATH);
//服务器目录
$prot=substr($server["SERVER_PROTOCOL"],0,strrpos($server["SERVER_PROTOCOL"],"/"));
$path=substr($server["SCRIPT_NAME"],0,strrpos($server["SCRIPT_NAME"],"/"));
define("URL_PATH",$prot."://".$server["HTTP_HOST"].$path."/");
//e(URL_PATH);
//静态目录
define("STATIC_PATH",URL_PATH."static/");
define("CSS_PATH",STATIC_PATH."css/");
define("JS_PATH",STATIC_PATH."js/");
define("IMG_PATH",STATIC_PATH."img/");
//echo STATIC_PATH;


$config=include_once APP_PATH."config.php";
include_once LIBS_PATH."main.class.php";
include_once LIBS_PATH."route.class.php";
include_once LIBS_PATH."db.class.php";
include_once LIBS_PATH."smarty/Smarty.class.php";
include_once LIBS_PATH."code.class.php";
include_once LIBS_PATH."session.class.php";
include_once MODULE_PATH."admin/login.class.php";
$obj=new route();
$obj->getInfo();