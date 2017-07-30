<?php
header("Content-Type:text/html;charset=utf8");      //设置头部信息
//isset()检测变量是否设置
$check=$_REQUEST["yzm"];

session_start();

if($check!=$_SESSION['authcode']){
    $mess="验证码不正确，请重新输入";
    $src="login.html";
    include "index.html";
    exit;
};
$user=$_REQUEST['user'];
$pass=$_REQUEST['pass'];
$db=new mysqli('localhost','root','','one');
$sql="select username,pass from user WHERE username='$user'";
$result=$db->query($sql);
$row=$result->fetch_array(MYSQLI_ASSOC);
if ($row){
    if($row['pass']==$pass){
        $_SESSION['user']=$user;
        $mess='登陆成功';
        $src='../html/index.php';
        include('index.html');
    }else{
        $mess='密码错误！';
        $src='login.html';
        include('index.html');
    }
}else{
    $mess='账号不存在！';
    $src='login.html';
    include('index.html');
}
