<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/6
 * Time: 9:50
 */
//$url="english";
//readfile($url);
$path='5.4';
//if(is_dir($path)) {
//    $file = opendir($path);
//}
//$filearr=scandir($path);
//foreach ($filearr as $value){
//    $filepath=$path.$value;
//    if(is_dir($filepath)){
//        echo $value.str_repeat('&nbsp',2).'是目录<br>';
//    }else if (is_file($filepath)){
//        echo $value.str_repeat('&nbsp',2).'是文件<br>';
//    }
//}
//header('content-type:text/html;charset=utf8');
function dirf($aa,$n=0){
    if(is_dir($aa)) {
        $aa=str_replace('\\','/',$aa);//window系统有兼容问题，需要把\转化成/,\是转义得的符号，所以要用\\
        $file = opendir($aa);
    }else{
        return ;
    }
    echo str_repeat('+',$n).$aa.'<br>';
    $filearr=scandir($aa);
//    echo $filearr;
    foreach ($filearr as $value){
        if($value==='.'||$value==='..'){
            continue;
        }
        $filepath=$aa.'/'.$value;
        if(is_dir($filepath)){
            dirf("$filepath",$n+1);
//            echo $value.'目录<br>';
        }else if (is_file($filepath)){
            echo str_repeat('+',$n).$value.'<br>';
        }
    }
}
//$bb='..';
header('content-type:image/png');
$img=imagecreatetruecolor(300,200);
$latter='qwertyuioplkjhgfdsazxcvbnm1234567890QWERTYUIOPASDFGHJKLMNBVCXZ';
$arr=array();
imagefill($img,0,0,getcolor($img));
//for($i=0;$i<50;$i++){
//    imagesetpixel($img,mt_rand(5,100),mt_rand(5,50),getcolor($img,'s'));
//}
for ($i=0;$i<4;$i++){
    $char=substr($latter,mt_rand(0,strlen($latter)-1));
    array_push($arr,$char);
    imagettftext($img,mt_rand(30,50),mt_rand(-20,20),mt_rand(10+$i*50,10+($i+1)*50),mt_rand(20,180),getcolor($img,'s'),$brr[array_rand($brr,1)],$char);
}
imagepng($img);
imagedestroy($img);

function getcolor($img,$type='q'){
    if ($type=='q') {
        $min=120;
        $max=240;
    }else if ($type=='s') {
        $min=10;
        $max=120;
    }
    return imagecolorallocate($img,mt_rand($min,$max),mt_rand($min,$max),mt_rand($min,$max));
}


