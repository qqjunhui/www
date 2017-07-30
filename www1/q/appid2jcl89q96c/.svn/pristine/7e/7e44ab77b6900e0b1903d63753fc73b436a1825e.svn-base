<?php
/* Smarty version 3.1.30, created on 2017-07-15 05:53:27
  from "/Applications/MAMP/htdocs/eatapp2/template/index/changecom.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596991b73bd0d2_89069498',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4676782e471c8734b5e4f9dfb7c46991ad22190' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp2/template/index/changecom.html',
      1 => 1500025097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596991b73bd0d2_89069498 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/mui.min.css">
    <?php echo '<script'; ?>
 src="<?php echo @constant('JS_PATH');?>
/jquery.js"><?php echo '</script'; ?>
>

</head>
<body>
<header class="mui-bar mui-bar-nav">
    <a onclick="history.go(-1)"  class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">商品详情</h1>
</header>
<form method="post" action="index.php?m=index&f=backshop&a=changecomcom" class="mui-input-group" style="margin-top: 45px;">
    <div class="mui-input-row">
        <label >商品图片</label>
        <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['coimg'];?>
" alt="" height="100%" style="margin-left: 20px">
        <label >
            <a href="index.php?m=index&f=backshop&a=changecomimg&coid=<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['coid'];?>
">点击修改</a>
        </label>

    </div>
    <div class="mui-input-row">
        <label>商品名称</label>
        <input name="coname" type="text" class="mui-input-clear" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['coname'];?>
">
    </div>
    <div class="mui-input-row">
        <label>商品价格</label>
        <input name="coprice" required type="text" class="mui-input-clear" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['coprice'];?>
">
    </div>
    <div class="mui-input-row">
        <label>简介</label>
        <input name="conote" required type="text" class="mui-input-clear" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['conote'];?>
">
        <input type="hidden" name="coid" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['coid'];?>
">
    </div>

    <div class="mui-input-row">
        <label>推荐位</label>
        <select name="srec" >
            <option value="3">猜你喜欢</option>
            <option value="4">新品推荐</option>
            <option value="5">当下热门</option>
        </select>
    </div>
    <div class="mui-input-row" style="text-align: center" >
        <button type="submit" value="修改" class="mui-btn mui-btn-primary" style="float: none; display: inline-block" >修改</button>
    </div>
</form>

</body>
</html><?php }
}
