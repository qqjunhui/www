<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 11:02
 */

include_once "public.php";
$name=$_REQUEST['name'];
$id=$_REQUEST['cid'];
//var_dump($id);
$sql="select * from qposition WHERE posname='$name'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if($row){
    $mess="推荐位名字已存在！";
    $src='qfour3.php';
    include_once "login/index.html";
    exit();
}
$sql="update qposition set posname='$name' WHERE posiid=$id";
$result=$db->query($sql);
if($result){
    $mess="添加成功！";

}else{
    $mess="添加失败！";
}
$src='qfour3.php';
include_once "login/index.html";
?>