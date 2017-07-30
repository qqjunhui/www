<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/14
 * Time: 17:33
 */

include_once "public.php";
$id=$_REQUEST['aa'];
//var_dump($id);
$sql="delete from list WHERE lid='$id'";
$result=$db->query($sql);
if($result){
    $mess="删除成功";
}else{
    $mess="删除失败";
}
$src="addlisttable.php";
include_once 'login/index.html';
