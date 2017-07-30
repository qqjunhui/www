<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 10:18
 */

include_once "public.php";
$name=$_REQUEST['name'];
$sql="select * from qposition where posname='$name'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if($row!=array()){
    $mess='添加失败 ，推荐位已存在！';
    $src="qfour.php";
    include_once "login/index.html";
    exit;
}
$sql="insert into qposition (posname) VALUES ('$name')";
$result=$db->query($sql);
//var_dump($result);
if($result){
    $mess='添加成功！';
}else{
    $mess='添加失败，请重新添加！';
}
$src="qfour.php";
include_once("login/index.html");