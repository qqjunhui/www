<?php

$db=new mysqli("localhost",'root','','qyqcqs');
$id=$_REQUEST['id'];
$sql="delete from hospital WHERE hospital_id=$id";
$result=$db->query($sql);
echo $result;