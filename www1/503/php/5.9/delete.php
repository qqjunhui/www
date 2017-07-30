<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/9
 * Time: 11:35
 */
include_once 'public.php';
$id=$_REQUEST['id'];
$sql="delete from aa WHERE id=$id";
$result=$db->query($sql);
echo $result;