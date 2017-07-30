<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 9:19
 */
session_start();
if(!$_SESSION['user']){
    $mess="请重新登录！";
    $src="login.html";
    include "login/index.html";
    exit;
};