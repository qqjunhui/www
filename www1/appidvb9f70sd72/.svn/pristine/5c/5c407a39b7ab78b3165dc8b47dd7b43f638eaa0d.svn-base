<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 8:48
 */
include_once "public.php";
$id = $_REQUEST['id'];
$title = $_REQUEST['title'];
$con = $_REQUEST['con'];
$imgurl = $_REQUEST['imgurl'];
//var_dump($id,$title,$content,$imgurl);
$sql = "insert into qshow (lid,title,content,thumb) VALUES ($id,'$title','$con','$imgurl')";
$result = $db->query($sql);
if ($result) {
    $mess = "添加成功";
} else {
    $mess = "添加失败";
}
$src = "qthree.php";
include_once "login/index.html";