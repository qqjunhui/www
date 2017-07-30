<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/c-xwdt.css">
<script src="<?php echo JS_PATH;?>myjs/cycle.js"></script>
<script src="<?php echo JS_PATH;?>myjs/c-xwdt.js"></script>

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

<div class="container">
    <div class="row">
        <div class=" col-sm-12 col-lg-12 c-title">
            <p>The current dynamic news</p>
            <img src="{IMG PATH}img/xw9.PNG" alt="">
            <p>Attention all the time</p>
        </div>
        <ul class="  col-sm-12 col-lg-10 col-lg-push-1 c-item-list">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=fdf6c87983f8c26733a2cba3ae4066bd&action=lists&siteid=%24siteid&catid=%24catid&order=listorder+ASC&num=6&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('siteid'=>$siteid,'catid'=>$catid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('siteid'=>$siteid,'catid'=>$catid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <li class="c-item">
                    <a href="<?php echo $v['url'];?>">
                        <div class="imgbox col-md-5 col-sm-5 col-xs-12">
                            <img src="<?php echo $v['thumb'];?>">
                        </div>
                        <div class="c-item-cont col-md-7 col-sm-7">
                            <div class="c-author">
                                <span><?php echo $v['keywords'];?></span>
                                <span><?php echo $v['time'];?></span>
                            </div>
                            <p class="c-item-title">
                                <?php echo $v['title'];?>
                                <span class="c-time"><?php echo $v['time'];?></span>
                            </p>
                            <p class="c-item-text">
                                <?php echo $v['description'];?>
                            </p>
                            <p class="c-item-english">
                                <?php echo $v['english.txt'];?>
                            </p>
                        </div>
                    </a>
                </li>
            <?php $n++;}unset($n); ?>

        </ul>
        <div class="c-foot col-lg-12 col-sm-12">
            <a href="">
                <img src="{IMG PATH}img/xws.PNG" alt="">
            </a>
        </div>
        <div class="page  col-lg-6 col-lg-push-3 col-md-6 col-md-push-3 col-sm-8 col-sm-push-2">
           <?php echo $pages;?>
        </div>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        <div class="mem col-lg-12  col-sm-12">
            <span>那些回忆，值得细细品尝回味。</span>
            <p>Those memories, it is worth savoring the aftertaste</p>
            <p>With the wireless</p>
        </div>
    </div>
</div>
<?php include template("content","footer"); ?>