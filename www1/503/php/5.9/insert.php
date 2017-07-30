<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/9
 * Time: 11:05
 */
include_once 'public.php';
$sql="insert into aa (idcard,names,grade) VALUES ('','',0)";
$result=$db->query($sql);
$id=$db->insert_id;
if ($result){
    echo $id;
}else{
    echo $result;
}
