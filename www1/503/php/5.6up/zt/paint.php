<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/6
 * Time: 17:16
 */
header("content-type:image/png");
$img=imagecreatetruecolor(200, 100);
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
$text="qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM";
imagefill($img, 0, 0, getcolor($img));
$color_1=imagecolorallocate($img, mt_rand(0,255),mt_rand(0,255),mt_rand(0,255));
for($i=0;$i<4;$i++){
    imageline($img, mt_rand(0,200), mt_rand(0,100), mt_rand(10,200), mt_rand(10,100), getcolor($img,'s'));
}
$fontarr=array(
    1=>"one.ttf",
    2=>"two.ttf",
    3=>"three.ttf",
    0=>"four.ttf");
for ($i=0;$i<4;$i++) {
    $char=substr($text,mt_rand(0,strlen($text)-1),1);
//
    imagettftext($img, mt_rand(30, 50), mt_rand(-30, 30), mt_rand(20+30*$i , 40+30*$i), mt_rand(70, 80), getcolor($img, 's'), $fontarr[mt_rand(0,3)], $char);
//    imagettftext($img, mt_rand(40, 60), mt_rand(-30, 30), mt_rand(40 , 70), mt_rand(70, 80), getcolor($img, 's'), $fontarr[mt_rand(0,3)], $char);
//    imagettftext($img, mt_rand(40, 60), mt_rand(-30, 30), mt_rand(70 , 100), mt_rand(70, 80), getcolor($img, 's'), $fontarr[mt_rand(0,3)], $char);
//    imagettftext($img, mt_rand(40, 60), mt_rand(-30, 30), mt_rand(100, 130), mt_rand(70, 80), getcolor($img, 's'), $fontarr[mt_rand(0,3)], $char);

}
imagepng($img);
imagedestroy($img);
