


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../static/js/jquery.min.js"></script>
    <script type="text/javascript" src='../static/js/animate.js'></script>
    <link rel="stylesheet" href="../static/css/common.css">
    <link rel="stylesheet" href="../static/css/bootstrap.css">
</head>
<style>
    *{
        padding:0;margin:0;
        color:#000;
        text-decoration: none;
        list-style: none;
        font-family: "微软雅黑";
    }
    body  nav{
        height:106px;
        width:100%;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        /*padding:0 15px;*/
        position: absolute;
        top:0;
        left:0;
        z-index: 100;
    }
    body  nav > ul {
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.8);
        z-index: 1000;
        padding: 0 50px;
        box-sizing: border-box;
        display: flex;
        justify-content: space-around;
    }

    body  nav  > ul > li {
        font-size: 12px;
        height: 101px;
        transform: scale(1.1);
        transition: opacity .35s ease-out,transform .35s ease-out;
        line-height: 106px;
    }
    body  nav  > ul > li.first{
        text-decoration: none;
        color: #820e0e;
        border-bottom: 2px solid #820e0e;
        box-sizing: border-box;
    }
    body  nav  > ul > li.f-first{
        text-decoration: none;
        color: #820e0e;
        border-bottom: 2px solid #820e0e;
        box-sizing: border-box;
    }
    a[class="nav-div-a"] {
        font-size: 16px;
        height: 101px;
        line-height: 106px;
        display: block;
        float: left;
        padding-left: 22px;
        padding-right: 22px;
        color: #1d1c1c; }

    a[class="nav-div-a"]:hover{
        text-decoration: none;
        color: #820e0e;
        border-bottom: 2px solid #820e0e;
        box-sizing: border-box;
    }
    div.banner{
        position: absolute;
        top:0;
        left:0;
        width:100%;
        height:400px;
    }
    li > a:hover,a.bb:hover{
        text-decoration: none;
    }
    a{
        color:#333;
    }
    .img-box{
        width:100%;
        height:100%;
        margin:2px auto;
        position:relative;
        overflow: hidden;
    }
    .img-box > li{
        width:100%;
        height:100%;
        position:absolute;
        top:0;
        left:0;
    }
    .img-box > li.banner-img{
        left:100%;
    }
    .img-box > li.f-first{
        left:0;
    }
    .img-box > li:nth-child(1){
        background-image:url(../static/img/qb1.png);
    }
    .img-box > li:nth-child(2){
        background-image:url(../static/img/qb2.png);
    }
    .img-box > li:nth-child(3){
        background-image:url(../static/img/qb3.png);
    }
    .img-box > li:nth-child(4){
        background-image:url(../static/img/qb4.png);
    }
    /*.img-box > li.f-first{
       display: block;
   }*/
    .img-box > li:nth-child(5){
        width:164px;
        height:6px;
        position:absolute;
        top:410px;
        left:612px;
        z-index:30;
    }
    .img-box > li:nth-child(5) > ul{
        width: 164px;
        height: 6px;
        position: absolute;
        left: 50%;
        margin-left: -82px;
        bottom: 33px;
    }
    .img-box > li:nth-child(5) > ul > li{
        width: 31px;
        height: 100%;
        float: left;
        margin-right: 10px;
        box-sizing: border-box;
        border: 1px solid #b9b9b9;
    }
    .img-box > li:nth-child(5) > ul > li.f-first{
        background: white;
        border: 0;
    }

    .img-box > li:nth-child(6) > div{
        height:80px;
        width:40px;
        background:rgba(255,255,255,.3);
        color:#ccc;
        font-family:宋体;
        font-size:60px;
        line-height:80px;
        position:absolute;
        top:180px;
        opacity:1;
        z-index:10;
    }
    .img-box > li:nth-child(6) > div.left{
        left:0px;
        text-align:left;
        border-radius:0 40px 40px 0;
    }
    .img-box > li:nth-child(6) > div.right{
        right:0px;
        text-align:right;
        border-radius:40px 0 0 40px;
    }
    header{
        height:400px;
    }
    ul.one{
        width:100%;
        height:auto;
        background:rgba(255,255,255,0.4);
        left:0;top:102%;
        line-height: 20px;
        display: none;
        position: absolute;
    }
    .one .onelist{
        padding:5px;
        width:100%;
        text-align: center;
    }
    .one .onelist >a{
        color:#000;
    }
    .left,.right{
        display: none;
    }
    .left.active,.right.active{
        display: block;
    }
</style>
<body>
<header>
    <nav>

        <ul>
            <li>
                <img src="../static/img/logo.png" alt="">
            </li>
            <li class="active <?php if(!$_REQUEST['id']&&!$_REQUEST['cid']){ echo 'f-first';}?>">
                <a class="nav-div-a" href="index.php">首页</a>
            </li>
            <?php
            /*
             *     频道页  分类页  逻辑是一样
             *     列表页
             *     详情页  内容页
             * */
            include "../admin/public1.php";

            $sql="select * from category where pid=0 AND isshow=0";
            $result=$db->query($sql);
            while($row=$result->fetch_assoc()) {


                ?>
                <li class="opt active <?php if($_REQUEST['id']==$row["cid"]){echo 'f-first';} ?>" style="position:relative;">
                    <a class="nav-div-a" href="category.php?id=<?php echo $row['cid']?>"><?php  echo $row["catname"]?></a>
                    <ul class="one">
                        <?php
                        $sql1="select * from category where pid=".$row["cid"];
                        $result1=$db->query($sql1);
                        while($row1=$result1->fetch_assoc()) {
                            ?>
                            <li class="onelist">
                                <a href="list.php?cid=<?php echo $row1['cid']?>">
                                    <?php
                                    echo $row1["catname"];
                                    ?>
                                </a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            }
            ?>


        </ul>
    </nav>
    <div class="banner">
        <ul class="img-box">
            <li class="banner-img f-first"><a href=""></a></li>
            <li class="banner-img"><a href=""></a></li>
            <li class="banner-img"><a href=""></a></li>
            <li class="banner-img"><a href=""></a></li>
            <li>
                <ul>
                    <li class="f-first"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </li>
            <li>
                <div class="left">&lt;</div>
                <div class="right">&gt;</div>
            </li>
        </ul>
    </div>

</header>

<script type="text/javascript">

$('body  nav  > ul > li.active').hover(function(){
    $(this).addClass('first');
},function (){
    $(this).removeClass('first');
})

        $(".opt").hover(function(){
            $(this).find(".one").slideDown(200);
        },function(){
            $(this).find(".one").slideUp(200);
        })

    const box=document.querySelector('ul.img-box');
    const imgs=box.querySelectorAll('.banner-img');
    const circle=box.querySelectorAll('li > ul > li');
    const left=box.querySelector('li > .left');
    const right=box.querySelector('li > .right');
    let width=parseInt(window.getComputedStyle(box,null).width);
    let flag=true;
    let wait;//定义等待函数
    let	now=0;//定义当前页面
    let next=0;//定义下一个
    let t=setInterval(move,30000);//时间循环函数
    function move(way='r'){
        if(way=="r"){
            next=now+1;
            if(next>imgs.length-1){//如果next大于的长度减一，就要拉回到0
                next=0;
            }
            imgs[next].style.left='100%';//把所有的next拉回到左边
            animate(imgs[now],{left:-width},500,function(){//当前页往左走的动画
                flag=true;//动画运行完后，开关的值赋为true
            });
            animate(imgs[next],{left:0},500);//下一个页面运行的动画
            circle[now].classList.remove('f-first');//把当前圆点的类名去除掉
            circle[next].classList.add('f-first');//给下一个圆点添加类名
        }
        if(way=='l'){//如果图片向右走
            next=now-1;//那么当前图片的下一张在左面
            if(next<0){//判断next的值，当它小于0时，拉回最大值
                next=imgs.length-1;
            }
            imgs[next].style.left='-100%';//把下一张图片放到左面
            animate(imgs[now],{left:width},500,function(){//执行当前图片从左到右的动画
                flag=true;//动画完毕后把开关打开
            });
            animate(imgs[next],{left:0},500);//执行下一张图片从走到右的动画
            circle[now].classList.remove('f-first');//移除当前圈的类名
            circle[next].classList.add('f-first');//给下一个圈添加类名
        }
        now=next;//把next值赋给now
    }
    box.onmouseover=function(){//当鼠标移入框内，时间函数停止
        clearInterval(t);//清除时间函数
        $(left).addClass('active');
        $(right).addClass('active');
    }
    box.onmouseout=function(){//当鼠标移除框内
        t=setInterval(move,1500);
        $(left).removeClass('active');
        $(right).removeClass('active');
    }
    left.onclick=function(){
        if(flag){
            flag=false;
            move(way='l');
        }
    }
    right.onclick=function(){
        if(flag){
            flag=false;
            move(way='r');
        }
    }
    circle.forEach(function(value,index){
        value.onmouseover=function(){
            clearTimeout(wait);
            wait=setTimeout(function(){
                if(index>now){//当所选圈下标大于当前下标时
                    imgs[index].style.left='100%';//把选择的图片放到左边
                    animate(imgs[now],{left:-width},500,function(){//当前图片右移的动画
                        flag=true;
                    });
                    animate(imgs[index],{left:0},500);//选中图片右移
                }else if(index<now){//当所选圈下标小于当前下标时
                    imgs[index].style.left='-100%';
                    animate(imgs[now],{left:width},500,function(){
                        flag=true;
                    });
                    animate(imgs[index],{left:0},500);
                }
                circle[now].classList.remove('f-first');
                circle[index].classList.add('f-first');
                now=index;
            },200);
        }
        value.onmouseout=function(){
            clearTimeout(wait);
        }
    })
</script>