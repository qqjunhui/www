<?php
/* Smarty version 3.1.30, created on 2017-07-14 03:34:47
  from "/Applications/MAMP/htdocs/eatapp2/template/admin/jump.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59681fb7be0618_56880191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '82aa16ef7005a3f7e6d19ca811ae1e6ac8a2bddc' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp2/template/admin/jump.html',
      1 => 1499887570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59681fb7be0618_56880191 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="<?php echo @constant('CSS_PATH');?>
/bootstrap.min.css">
</head>
<style>
    .box{
        width:300px;
        height:200px;
        position: fixed;
        top:0;
        left: 0;
        right:0;
        bottom: 0;
        margin:auto;
        font-size: 20px;
        padding:6px;
    }
    a{
        color: #fff;
    }
    span{
        color: red;
    }
</style>
<body>
<div class="box bg-primary">
    <p class=""><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
将于 <span>3</span>s后跳转，<a href="
<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
">立即跳转</a></p>
</div>
</body>
<?php echo '<script'; ?>
>
    var span=document.querySelector("span");
    var i=3;
    var a=document.querySelector('a');
    var href=a.href;
    var t=setInterval(function(){
        i--;
        if(i==0){
            clearInterval(t);
            if (href==""){
                top.location.href=href;
            }else{
                self.location.href=document.querySelector("a").href
            }
        }
        document.querySelector("span").innerHTML=i;
    },1000);
    a.onclick=function (e) {
        e.preventDefault();
        if (href==""){
            top.location.href=href;
        }else{
            self.location.href=document.querySelector("a").href
        }
    };
<?php echo '</script'; ?>
>
</html><?php }
}
