<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/12
 * Time: 15:47
 */
include_once "public.php";
date_default_timezone_set("Asia/shanghai");
$file=$_FILES['img'];
$path='../uploadfile';
$ex=explode('.',$file['name'])[1];
$name=time().'.'.$ex;
if(is_uploaded_file($file['tmp_name'])) {
    if (!file_exists($path)) {
        mkdir($path);
    }
    $result = move_uploaded_file($file['tmp_name'], $path . "/" . $name);
    if ($result) {
//       服务器上这张图片存储的位置  数据库中的地址
        echo "http://localhost/admin/food/uploadfile/$name";
    }
}