<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/15
 * Time: 0:00
 */



?>
<style>
    footer{
        width:100%;
        height:44px;
        display: flex;
        justify-content: space-around;
        background: dodgerblue;
        position: fixed;
        bottom: 0;
        left:0;
    }
    a,p#cang{
        height:100%;
        font-size: 16px;
        text-align: center;
        line-height: 44px;
        color:#fff;
    }
</style>
<footer>
    <input type="hidden" name="lid" id="lid" value="<?php echo $_REQUEST['sid'];?>">
    <a href="index.php">首页</a><?php if($_REQUEST['sid']){ echo "<p id='cang'>收藏</p>";}?> <a href="seting.php" class="seting">设置</a>
</footer>

</body>
</html>
<script src="../static/js/jquery.min.js"></script>
<script>
$("#cang").click(function(){
    var lid=$('input#lid').val();
//    console.log(lid);
    $.ajax({
        url:"cang.php",
        type:"post",
        data:{
            lid:lid
        },
        success:function(e){
            console.log(e)
            if(e=='true'){
                alert("收藏成功");
            }else if(e=="login"){
                alert("请登录");
                location.href="login.php";
            }else if(e=='false'){
                alert('收藏失败！')
            }else if(e==="aa"){
                alert('已收藏')
            }
        }
    })
})

</script>