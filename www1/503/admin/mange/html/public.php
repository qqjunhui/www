<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 9:17
 */

header("content-type:text/html;charset=utf8");
$db=new mysqli('localhost','root','','one');
$db->query("set names utf8");