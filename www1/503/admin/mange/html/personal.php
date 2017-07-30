<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 22:29
 */

include_once "public.php";
$sql="select * from one";
$result=$db->query($sql);
$row=$result->fetch_array(MYSQLI_ASSOC);
//var_dump($row);
?>

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
            <span>名字：</span><span><?php echo $row['name']?></span>
		</li>
		<li class="email">
			<span>email：</span><input type="text" value="<?php echo $row['email']?>" name="email">
		</li>
        <li class="sex">
            <span>性别：</span> <span>男</span><input type="radio" name="sex[]" checked value="男"> <span>女</span><input type="radio" name="sex[]" value="女">
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
