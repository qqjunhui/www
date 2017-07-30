<?php include_once "header.php";?>
<!--<link rel="stylesheet" href="../static/css/c-xwdt.css">-->
<style>
    .category{
        text-align: center;
    }
    .categoryList{
        font-size:24px;

    }
    a.categoryList{
        display: inline-block;
        width:200px;
        height:200px;
        overflow: hidden;
        margin:30px 0;
    }
    a.categoryList > img{
        width:200px;
    }
    .c-item:nth-child(2)> p {
        width:1000px;
        margin:30px auto;
    }
    .c-item:nth-child(2)> p > img{
        margin:20px;
    }


</style>
<div class="category">
    <ul class="c-item-list">
    <?php

    //具有同样逻辑的页面  不是指同样样式的页面
    include "../admin/public1.php";
    $id=$_REQUEST["id"];
    $sql1="select * from qshow where cid=".$id;
    $result1=$db->query($sql1);
    $i=0;
    while ($row1=$result1->fetch_assoc()) {
//        if($i<2) {
            ?>

            <li class="c-item">
                <?php $i++;
                echo $row1['content']; ?>
            </li>

            <?php
//        }
    }
    ?>
    </ul>

    <?php
    $sql="select * from category where pid=".$id;
    $result=$db->query($sql);
    while ($row=$result->fetch_assoc()) {
        ?>
        <a href="list.php?cid=<?php echo $row['cid']?>" class="categoryList">
            <?php
            echo $row["catname"]
            ?>
            <img src="../static/img/qjia2.png" alt="">
        </a>

        <?php
    }
    ?>

</div>



<?php include "footer.php";?>
