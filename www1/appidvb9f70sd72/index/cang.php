<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["memberlogin"])){

    echo "login";
    exit();
}

$mid=$_SESSION["mid"];
$sid=$_REQUEST["lid"];
//echo $mid,$sid;
include "../libs/db.php";
$sql="select lid,mid from cang WHERE lid=$sid AND mid=$mid";
$result=$db->query($sql);
$row=$result->fetch_assoc();
//echo $row;
if(!$row==null){
    echo "aa";
    exit();
}
$sql="insert into cang (mid,lid) VALUES ($mid,$sid)";
$result=$db->query($sql);
if($result){
    echo "true";
}else{
    echo "false";
}