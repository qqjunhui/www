<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/l-z-l-t2.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>mycss/l-normalize.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>mycss/l-component.css" />
<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>mycss//l-demo.css" />
<link rel="stylesheet" href="../phpcms/statics/css/mycss/l-tsms.css">
<script src="<?php echo JS_PATH;?>myjs/lz-l-t.js"></script>
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
        <div class="col-lg-12 aa col-sm-12 aa">
            <span class="bb">RECOMMENDED CHARACTERISICS</span>
            <p class="l-c">特 / 色 / 推 / 荐</p>
            <div class="l-cc">
                <div class='cs'></div>
            </div>
            <p class="l-s">OURT SIGNATURE DISHES</p>
        </div>
        <div class="col-lg-12 bbb hidden-xs">
            <div class="ljb-qqq">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=511cdc44d114da3fa667f9c2770d32b8&action=category&siteid=%24content&catid=%24catid&order=listorder+ASC&num=25&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('siteid'=>$content,'catid'=>$catid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'25',));}?>
                <?php $i=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php if($i==0):?>
                <p class="l-pp first"><?php echo $v['catname'];?></p>
                <?php else:?>
                <p class="l-pp"><?php echo $v['catname'];?></p>
                <?php endif;?>
                <?php $i++?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="olm sss">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=0b32d026754589e6595a797b582d265d&action=lists&siteid=%24content&moreinfo=1&catid=21&order=listorder+ASC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$content,'moreinfo'=>'1','catid'=>'21','order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <div class="col-lg-4 col-sm-6 bbbb diyi">
                <div class="grid">
                    <figure class="effect-oscar fg">
                        <div class='l-k'>
                            <img src="<?php echo $v['thumb'];?>" alt="" >
                        </div>
                        <figcaption>
                            <h2><?php echo $v['one'];?> <span><?php echo $v['two'];?></span></h2>
                            <p><?php echo $v['three'];?><br><?php echo $v['four'];?></p>
                            <a href="<?php echo $v['url'];?>" target="_blank">View more</a>
                        </figcaption>
                    </figure>
                    <div class="lop">
                        <p class="l-one"><?php echo $v['title'];?></p>
                        <p class="l-two"><?php echo $v['english.txt'];?></p>
                        <p class="l-three">CERTUFED</p>
                    </div>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="olm">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f623a1ac8c953758a2d6de193bb57dde&action=lists&siteid=%24content&moreinfo=1&catid=22&order=listorder+ASC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$content,'moreinfo'=>'1','catid'=>'22','order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <div class="col-lg-4 col-sm-6 bbbb diyi">
                <div class="grid">
                    <figure class="effect-oscar fg">
                        <div class='l-k'>
                            <img src="<?php echo $v['thumb'];?>" alt="" >
                        </div>
                        <figcaption>
                            <h2><?php echo $v['one'];?> <span><?php echo $v['two'];?></span></h2>
                            <p><?php echo $v['three'];?><br><?php echo $v['four'];?></p>
                            <a href="<?php echo $v['url'];?>" target="_blank">View more</a>
                        </figcaption>
                    </figure>
                    <div class="lop">
                        <p class="l-one"><?php echo $v['title'];?></p>
                        <p class="l-two"><?php echo $v['english.txt'];?></p>
                        <p class="l-three">CERTUFED</p>
                    </div>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="olm">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b4b404773ad34f12e66fac967b000db3&action=lists&siteid=%24content&moreinfo=1&catid=23&order=listorder+ASC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$content,'moreinfo'=>'1','catid'=>'23','order'=>'listorder ASC','limit'=>'25',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <div class="col-lg-4 col-sm-6 bbbb diyi">
                <div class="grid">
                    <figure class="effect-oscar fg">
                        <div class='l-k'>
                            <img src="<?php echo $v['thumb'];?>" alt="" >
                        </div>
                        <figcaption>
                            <h2><?php echo $v['one'];?> <span><?php echo $v['two'];?></span></h2>
                            <p><?php echo $v['three'];?><br><?php echo $v['four'];?></p>
                            <a href="<?php echo $v['url'];?>" target="_blank">View more</a>
                        </figcaption>
                    </figure>
                    <div class="lop">
                        <p class="l-one"><?php echo $v['title'];?></p>
                        <p class="l-two"><?php echo $v['english.txt'];?></p>
                        <p class="l-three">CERTUFED</p>
                    </div>
                </div>
            </div>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
    </div>
</div>
<div class="col-lg-12 boo col-sm-12 boo">
    <div class="po">
        <p class="lkj">那些回忆,值得细细品尝和回味</p>
        <p class="lkh">Those memories, it is worth savoring the aftertaste</p>
        <p class="lkg">With the wireless</p>
    </div>
</div>
<?php include template("content","footer"); ?>