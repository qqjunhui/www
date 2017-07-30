<?php
/* Smarty version 3.1.30, created on 2017-05-22 03:45:40
  from "D:\html\wamp\www\503\php\5.17\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592242c4965f49_04630485',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a40961186d28c21546773a507a2bc5d6d8d99d83' => 
    array (
      0 => 'D:\\html\\wamp\\www\\503\\php\\5.17\\template\\admin\\login.html',
      1 => 1495413846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592242c4965f49_04630485 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>
CSS/login.css">-->
</head>
<style>

</style>
<body>
    <form action="index.php?d=admin&f=admin&a=check" method="post">
        用户名：<input type="text" name="user">
        密码：<input type="password" name="pass">
        <button type="submit" value="登录">登录</button>
    </form>
</body>
</html><?php }
}
