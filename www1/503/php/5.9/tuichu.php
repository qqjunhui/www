<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/9
 * Time: 19:23
 */
session_start();
unset($_SESSION['user']);
$mess="退出成功！请重新登录";
$src="../5.8login/login.html";
include "../5.8login/index.html";