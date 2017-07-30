<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/6
 * Time: 9:52
 */
move_uploaded_file($_FILES["file"]["tmp_name"])
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .select{
        width:150px;
        height:40px;
        text-align: center;
        line-height:40px;
        background: orange;
        border-radius:5px;
        color:#fff;
        font-weight: bold;
        position: relative;

    }
    .select input{
        width:100%;
        height:100%;
        opacity: 0;
        position: absolute;
        top:0;
        left:0;
        cursor:pointer;
    }
    .list{
        width:700px;
        overflow: hidden;
        border:1px solid #ccc;
    }
    .list .box{
        width:200px;
        height:200px;
        boeder:1px solid #000;
        display: inline-block;
        position: relative;
    }
    .list .box img{
        width:100%;
        height:100%;
        position: absolute;
        top:0;
        left:0;
    }
    .progress{
        width:100%;
        height:20px;
        border-top:1px solid #000;
        position: absolute;
        bottom:0;
        left:0;
        text-align: center;
        line-height: 20px;
    }
    .back{
        width:100%;
        height:100%;
        background: red;
        position: absolute;
        top:0;
        left:0;
        z-index:0;
    }
    .error{
        width:100px;
        height:30px;
        background: red;
        opacity:0.6;
        text-align: center;
        line-height: 30px;
        position: absolute;
        left:50%;
        margin-left:-50px;
        top:50%;
        margin-top:-15px;
        color:#fff;
    }
    .del{
        width:20px;
        height:20px;
        position: absolute;
        top:0;
        right:0;
        background: red;
        text-align: center;
        line-height: 20px;
        font-size: 28px;
    }
</style>
<body>
<div class="file">
<!--    <div class="select">-->
<!--        选择文件-->
<!--        <input type="file" multiple>-->
<!--    </div>-->
<!--    <div class="list">-->
<!--        <div class="box">-->
<!--            <img src="DSC_7094_看图王.jpg" alt=""><div class="del">-</div>-->
<!--            <div class="progress">-->
<!---->
<!--                <div class="back"><span>55%</span></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="box">-->
<!--            <img src="DSC_7122_看图王.jpg" alt=""><div class="del">-</div>-->
<!--            <div class="progress">-->
<!---->
<!--                <div class="back"> <span>55%</span></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="box">-->
<!--            <img src="DSC_7131_看图王.jpg" alt=""><div class="del">-</div>-->
<!--            <div class="progress">-->
<!---->
<!--                <div class="back"><span>55%</span></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="box">-->
<!---->
<!--            <img src="DSC_7137_看图王.jpg" alt="">-->
<!--            <div class="del">-</div>-->
<!--            <div class="progress">-->
<!---->
<!--                <div class="back"><span>55%</span></div>-->
<!--            </div>-->
<!--            <div class="error">文件传输错误</div>-->
<!--        </div>-->
<!---->
<!--    </div>-->

<!--    <div class="btton">-->
<!--        <input type="button" value="上传图片">-->
<!--    </div>-->
</div>


</body>
</html>
<script src="upload.js"></script>