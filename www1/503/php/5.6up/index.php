
<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/6
 * Time: 15:17
 */
$file=$_FILES['name'];//上传的信息
date_default_timezone_set('Asia/shanghai');//设置时区
$typearr=array(//创建允许上传图片格式
    'image/jpeg'=>'jpg',
    'image/png'=>'png',
    'image/gif'=>'gif',
);
if($file['error']==0){
    $ex=explode('.',$file['name'])[1];
    $path='uploaded';
    if(array_key_exists($file['type'],$typearr)&&in_array($ex,$typearr)){
        $size=500*1024;
        if($file['size']<$size){
            $name=time().".$ex";
            if(file_exists("$path")) {
                if (is_uploaded_file($file['tmp_name'])) {
                    move_uploaded_file($file['tmp_name'], $path . '/' . $name);
                }
            }else{
                mkdir("$path");
                if (is_uploaded_file($file['tmp_name'])) {
                    move_uploaded_file($file['tmp_name'], $path . '/' . $name);
                }
            }
        }else{
            echo '文件输入过大，请重新输入！';
        }
    }else{
        echo '文件格式错误，请重新上传！';
    }
}else{
    echo "文件上传失败，请重新上传！";
}
