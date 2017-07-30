<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 23:45
 */
include_once('../public.php');

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="../static/js/jquery.min.js"></script>
</head>
<style>
body,html{
    background: #fff;
    height:auto;
}
.page-head-line {
    font-size: 30px;
    text-transform: uppercase;
    color: #000;
    font-weight: 800;
    padding-bottom: 20px;
    border-bottom: 2px solid #00CA79;
    margin-bottom: 10px;
    margin-left: 20px;
    margin-top: 20px;
}

.page-subhead-line {
    font-size: 14px;
    padding-top: 5px;
    padding-bottom: 20px;
    font-style:italic;
    margin-bottom:30px;
    border-bottom:1px dashed #00CA79;
    margin-left: 20px;
}
h3{
    padding-left:45px;
}
table{
    margin:20px auto;
}
td{
    height:50px;
    text-align: center;
}
    .del{
        width:90%;
        height:90%;
        background: #00CA79;
        color:#fff;
        font-weight: bold;
        display: block;
        line-height: 50px;
        text-decoration: none;
        border-radius: 15px;
        margin-left:5px;
    }
    .add{
        width:80px;
        height:40px;
        background: #00CA79;
        color:#fff;
        font-weight: bold;
        line-height: 40px;
        text-decoration: none;
        margin:20px auto;
        font-size:40px;
        text-align: center;
        -webkit-border-radius:;
        -moz-border-radius:;
        border-radius:10px;
    }
</style>
<body>
<h1 class="page-head-line">查看医院信息</h1>
<h1 class="page-subhead-line">Check hospital message</h1>
<h3>医院基本信息</h3>
<table border="1" width="90%" cellpadding="0" cellspacing="0">
    <tr>
    <th>医院名称</th>
    <th>卫生机构类别代码</th>
    <th>医院等级</th>
    <th>管理类别</th>
    <th>医院地址</th>
    <th>操作</th>
    </tr>
</table>
<div class="add">+</div>
</body>
</html>
<script>
    tbody=$('tbody');



    $.ajax({//获取所有内容
        url: 'getdate.php',
        dataType: "json",
        error: function() { alert("Jquery Ajax request error!!!"); },
        success: function (obj) {
            console.log(obj);
            $(obj).each((index,value) => {
                console.log(value.hospital_name)
                $(`<tr id=${value.hospital_id}>`).html(`
                 <td type='hospital_name'>${value.hospital_name}</td>
                <td type='hospital_type'>${value.hospital_type}</td>
                <td type='hospital_level'>${value.hospital_level}</td>
                <td type='hospital_equity_type'>${value.hospital_equity_type}</td>
                <td type='hospital_address'>${value.hospital_address}</td>
                <td><div class='del'>删除</div></td>`).appendTo(tbody);
            })
        }
    })

    $('.add').click(function () {
        $.get('yinsert.php').done(function (text) {
            console.log(text)
            if (text){
                $('<tr id='+text+'>').html(`
                <td type='hospital_name'></td>
                <td type='hospital_type'></td>
                <td type='hospital_level'></td>
                <td type='hospital_equity_type'></td>
                <td type='hospital_address'></td>
                <td><div class="del">删除</div></td>
                `).appendTo(tbody);
            }else{
                alert('添加失败,请先完善上一条数据');
            }
        })
    })

    tbody.delegate('.del','click',function () {
        let value=$(this).closest('tr').attr('id');//向上寻找他的祖先直到遇见‘tr’为止
        $.post('delete.php','id='+value).then((text)=>{
            console.log(text)
            if(text==1){
                let tr=$(this).parents('tr');
                tr.remove();
            }else{
                alert('删除失败');
            }
        })
    }).delegate('td:not(:last-child)','dblclick',function () {
        let type=$(this).attr('type');
        let id=$(this).parent().attr('id');
        let oldvalue=$(this).html();
        let td=$(this);
        console.log(type,id)
        $(this).html('');
        $(`<input value=${oldvalue}>`).appendTo($(this)).dblclick(function(e){
            e.stopPropagation();
        })[0].focus();
        $('input') .blur( function () {
            let value=$(this).val();
//        console.log(value)
            if(value==''||value==oldvalue){
                td.html(oldvalue);
            }else{
                $.ajax({
                    url:"yitian.php",
                    data:`id=${id}&type=${type}&value=${value}`,
                    success:function (text) {
                        if(text==1){
                            td.html(value);
                        }else{
                            td.html(oldvalue);
                            alert('更新数据失败');
                        }
                    }
                });
            }
        });
    })
</script>