<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/8
 * Time: 16:48
 */

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
<p>欢迎使用本系统! <?php session_start(); echo $_SESSION['user'];?></p>
</body>
</html>