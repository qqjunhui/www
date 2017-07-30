<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/10
 * Time: 10:23
 */
$db=new mysqli("localhost",'root','','one');
//$sql="select * from goods WHERE id=1";
//$sql="select * from goods WHERE id!=3";
//$sql="select * from goods WHERE id BETWEEN 2 and 4 ";
//$sql="select * from goods WHERE id in (3,4,7) ";
//$sql="select * from goods ORDER BY pid ASC,price DESC ";
//$sql="select * from goods ORDER BY pid ASC,price DESC limit 3";
//查询每一种货物积压的存款
//$sql="select price*num from goods";
//查询每一种货物积压的存款》10000
//$sql="select price*num as title,name from goods HAVING title>90000";
//查询每一类货物积压的存款
//$sql="select sum(price*num),name from goods GROUP BY pid";
//$sql="select COUNT(*) from goods GROUP BY pid";
//查询每一类货物积压的存款》300000
//$sql="select sum(price*num) as title,pid from goods GROUP BY pid HAVING title>200000";
//where 型子查询
$sql="select name from goods where price=(select MAX(price) from goods)";
$sql="select name from goods where price in (select price from goods WHERE price>500)";
//from 型子查询
$sql="select name from (select * from goods WHERE pid=0) as tmp";
//$sql="select * from goods INNER join (select avg(price) as ping,pid from goods GROUP BY pid) as tmp WHERE goods.pid=tmp.pid and price>ping";
//$sql="select avg(price) from goods GROUP BY pid";
//$sql="select girl.id,girl.name,boy,id as bid,boy.name as bname from boy INNER JOIN girl WHERE "
$result=$db->query("set names utf8");
$result=$db->query($sql);
//var_dump($result);
$row=$result->fetch_all();
var_dump($row);