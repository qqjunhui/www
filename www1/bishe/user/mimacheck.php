<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 10:09
 */

include_once "../public.php";
$user=$_REQUEST['user'];
$oldpass=$_REQUEST['pass'];
$newpass=$_REQUEST['newpass'];

$sql="select * from mange WHERE user='$user'";
$result=$db->query($sql);
//var_dump($result);
$row=$result->fetch_assoc();
if($row['pass']==$oldpass){
    $sql="update mange set pass='$newpass' WHERE user='$user'";
    $result=$db->query($sql);
    if($result){
        unset($_SESSION['user']);
        $mess='修改成功，请重新登录！';
        $src="../login/tuichu.php";
        require_once '../login/index.html';
    }else{
        $mess='修改失败，请重新输入！';
        $src="mima.php";
        require_once '../login/index.html';
    }
}else{
    $mess='原密码错误，请重新输入！';
    $src="mima.php";
    require_once '../login/index.html';
}