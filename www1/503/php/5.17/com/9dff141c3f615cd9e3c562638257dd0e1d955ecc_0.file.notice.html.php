<?php
/* Smarty version 3.1.30, created on 2017-05-22 03:45:37
  from "D:\html\wamp\www\503\php\5.17\template\admin\notice.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592242c17a2297_67794569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9dff141c3f615cd9e3c562638257dd0e1d955ecc' => 
    array (
      0 => 'D:\\html\\wamp\\www\\503\\php\\5.17\\template\\admin\\notice.html',
      1 => 1495413846,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592242c17a2297_67794569 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>提示</title>
    <link rel="stylesheet" href="../static/css/common.css">
</head>
<style>
    div.box{
        height:300px;
        width:500px;
        position: absolute;
        left:0;
        right:0;
        top:0;
        bottom:0;
        margin:auto;
        box-shadow: 0 0 3px 1px rgba(255,0,254,.6);
    }
    div.nei{
        height:50%;
        width:100%;
        text-align: center;
        margin-top:70px;
    }
    h3{
        font-size:14px;
        font-weight: 200;
    }
    p:first-of-type{
        margin-top:30px;
        font-size:16px;
    }
    p:last-of-type{
        margin-top:10px;
    }
    p:last-of-type span a{
        color:#3F00FF;
        text-decoration:underline;
    }
    p:last-of-type span{
        color:#3F00FF;
        font-weight:bold;
    }
</style>
<body>
<div class="box">
    <div class="nei">
        <h3>温馨提示</h3>
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
        <p>浏览器将在 <span>3</span> 秒后自动跳转 <span><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">点击跳转</a></span></p>
    </div>
</div>


</body>
</html>
<?php echo '<script'; ?>
>
    let span=document.querySelector('span');
    let zhuan=document.querySelector('a');
    let url=zhuan.href;
    zhuan.onclick=function () {
         location.href=url;
    };
    let i=3;
    let t=setInterval(function () {
        i--;
        if(i==0){
            location.href=url;
            clearInterval(t);
        }else{
            span.innerHTML=i;
        }
    },1000)
<?php echo '</script'; ?>
><?php }
}
