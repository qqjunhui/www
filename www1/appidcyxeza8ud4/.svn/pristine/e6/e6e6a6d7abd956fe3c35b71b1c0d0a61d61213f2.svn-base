<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/12
 * Time: 9:31
 */
include_once "public.php";
$pid=$_REQUEST['id'];
$name=$_REQUEST['name'];
$cid=$_REQUEST['cid'];
//var_dump($cid);
$sql="select * from category WHERE catname='$name'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if($row){
 $mess="栏目名字已存在！";
 $src='qtwo.php';
 include_once "login/index.html";
 exit();
}
$sql="update category set catname='$name',pid=$pid WHERE cid=$cid";
$result=$db->query($sql);
if($result){
    $mess="添加成功！";

}else{
    $mess="添加失败！";
}
$src='qtwo.php';
include_once "login/index.html";