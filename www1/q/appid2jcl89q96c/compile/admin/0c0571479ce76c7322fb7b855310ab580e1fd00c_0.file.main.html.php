<?php
/* Smarty version 3.1.30, created on 2017-07-14 04:07:14
  from "/Applications/MAMP/htdocs/eatapp2/template/admin/main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5968275245cd12_35632691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c0571479ce76c7322fb7b855310ab580e1fd00c' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp2/template/admin/main.html',
      1 => 1499998034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5968275245cd12_35632691 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/admin/main.css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_PATH');?>
/jquery.js"><?php echo '</script'; ?>
>
</head>
<body>

<section id="title">
    <h1>后台管理系统</h1>
    <p><span><a href="index.php?m=index&f=index" style="color: #ffffff;">进入主页 </a> </span> 欢迎<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
<a href="index.php?m=admin&f=login&a=out">退出登录</a></p>
</section>
<section id="main">
    <ul id="box">
        <?php if ($_smarty_tpl->tpl_vars['rid']->value == 0) {?>
        <li>
            <a href="index.php?m=admin&f=addRole&a=applist" target="window" style="color: #ccc;">App分类管理</a>
        </li>
        <li>
            <span>角色管理</span>
            <ul >
                <li>
                    <a href="index.php?m=admin&f=addRole" target="window">管理角色</a>
                </li>
                <li>
                    <a href="index.php?m=admin&f=addRole&a=add" target="window">添加角色</a>
                </li>
            </ul>
        </li>
        <li>
            <span>店铺总管理</span>
            <ul>
                <li>
                    <a href="index.php?m=admin&f=shop&a=showShop" target="window">店铺情况</a>
                </li>
            </ul>
        </li>

        <?php } else { ?>
        <li>
            <span>店铺管理</span>
            <ul>
                <li>
                    <a href="index.php?m=admin&f=shop&a=addShop" target="window">添加店铺</a>
                </li>
            </ul>
        </li>
        <?php }?>
        <li>
            <span>用户管理</span>
            <ul>
                <li>
                    <a href="index.php?m=admin&f=manger" target="window">管理员管理</a>
                </li>
                <li>
                    <a href="index.php?m=admin&f=user" target="window">用户管理</a>
                </li>

            </ul>
        </li>
    </ul>

    <iframe src="<?php echo TEM_PATH;?>
/admin/welcome.html" frameborder="0" name="window">

    </iframe>
</section>
</body>
<?php echo '<script'; ?>
>
    $('#box >li >span').click(function () {
        $(this).next('ul').slideToggle('fast');
    })
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
