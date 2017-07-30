<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/c-xq.css">
<script src="<?php echo JS_PATH;?>myjs/cycle.js"></script>
<div style="height:440px" >
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
<div class="container">
    <div class="row">
        <div class="c-crumbs">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5d95345e90e69af2af8e24de41f52606&action=position&posid=14&order=listorder+ASC&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'listorder ASC','moreinfo'=>'1','limit'=>'20',));}?>
            <p class="c-pan"><a href="<?php echo siteurl($siteid);?>">首页</a> <span> &gt; </span> <?php echo catpos($catid);?> 主要展示企业医疗设备或先进的医疗技术</p>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=35187b5267380d6c4160a4ded64d0872&action=lists&siteid=%24siteid&catid=%24catid&order=listorder+ASC&num=25&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$siteid,'catid'=>$catid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'25',));}?>
        <?php echo $content;?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<div class="c-page">
    <div class="page-left"><strong>上一篇：</strong><a href="<?php echo $previous_page['url'];?>"><?php echo $previous_page['title'];?></a></div>
    <div class="page-right"><strong>下一篇：</strong><a href="<?php echo $next_page['url'];?>"><?php echo $next_page['title'];?></a></div>
</div>
<div class="mem col-lg-12  col-sm-12"><span>那些回忆，值得细细品尝回味。</span>
    <p>Those memories, it is worth savoring the aftertaste</p>
    <p>With the wireless</p>
</div>
</div>
</div>
<?php include template("content","footer"); ?>