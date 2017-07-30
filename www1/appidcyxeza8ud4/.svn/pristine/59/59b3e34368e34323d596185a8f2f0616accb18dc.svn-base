<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 9:54
 */
require_once "public.php";
require_once "function.php";
$obj=new All();
$obj->fun1($db,'qposition');
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
<h1 class="page-head-line">添加推荐位</h1>
<form action="qfour1.php">
    <select name="id" id="">
        <?php echo $obj->str ?>
    </select>
    <p>推荐位名称：</p>
    <input type="text" name="name"><br>
    <input type="submit">
</form>
</body>
</html>

