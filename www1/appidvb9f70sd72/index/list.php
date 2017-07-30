<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/18
 * Time: 18:31
 */
session_start();
include "header.php";
include "../admin/public1.php";
$cid=$_REQUEST["id"];
$sql="select * from list where cid={$cid}";
$result=$db->query($sql);
?>
<ul class="list">
<?php
while ($row=$result->fetch_assoc()) {
    ?>
<li>
    <a href="show.php?sid=<?php echo $row['lid']?>">
        <div>
            <div class="title"><?php echo $row['ltitle']?></div>
            <div class="time"><?php echo $row['ltime']?></div>
        </div>
        <div class="img" style="background-image:url(<?php echo $row['lthumb'];?>);background-position: center;background-size: cover; "></div>

    </a>
</li>
    <style>
        .list{
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
        .list > li > a > .img{
            width:28%;
            height:100%;
            float: left;
            border: 5px solid #fff;

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
        }
        .list a  div.con{
            font-size: 16px;
        }
    </style>
    <?php
}
?>
</ul>


<?php include "footer.php"?>