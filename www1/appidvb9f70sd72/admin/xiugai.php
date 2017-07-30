<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 22:29
 */

include_once "public.php";
$id=$_SESSION['user'];
$sql="select * from manger WHERE user='$id'";

$result=$db->query($sql);
$row=$result->fetch_assoc();
//var_dump($row);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改个人信息</title>
    <script src="../static/js/jquery.min.js"></script>
    <link rel="stylesheet" href="../static/css/common.css">
    <link rel="stylesheet" href="../static/css/xiugai.css">
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

    .page-subhead-line {
        font-size: 14px;
        padding-top: 5px;
        padding-bottom: 20px;
        font-style:italic;
        margin-bottom:30px;
        border-bottom:1px dashed #00CA79;
        margin-left: 20px;
    }
    li{
        display: block;
        margin:25px 48px;
    }
    li > input{
        width:210px;
    }

    form > input {
        width:50px;
        height:30px;
        background: #fff;
        border:none;
        outline: 0;
        box-shadow: 0 0 3px rgba(0,0,0,.3);
        margin-left:45px;
    }
    span{
        display: inline-block;
        width:100px;
    }
</style>
<body>
<h1 class="page-head-line">修改个人信息</h1>
<h1 class="page-subhead-line">Modify personal information </h1>
<form action="xinxi.php" method="post">
    <ul>
        <li class="name">
            <span>账号：</span><input type="text" disabled value="<?php echo $row['user']?>">
            <input type="hidden" value="<?php echo $row['user']?>" name="user">
        </li>
        <li class="name">
            <span>昵称：</span><input type="text" value="<?php echo $row['names']?>" name="name">
        </li>
        <li class="phone">
            <span>电话：</span><input type="text" value="<?php echo $row['phone']?>" name="phone">
        </li>
        <li class="dizhi">
            <span>地址：</span><input type="text" value="<?php echo $row['hospital']?>" name="dizhi">
        </li>
        <li class="email">
            <span>email：</span><input type="text" value="<?php echo $row['email']?>" name="email">
        </li>
    </ul>
    <input type="submit">
</form>
</body>
</html>
