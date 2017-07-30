<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 11:05
 */
include_once "public.php";
$id=$_REQUEST['aa'];
//var_dump($id);
$sql="delete from qposition WHERE posiid='$id'";
$result=$db->query($sql);
if($result){
    $mess="删除成功";
}else{
    $mess="删除失败";
}
$src="qfour3.php";
include_once 'login/index.html';