<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 10:04
 */
include_once "public.php";
$sql="select * from manger";
$result=$db->query($sql);
$row=$result->fetch_array(MYSQLI_ASSOC);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>修改密码</title>
    <script src="../static/js/jquery.min.js"></script>
    <script src="../static/js/jquery.validate.min.js"></script>
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
</style>
<body>
<h1 class="page-head-line">修改密码</h1>
<h1 class="page-subhead-line">Modify personal information </h1>
<form action="mimacheck.php" method="post" class="mima">
    <ul>
        <li class="name">
            <span>账号：</span><input type="text" disabled value="<?php echo $row['user']?>"><input type="hidden" value="<?php echo $row['user']?>" name="user">
        </li>
        <li class="phone">
            <div>
                <span>原密码：</span><input type="password" name="pass"><br>
                <span>新密码：</span><input type="password" name="newpass" id="pass"><br>
                <span>确认密码：</span><input type="password" name="passto">
            </div>

        </li>
    </ul>
    <input type="submit">
</form>
</body>
</html>
<script>
        $('.mima').validate({
            rules: {
                pass: {
                    required: true,
                },
                newpass: {
                    required: true,
                    rangelength: [6, 12],
                },
                passto: {
                    required: true,
                    equalTo: "#pass",
                },
            },
            messages: {
                pass: {
                    required:"请输入原密码",
                },
                zcma1: {
                    required: "请输入新密码",
                    rangelength: $.validator.format('密码长度在{0}到{1}之前'),
                },
                zcma2: {
                    required: '请再次确认密码',
                    equalTo: "两次密码不同",
                },
            },
        })
</script>
