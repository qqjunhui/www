<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/16
 * Time: 18:08
 */
session_start();
header("content-type:text/html;charset=utf-8");
if(isset($_SESSION["agian"])){
    echo "<script>location.href='index.php'</script>";
    exit();
}
$check=$_REQUEST["yzm"];
if($check!=$_SESSION['authcode']){
    echo "<script>alert('验证码不正确！'); location.href='login.php'</script>";
    exit();
};
include_once "../admin/public1.php";
include_once "../libs/public.php";
$unum=$_POST['account'];
$pass=$_POST['password'];
//echo $unum,$pass;
$arr=select($db);
foreach ($arr as $v){
    if($v["unum"]==$unum){
        if($v["pass"]==md5($pass)){
            $_SESSION["memberlogin"]="yes";
            $_SESSION["agian"]="yes";
            $_SESSION["mid"]=$v["uid"];
            $_SESSION["mname"]=$v["uname"];
            $_SESSION["mphoto"]=$v["picture"];
            if(isset($_SESSION["url"])){
                $url=$_SESSION["url"];
            }else{
                $url="index.php";
            }
            echo "<script>alert('登陆成功');location.href='{$url}'</script>";
            exit();
        }
    }
}
echo "<script>alert('登陆失败');location.href='login.php'</script>";
