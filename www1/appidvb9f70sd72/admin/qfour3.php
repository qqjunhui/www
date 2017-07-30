<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 10:53
 */
include_once "public.php";
include_once "function.php";
$obj=new All();
$obj->table2($db,'qposition');
//var_dump($obj->str);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<style>
    body{
        background: #fff;
    }
td{
text-align: center;
}
</style>
<h1 class="page-head-line">管理推荐位</h1>
<table  border="1" width="90%" cellpadding="0" cellspacing="0">
    <tr>
        <th>推荐位ID</th>
        <th>推荐位名称</th>
        <th>操作</th>
    </tr>
    <?php echo $obj->str ?>
</table>
</body>
</html>
