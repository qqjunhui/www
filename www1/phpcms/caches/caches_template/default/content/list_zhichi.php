<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/z-connect.css"/>
<script src="<?php echo JS_PATH;?>myjs/z-l-t.js"></script>
<div style="height:400px">
    <div class="z-banner">
        <a class="first-two tutu"></a>
        <a class="tutu"></a>
        <a class="tutu"></a>
        <a class="tutu"></a>
        <a class="diandian">
            <div class="first-one changtiao"></div>
            <div class="changtiao"></div>
            <div class="changtiao"></div>
            <div class="changtiao"></div>
        </a>
    </div>
</div>
</div>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=35187b5267380d6c4160a4ded64d0872&action=lists&siteid=%24siteid&catid=%24catid&order=listorder+ASC&num=25&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'catid'=>$catid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'25',));}?>
<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
<?php echo $v['content'];?>
<?php $n++;}unset($n); ?>
<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php include template("content","footer"); ?>