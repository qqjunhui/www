<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/5
 * Time: 16:22
 * 2014年前 前端工程师
 * HTML+css+js+h5+
 * 现在  终端变得更多  应用变得更好
 *  前端工程师  掌握更多的编程技巧，编程的原理
 * PHP能用最简单的方式去了解后台的编程模式  提供了许多的内容
 *
 *
 * 前台的上传的类  ajax
 * 1 界面
 *  选择文件的接口
 *  上传的按钮
 *  预览的图像
 *  进度
 *  提示信息
 *  删除
 *
 * 一、 HTML，css
 * 二、 js动态创建
 *
 */



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
<script>
    window.onload=function(){
        class UpLoad{
            constructor(url,fileobj,imgbox,progressobj,success){
                this.fileobj=fileobj;
                this.imgobj=imgbox;
                this.progress=progressobj;
                this.url=url;
                this.success=success;
            }
            change(){//文件读到浏览器
                let that=this;
                this.fileobj.onchange=function(){
                    that.file=this.files[0];//获取的是是 file的对象 name,size,type等  输出来但显示不出来
                    let fileread=new FileReader();//创建文件阅读器
                    fileread.readAsDataURL(that.file);//读取文件的格式
                    fileread.onload=function (e) {//加载完毕后只想的函数文件加载完毕
                        that.imgobj.src=e.target.result;//浏览器把图片读成得格式
                    }
                    that.uploadimg();
                }
            }

            uploadimg(){
                let that=this;
//                let ajax=new  XMLHttpRequest();//创建ajax
//                let formdate=new FormData();//不需要将整个表单放进去
//                formdate.append('img',this.file);
//                ajax.onload=function(){
//                    that.success(ajax.responseText);
//                }
                that.btn.onclick=function(){
                    ajax.upload.onprogress=function (e) {
                        console.log(e);
                        let pro=e.loaded/e.total*100;
                        that.progress.style.width=pro+'%';

                    }
                    ajax.open('post',this.url,true);//传输文件只能用post
//                    ajax.send(formdate);
                }

            }
        }
        let fileobj=document.querySelector('#file');
        let imgobj=document.querySelector('img');
        let progress=document.querySelector('.back');
        let btn=document.querySelector('input['type=submit']');
        let newup=new UpLoad('6-6.php',fileobj,imgobj,progress,btn);
        newup.change();

        console.log(fileobj,imgobj,progress)
    }
</script>
<style>
    .box{
        width:200px;
        height:200px;
        position: relative;
        border:1px solid #000;
    }
    .box img{
        width:100%;
        height:100%;
        position: absolute;
        top:0;
        left:0;
    }
    .box .progress{
        width:100%;
        height:10px;
        position: absolute;
        bottom:0;
        left:0;
        border-top:1px solid #000;
    }
    .back{
        width:0%;
        height:100%;
        background: red;
        position: absolute;
        top:0;
        left:0;
    }
</style>
<body>
<input type="file" name="file" id="file">
<div class="box">
    <img src="" alt="">
    <div class="progress">
        <div class="back"></div>
    </div>
</div>
<input type="submit" value="提交">
</body>
</html>
