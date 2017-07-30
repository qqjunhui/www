<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 11:05
 */

include_once "public.php";
include_once 'function.php';
$id=$_REQUEST['aa'];
$sql="select * from qposition WHERE posiid='$id'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$name=$row['posname'];
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
<h1 class="page-head-line">编辑推荐位</h1>
<form action="qfour3-1.php">
    <p>推荐位名称：</p>
    <input type="text" name="name" value="<?php echo $name?>"><br>
    <input type="hidden" value="<?php  echo $id?>" name="cid">
    <input type="submit">
</form>
</body>
</html>