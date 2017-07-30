<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/6
 * Time: 18:25
*/
header('content-type:image/png');
$img=imagecreatetruecolor(300,200);
$latter='qwertyuioplkjhgfdsazxcvbnm1234567890QWERTYUIOPASDFGHJKLMNBVCXZ';
$arr=array();
imagefill($img,0,0,getcolor($img));
for($i=0;$i<50;$i++){
    imagesetpixel($img,mt_rand(5,100),mt_rand(5,50),getcolor($img,'s'));
}
for ($i=0;$i<4;$i++){
    $char=substr($latter,mt_rand(0,strlen($latter)-1));
    array_push($arr,$char);
    imagettftext($img,mt_rand(30,50),mt_rand(-20,20),mt_rand(10+$i*50,10+($i+1)*50),mt_rand(20,180),getcolor($img,'s'),$brr[array_rand($brr,1)],$char);

}
imagepng($img);
imagedestroy($img);

function getcolor($img,$type='q'){
    if($type=='q'){
        $min=120;
        $max=245;
    }elseif($type=='s'){
        $min=10;
        $max=110;
    }
    imagecolorallocate($img,mt_rand($min.$max),mt_rand($min.$max),mt_rand($min.$max));
    $r=mt_rand();
}
imagefill($img,0,0,$color);
//imagettftext($img,mt_rand(30,50),mt_rand(-50,50),)


