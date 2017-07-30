<?php include_once "header.php";?>
<style>
    div.title{
        width:100%;
        height:auto;
        text-align: center;
        font-size:24px;

    }
    img.aa{
        margin:30px auto;
        display: block;
    }
    div.con{
        width:1000px;
        height:auto;
        margin:0 auto;
        font-size: 16px;
        line-height: 2em;
        text-align: center;
    }
</style>
<div class="con">

    <?php
    $id=$_GET["id"];
    include  "../admin/public1.php";
    $sql="select * from qshow where sid={$id}";
    $result=$db->query($sql);
    $row=$result->fetch_assoc();
    ?>
    <div class="title">
        <?php
        echo $row["title"];
        ?>
    </div>
    <img src="<?php echo $row["thumb"]; ?>" class="aa" alt="">
    <div class="con">
        <?php
        echo $row["content"];
        ?>
    </div>

</div>


<?php include "footer.php";?>
