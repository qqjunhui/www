<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/16
 * Time: 11:18
 */

?>

<!DOCTYPE html>
<html class="ui-page-login">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <link href="../static/css/mui.min.css" rel="stylesheet" />
    <link href="../static/css/style.css" rel="stylesheet" />
    <style>
        .area {
            margin: 20px auto 0px auto;
        }
        .mui-input-group:first-child {
            margin-top: 20px;
        }
        .mui-input-group label {
            width: 22%;
        }
        .mui-input-row label~input,
        .mui-input-row label~select,
        .mui-input-row label~textarea {
            width: 78%;
        }
        .mui-checkbox input[type=checkbox],
        .mui-radio input[type=radio] {
            top: 6px;
        }
        .mui-content-padded {
            margin-top: 25px;
        }
        .mui-btn {
            padding: 10px;
        }
        .mui-input-row label~input, .mui-input-row label~select, .mui-input-row label~textarea{
            margin-top: 1px;
        }
    </style>
</head>

<body>
<header class="mui-bar mui-bar-nav">
    <a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
    <h1 class="mui-title">找回密码</h1>
</header>
<div class="mui-content">
    <form class="mui-input-group">
        <div class="mui-input-row">
            <label>注册手机号</label>
            <input id='account' type="text" class="mui-input-clear mui-input" placeholder="请输入账号">
        </div>
        <div class="mui-input-row">
            <label>验证码</label>
            <input id='yzm' type="text" class="mui-input-clear mui-input" placeholder="请输入验证码">
            <input type="button" value="发送验证码" style="position:absolute;top:0;right:0;width:90px;height:100%;padding:0 5px;border:1px solid #ccc;border-radius: 3px;text-align: center">
        </div>
    </form>
    <div class="mui-content-padded">
        <button id='sendMail' class="mui-btn mui-btn-block mui-btn-primary">提交</button>
    </div>
</div>

</body>

</html>
