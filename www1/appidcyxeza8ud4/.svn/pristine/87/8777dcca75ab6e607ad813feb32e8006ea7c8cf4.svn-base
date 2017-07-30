<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 19:04
 */

include_once "public.php";
include_once 'function.php';
$id=$_REQUEST['aa'];
$sql="select * from category WHERE cid='$id'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$name=$row['catname'];
$sql="select * from category WHERE  cid={$row['pid']}";
$result=$db->query($sql);
$row=$result->fetch_assoc();
$obj=new All();
$obj->fun($db,'category',0,0,$row['cid']);



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
<form action="qone2.php">
    <select name="id" id="">
        <option value="0">作为一级栏目存在</option>
        <?php echo $obj->str ?>
    </select>
    <p>栏目名称：</p>
    <input type="text" name="name" value="<?php echo $name?>"><br>
    <input type="hidden" value="<?php  echo $id?>" name="cid">
    <input type="submit">
</form>
</body>
</html>
