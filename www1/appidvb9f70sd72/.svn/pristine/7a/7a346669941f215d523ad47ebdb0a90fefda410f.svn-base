<?php
include_once "public.php";
$name=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$dizhi=$_REQUEST['dizhi'];
$email=$_REQUEST['email'];
$user=$_REQUEST['user'];
$sql="update manger set names='$name',email='$email',phone='$phone',hospital='$dizhi' WHERE user='$user'";
$result=$db->query($sql);
//var_dump($result);
if($result){
    $mess='修改成功！';
    $src="xiugai.php";
    require_once 'login/index.html';
}else{
    $mess='修改失败，请重新输入！';
    $src="xiugai.php";
    require_once 'login/index.html';
}
?>