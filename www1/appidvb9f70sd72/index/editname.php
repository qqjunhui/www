<?php
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
    <h1 class="mui-title">修改昵称</h1>
</header>
<div class="mui-content">
    <form id='login-form' class="mui-input-group" action="editPassCon.php" method="post">
        <div class="mui-input-row">
            <label>昵称</label>
            <input type="text" id="newname" class="mui-input-clear mui-input" value="<?php echo $_SESSION['mname']?>" placeholder="请输入新的昵称名" name="namenew">
            <input type="hidden" id="name" value="<?php echo $_SESSION['mname']?>">
        </div>
        <div class="mui-input-row">
            <button  class="mui-btn mui-btn-block mui-btn-primary" type="button">提交</button>
        </div>
    </form>
    <script>
        $("button").click(function(){
            var newname=$("input#newname").val();
            var name=$('input#name').val();
            if(newname==''||newname===name){
                alert('修改失败!');
            }
            $.ajax({
                url:"editnamecon.php",
                type:"post",
                data:{
                    newname:newname
                },
                success:function(e){
                    console.log(e)
                    if(e){
                        $("input#newname").val(e);
                        alert("修改成功");

                        location.href="index.php";
                    }else{
                        $("input#newname").val(name);
                        alert("修改失败");
                    }
                }
            })
        })


    </script>
</div>
</body>
</html>