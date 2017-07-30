<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 23:45
 */
include_once "../public.php";

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>

    .page-head-line {
        font-size: 30px;
        text-transform: uppercase;
        color: #000;
        font-weight: 800;
        padding-bottom: 20px;
        border-bottom: 2px solid #00CA79;
        margin-bottom: 10px;
        margin-left: 20px;
        margin-top: 20px;
    }

    .page-subhead-line {
        font-size: 14px;
        padding-top: 5px;
        padding-bottom: 20px;
        font-style:italic;
        margin-bottom:30px;
        border-bottom:1px dashed #00CA79;
        margin-left: 20px;
    }
    h3{
        padding-left:45px;
    }
    label{
        display: block;
        margin:25px 48px;
    }
    label > input{
        width:210px;
    }

    form > input {
        width:50px;
        height:30px;
        background: #fff;
        border:none;
        outline: 0;
        box-shadow: 0 0 3px rgba(0,0,0,.3);
        margin-left:45px;
    }
    span{
        display: inline-block;
        width:100px;
    }
    input[type="radio"]{
        width:20px;
    }
</style>
<body>
<h1 class="page-head-line">添加医生信息</h1>
<h1 class="page-subhead-line">Add hospital message</h1>
<h3>添加医生基本信息</h3>
<form action="dtian1.php" method="post">
    <label for="">
        <span>名称：</span><input type="text" name="user_name" required>
    </label>
    <label for="">
        <span>性别：</span>男<input type="radio" checked name="name" value="男">女<input type="radio" name="name" value="女">
    </label>
    <label for="">
        <span>毕业院校：</span><input type="text" name="user_school" required>
    </label>
    <label for="">
        <span>用户专业：</span><input type="text" name="user_major" required>
    </label>
    <label for="">
        <span>用户职称：</span><input type="text" name="user_title" required>
    </label>
    <label for="">
        <span>用户职务：</span><input type="text" name="user_duty" required>
    </label>
    <label for="">
        <span>用户专业技术资格：</span><input type="text" name="user_qualification" required>
    </label>
    <label for="">
        <span>医师执业证书编码：</span><input type="text" name="user_practicing" required>
    </label>
    <label for="">
        <span>医师资格证书编码：</span><input type="text" name="user_certificate" required>
    </label>
    <label for="">
        <span>所在城市：</span><input type="text" name="user_city"  required>
    </label><label for="">
        <span>用户地址：</span><input type="text" name="user_address" required>
    </label><label for="">
        <span>用户特长：</span><input type="text" name="user_speciality" required>
    </label>
    <input type="submit">
</form>
</body>
</html>
<script src="../static/js/jquery.min.js"></script>
