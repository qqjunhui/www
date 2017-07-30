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
    <script src="../static/js/jquery.js"></script>
    <script src="../static/js/index.js"></script>
    <link rel="stylesheet" href="../static/css/common.css" />
    <link rel="stylesheet" href="../static/css/qqindex.css">
</head>
<body>
    <div id="wrapper">
        <nav>
            <p class="navbar-brand" href="index.html">欢迎   <?php   echo $_SESSION['user'];?>登录新闻系统</p>
            <div class="header-right">
               <a href="../index/index.php">站点首页</a>
               <a href="login/tuichu.php" class="btn btn-danger" title="Logout">退出</a>
            </div>
        </nav>
        <div>
            <ul class="nav" id="main-menu">
                <li>
                    <div class="inner-text"><?php date_default_timezone_set("Asia/shanghai");
                            $time=date(" 登录时间 Y-m-d G:i:s"); echo $time ?></div>
                </li>
                <li>
                    <a class="active-menu" href="index.php">主页</a>
                </li>
                 <li>
                    <a target="display" href="javascript:;">管理人员<span class="fa arrow"></span></a>
                     <ul class="nav nav-second-level">
                         <li>
                            <a target="display" href="xiugai.php">修改个人信息</a>
                        </li>
                         <li>
                             <a target="display" href="mima.php">修改密码</a>
                         </li>
                         <li>
                             <a target="display" href="add.php">添加管理人员 </a>
                         </li>
                    </ul>
                </li>
                <li>
                    <a target="display" href="javascript:;">栏目管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a target="display" href="addtitle.php">添加栏目</a>
                        </li>
                        <li>
                            <a target="display" href="qtwo.php">管理栏目</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a target="display" href="javascript:;">列表管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a target="display" href="addlist.php">添加列表</a>
                        </li>
                        <li>
                            <a target="display" href="addlisttable.php">管理列表</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a target="display" href="javascript:;">内容管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a target="display" href="qthree.php">添加内容</a>
                        </li>
                        <li>
                            <a target="display" href="qfive.php">管理内容</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a target="display" href="javascript:;">推荐位管理<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a target="display" href="qfour.php">添加推荐位</a>
                        </li>
                        <li>
                            <a target="display" href="qfour3.php">推荐位管理</a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <iframe name="display" src="aa.php"></iframe>
    </div>

</body>
</html>
