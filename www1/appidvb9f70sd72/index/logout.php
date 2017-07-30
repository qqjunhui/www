<?php
session_start();

foreach ($_SESSION as $k=>$v){
    unset($_SESSION[$k]);
}
header("content-type:text/html;charset=utf-8");
echo "<script>alert('退出成功');location.href='index.php';</script>";
