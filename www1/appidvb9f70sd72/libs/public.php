<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/16
 * Time: 17:59
 */
function checkname($db){
    $mname=$_POST['account'];
    $sql="select unum from user";
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()){
        if($row['unum']==$mname){
            echo 'false';
            exit();
        }
    }
    echo "true";

}
function loginname($db){
    $mname=$_POST['account'];
//    $mname=123456;
    $sql="select unum from user";
    $result=$db->query($sql);
    while($row=$result->fetch_assoc()){
        if($row['unum']==$mname){
            echo 'ture';
            exit();
        }
    }
    echo "false";

}
function select($db){
    $mname=$_POST["mname"];
    $sql="select * from user";
    $result=$db->query($sql);
    $array=array();
    while ($row=$result->fetch_assoc()){
        $array[]=$row;
    }

    return $array;

}