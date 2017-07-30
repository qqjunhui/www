<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/9
 * Time: 9:16
 */
$db=new mysqli('localhost','root','','one');
//$sql="insert into user (username,pass,sex,email,money) VALUE ('zml',111123,'女','4224@@qq.com',1000 )";
//$sql="select COUNT(*) as hui from user";
//$sql="select * from user limit 1";
$sql="delete from user WHERE id<>6";
//$sql="update user set username='masong',pass='nnnn' WHERE id=1";
$db->query("set names utf8");
$aa=$db->query($sql);
//$date=$aa->fetch_array();
//var_dump($date);
$db->close();