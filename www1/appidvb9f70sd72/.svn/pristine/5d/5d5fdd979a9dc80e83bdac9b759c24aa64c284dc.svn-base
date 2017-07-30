<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 11:26
 */

include_once "public.php";
include_once "function.php";
$obj=new All();
$obj->table3($db,'qshow');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../static/js/jquery.min.js"></script>
</head>
<body>

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
    img{
        width:100px;
    }
    td{
        text-align: center;
    }
</style>

<h1 class="page-head-line">查看内容</h1>
<table  border="1" width="90%" cellpadding="0" cellspacing="0">
    <tr>
        <th>内容ID</th>
        <th>推荐位ID</th>
        <th>标题</th>
        <th>内容</th>
        <th>缩略图</th>
        <th>操作</th>
    </tr>
    <?php echo $obj->str ?>
</table>
</body>
</html>