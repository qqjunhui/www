<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/2
 * Time: 11:29
 */
////可变变量  当一个变量的名字用另一个变量的值
//$nub='abc';
//$$nub=123;
//echo $nub,$abc;

//
////变量的应用  当被应用的变量变化时，应用的变量也会变化
//$aa=200;
//$bb=&$aa;
//$aa=300;
//echo $aa,$bb;
//
//
////外部变量 （超全局变量）  可以在任何位置区使用
//$_POST;
//$_GET;
//$REQUEST;
//$_RESSION;//存在服务器中
//$_COOKIE;//和js中的cookie一样在浏览器中使用
//$_SERVER;
//var_dump($_SERVER);


////常量
//define('_MAX','QWER');
//echo _MAX;
//echo __FILE__;
//echo __DIR__;
//echo __LINE__;

$nub='abcde,fgabc,defg';
//echo strlen($nub).'<br/>';
//echo trim($nub,"@").'<br/>';
//$aa=strtoupper($nub);
//echo $aa."<br/>";
//echo strtolower($aa)."<br/>";
//echo ucfirst($nub).'<br/>';
//echo ucwords($nub).'<br/>';
//echo strrev($nub).'<br/>';
//echo md5($nub).'<br/>';
//$bb=12345.432;
//echo number_format($bb,2,"&","*").'<br/>';
$arr=explode(',',$nub,2);
var_dump(implode(',',$arr));
echo substr($nub,0,5).'<br/>';
echo strpos($nub,'a').'<br/>';
echo strrpos($nub,'a').'<br/>';
echo str_replace('a','nnnnn',$nub).'<br/>';
echo str_repeat('gg',5);
?>