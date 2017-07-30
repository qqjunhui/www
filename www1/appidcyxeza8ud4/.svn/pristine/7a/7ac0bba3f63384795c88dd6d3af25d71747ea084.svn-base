<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 13:33
 */
include_once "public.php";
$id=$_REQUEST['aa'];
//var_dump($id);
$sql="delete from qshow WHERE sid='$id'";
$result=$db->query($sql);
if($result){
    $mess="删除成功";
}else{
    $mess="删除失败";
}
$src="qfive.php";
include_once 'login/index.html';