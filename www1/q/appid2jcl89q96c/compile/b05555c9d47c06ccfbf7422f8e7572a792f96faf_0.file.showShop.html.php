<?php
/* Smarty version 3.1.30, created on 2017-07-15 05:54:03
  from "/Applications/MAMP/htdocs/eatapp2/template/index/showShop.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596991dbba2fe0_57781549',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b05555c9d47c06ccfbf7422f8e7572a792f96faf' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp2/template/index/showShop.html',
      1 => 1500090843,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596991dbba2fe0_57781549 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加商店</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/mui.min.css">
</head>
<body>
<header class="mui-bar mui-bar-nav">
    <a onclick="history.go(-1)" class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">商铺</h1>
</header>

<form action="index.php?m=index&f=backshop&a=modifyshop" class="mui-input-group" method="post" style="margin-top: 45px;">
    <div class="mui-input-row">
        <label>名称</label>
        <input disabled name="sname" type="text" class="mui-input-clear" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['sname'];?>
（不可修改）">
    </div>
    <div class="mui-input-row">
        <label>所属分类</label>
        <input disabled name="sname" type="text" class="mui-input-clear" value="<?php echo $_smarty_tpl->tpl_vars['lname']->value[0]['lname'];?>
（不可修改）">
    </div>
    <div class="mui-input-row">
        <label >图片</label>
            <img src="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['simg'];?>
" alt="" height="100%" style="margin-left: 20px">
        <label >
            <a href="index.php?m=index&f=backshop&a=changeimg">
            点击修改
            </a>
        </label>
    </div>
    <div class="mui-input-row">
        <label>地址</label>
        <input disabled name="saddress" required type="text" class="mui-input-clear" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['saddress'];?>
（不可修改）">
    </div>
    <div class="mui-input-row">
        <label>中文简介</label>
        <input name="snotes" required type="text" class="mui-input-clear" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['snotes'];?>
">
    </div>
    <div class="mui-input-row">
        <label>英文简介</label>
        <input name="senotes" required type="text" class="mui-input-clear" value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['senotes'];?>
">
    </div>
    <div class="mui-input-row">
    <label>起送</label>
        <select name="srules" id="">
            <option value="<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['srules'];?>
">现在满¥<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['srules'];?>
起送</option>
            <option value="15">¥15</option>
            <option value="25">¥25</option>
            <option value="35">¥35</option>
        </select>
    </div>
    <div class="mui-input-row">
        <label>商品分类</label>
        <select name="lid">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slist']->value, 'list');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['list']->value) {
?>
            <option value=""><?php echo $_smarty_tpl->tpl_vars['list']->value['slname'];?>
</option>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </select>
    </div>
    <div class="mui-input-row">
        <label>推荐位</label>
        <select name="srec" >
            <option value="2">轮播</option>
            <option value="3">猜你喜欢</option>
            <option value="4">新品推荐</option>
            <option value="5">当下热门</option>
        </select>
    </div>
    <div class="mui-input-row" style="text-align: center">
        <a href="index.php?m=index&f=backshop&a=addslist&id=<?php echo $_smarty_tpl->tpl_vars['arr']->value[0]['sid'];?>
"  class="mui-btn mui-btn-primary" style="float: none;width: 80px;">添加分类</a>
        <button type="submit" value="修改" class="mui-btn mui-btn-primary" style="float: none; display: inline-block" >修改</button>
        <a href="index.php?m=index&f=backshop&a=showcom" class="mui-btn mui-btn-primary" style="float: none;width: 80px;">查看商品</a>
    </div>
</form>
</body>

</html><?php }
}
