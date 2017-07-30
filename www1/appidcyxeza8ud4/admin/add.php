<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 23:45
 */
include_once "public.php";
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
    body{
        background: #fff;
    }
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
</style>
<body>
<h1 class="page-head-line">添加管理员信息</h1>
<h1 class="page-subhead-line">Add administrators</h1>
<h3>添加管理员信息</h3>
<form action="add1.php" method="post">
    <label for="">
        <span>账号：</span><input type="text" name="user" required>
    </label>
    <label for="">
        <span>密码：</span><input type="password" name="pass" required>
    </label>
    <label for="">
        <span>确认密码：</span><input type="password" required>
    </label>
    <label for="">
        <span>姓名：</span><input type="text" name="name" required>
    </label>
    <label for="">
        <span>电话：</span><input type="text" name="phone" required>
    </label>
    <label for="">
        <span>email：</span><input type="email" name="email" required>
    </label>
    <label for="">
        <span>地址：</span><input type="text" name="dizhi" required>
    </label>
    <input type="submit">
</form>
</body>
</html>
