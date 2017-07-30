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
$db=new mysqli('localhost','root','','qyqcqs');
$db->query("set names utf8");
?>
<style>
    body,html{
        background: #fff;

    }
    *{
        margin:0;
        padding:0;
        initial-letter: 0;
        color:#333;
    }
    td > a{
        text-decoration: none;
        height:50px;
        border-right:5px;
        background: #00CA79;
        display: block;
        margin:0;
        text-align: center;
        line-height: 50px;
        font-weight:bold;
        color:#fff;
    }
    .page-head-line {
        font-size: 30px;
        text-transform: uppercase;
        color: #000;
        font-weight: 800;
        padding-bottom: 20px;
        border-bottom: 2px solid #00CA79;
        margin-bottom: 10px;
        margin-left: 20px;
        margin-top: 20px;
    }

    .page-subhead-line {
        font-size: 14px;
        padding-top: 5px;
        padding-bottom: 20px;
        font-style:italic;
        margin-bottom:30px;
        border-bottom:1px dashed #00CA79;
        margin-left: 20px;
    }
</style>

