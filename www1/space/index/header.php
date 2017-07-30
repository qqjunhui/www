<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/14
 * Time: 23:49
 */
session_start();
include_once "../admin/public1.php";
$sql="select * from category";
$result=$db->query($sql);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../static/css/mui.min.css">
    <link rel="stylesheet" href="../static/css/common.css">
    <script src="../static/js/jquery.min.js"></script>
    <script src="../static/js/mui.min.js"></script>
</head>
<style>
    *{
        margin:0;
        padding:0;
    }
    body{
        padding:0 10px;
    }
    div.header{
        height:88px;
    }
    header{
        position: fixed;
        top:0;
        left:0;
        width:100%;
        z-index: 100;
    }
    header > div{
        width:100%;
        height:44px;
        line-height: 44px;
        background: dodgerblue;
        text-align: center;
    }
    header > div >a.mui-icon{
        height:100%;
        line-height: 44px;
    }
    header > div >span.title{
        color:#fff;
        font-size:20px;
    }
    span.name{
        color:#fff;
        float: right;
    }
    .mui-icon.mui-pull-right{
        float: right;
        margin:0 10px;
    }
    nav{
        width:100%;
        height:44px;
        overflow: hidden;
        border-bottom: 1px solid #8c8c8c;
    }
    .navbox{
        height:100%;
        line-height: 44px;
        background:#d2d2d2;
    }
    .navbox > a{
        padding:0 26px;
        float: left;
        font-size: 16px;
    }
    a.ff{
        color:#000;
    }
    a.f-first{
        color: dodgerblue;
    }
</style>
<body>
<div class="header">
    <header>
        <div>
            <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left" style="display:<?php if(!$_REQUEST['id']){echo none;}else{echo 'inline-block';}?>;color:#fff;"></a>
            <?php if(!$_REQUEST['id']){ ?> <span class="title">实时新闻</span><?php }else if($_REQUEST['id']){
                $sql1="select catname from category WHERE cid=".$_REQUEST['id'];
                $result1=$db->query($sql1);
                $info=$result1->fetch_assoc();?>
                <span class="title"><?php echo $info['catname'];?>新闻</span>

            <?php }?>
            <?php

            if(isset($_SESSION["memberlogin"])) {
                ?>

                <?php
                if($_SESSION["mphoto"]) {
                    ?>
                    <a class="mui-icon mui-pull-right" href="member.php" style="background: url(<?php echo $_SESSION["mphoto"]?>);background-size: cover;border-radius: 50%;width:40px;height:40px;margin-top: 2px;display: inline-block"></a>
                    <span class="name"><?php echo $_SESSION["mname"]?></span>
                    <?php
                }else {
                    ?>
                    <a class="mui-icon mui-icon-contact mui-pull-right" href="member.php" style="color:#fff;padding-right:10px;"></a>
                    <?php
                }
                ?>
                <?php
            }else {
                ?>
                <a class="mui-icon mui-icon-contact mui-pull-right" href="login.php"></a>
                <?php
            }
            ?>
        </div>
        <nav>
            <div class="navbox">
                <a href="index.php"  class="ff <?php if(!$_REQUEST['id']){ echo 'f-first';}?>">最新推荐</a>
                <?php while ($row=$result->fetch_assoc()){
                    ?>
                    <a href="list.php?id=<?php echo $row['cid']?>" class="ff <?php if($_REQUEST['id']==$row["cid"]){echo 'f-first';} ?>"><?php echo $row['catname'];?></a>
                    <?php
                }?>
            </div>
        </nav>
    </header>
</div>

<script type="text/javascript" charset="utf-8">
    mui.init();
    $(function(){
        let widths=0;
        $('.navbox > a').each(function (index,value) {
            widths+=$(value).outerWidth();//把每一个a的宽度加起来
//            console.log(index,$(value).outerWidth())
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
//            console.log(total);
//                console.log(left);
//                console.log();
            if(total>0){
                total=0;
            }
//            console.log($(window).width()-$('.navbox').outerWidth());
            if(total<$(window).width()-$('.navbox').outerWidth()){
                total=$(window).width()-$('.navbox').outerWidth();
            }
//            console.log(total);

            $('.navbox').css('marginLeft',total+"px");
        });
        mui('.navbox').on('dragstart','.navbox > a',function(e){
            marginleft=$('.navbox').css('marginLeft');
        });

    });
</script>