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
$keywords=$_REQUEST['keywords'];
$con = $_REQUEST['con'];
$imgurl = $_REQUEST['imgurl'];
$pos=$_REQUEST['pos'];
$pos=implode(',',$pos);
//var_dump($id,$title,$keywords,$pos,$con,$imgurl);
$sql = "insert into list (cid,posid,ltitle,keywords,lcon,lthumb) VALUES ($id,$pos,'$title','$keywords','$con','$imgurl')";
$result = $db->query($sql);
//var_dump($result);
if ($result) {
    $mess = "添加成功";
} else {
    $mess = "添加失败";
}
$src = "addlist.php";
include_once "login/index.html";