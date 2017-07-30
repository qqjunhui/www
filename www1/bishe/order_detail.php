<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/19
 * Time: 1:58
 */
include_once "public.php";
$order_id=$_REQUEST['id'];
$aa=$_REQUEST['post_doctor_id'];
$bb=$_REQUEST['take_doctor_id'];
$cc=$_REQUEST['disease_type'];
$dd=$_REQUEST['file_id'];
$ee=$_REQUEST['order_start_time'];
$ff=$_REQUEST['order_take_time'];
$gg=$_REQUEST['money'];
$title=$_REQUEST['title'];
//var_dump($aa,$bb,$cc);
include_once "db.php";
$obj1=new db('order_detail');
$arr1=$obj1->where(order_id.'='.$order_id)->select()[0];
if($ff=='            '){
    $arr1=[];
}


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
    h2{
        margin-left:20px;
    }
    table{
        margin:50px auto;
    }
    td{
        height:50px;
        text-align: center;
    }
</style>
<body>
<h1 class="page-head-line">订单详细信息</h1>
<h1 class="page-subhead-line">Order message</h1>
<h2>订单名称：<?php echo $title ?></h2>
<table border="1" width="90%" cellpadding="0" cellspacing="0">
    <tr>
        <th>发单医生</th>
        <th>接单医生</th>
        <th>疾病类型</th>
        <th>订单附件</th>
        <th>奖励金额</th>
        <th>发单时间</th>
        <th>接单时间</th></tr>
    <tr>
        <td><?php echo $aa ?></td>
        <td><?php echo $bb ?></td>
        <td><?php echo $cc ?></td>
        <td><?php echo $dd ?></td>
        <td><?php echo $gg ?></td>
        <td><?php echo $ee ?></td>
        <td><?php echo $ff ?></td></tr>
</table>


<table border="1" width="90%" cellpadding="0" cellspacing="0">
    <tr>
        <th>评价等级</th>
        <th>评价详情</th>
        <th>答复速度</th>
        <th>专业程度</th>
        <th>耐心程度</th>
        <th>实用程度</th>
        <th>订单结束时间</th></tr>
    <tr>
        <td><?php echo $arr1['evaluation_level'] ?></td>
        <td><?php echo $arr1['evaluation_detail'] ?></td>
        <td><?php echo $arr1['speed_level'] ?></td>
        <td><?php echo $arr1['professional_level'] ?></td>
        <td><?php echo $arr1['patience_level'] ?></td>
        <td><?php echo $arr1['practical_level'] ?></td>
        <td><?php echo $arr1['order_end_time'] ?></td></tr>
</table>
</body>
</html>
