<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/6
 * Time: 9:19
 */

date_default_timezone_set("Asia/shanghai");
$file=$_FILES['img'];
var_dump($file);
$time=date('y-m-d');
$path='6-6img'.'/'.$time;
//$name=time().'.'.$;
if(is_uploaded_file($file['tmp_name'])) {
    if(!is_dir('6-6img')){
        mkdir('6-6img');
        if (!file_exists($path)) {
            mkdir($path);
        }
    }

    $result = move_uploaded_file($file['tmp_name'], $path . "/" . $name);
    if ($result) {
//       服务器上这张图片存储的位置  数据库中的地址
        echo "http://localhost/food/uploadfile/$name";
    }
}