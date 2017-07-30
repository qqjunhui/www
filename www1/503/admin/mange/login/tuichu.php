<?php

session_start();
unset($_SESSION['user']);
$mess="退出成功！请重新登录";
$src="login.html";
include "index.html";