<?php
/* Smarty version 3.1.30, created on 2017-07-15 05:53:11
  from "/Applications/MAMP/htdocs/eatapp2/template/index/zhc-success.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_596991a70295e5_77106565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df33db18562d809444d3c2804ea4c8a206c37b0f' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp2/template/index/zhc-success.html',
      1 => 1500090790,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_596991a70295e5_77106565 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title></title>
	</head>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/common.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/common.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/zhc-success.css"/>
	<body>
		<header>
			<img src="<?php echo IMG_PATH;?>
/zhc-img/images/fitelbtn_02.png" alt="" />
		</header>
		<section class="success-back">
			<p>2675899029</p>
			<p>80</p>
		</section>
		<section class="success-btn">
			<a href="index.php" style="display: block;width: 100%;height: 100%;"></a>
		</section>
	</body>
</html>
<?php echo '<script'; ?>
>
	$("header img").first().on("touchend",function(){
   		window.history.back();
   })
<?php echo '</script'; ?>
><?php }
}
