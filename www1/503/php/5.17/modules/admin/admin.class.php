<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/17
 * Time: 16:17
 */
class admin extends adminmain
{
    function login()
    {
        if(isset($_SESSION["login"])){
            header("location/index.php?d=admian&f=admin&a=main");
        }


        $this->smarty->display("admin/login.html");
    }

    function main()
    {
        if (!isset($_SESSION["login"])) {
            $this->smarty->assign("message", "没有登录，请登录");
            $this->smarty->assign("url", "index.php?d=admin&f=admin&a=login");
            $this->smarty->display("admin/notice.html");
            exit;
        }
        $this->smarty->display("admin/main.html");
    }

    function check()
    {
        $user = $_REQUEST['user'];
        $pass = $_REQUEST['pass'];
        $db = new db("user");
//        $db->connect();
        $result = $db->select();
//        var_dump($result);
        $flag = true;
        foreach ($result as $v) {
            if ($v['username'] == $user) {
                if ($v['pass'] == $pass) {
                    $flag = false;
                    $_SESSION['login'] = "yes";
                    $_SESSION['user'] = $user;
                    $_SESSION['uid'] = $v['uid'];
                    $this->smarty->assign("message", "登录成功");
                    $this->smarty->assign("url", "index.php?d=admin&f=admin&a=main");
                    $this->smarty->display("admin/notice.html");
                    exit;
                }
            }
        }
        if ($flag) {
            $this->smarty->assign("message", "用户名或密码错误");
            $this->smarty->assign("url", "index.php?d=admin&f=admin&a=login");
            $this->smarty->display("admin/notice.html");
        }
    }
}