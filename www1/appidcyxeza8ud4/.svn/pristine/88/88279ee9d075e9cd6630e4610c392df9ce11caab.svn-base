<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 13:48
 */
include_once "public.php";
$id = $_REQUEST['aa'];
//var_dump($id);
$cid=$_REQUEST['id'];
$title = $_REQUEST['title'];
$content = $_REQUEST['con'];
$imgurl = $_REQUEST['imgurl'];
$pos=$_REQUEST['pos'];
//var_dump($id,$title,$content,$imgurl);
$sql = "update qshow set cid=$cid,position=$pos,title='$title',content='$content',thumb='$imgurl' WHERE cid=$id";
$result = $db->query($sql);
//var_dump($result);
if ($result) {
    $mess = "修改成功";
} else {
    $mess = "修改失败";
}
$src = "qfive.php";
include_once "login/index.html";