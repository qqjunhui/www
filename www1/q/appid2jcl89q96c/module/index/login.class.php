<?php
/**
 * Created by PhpStorm.
 * User: xiaoxiong
 * Date: 2017/7/7
 * Time: 23:05
 */
class login extends indexMain{
    function log(){
        $this->smarty->display("xx-login.html");
    }
    function logch(){
        $user=$_REQUEST["aa"];
        $pass=$_REQUEST["bb"];
        $db=new db2("user");
        $res1=$db->select();
        foreach($res1 as $v){
            if($user==$v["uname"]){
                if ($pass==$v["upass"]){
                    $this->session->set("user",$user);
                    $this->session->set("uid",$v['uid']);
                    echo "ok";
                    exit();
                }
            }
        }
    }
}