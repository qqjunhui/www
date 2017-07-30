<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/z-join.css">
<script src="<?php echo JS_PATH;?>myjs/z-l-join.js"></script>
<div class="container-fluid">
    <div style="height:400px" class="hidden-xs hidden-sm hidden-md">
        <div class="z-banner">
            <a class="first-two tutu">
                <img class="qbanner1" src="" alt=""/>
            </a>
            <a class="tutu">
                <img class="qbanner1" src="" alt=""/>
            </a>
            <a class="tutu">
                <img class="qbanner1" src="" alt=""/>
            </a>
            <a class="tutu">
                <img class="qbanner1" src="" alt=""/>
            </a>
            <div class=" hidden-xs hidden-sm hidden-md dingwei1" >
                <input class="z-nav-4" type="text">
                <span class=" z-nav-s">&#xe759;</span>
            </div>
            <a class="diandian">
                <div class="first-one changtiao"></div>
                <div class="changtiao"></div>
                <div class="changtiao"></div>
                <div class="changtiao"></div>
            </a>
        </div>
    </div>
    <div style="height:400px" class="hidden-lg">
        <div class="z-banner2 ">
            <div class="first-two tutu2">
                <img class="qbanner2" src="" alt=""/>
            </div>
            <div class="tutu2">
                <img class="qbanner2" src="" alt=""/>
            </div>
            <div class="tutu2">
                <img class="qbanner2" src="" alt=""/>
            </div>
            <div class="tutu2">
                <img class="qbanner2" src="" alt=""/>
            </div>
            <div class="z-daohang hidden-xs">
                <a href="">首页</a>
                <a href="">支持保障</a>
                <a href="">特色面食</a>
                <a href="">新闻动态</a></br>
                <a href="">品牌推广</a>
                <a href="">品牌故事</a>
                <a href="">
                    加盟政策
                    <div></div>
                </a>
                <a href="">联系我们</a>
            </div>
            <a class="diandian2">
                <div class="first-one changtiao2"></div>
                <div class="changtiao2"></div>
                <div class="changtiao2"></div>
                <div class="changtiao2"></div>
            </a>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <!--分类-->
        <div class="z-titleb col-lg-12 hidden-xs hidden-sm hidden-md">
            <p>Recommended characteristics</p>
            <p>加 / 盟 / 政 / 策</p>
            <div>
                <div></div>
            </div>
            <p>Our signature dishes</p>
        </div>
        <div class="z-titles col-xs-12 col-sm-12 col-md-12 hidden-lg">
            <p>Recommended characteristics</p>
            <p>加 / 盟 / 政 / 策</p>
            <div>
                <div></div>
            </div>
            <p>Our signature dishes</p>
        </div>
        <div class="col-lg-12 hidden-xs hidden-sm hidden-md z-fenleib">
            <div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=50955854f6cfba288c4babda996f14d7&action=category&catid=%24catid&order=listorder+ASC&num=10&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'10',));}?>
                <?php $i=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php if($i==0):?>
                <span class="first z-zi"><?php echo $v['catname'];?></span>
                <?php else:?>
                <span> ·</span>
                <span class="z-zi"><?php echo $v['catname'];?></span>
                <?php endif;?>
                <?php $i++?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="col-xs-12 hidden-lg z-fenleis">
            <div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=50955854f6cfba288c4babda996f14d7&action=category&catid=%24catid&order=listorder+ASC&num=10&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>'10',));}?>
                <?php $i=0?>
                <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                <?php if($i==0):?>
                <span class="first z-zi"><?php echo $v['catname'];?></span>
                <?php else:?>
                <span> ·</span>
                <span class="z-zi"><?php echo $v['catname'];?></span>
                <?php endif;?>
                <?php $i++?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
    </div>
