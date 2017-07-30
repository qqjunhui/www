<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/14
 * Time: 23:46
 */

session_start();
include "header.php";
include "../admin/public1.php";
$sql="select * from list WHERE posid =1";
$result=$db->query($sql);
?>
     <style>
         #wrapper {
             position: absolute;
             z-index: 1;
             top: 88px;
             bottom: 44px;
             left: 0;
             width: 100%;
             background: #ccc;
             overflow: hidden;
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

     </style>
    <script src="../static/js/iscroll.js"></script>
    <script src="../static/js/demoUtils.js"></script>
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
    <div id="wrapper">
        <div id="scroller">
            <div class="mui-slider">
                <div class="mui-slider-group">
                <?php while ($row=$result->fetch_assoc()){
                    ?>
                    <div class="mui-slider-item"><a href="show.php?sid=<?php echo $row['lid']?>"><img src="<?php echo $row['lthumb']?>" style="height:200px;"/></a></div>
                <?php } ?>
                </div>
            </div>
            <ul class="list">
                <?php
                $sql="select * from list";
                $result=$db->query($sql);
                while ($row=$result->fetch_assoc()){
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

                <?php } ?>
            </ul>
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
        </div>
    </div>


<?php  include_once "footer.php" ; ?>