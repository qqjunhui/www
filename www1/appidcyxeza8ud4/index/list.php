<?php include_once "header.php";?>

<style>
    ul.listbox{
        display: flex;
        justify-content: space-around;
    }
    div.img{
        width:240px;height:280px;

    }
    a{
        display: block;
        text-align: center;
    }
    h2,h3{
        text-align: center;
    }
</style>



        <?php
        include "../admin/public1.php";
        $cid=$_REQUEST["cid"];
        $sql="select catname from category where cid={$cid}";
        $result=$db->query($sql);
        $row=$result->fetch_assoc();
        ?>
<h2><?php echo $row['catname']?></h2>
<ul class="listbox">

    <?php

    $sql="select sid,title,thumb,time from qshow where cid={$cid}";


    $result=$db->query($sql);
    while($row=$result->fetch_assoc()) {
        ?>
        <li class="list">
            <a href="show.php?id=<?php echo $row['sid']?>">
                <div class="img"
                     style="background-image: url('<?php echo $row['thumb']; ?>');background-size: cover;background-position: center">

                </div>
                <div class="title">
                    <h3>
                        <?php
                        echo $row["title"]
                        ?>
                    </h3>
                    <span class="time">
                        <?php
                        echo $row["time"]
                        ?>
                   </span>
                </div>
            </a>
        </li>
        <?php
    }
    ?>
</ul>



<?php include "footer.php";?>