</div>
<div class="zhan hidden-sm hidden-xs hidden-md">
    <div class="container ">
        <div class="row z-xuanxiangka">
            <div class="container dian  first">
                <div class="row">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b70b4abf64e599f8c6d56f9624aa019d&action=lists&siteid=%24content&moreinfo=1&catid=24&order=listorder+ASC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$content,'moreinfo'=>'1','catid'=>'24','order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $i=0;?>
                    <?php $j=0;?>
                    <?php $m=0;?>
                    <?php $n=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <?php $img=string2array($v[tupian]);?>
                    <div class="z-content-l col-lg-7 hidden-xs hidden-sm hidden-md">
                        <div class="z-bigimg z-bigimg1">
                            <?php $n=1;if(is_array($img)) foreach($img AS $s) { ?>
                            <?php if($i>3):?>
                            <?php if($j==0):?>
                            <img class="first" src="<?php echo $s['url'];?>" alt=""/>
                            <?php else:?>
                            <img src="<?php echo $s['url'];?>" alt=""/>
                            <?php endif;?>
                            <?php $j++?>
                            <?php endif;?>
                            <?php $i++?>
                            <?php $n++;}unset($n); ?>
                        </div>
                        <div class="z-smallimg z-smallimg1">
                            <?php $n=1;if(is_array($img)) foreach($img AS $a) { ?>
                            <?php if($n<9):?>
                            <?php if($m==0):?>
                            <img class="first" src="<?php echo $a['url'];?>" alt=""/>
                            <?php else:?>
                            <img src="<?php echo $a['url'];?>" alt=""/>
                            <?php endif;?>
                            <?php $m++?>
                            <?php endif;?>
                            <?php $n++?>
                            <?php $n++;}unset($n); ?>
                        </div>
                    </div>
                    <div class="z-content-r col-lg-5 hidden-xs hidden-sm hidden-md">
                        <p><?php echo $v['dianming'];?></p>
                        <p>
                            <?php echo $v['money'];?>
                            <span><?php echo $v['rmb'];?></span>
                        </p>
                        <p><?php echo $v['jieshao'];?></p>
                        <p><?php echo $v['englishjs'];?></p>
                        <p><?php echo $v['template'];?></p>
                        <p><?php echo $v['jianmian'];?></p>
                        <div>立即加入</div>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
            <div class="container dian">
                <div class="row">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=60cfcdb7c7c2843001a2ca992d9121f6&action=lists&siteid=%24content&moreinfo=1&catid=25&order=listorder+ASC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$content,'moreinfo'=>'1','catid'=>'25','order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $i=0;?>
                    <?php $j=0;?>
                    <?php $m=0;?>
                    <?php $n=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <?php $img=string2array($v[tupian]);?>
                    <div class="z-content-l col-lg-7 hidden-xs hidden-sm hidden-md">
                        <div class="z-bigimg z-bigimg2">
                            <?php $n=1;if(is_array($img)) foreach($img AS $s) { ?>
                            <?php if($i>3):?>
                            <?php if($j==0):?>
                            <img class="first" src="<?php echo $s['url'];?>" alt=""/>
                            <?php else:?>
                            <img src="<?php echo $s['url'];?>" alt=""/>
                            <?php endif;?>
                            <?php $j++?>
                            <?php endif;?>
                            <?php $i++?>
                            <?php $n++;}unset($n); ?>
                        </div>
                        <div class="z-smallimg z-smallimg2">
                            <?php $n=1;if(is_array($img)) foreach($img AS $a) { ?>
                            <?php if($n<9):?>
                            <?php if($m==0):?>
                            <img class="first" src="<?php echo $a['url'];?>" alt=""/>
                            <?php else:?>
                            <img src="<?php echo $a['url'];?>" alt=""/>
                            <?php endif;?>
                            <?php $m++?>
                            <?php endif;?>
                            <?php $n++?>
                            <?php $n++;}unset($n); ?>
                        </div>
                    </div>
                    <div class="z-content-r col-lg-5 hidden-xs hidden-sm hidden-md">
                        <p><?php echo $v['dianming'];?></p>
                        <p>
                            <?php echo $v['money'];?>
                            <span><?php echo $v['rmb'];?></span>
                        </p>
                        <p><?php echo $v['jieshao'];?></p>
                        <p><?php echo $v['englishjs'];?></p>
                        <p><?php echo $v['template'];?></p>
                        <p><?php echo $v['jianmian'];?></p>
                        <div>立即加入</div>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
            <div class="container dian">
                <div class="row">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1b49a3cf6c4757743030b9db9298b121&action=lists&siteid=%24content&moreinfo=1&catid=26&order=listorder+ASC&num=25\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('siteid'=>$content,'moreinfo'=>'1','catid'=>'26','order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $i=0;?>
                    <?php $j=0;?>
                    <?php $m=0;?>
                    <?php $n=0;?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
                    <?php $img=string2array($v[tupian]);?>
                    <div class="z-content-l col-lg-7 hidden-xs hidden-sm hidden-md">
                        <div class="z-bigimg z-bigimg3">
                            <?php $n=1;if(is_array($img)) foreach($img AS $s) { ?>
                            <?php if($i>3):?>
                            <?php if($j==0):?>
                            <img class="first" src="<?php echo $s['url'];?>" alt=""/>
                            <?php else:?>
                            <img src="<?php echo $s['url'];?>" alt=""/>
                            <?php endif;?>
                            <?php $j++?>
                            <?php endif;?>
                            <?php $i++?>
                            <?php $n++;}unset($n); ?>
                        </div>
                        <div class="z-smallimg z-smallimg3">
                            <?php $n=1;if(is_array($img)) foreach($img AS $a) { ?>
                            <?php if($n<9):?>
                            <?php if($m==0):?>
                            <img class="first" src="<?php echo $a['url'];?>" alt=""/>
                            <?php else:?>
                            <img src="<?php echo $a['url'];?>" alt=""/>
                            <?php endif;?>
                            <?php $m++?>
                            <?php endif;?>
                            <?php $n++?>
                            <?php $n++;}unset($n); ?>
                        </div>
                    </div>
                    <div class="z-content-r col-lg-5 hidden-xs hidden-sm hidden-md">
                        <p><?php echo $v['dianming'];?></p>
                        <p>
                            <?php echo $v['money'];?>
                            <span><?php echo $v['rmb'];?></span>
                        </p>
                        <p><?php echo $v['jieshao'];?></p>
                        <p><?php echo $v['englishjs'];?></p>
                        <p><?php echo $v['template'];?></p>
                        <p><?php echo $v['jianmian'];?></p>
                        <div>立即加入</div>
                    </div>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--xiappim-->
<div class="qcheck hidden-lg col-xs-12">
    <div class="contianer-fluid hidden-lg imgbox1 imgbox12 first">
        <img class="z-x-banner z-x-banner4 first-two" src="" alt=""/>
        <img class="z-x-banner z-x-banner4" src="" alt=""/>
        <img class="z-x-banner z-x-banner4" src="" alt=""/>
        <img class="z-x-banner z-x-banner4" src="" alt=""/>
        <a class="diandian1">
            <div class="first-one changtiao1 changtiao4"></div>
            <div class="changtiao1 changtiao4"></div>
            <div class="changtiao1 changtiao4"></div>
            <div class="changtiao1 changtiao4"></div>
        </a>
    </div>
    <div class="contianer-fluid hidden-lg imgbox1 imgbox13">
        <img class="z-x-banner first-two z-x-banner5" src="" alt=""/>
        <img class="z-x-banner z-x-banner5" src="" alt=""/>
        <img class="z-x-banner z-x-banner5" src="" alt=""/>
        <img class="z-x-banner z-x-banner5" src="" alt=""/>
        <a class="diandian1">
            <div class="first-one changtiao1 changtiao5"></div>
            <div class="changtiao1 changtiao5"></div>
            <div class="changtiao1 changtiao5"></div>
            <div class="changtiao1 changtiao5"></div>
        </a>
    </div>
    <div class="contianer-fluid hidden-lg imgbox1 imgbox14">
        <img class="z-x-banner first-two z-x-banner6" src="" alt=""/>
        <img class="z-x-banner z-x-banner6" src="" alt=""/>
        <img class="z-x-banner z-x-banner6" src="" alt=""/>
        <img class="z-x-banner z-x-banner6" src="" alt=""/>
        <a class="diandian1">
            <div class="first-one changtiao1 changtiao6"></div>
            <div class="changtiao1 changtiao6"></div>
            <div class="changtiao1 changtiao6"></div>
            <div class="changtiao1 changtiao6"></div>
        </a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class=" col-lg-12 hidden-xs hidden-sm hidden-md">
            <p class="z-shopb">店铺情况</p>
        </div>
        <p class="z-shops col-xs-12 col-sm-12 col-md-12 hidden-lg">店铺情况</p>
        <div class="z-table col-xs-6 col-sm-2">总投资款</div>
        <div class="z-table col-xs-6 col-sm-4">5.38万</div>
        <div class="z-table col-xs-6 col-sm-2">物流配送</div>
        <div class="z-table col-xs-6 col-sm-4">公司供货</div>
        <div class="z-table col-xs-6 col-sm-2">总投资款</div>
        <div class="z-table col-xs-6 col-sm-4">5.38万</div>
        <div class="z-table col-xs-6 col-sm-2">物流配送</div>
        <div class="z-table col-xs-6 col-sm-4">公司供货</div>
        <div class="z-table col-xs-6 col-sm-2">总投资款</div>
        <div class="z-table col-xs-6 col-sm-4">5.38万</div>
        <div class="z-table col-xs-6 col-sm-2">物流配送</div>
        <div class="z-table col-xs-6 col-sm-4">公司供货</div>
        <div class="z-table col-xs-6 col-sm-2">总投资款</div>
        <div class="z-table col-xs-6 col-sm-4">5.38万</div>
        <div class="z-table col-xs-6 col-sm-2">物流配送</div>
        <div class="z-table col-xs-6 col-sm-4">公司供货</div>
        <div class="col-lg-12 hidden-xs hidden-sm hidden-md">
            <p class="z-shopb">店铺情况</p>
        </div>
        <p class="z-shops z-shopa col-xs-12 col-sm-12 col-md-12 hidden-lg">店铺展示</p>
        <div class="col-lg-7 hidden-xs hidden-sm hidden-md">
            <img class="z-imgb" src="{IMG PATH}img/jmzc6.png" alt=""/>
        </div>
        <div class="col-lg-5 hidden-xs hidden-sm hidden-md">
            <img class="z-imgb" src="{IMG PATH}img/jmzc7.png" alt=""/>
        </div>
        <div class="col-lg-4 hidden-xs hidden-sm hidden-md">
            <img class="z-imgb" src="{IMG PATH}img/jmzc8.png" alt=""/>
        </div>
        <div class="col-lg-4 hidden-xs hidden-sm hidden-md">
            <img class="z-imgb" src="{IMG PATH}img/jmzc9.png" alt=""/>
        </div>
        <div class="col-lg-4 hidden-xs hidden-sm hidden-md">
            <img class="z-imgb" src="{IMG PATH}img/jmzc10.png" alt=""/>
        </div>

        <div class="col-xs-12 hidden-xs hidden-lg">
            <img class="z-imgs" src="{IMG PATH}img/jmzc6.png" alt=""/>
        </div>
        <div class="col-sm-7 hidden-xs hidden-lg">
            <img class="z-imgs z-imgst" src="{IMG PATH}img/jmzc7.png" alt=""/>
        </div>
        <div class="col-sm-5 hidden-xs hidden-lg">
            <img class="z-imgs z-imgst" src="{IMG PATH}img/jmzc8.png" alt=""/>
        </div>
        <div class="col-sm-6 hidden-xs hidden-lg">
            <img class="z-imgs" src="{IMG PATH}img/jmzc9.png" alt=""/>
        </div>
        <div class="col-sm-6 hidden-xs hidden-lg">
            <img class="z-imgs" src="{IMG PATH}img/jmzc10.png" alt=""/>
        </div>

        <div class=" col-xs-12 hidden-md hidden-sm hidden-lg">
            <img class="z-x z-imgs" src="{IMG PATH}img/1.png" alt=""/>
        </div>
        <div class=" col-xs-12 hidden-sm hidden-md hidden-lg">
            <img class="z-x z-imgs" src="{IMG PATH}img/1.png" alt=""/>
        </div>
        <div class=" col-xs-12 hidden-sm hidden-md hidden-lg">
            <img class="z-x z-imgs" src="{IMG PATH}img/1.png" alt=""/>
        </div>
        <div class=" col-xs-12 hidden-sm hidden-md hidden-lg">
            <img class="z-x z-imgs" src="{IMG PATH}img/1.png" alt=""/>
        </div>
        <div class=" col-xs-12 hidden-sm hidden-md hidden-lg">
            <img class="z-x z-imgs" src="{IMG PATH}img/1.png" alt=""/>
        </div>
        <!-- dibuword-->
        <div class="mem col-xs-12">
            <span>那些回忆，值得细细品尝回味。</span>
            <p>Those memories, it is worth savoring the aftertaste</p>
            <p>With the wireless</p>
        </div>
    </div>
</div>

<?php include template("content","footer"); ?>