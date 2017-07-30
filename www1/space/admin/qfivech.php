<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 13:33
 */
include_once "public.php";
include_once 'function.php';
$id=$_REQUEST['aa'];
$sql="select * from qshow WHERE sid='$id'";
$result=$db->query($sql);
$row=$result->fetch_assoc();
//var_dump($row);
//$name=$row['posname'];
$obj=new All();
$obj->fun($db,'category',0,0,$row['cid']);



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
    <script>
        window.onload=function(){
            var closeBtn=document.querySelector(".closeBtn");
            closeBtn.onclick=function(){
                var ajax=new XMLHttpRequest();
                var id=this.id;
                ajax.open("get","editConDelImg.php?id="+id);
                ajax.onload=function(){
                    if(ajax.response=="ok"){
                        closeBtn.parentNode.parentNode.removeChild(closeBtn.parentNode);
                    }
                }
                ajax.send();
            }
        }
    </script>
</head>
<style>
    body{
        background: #fff;
        padding-left:20px;
        margin: 0 auto;
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
    h3{
        padding-left:45px;
    }
    label{
        display: block;
        margin:25px 48px;
    }
    label > input{
        width:210px;
    }

    form > input:not(.aa){
        width:200px;
        height:30px;
        background: #fff;
        outline: 0;
        margin:20px 0;
    }
    span{
        display: inline-block;
        width:100px;
    }
</style>
<body>
<h1 class="page-head-line">内容编辑</h1>
<form action="qfive1.php">
    <p>上级栏目</p>
    <input type="hidden" name="aa" value="<?php echo $id ?>">
    <select name="id" id="">
        <option value="0">一级栏目存在</option>
        <?php echo $obj->str ?>
    </select>
    <p>文章标题：</p>
    <input type="text" name="title" value="<?php echo $row['title']?>"><br>
    <div con='<?php echo $row['content']?>'class="con"> </div>
    <p>文章内容：</p><script id="editor" type="text/plain" style="width:500px;height:300px;" name="con" ></script>
<!--    <textarea name="con" id="" cols="30" rows="10" value="--><?php //echo $row['content'] ?><!--"></textarea>-->
    预览图片:
    <div class="preview" style="position: relative;width:150px;">
        <img src="<?php echo $row['imgurl']?>"  alt="">
        <div class="closeBtn" style="width:20px;height:20px;text-align: center;line-height: 20px;position: absolute;right:0;top:0; font-size: 20px" id="<?php echo $row['id']?>">
            X
        </div>
    </div>
    <div class="uploadbox"></div>
    <p>推荐位选择</p>
    首页推荐：<input type="radio" name="pos" value="0" class="aa">
    轮播推荐：<input type="radio" name="pos" value="1" class="aa">
    <br/>
    <input type="submit">
</form>
</body>
</html>
<script src="../static/js/upload.js"></script>
    <script>
        var ue = UE.getEditor('editor');



        ue.addListener( 'ready', function( editor ) {

            setContent();
        } );



        function setContent(isAppendTo) {

            ue.execCommand('insertHtml', document.querySelector(".con").getAttribute("con"))

        }


        var obj = new upload();
        obj.size = 1024 * 1024 * 8.6;
        obj.selectBtnStyle.background = "red";
        obj.createView({
            parent: document.querySelector(".uploadbox")
        });
        obj.up("upload.php",function(data){
            document.querySelector("input[name=imgurl]").value=data;
        });

    </script>