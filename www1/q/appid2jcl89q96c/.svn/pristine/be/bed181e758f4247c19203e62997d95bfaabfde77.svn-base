<?php
/* Smarty version 3.1.30, created on 2017-07-15 05:53:22
  from "/Applications/MAMP/htdocs/eatapp2/template/index/showcom.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596991b2202e71_99645428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99679c2bfa68ab10663847dbf04f19b55fd8e746' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp2/template/index/showcom.html',
      1 => 1500010588,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596991b2202e71_99645428 (Smarty_Internal_Template $_smarty_tpl) {
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
    <h1 class="mui-title">查看商品</h1>
</header>
<ul class="mui-table-view" style="margin-top: 50px;">
    <?php if ($_smarty_tpl->tpl_vars['arr']->value[0] == array()) {?>
        <h4 style="background-color: #fff;text-align: center;padding: 10px 0;">暂无商品</h4>
    <?php } else {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['slist']->value, 'sl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sl']->value) {
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>

    <li class="mui-table-view-cell mui-media">
        <a href="index.php?m=index&f=backshop&a=changecom&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
">
            <img class="mui-media-object mui-pull-left" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['coimg'];?>
">
            <div class="mui-media-body">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value['coname'];?>

                <p class='mui-ellipsis'><?php echo $_smarty_tpl->tpl_vars['v']->value['conote'];?>
</p>
                <div cid="<?php echo $_smarty_tpl->tpl_vars['v']->value['coid'];?>
" class="del mui-btn mui-btn-danger mui-btn-outlined">删除</div>
            </div>
        </a>
    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <?php }?>
</ul>
<div class="message">
    <p>删除成功</p>
</div>
<div class="mui-input-row" style="text-align: center" >
    <a href="index.php?m=index&f=backshop&a=addcom" class="mui-btn mui-btn-primary" style="float: none;width: 100px;">添加商品</a>
</div>
</body>
<style>
    .message{
        position: fixed;
        width:220px;
        height:80px;
        text-align: center;
        background: #fff;
        box-shadow: 0 2px 5px #666;
        top:0;
        left:0;
        bottom:0;
        right:0;
        margin:auto;
        border-radius: 4px;
        display: none;
    }
    .message p{
        width:100%;
        height:100%;
        line-height: 80px;
        font-size: 16px;
        color: #000;
    }
</style>
<?php echo '<script'; ?>
>

    $('.del').on('click',function (e) {
        var coid=$(this).attr("cid");
        var obj=$(this);
        $.ajax({
            url:"index.php?m=index&f=backshop&a=delcom",
            data:'coid='+coid,
            method:'post',
            success:function (e) {
                if (e=="ok"){
                    $(".message").fadeIn(400).delay(800).fadeOut(500);
                    obj.parents('li').remove();
                    if($(".del").length==0){
                        $(`<h4 style="background-color: #fff;text-align: center;padding: 10px 0;">暂无商品</h4>`).appendTo("ul");
                    }
                }else{
                    $(".message").fadeIn(400).children("p").html("删除失败").eq().delay(200).fadeOut(200);
                }
            },

        })
    })

<?php echo '</script'; ?>
>
</html><?php }
}
