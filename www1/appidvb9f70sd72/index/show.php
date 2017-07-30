<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/15
 * Time: 16:54
 */



include "../admin/public1.php";
$id=$_REQUEST['sid'];
include_once "header.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../static/js/jquery.min.js"></script>
    <script src="../static/js/demoUtils.js"></script>
    <script src="../static/js/iscroll.js"></script>
    <title>Document</title>
    <script>
        window.onload=function(){
            var myScroll;

            myScroll = new IScroll('#wrapper', {
                bounceEasing: 'elastic',
                bounceTime: 1200 ,
                mousewheel:true,
            });
            document.addEventListener('touchmove', function (e) { e.preventDefault(); }, isPassive() ? {
                capture: false,
                passive: false
            } : false);

        }
    </script>
</head>
<style>
    body，html{
        width:100%;
        overflow: hidden;
        background: #fff;
    }
    #wrapper {
        position: absolute;
        z-index: 1;
        top: 88px;
        bottom: 44px;
        left: 0;
        width: 100%;
        background: #ccc;
        overflow: hidden;
        background-color: #fff;
    }

    #scroller {
        position: absolute;
        z-index: 1;
        -webkit-tap-highlight-color: rgba(0,0,0,0);
        width: 100%;
        -webkit-transform: translateZ(0);
        -moz-transform: translateZ(0);
        -ms-transform: translateZ(0);
        -o-transform: translateZ(0);
        transform: translateZ(0);
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -webkit-text-size-adjust: none;
        -moz-text-size-adjust: none;
        -ms-text-size-adjust: none;
        -o-text-size-adjust: none;
        text-size-adjust: none;
    }


    .showBtn{
        width:100%;height:30px;
        text-align: center;
        line-height: 30px;
        background:linear-gradient(rgba(255,255,255,0) 0%,rgba(255,255,255,.8) 10%);
        display: none;
        position: absolute;
        bottom: 0;
        cursor: pointer;
        color:red;
    }
    img{
        width:85%;
    }
    h2{
        font-size: 24px;
        text-align: center;
        margin:10px 0;
        line-height: 1.5em;
    }
    p{
        padding:0;
        text-align: center;
    }
    p.time{
        text-align: right;
        margin:10px 0;
    }
    div.con,div.con p{
        font-size: 16px;
        line-height: 2em;
        color: #333;
        text-indent:2em
    }

</style>
<body style="background: #fff">

<div id="wrapper">
    <div id="scroller">
        <h2>
            <?php
            $sql="select * from list WHERE lid=$id";
            $resule=$db->query($sql);
            $row=$resule->fetch_assoc();
            echo $row['ltitle']
            ?>
        </h2>
        <p class="time"><?php echo $row['ltime']?></p>
        <div class="con"><?php echo $row['lcon']?></div>
        <p><img src="<?php echo $row['lthumb']?>" alt=""></p>
        <p><?php
            $sql="select * from qshow WHERE lid=$id";
            $resule=$db->query($sql);
            $row=$resule->fetch_assoc(); echo $row['content']?>
        </p>
        <h4>相关的新闻:</h4>
        <ul class="mui-table-view">
            <?php
            $key=$row["keywords"];
            $ids=$row["lid"];
            $sql1="select * from list where keywords like '%{$key}%' and not id={$ids} limit 0,3";
            $result1=$db->query($sql1);
            while ($row1=$result->fetch_assoc()) {
                ?>
                <li class="mui-table-view-cell">
                    <a href="show.php?id=<?php echo $row1['lid']?>" class="mui-navigate-right">
                        <?php
                        echo $row1["ltitle"]
                        ?>
                    </a>
                </li>
                <?php
            }
            ?>
        </ul>
        <h4>留言:</h4>

        <ul class="mui-table-view message">
            <?php
            $sql2="select * from message where lid={$id}";
            $result2=$db->query($sql2);
            while ($info=$result2->fetch_assoc()) {
                ?>
                <li class="mui-table-view-cell" style="position: relative">
                    <div class="user"><?php
                        echo $_SESSION['mname'];
                        ?></div>
                    <div class="con">
                        <?php
                        echo $info["con"];
                        ?>
                    </div>
                    <div class="time" style="text-align:right "><?php
                        echo $info["time"];
                        ?></div>
                    <div class="showBtn">
                        点击展开
                    </div>

                </li>

                <?php
            }
            ?>
        </ul>
            <a href="writeMessage.php?sid=<?php echo $_REQUEST['sid'];?>" style="display: block;width:100%;">
                <span class="mui-icon mui-icon-compose" style="color: dodgerblue"></span>
            </a>
    </div>
</div>

<script>
    $(".message li").each(function(index,obj){
        if($(obj).outerHeight()>100){
            $(obj).css("height",100);
            $(obj).find(".showBtn").css("display","block");
        }
    })
    var flag=true;
    $(".message").delegate(".showBtn","click",function(){
        if(flag) {
            $(this).parent("li").css("height", "auto");
            $(this).html("收起来");
            flag=false
        }else{
            $(this).parent("li").css("height", "100");
            $(this).html("展开");
            flag=true;
        }

    })
</script>
<?php include_once "footer.php";?>
