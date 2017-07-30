<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/17
 * Time: 11:33
 */
header("Content-type:text/html;charset=utf-8");
//echo "<pre>";
//var_dump($_SERVER);
//项目运行的根目录  为了应用文件
define("MVC","OK");
define("ROOT_PATH",substr($_SERVER['SCRIPT_FILENAME'],0,(strrpos($_SERVER['SCRIPT_FILENAME'],"/")+1)));
//引擎文件
define("LIBS_PATH",ROOT_PATH."libs/");
//模块文件
define("MODULE_PATH",ROOT_PATH."modules/");
//echo MODULE_PATH;
//服务器的根目录
define("SERVER_PATH","http://".$_SERVER['HTTP_HOST']."/".substr($_SERVER['REQUEST_URI'],0,(strrpos($_SERVER['REQUEST_URI'],"/")+1)));
//当前运行的文件
define("FILE_PATH","http://".$_SERVER['SCRIPT_NAME']);
//静态目录
define("STATIC_PATH","http://"."static/");
define("CSS_PATH",STATIC_PATH."css/");
define("JS_PATH",STATIC_PATH."js/");
define("IMG_PATH",STATIC_PATH."img/");
include_once('libs/smarty/Smarty.class.php');
include_once LIBS_PATH."route.class.php";
include_once LIBS_PATH."db.class.php";
$obj=new db('goods');
include_once LIBS_PATH."adminmain.class.php";
session_start();
$obj=new route();
$obj->init();

