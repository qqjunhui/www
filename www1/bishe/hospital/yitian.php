<?php


session_start();
if(!isset($_SESSION['user'])){
    $mess="请登录！";
    $src="login.html";
    include "login/qyh-index.html";
    exit;
}
header("content-type:text/html;charset=utf8");
$db=new mysqli('localhost','root','','qyqcqs');
$db->query("set names utf8");
$id=$_REQUEST['id'];
$type=$_REQUEST['type'];
$value=$_REQUEST['value'];
$sql="update hospital set $type='$value' WHERE hospital_id=$id";
$db->query("set names utf8");
$result=$db->query($sql);
echo $result;