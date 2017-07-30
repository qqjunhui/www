<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 22:00
 */
include_once "../public.php";
$id=$_REQUEST['id'];
$user_name=$_REQUEST['user_name'];
$name=$_REQUEST['name'];
$user_school=$_REQUEST['user_school'];
$user_major=$_REQUEST['user_major'];
$user_title=$_REQUEST['user_title'];
$user_duty=$_REQUEST['user_duty'];
$user_qualification=$_REQUEST['user_qualification'];
$user_practicing=$_REQUEST['user_practicing'];
$user_certificate=$_REQUEST['user_certificate'];
$user_city=$_REQUEST['user_city'];
$user_address=$_REQUEST['user_address'];
$user_speciality=$_REQUEST['user_speciality'];
$sql="insert into user (user_name,user_sex,user_school,user_major,user_title,user_duty,user_qualification,user_practicing,user_certificate,user_city,user_address,user_speciality) VALUES ('$user_name','$name','$user_school','$user_major','$user_title','$user_duty','$user_qualification','$user_practicing','$user_certificate','$user_city','$user_address','$user_speciality')";
$result=$db->query($sql);
if ($result) {
    $mess = "添加成功";
} else {
    $mess = "添加失败";
}
$src = "dtian.php";
include_once "../login/index.html";