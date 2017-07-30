<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="mui.min.js"></script>
    <script src="../jquery.min.js"></script>
    <link rel="stylesheet" href="mui.min.css">
    <title>Document</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    nav{
        width:100%;
        height:44px;
        overflow: hidden;
    }
    .navbox{
        height:100%;
        line-height: 44px;
    }
    .navbox > a{
        /*display: inline-block;*/
        /*width:81px;*/
        /*text-align: center;*/
        padding:0 15px;
        float: left;
    }
</style>
<body>
<nav>
    <div class="navbox">
        <a href="">首页1</a>
        <a href="">首页2</a>
        <a href="">首页3</a>
        <a href="">首页4</a>
        <a href="">首页5</a>
        <a href="">首页6</a>
        <a href="">首页7</a>
    </div>
</nav>
<div class="mui-slider">
    <div class="mui-slider-group">
        <div class="mui-slider-item"><a href="#"><img src="1.png" /></a></div>
        <div class="mui-slider-item"><a href="#"><img src="1.png" /></a></div>
        <div class="mui-slider-item"><a href="#"><img src="1.png" /></a></div>
        <div class="mui-slider-item"><a href="#"><img src="1.png" /></a></div>
    </div>
</div>

<ul class="mui-table-view">
    <li class="mui-table-view-cell mui-media">
        <a href="javascript:;">
            <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
            <div class="mui-media-body">
                幸福
                <p class="mui-ellipsis">能和心爱的人一起睡觉，是件幸福的事情；可是，打呼噜怎么办？</p>
            </div>
        </a>
    </li>
    <li class="mui-table-view-cell mui-media">
        <a href="javascript:;">
            <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
            <div class="mui-media-body">
                木屋
                <p class="mui-ellipsis">想要这样一间小木屋，夏天挫冰吃瓜，冬天围炉取暖.</p>
            </div>
        </a>
    </li>
    <li class="mui-table-view-cell mui-media">
        <a href="javascript:;">
            <img class="mui-media-object mui-pull-right" src="http://placehold.it/40x30">
            <div class="mui-media-body">
                CBD
                <p class="mui-ellipsis">烤炉模式的城，到黄昏，如同打翻的调色盘一般.</p>
            </div>
        </a>
    </li>
</ul>
</body>
</html>
<script type="text/javascript" charset="utf-8">
    mui.init();
    $(function(){
        let widths=0;
        $('.navbox > a').each(function (index,value) {
            widths+=$(value).outerWidth();//把每一个a的宽度加起来
            console.log(index,$(value).outerWidth())
        });
        widths=widths+1;
        $('.navbox').css('width',widths+"px");//把加起来的宽度赋给navbox
        var left=0;
        var total=0;
        $('.navbox').css('marginLeft',0);
        var marginleft= $('.navbox').css('marginLeft');
        mui('.navbox').on('drag','.navbox > a',function(e){
            left=e.detail.deltaX;
            total=parseInt(marginleft)+left;
            console.log(total);
//                console.log(left);
//                console.log();
            if(total>0){
                total=0;
            }
            console.log($(window).width()-$('.navbox').outerWidth());
            if(total<$(window).width()-$('.navbox').outerWidth()){
                total=$(window).width()-$('.navbox').outerWidth();
            }
            console.log(total);

            $('.navbox').css('marginLeft',total+"px");
        });
        mui('.navbox').on('dragstart','.navbox > a',function(e){
            marginleft=$('.navbox').css('marginLeft');
        });

    });
</script>


