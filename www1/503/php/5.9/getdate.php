<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/9
 * Time: 10:36
 */
//include_once "public.php";
//$sql="select * from aa";
//$result=$db->query("set names utf8");
//$result=$db->query($sql);
//$row=$result->fetch_all(MYSQLI_ASSOC);
//echo json_encode($row);

$db=new mysqli("localhost",'root','','qyqcqs');
//$id=$_REQUEST['id'];
$sql="select * from  hospital";
$db->query("set names utf8");
$result=$db->query($sql);
$row=$result->fetch_all(MYSQLI_ASSOC);
echo json_encode($row);