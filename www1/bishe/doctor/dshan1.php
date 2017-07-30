<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 18:13
 */
include_once "../public.php";
$id=$_REQUEST['id'];
$sql="delete from user WHERE user_id='$id'";
$result=$db->query($sql);
if ($result) {
    $mess = "删除成功";
} else {
    $mess = "删除失败！";
}
$src = "dshan.php";
include_once "../login/index.html";