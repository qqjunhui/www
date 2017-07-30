<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 18:18
 */
session_start();
if(!isset($_SESSION['user'])){
    $mess="请登录！";
    $src="login.html";
    include "login/index.html";
    exit;
}
header("content-type:text/html;charset=utf8");
$db=new mysqli('localhost','root','','design');
$db->query("set names utf8");
?>