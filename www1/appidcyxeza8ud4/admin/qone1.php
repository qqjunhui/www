<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 16:03
 */

require_once "public.php";
$name=$_REQUEST['name'];
$pid=$_REQUEST['id'];
$isshow=$_REQUEST['isshow'];
$sql="select * from category where catname='$name'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
if($result && $row['parentid']==$pid){
    $mess='添加失败 ，栏目已存在！';
    $src="addtitle.php";
    include_once "login/index.html";
    exit;
}
$sql="insert into category (catname,pid,isshow) VALUES ('$name',$pid,$isshow)";
$result=$db->query($sql);
//var_dump($result);
if($result){
    $mess='添加成功！';
}else{
    $mess='添加失败，请重新添加！';
}
$src="addtitle.php";
include_once("login/index.html");

