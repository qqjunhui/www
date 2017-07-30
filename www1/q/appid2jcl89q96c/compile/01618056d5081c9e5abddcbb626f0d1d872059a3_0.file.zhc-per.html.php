<?php
/* Smarty version 3.1.30, created on 2017-07-15 05:52:10
  from "/Applications/MAMP/htdocs/eatapp2/template/index/zhc-per.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5969916abf8724_27056744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01618056d5081c9e5abddcbb626f0d1d872059a3' => 
    array (
      0 => '/Applications/MAMP/htdocs/eatapp2/template/index/zhc-per.html',
      1 => 1500090730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5969916abf8724_27056744 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>par</title>
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
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/zhc-par.css" />
	<body>
		<header>
			<img src="<?php echo IMG_PATH;?>
/qyh-img/q-back.png"/>
		</header>
		<main>
			<div class="zhifubox">
				<h3>第三方  支付筛选</h3>
				<p>DISANFANGZHIFUSHAIXUAN</p>
				<div class="select">
					<img src="<?php echo IMG_PATH;?>
/zhc-img/images/vx_03.png" alt="" />
					<img src="<?php echo IMG_PATH;?>
/zhc-img/images/vx_05.png" alt="" />
				</div>
				<div class="zhifutitle"></div>
				<div class="zflist">
					<a href="javascript:;" style="display: block; width: 100%;height: 100%;">
						<div class="zfhead">
							<img src="<?php echo IMG_PATH;?>
/zhc-img/images/zfhead_14.png" alt="" />
						</div>
						<div class="zflist_word">
							<div>选择银行卡完成支付(暂未开通)</div>
							<div>使用银行卡完成支付 <span>上次使用过招商银行卡</span></div>
						</div>
						<div class="zfnum">
							0
						</div>
					</a>
				</div>
				<div class="zflist">
					<div class="zfhead">
						<img src="<?php echo IMG_PATH;?>
/zhc-img/images/zfa_14.png" alt="" />
					</div>
					<div class="zflist_word">
						<div>本地钱包完成支付（暂未开通）</div>
						<div>本地钱包可享受更多折扣 <span>购物后即享优惠</span></div>
					</div>
					<div class="zfnums"></div>
				</div>
				<div class="zflist">
					<div class="zfhead">
						<img src="<?php echo IMG_PATH;?>
/zhc-img/images/zfa_17.png" alt="" />
					</div>
					<a href="index.php?m=index&f=buy&a=success" class="zflist_word">
						<div>货到付款</div>
						<div>收货时完成付款<span>部分产品加收配送费用 </span></div>
					</a>
					<div class="zfnums"></div>
				</div>
			</div>
		</main>
	</body>
</html>
<?php echo '<script'; ?>
>
	$("header img").on("touchend",function(){
   		window.history.back();
   })
<?php echo '</script'; ?>
><?php }
}
