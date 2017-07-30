<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 15:38
 */
require_once "public.php";
require_once "function.php";
$obj=new All();
$obj->fun($db,'category',0,0);




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
</style>
<body>
<h1 class="page-head-line">添加栏目</h1>
<form action="addtitlenum.php">
    <select name="id" id="">
        <option value="0">作为一级栏目存在</option>
        <?php echo $obj->str ?>
    </select>
    <p>栏目名称：</p>
    <input type="text" name="name"><br>
    在首页显示：<br/>显示 <input type="radio" name="isshow" value="1">  不显示 <input type="radio" name="isshow" value="0"><br>
    <input type="submit">
</form>
</body>
</html>
