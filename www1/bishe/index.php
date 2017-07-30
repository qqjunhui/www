<?php
session_start();
if(!isset($_SESSION['user'])){
    $mess="请登录！";
    $src="login.html";
    include "login/index.html";
    exit;
};
?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>管理端</title>
    <script src="static/js/jquery.min.js"></script>
    <script src="static/js/bootstrap.js"></script>
    <script src="static/js/index.js"></script>
    <link href="static/css/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="static/css/common.css" />
    <link rel="stylesheet" href="static/css/index.css">
    <link rel="stylesheet" href="static/css/font-awesome.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.html">欢迎登录   <?php   echo $_SESSION['user'];?></a>
            </div>
            <div class="header-right">
                <img src="static/img/logo.png" class="img-thumbnail" />
                <span>“千医千村牵手”帮扶系统web管理端</span>
               <a href="login/tuichu.php" class="btn btn-danger" title="Logout">退出</a>
            </div>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                            <div class="inner-text"><?php date_default_timezone_set("Asia/shanghai");
                                $time=date(" 登录时间 Y-m-d G:i:s"); echo $time ?></div>
                        </div>
                    </li>
                    <li>
                        <a class="active-menu" href="index.php">主页</a>
                    </li>
                    <li>
                        <a target="display" href="javascript:;">医院信息<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a target="display" href="hospital/yicha.php">查看医院信息</a>
                            </li>
                        </ul>
                    </li>
                     <li>
                        <a target="display" href="javascript:;">用户信息 <span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a target="display" href="doctor/dxiu.php">修改用户信息</a>
                            </li>
                            <li>
                                <a target="display" href="doctor/dshan.php">删除用户信息</a>
                            </li>
                            <li>
                                 <a target="display" href="doctor/dtian.php">添加用户信息</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a target="display" href="order.php">订单查询 </a>
                    </li>
                     <li>
                        <a target="display" href="javascript:;">管理人员<span class="fa arrow"></span></a>
                         <ul class="nav nav-second-level">
                             <li>
                                <a target="display" href="user/xiugai.php">修改个人信息</a>
                            </li>
                             <li>
                                 <a target="display" href="user/mima.php">修改密码</a>
                             </li>
                             <li>
                                 <a target="display" href="user/add.php">添加管理人员 </a>
                             </li>
                        </ul>
                    </li>

                </ul>

            </div>
        </nav>
        <iframe src="order1.php" name="display" ></iframe>
    </div>
    <div id="footer-sec">
        &copy; 2017 “千医千村牵手” 帮扶系统web管理端
    </div>

</body>
</html>
