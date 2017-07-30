<?php
include_once "../admin/public1.php";
$mname=$_POST['account'];
$pass=$_POST['pass'];
$pass1=$_POST['pass1'];


if(empty($mname)){
    echo "<script>location.href='reg.php'</script>";
    exit();
}

if($pass!=$pass1){
    echo "<script>location.href='reg.php'</script>";
    exit();
}
$pass=md5($pass);
$sql="insert into user (`unum`,`pass`) value ('{$mname}','{$pass}')";
$result=$db->query($sql);
if($result){
    echo "<script>location.href='login.php'</script>";
}
//数据库


