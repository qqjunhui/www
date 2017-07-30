<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/19
 * Time: 10:07
 */
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["memberlogin"])){

    echo "<script>alert('请登陆');location.href='login.php'</script>";
    exit();
}

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
    <script src="../static/js/jquery.js"></script>
</head>
<script>
window.onload=function () {
    var back=document.querySelector(".back");
    back.onclick=function(){
        history.back();
    }
    }
</script>
<body>
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left back"></a>
    <h1 class="mui-title">我的收藏</h1>
</header>
<ul class="list">
    <?php
    include "../admin/public1.php";
    $uid=$_SESSION['mid'];
    $sql="select list.ltitle,cang.time,cang.time,list.ltime,list.lid,list.lthumb from list,cang WHERE list.lid=cang.lid and cang.mid=".$uid;
    $result=$db->query($sql);
    while ($row=$result->fetch_assoc()){
        ?>
        <li>
            <a href="show.php?id=<?php echo $row['lid']?>">
                <div>
                    <div class="title"><?php echo $row['ltitle']?></div>
                    <div class="time"><?php echo $row['ltime']?></div>
                    <div class="time"><span>收藏时间：</span><?php echo $row['time']?></div>
                </div>
                <div class="img" style="background-image:url(<?php echo $row['lthumb'];?>);background-position: center;background-size: cover; "></div>
            </a>
        </li>
    <?php } ?>
</ul>
</body>
</html>

<style>
    *{
        list-style: none;
    }
    .list{
        margin-top:44px;
        width:100%;
        height:auto;
        padding:10px 10px;
        background: #fff;
    }
    .list > li{
        height:100px;
        width:100%;
        border-bottom: 1px solid #ccc;
    }
    .list > li > a{
        display: block;
        width:100%;
        height:100%;
    }
    .list a > div{
        float:left;
        width:71.5%;
        height:100%;
    }
    .list a  div{
        color:#333;
    }
    .list a  div.title{
        font-size: 18px;
        color:#111111;
        margin-top:10px;
        text-align: left;
        line-height: 1em;
    }
    .list a  div.time{
        color: #888;
        font-size: 14px;
        text-align: right;
        margin-top:5px;
    }
    .list > li > a > .img{
        width:28%;
        height:100%;
        float: left;
        border: 5px solid #fff;

    }
    .list a  div.con{
        font-size: 16px;
    }
</style>
