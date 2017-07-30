<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 16:25
 */
session_start();
if(!isset($_SESSION['user'])){
    $mess="请登录！";
    $src="login.html";
    include "login/qyh-index.html";
    exit;
}
header("content-type:text/html;charset=utf8");
$db=new mysqli('localhost','root','','qyqcqs');
$db->query("set names utf8");
$sql="insert into hospital (hospital_name,hospital_type,hospital_level,hospital_equity_type,hospital_address) VALUES ('','','','','')";
$result=$db->query($sql);
if ($result){
    echo $db->insert_id;
}else{
    echo $result;
}

