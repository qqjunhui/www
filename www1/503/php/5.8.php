<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/8
 * Time: 14:47
 */
$db=new mysqli('localhost','root','','one');
//$sql="insert into user (username,pass,sex,email,money) VALUE ('zml',111123,'女','4224@@qq.com',1000 )";
$sql="select username,pass from user";
$db->query("set names utf8");
$aa=$db->query($sql);
$db->close();
var_dump($aa);