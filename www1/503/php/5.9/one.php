<?php session_start();
if(!$_SESSION['user']){
    $mess="请重新登录！";
    $src="../5.8login/login.html";
    include "../5.8login/index.html";
    exit;
};
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <script src="../jquery.min.js"></script>
</head>
<style>
    .box{
        width:1000px;
        margin:0 auto;
    }
    h2{
        text-align: center;
    }
    table{
        margin:10px auto;
        width:100%;
        table-layout: fixed;
        border-collapse: collapse;

    }
    tr{
        height:40px;
        line-height: 40px;
    }
    td{
        width:25%;
        text-align: center;
        border:1px solid #333;
    }
    .del{
        width:80px;
        height:32px;
        margin:4px auto;
        background: red;
        color:#fff;
        border-radius: 5px;
        line-height: 32px;
    }
    .add{
        width:180px;
        height:32px;
        margin:10px auto;
        background: red;
        color:#fff;
        border-radius: 5px;
        line-height: 32px;
        font-size: 25px;
        text-align: center;
    }
</style>
<body>
<div class="box">
    <h2>
        学生信息表
        <span><?php echo $_SESSION['user'];?></span>
        <a href="tuichu.php">退出登录</a>
    </h2>
    <table  border="1" width="90%" cellpadding="0" cellspacing="0">
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>成绩</th>
            <th>操作</th>
        </tr>
    </table>
    <div class="add">+</div>
</div>
</body>
</html>
<script>
    tbody=$('tbody')
//    $.ajax({//获取所有内容
//        url: 'getdate.php',
//        dataType: 'json',
//        success: function (obj) {
//            console.log(obj)
//            $(obj).each((index, value) => {
//                console.log(value.id);
//                $(`<tr id=${value.id}>`).html(`
//                <td type='idcard'>${value.idcard}</td>
//                <td type='names'>${value.names}</td>
//                <td type='grade'>${value.grade}</td>
//                <td><div class='del'>删除</div></td>`).appendTo(tbody);
//            })
//        }
//    })
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
        $.get('insert.php').done(function (text) {
            if (text){
                $('<tr id='+text+'>').html(`
                <td type="idcard"></td>
                <td type="names"></td>
                <td type="grade"></td>
                <td><div class="del">删除</div></td>
                `).appendTo(tbody);
            }else{
                alert('添加失败,请先完善上一条数据');
            }
        })
    })

    tbody.delegate('.del','click',function () {
        let value=$(this).closest('tr').attr('id');//向上寻找他的祖先直到遇见‘tr’为止
        $.post('delete.php','id='+value).then((text)=>{//
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
                url:"update.php",
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