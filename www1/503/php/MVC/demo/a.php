<?php
define("INDEX","index");
echo "<pre>";
//var_dump($_SERVER);
$info=$_SERVER;
//var_dump($info["argv"][0]);
$search=isset($info["argv"][0])?$info["argv"][0]:"f=b";
$result=explode("=",$search);
$filename=$result[1];
//echo $filename;
include "a.php";
////var_dump($result);