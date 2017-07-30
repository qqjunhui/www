<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 19:03
 */

include_once "public.php";
include_once "function.php";
$obj=new All();
$obj->table($db,'category',0);
//var_dump($obj->str);
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
td{
text-align: center;
}
</style>
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
<h1 class="page-head-line">查看栏目</h1>
<table  border="1" width="90%" cellpadding="0" cellspacing="0">
        <tr>
            <th>栏目ID</th>
            <th>栏目名称</th>
            <th>上级栏目ID</th>
            <th>操作</th>
        </tr>
        <?php echo $obj->str ?>
    </table>
</body>
</html>
