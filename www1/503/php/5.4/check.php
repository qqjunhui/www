<?php
$name=$_GET['user'];
$pass=$_GET['pass'];
$db=new mysqli('localhost','root','','user');
$sql="select * from admin WHERE zh='$name'";
$end=mysqli_query($db,$sql);
var_dump($end);
$row=mysqli_fetch_array($end);
var_dump($row);
if($row){
    if($row['mm']===$pass){
        $mess='登录成功';
        $src='main.php';
        setcookie('zh',$name);
        setcookie('mm',$pass);
        include "index.html";
    }else{
        $mess='登录失败,密码错误！！';
        $src='login.html';
        include "index.html";
    }
}else{
    $mess='登录失败，账号不存在！！';
    $src='login.html';
    include 'index.html';
}