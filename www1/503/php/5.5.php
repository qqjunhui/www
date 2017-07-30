<?php

/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/5
 * Time: 9:24
 */
class Paser
{
    public $name = 'lisi';
    public $height = 123;
    const MAX = 100;
    public static $len = 2;

    public function __construct($n, $h)
    {//构造函数,是不能声明成静态的
        $this->name = $n;
        $this->height = $h;
    }

    public function hui($str)
    {
        echo "$str 有病！<br>";
        self::yong(6);
    }

    public static function yong($m)
    {
        echo Paser::MAX * "$m<br>";
    }
}

class Small extends Paser
{
    public $width;
    public function __construct($n, $h, $w)
    {
        parent::__construct($n, $h);
        $this->width=$w;
    }
    public static function qq($a){
        self::yong(12);
        parent::hui('韩笑');
    }
}
$obj=new Small(1,2,3);
$obj->qq(qq);
//$obj = new Paser('wangwu', 321);
//var_dump($obj);
////echo Paser::MAX;
//$obj->hui('韩笑');
//Paser::yong(3);