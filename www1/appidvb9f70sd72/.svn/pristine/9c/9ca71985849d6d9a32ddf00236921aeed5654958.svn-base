<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["memberlogin"])){

    echo "<script>alert('请登陆');location.href='login.php'</script>";
    exit();
}

$mid=$_SESSION["mid"];
$name=$_POST["newname"];

include "../libs/db.php";
$sql="update user set uname='{$name}' where uid={$mid}";
$db->query($sql);
if($db->affected_rows>0){
    echo $name;
}else{
    echo false;
}

