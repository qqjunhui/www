<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/22
 * Time: 14:40
 */

//验证码
class code{
    //种子  canvas
    public $letter="abcdefgABCDEFG1234567890";
    public $letterlen=4;
    public $width=200;
    public $height=100;
    public $type="png";
    public $fontsizearr=array("min"=>20,"max"=>40);

    //创建画布
    private function create()
    {
        header("Content-type:image/png");
        $this->re=imagecreatetruecolor($this->width,$this->height);//晚绑定
        $this->getcolor();
        $color=imagecolorallocate($this->re,$this->arr[0],$this->arr[1],$this->arr[2]);
        imagefill($this->re,0,0,$color);
        imagepng($this->re);
        imagedestroy($this->re);
    }
    //获取颜色
    private function getcolor()
    {
        $this->arr=array();
        $this->arr[]=mt_rand(150,240);
        $this->arr[]=mt_rand(150,240);
        $this->arr[]=mt_rand(150,240);
        return $this->arr;
    }
    private function getcolor1(){
        $this->brr=array();
        $this->brr[]=mt_rand(10,140);
        $this->brr[]=mt_rand(10,140);
        $this->brr[]=mt_rand(10,140);
        return $this->brr;
    }
    //写文字
    private function createtext(){
        $fontsize=mt_rand($this->fontsizearr[min],$this->fontsizearr[max]);
        $xx=$this->width/$this->letterlen;
        $this->getcolor1();
        $color=imagecolorallocate($this->re,$this->brr[0],$this->brr[1],$this->brr[2]);
        $this->gettext();
        for($i=0;$i<$this->letterlen;$i++){
            imagettftext($this->re,$fontsize,mt_rand(-10,20),$xx*$i,mt_rand($fontsize,$this->height),$color,'one.ttf',$this->str[$i]);
        }

    }
    private function gettext(){


        $this->str="";
        for($i=0;$i<$this->letterlen;$i++){
            $this->str.=$this->letter[mt_rand(0,strlen($this->letter)-1)];
        }
        return $this->str;
    }


    //画线条
    //画干扰点
    //输出

    function out(){
        $this->getcolor();
        $this->gettext();
        $this->create();

    }

}

$obj=new code();
$obj->out();