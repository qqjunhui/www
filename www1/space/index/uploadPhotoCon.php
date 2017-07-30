<?php
session_start();
$mid=$_SESSION["mid"];
$mphoto=$_GET["mphoto"];
include  "../libs/db.php";
$sql="update user set picture='{$mphoto}' where uid={$mid}";
$db->query($sql);
if($db->affected_rows>0){
    echo "ok";
}