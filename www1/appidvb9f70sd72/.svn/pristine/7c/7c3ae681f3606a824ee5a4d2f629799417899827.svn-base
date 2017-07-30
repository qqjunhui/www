<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/12
 * Time: 13:34
 */
include_once "public.php";
include_once "function.php";


$id=$_REQUEST['aa'];
$sql="select * from list WHERE lid=".$id;
$result=$db->query($sql);
$row=$result->fetch_assoc();
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
    .img{
        width:100px;
    }
</style>

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
<body>
<h1 class="page-head-line">修改列表内容</h1>
<form/ action="addlistnumch.php" style="padding-left:30px;">
    <p>选择栏目</p>
    <select name="id" id="">
        <?php echo $obj->str ?>
    </select>
    <p>新闻标题：</p>
    <input type="text" name="title" value="<?php echo $row['ltitle']?>"><br>
    <p>新闻关键词：</p>
    <input type="text" name="keywords" value="<?php echo $row['keywords']?>"><br>
    <div con='<?php echo $row['lcon']?>'class="con"> </div>
    <p>文章概述：</p>
    <script id="editor" type="text/plain" style="width:500px;height:300px;" name="con" ></script>
    <p>缩略图:</p>

    <img src="<?php echo $row['lthumb']?>" class="img" alt="">
        <input type="hidden" name="imgurl1"    value="<?php echo $row['lthumb'];?>"/>
        <div class="preview" style="position: relative;width:150px;">
        <img src="<?php echo $row['imgurl'];?>"  alt="">

        <div class="closeBtn" style="width:20px;height:20px;text-align: center;line-height: 20px;position: absolute;right:0;top:0; font-size: 20px" id="<?php echo $row['id']?>">
        X
        </div>
        </div>
        <div class="uploadbox"></div>

        <p>推荐位选择</p>
        <?php
        $sql1="select * from qposition";
        $result1=$db->query($sql1);
        while ($row1=$result1->fetch_assoc()){
        ?>
        <span><?php echo $row1['posname']?></span>
        <input type="checkbox" name="pos[]" <?php if(stripos($row1['posiid'],$row['posid'])>-1){ echo 'checked'; }?> value="<?php  echo $row1['posiid']?>"
        <?php }?>
        <br/>
        <input type="hidden" name="lid" value="<?php echo $row['lid'];?>"/>
        <input type="submit" style="margin-top:20px;display:block;">
        </form>
        </body>
        </html>
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
    obj.up("1upload.php",function(data){
        document.querySelector("input[name=imgurl]").value=data;
    });
    </script>