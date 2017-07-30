<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 23:45
 */
include_once "public.php";
include_once "function.php";
$obj=new All();
$obj->orders($db,'orders');
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
    table{
        margin:20px auto;
    }
    td{
        height:50px;
        text-align: center;
    }
    a{
        width:100%;
        height:100%;
        background: #00CA79;
        color:#fff;
        font-weight: bold;
        display: block;
        line-height: 50px;
        text-decoration: none;
        border-radius: 15px;
        margin-left:5px;
    }
    input{
        width:50px;
        display: block;    }
</style>
<body>
<h1 class="page-head-line">订单信息</h1>
<h1 class="page-subhead-line">Order message</h1>
<table border="1" width="90%" cellpadding="0" cellspacing="0">
    <tr>
        <th>订单标题</th>
        <th>疾病类型</th>
        <th>发起时间</th>
        <th>接单时间</th>
        <th>奖励金额</th>
        <th>操作</th>
    </tr>
    <?php echo $obj->str ?>
</table>
</body>
</html>
<script src="static/js/jquery.min.js"></script>
