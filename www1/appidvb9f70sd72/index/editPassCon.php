<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["memberlogin"])){

    echo "<script>alert('请登陆');location.href='login.php'</script>";
    exit();
}

$mid=$_SESSION["mid"];
$oldp=$_POST["oldp"];
$mpass=$_POST["mpass"];
$mpass1=$_POST["mpass1"];
if($oldp==$mpass){
    foreach ($_SESSION as $k=>$v){
        unset($_SESSION[$k]);
    }
    echo "ok";
    exit();
}
include "../libs/db.php";
$sql="select pass from user where uid={$mid}";

$result=$db->query($sql);
$info=$result->fetch_assoc();

if(md5($oldp)==$info["pass"]){
    $mpass=md5($mpass);
    $sql="update user set pass='{$mpass}' where uid={$mid}";
    $db->query($sql);
    if($db->affected_rows>0){
        foreach ($_SESSION as $k=>$v){
            unset($_SESSION[$k]);
        }

        echo "ok";
    }

}else{
   echo "error";
}

