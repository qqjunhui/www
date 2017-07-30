<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/8
 * Time: 19:43
 */
session_start();

$user=$_REQUEST["user"];
$pass=$_REQUEST["pass"];
$db=new mysqli("localhost","root","","one");
$sql="select username from user WHERE username='$user'";
$result=$db->query($sql);
if($result){
    $mess="用户名已存在";
    $src="zhuce.html";
    include "index.html";
    exit;
}

$sql="insert into user (username,pass) VALUES ('$user','$pass')";
$result=$db->query($sql);
if($result){
    $mess="注册成功";
    $src="login.html";
    include "index.html";
}else{
    $mess="注册失败";
    $src="login.html";
    include "index.html";
}
