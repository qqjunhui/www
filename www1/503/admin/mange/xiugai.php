<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 22:29
 */
session_start();
if(!isset($_SESSION['user'])){
    $mess="请登录！";
    $src="login.html";
    include "login/index.html";
    exit;
};
include_once "public.php";
$sql="select * from mange";
$result=$db->query($sql);
$row=$result->fetch_array(MYSQLI_ASSOC);
//var_dump($row);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改密码</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/xiugai.css">
</head>
<body>
<h1 class="page-head-line">修改个人信息</h1>
<h1 class="page-subhead-line">Modify personal information </h1>
<form action="xinxi.php" method="post">
    <ul>
        <li class="name">
            <span>昵称：</span><input type="text" value="<?php echo $row['name']?>" name="name">
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
        <li class="phone">
            <label for="">修改密码</label><br>
            <div>
                <span>原密码：</span><input type="password" name="pass"><br>
                <span>新密码：</span><input type="password" name="newpass"><br>
                <span>确认密码：</span><input type="password">
            </div>

        </li>
    </ul>
    <input type="submit">
</form>
</body>
</html>
