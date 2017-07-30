<?php
/**
 * Created by PhpStorm.
 * User: think
* Date: 2017/5/9
* Time: 11:58
*/
include_once "public.php";
$id=$_REQUEST['id'];
$type=$_REQUEST['type'];
$value=$_REQUEST['value'];
$sql="update aa set $type='$value' WHERE id=$id";
$db->query("set names utf8");
$result=$db->query($sql);
echo $result;