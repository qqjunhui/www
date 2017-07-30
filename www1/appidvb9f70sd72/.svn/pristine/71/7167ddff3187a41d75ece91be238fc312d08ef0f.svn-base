<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/12
 * Time: 13:34
 */
include_once "public.php";
include_once "function.php";
$obj=new All();
$obj->con($db,'list');


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script type="text/javascript" charset="utf-8" src="../static/editor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../static/editor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="../static/editor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" charset="utf-8" src="../static/js/upload1.js"></script>
</head>
<style>
    div.imgbox{
        width:200px;
        height:200px;
        position: relative;
        border:1px solid #333;
    }
    div.imgbox img{
        width:100%;
        height:100%;
    }
    div.progress{
        width:0;
        height:10px;
        position: absolute;
        left:0;
        bottom:0;
        background: red;
    }
</style>
<body>
<style>
    body{
        background: #fff;
    }
    .page-head-line {
        font-size: 30px;
        text-transform: uppercase;
        color: #000;
        font-weight: 800;
        padding-bottom: 20px;
        border-bottom: 2px solid #00CA79;
        margin-bottom: 10px;
        margin-left: 20px;
        margin-top: 20px;
    }
</style>
<body>
<h1 class="page-head-line">添加内容</h1>
<form action="qthree1.php">
    <p>选择列表</p>
    <select name="id" id="">
        <?php echo $obj->str ?>
    </select>
    <p>文章标题：</p>
    <input type="text" name="title"><br>
    <p>文章内容：</p>
    <script id="editor" type="text/plain" style="width:500px;height:300px;" name="con"></script>
    <p>图片</p>
    <div class="uploadbox"></div>


<!--    <textarea name="con" id="" cols="30" rows="10"></textarea>

    <input type="file" name="file" id="file">
    <div class="imgbox">
        <img src="" alt="">
        <div class="progress"></div>
    </div>-->
    <input type="hidden" name="imgurl" value="" id="imgurl">
    <input type="submit">
</form>
</body>
</html>
<script>
    var ue = UE.getEditor('editor');

    var obj = new upload();
    obj.size = 1024 * 1024 * 8.6;
    obj.selectBtnStyle.background = "red";
    obj.createView({
        parent: document.querySelector(".uploadbox")
    });
    obj.up("1upload.php",function(data){
        document.querySelector("input[name=imgurl]").value=data;
    });
</script>