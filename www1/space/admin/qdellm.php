<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 19:03
 */

include_once "public.php";
$id=$_REQUEST['aa'];
//var_dump($id);
$sql="select * from category WHERE pid=$id";
$result=$db->query($sql);
$row=$result->fetch_all();
//var_dump($row);
if($row!=array()){
    $mess="删除失败，该栏目有子栏目，请先删除子栏目";
    $src="qtwo.php";
    include_once 'login/index.html';
    exit();
}
$sql="delete from category WHERE cid='$id'";
$result=$db->query($sql);
if($result){
    $mess="删除成功";
}else{
    $mess="删除失败";
}
$src="qtwo.php";
include_once 'login/index.html';
