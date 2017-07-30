<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title></title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/common.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/header.css" />
    <script src='<?php echo JS_PATH;?>myjs/jquery.js'></script>
    <script src='<?php echo JS_PATH;?>myjs/bootstrap.js'></script>
</head>
<body>


<ul>
    <li>
        <a class="nav-div-a" href="<?php echo siteurl($siteid);?>">首页</a>
    </li>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ca48cddc8b74d5afe425f00063b1386d&action=category&siteid=%24siteid&catid=0&order=listorder+ASC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$siteid,'catid'=>'0','order'=>'listorder ASC','limit'=>'25',));}?>
    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
    <li>
    <a  class="nav-div-a" href="<?php echo $v['url'];?>">
    <?php echo $v['catname'];?>
    </a>
    </li>
    <?php $n++;}unset($n); ?>
    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</ul>


<div class="container-fluid">
    <div class="container-fluid backg">
        <div class="container">
            <div class="row">
                <div class="z-nav hidden-xs hidden-sm hidden-md col-lg-12">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=250730a5703574c10398eaf6cb9a41c5&action=category&siteid=%24content&catid=0&order=listorder+ASC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$content,'catid'=>'0','order'=>'listorder ASC','limit'=>'10',));}?>
                    <a class="<?php if(!$catid):?> first <?php endif;?>" href="<?php echo siteurl($siteid);?>">首页</a>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    <?php $i=0?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <a href="<?php echo $v['url'];?>" class="<?php if($catid==$v[catid]):?> first <?php endif;?>"><?php echo $v['catname'];?></a>
                    <?php if($i==2):?>
                    <img src="<?php echo IMG_PATH;?>img/logo.png" alt=""/>
                    <?php endif;?>
                    <?php $i++?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid backgr hidden-lg">
        <div class="row backgro">
            <div class="col-xs-2 col-sm-2 col-md-2 hidden-lg z-img-box">
                <img src="<?php echo IMG_PATH;?>img/qbailogo.png" class=" z-nav-1">
            </div>
            <div class="col-xs-8 col-sm-8 col-md-8 hidden-lg dingwei" >
                <input class="z-nav-2" type="text">
                <span class="hidden-lg z-nav-g">&#xe759;</span>
            </div>

            <div class="col-xs-2 col-sm-2 col-md-2 hidden-lg z-nav-3">&#xe66b;</div>
        </div>
    </div>
</div>