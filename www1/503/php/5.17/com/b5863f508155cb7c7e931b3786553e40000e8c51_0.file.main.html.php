<?php
/* Smarty version 3.1.30, created on 2017-05-22 03:54:31
  from "D:\html\wamp\www\503\php\5.17\template\admin\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592244d734dc87_57831448',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b5863f508155cb7c7e931b3786553e40000e8c51' => 
    array (
      0 => 'D:\\html\\wamp\\www\\503\\php\\5.17\\template\\admin\\main.html',
      1 => 1495418067,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592244d734dc87_57831448 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页</title>
</head>
<body>
    <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['user'];?>
这是后台主页
</body>
</html><?php }
}
