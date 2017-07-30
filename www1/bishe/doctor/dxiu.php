<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 17:43
 */
include_once('../public.php');
include_once "../function.php";
$obj=new All();
$obj->tabled($db,'user');
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
    body,html{
        background: #fff;
        height:auto;
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
    table{
        margin:20px auto;
    }
    td{
        height:50px;
    }
</style>
<body>
<h1 class="page-head-line">医生基本信息</h1>
<h1 class="page-subhead-line">Check hospital message</h1>
<h3>医生基本信息修改</h3>
<table border="1" width="90%" cellpadding="0" cellspacing="0">
    <tr>
        <th>名称</th>
        <th>性别</th>
        <th>毕业院校</th>
        <th>专业</th>
        <th>职称</th>
        <th>职务</th>
        <th>特长</th>
        <th>操作</th>
    </tr>
    <?php echo $obj->str ?>
</table>
</body>
</html>