<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["memberlogin"])){
    echo "<script> alert('请登陆'); location.href='login.php' </script>";
    exit();
}

$mid=$_SESSION["mid"];
$name=$_POST["lid"];
include "../libs/db.php";
$sql="select lid from cang WHERE lid=$name";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if($row){
    echo "已收藏，不能重复收藏！";
    exit();
}
$sql="insert into cang (mid,lid) VALUES ($mid,$name)";
$result=$db->query($sql);
if($result){
    echo "收藏成功!";
}else{
    echo "收藏失败！";
}