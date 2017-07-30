<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 23:18
 */
include_once "public.php";
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$dizhi=$_REQUEST['dizhi'];
$sql="insert into mange (user,pass,names,phone,email,hospital) VALUES ('$user','$pass','$name','$phone','$email','$dizhi')";
$result=$db->query($sql);
if ($result) {
    $mess = "添加成功";
} else {
    $mess = "添加失败";
}
$src = "add.php";
include_once "login/index.html";