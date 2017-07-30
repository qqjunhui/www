<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/14
 * Time: 16:34
 */
require_once "public.php";
require_once "function.php";
$obj=new All();
$obj->table1($db,'list');

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
<body>
<style>
    body{
        background: #fff;
    }
    td{
        text-align: center;
    }
    img{
        width:50px;
    }
</style>
<h1 class="page-head-line">管理列表内容</h1>
<table  border="1" width="90%" cellpadding="0" cellspacing="0">
    <tr>
        <th>时间</th>
        <th>栏目ID</th>
        <th>推荐位ID</th>
        <th>列表标题</th>
        <th>缩略图</th>
        <th>操作</th>
    </tr>
    <?php echo $obj->str ?>
</table>
</body>
</html>
