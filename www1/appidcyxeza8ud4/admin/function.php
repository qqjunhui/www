<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/11
 * Time: 15:40
 */
class All{
    public function __construct(){
        $this->str='';
    }
    public function fun($db,$table,$pid,$n=0,$aa=0){
        $sql="select * from $table WHERE pid='$pid'";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
            $str=str_repeat('┗',$n);
            if($row['cid']==$aa){
                $this->str.="<option selected value={$row['cid']}>{$str}{$row['catname']}</option>";
            }
            $this->str.="<option value={$row['cid']}>{$str}{$row['catname']}</option>";
            $this->fun($db,$table,$row['cid'],$n+2);
        }
    }
    public function fun1($db,$table){
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
            $this->str.="<option value={$row['posiid']}>{$row['posname']}</option>";
        }
    }
//    public function fun2($db,$table,$pid,$n=0,$aa=0){//编辑内容
//        $sql="select * from $table WHERE parentid='$pid'";
//        $resule=$db->query($sql);
////        var_dump($resule);
//        while($row=$resule->fetch_assoc()){
//            $str=str_repeat('+',$n);
//            if($row['cid']==$aa){
//                $this->str.="<option selected value={$row['cid']}>{$str}{$row['catname']}</option>";
//            }
//            $this->str.="<option value={$row['cid']}>{$str}{$row['catname']}</option>";
//            $this->fun($db,$table,$row['cid'],$n+2);
//        }
//    }
    public function table($db,$table,$pid,$n=0){//栏目管理
        $sql="select * from $table WHERE pid='$pid'";
        $resule=$db->query($sql);
//        var_dump($resule);
        while($row=$resule->fetch_assoc()){
            $str=str_repeat('+',$n);
            $this->str.="<tr>
                         <td>{$row['cid']}</td>
                         <td>{$str}{$row['catname']}</td>
                         <td>{$row['pid']}</td>
                         <td><a href='qdellm.php?aa={$row['cid']}'>删除</a>
                             <a href='qchangelm.php?aa={$row['cid']}'>编辑</a></td>
                        </tr>";
            $this->table($db,$table,$row['cid'],$n+2);
        }
    }
    public function table2($db,$table){//推荐位
        $sql="select * from $table";
        $resule=$db->query($sql);
//        var_dump($resule);
        while($row=$resule->fetch_assoc()){
            $this->str.="<tr>
                         <td>{$row['posiid']}</td>
                         <td>{$row['posname']}</td>
                         <td><a href='qfour3del.php?aa={$row['posiid']}'>删除</a>
                             <a href='qfour3ch.php?aa={$row['posiid']}'>编辑</a></td>
                        </tr>";
        }
    }
    public function table3($db,$table){//内容
        $sql="select * from $table";
        $resule=$db->query($sql);
//        var_dump($resule);
        while($row=$resule->fetch_assoc()){
            $this->str.="<tr>
                         <td>{$row['cid']}</td>
                         <td>{$row['position']}</td>
                         <td>{$row['title']}</td>
                         <td>{$row['content']}</td>
                         <td><img src='{$row["thumb"]}' alt=''></td>
                         <td><a href='qfivedel.php?aa={$row['sid']}'>删除</a>
                             <a href='qfivech.php?aa={$row['sid']}'>编辑</a></td>
                        </tr>";
        }
    }
    public function table1($db,$table){//医院
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
//            $str=str_repeat('+',$n);
            $this->str.="
                        <tr>
        <td>{$row['name']}</td>
        <td>{$row['nature']}</td>
        <td>{$row['level']}</td>
        <td>
            <a href='delete.php?id={$row['id']}'>编辑</a>
        </td>
        </tr>
                        ";
        }
    }
    public function tabled($db,$table){//医院
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
//            $str=str_repeat('+',$n);
            $this->str.="
                        <tr>
        <td>{$row['zhanghao']}</td>
        <td>{$row['dname']}</td>
        <td>{$row['dtype']}</td>
        <td>{$row['dxueli']}</td>
        <td>{$row['dengji']}</td>
        <td>
            <a href='dxiu1.php?id={$row['did']}'>编辑</a>
        </td>
        </tr>
                        ";
        }
    }
    public function tableds($db,$table){//医院
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
//            $str=str_repeat('+',$n);
            $this->str.="
                        <tr>
        <td>{$row['zhanghao']}</td>
        <td>{$row['dname']}</td>
        <td>{$row['dtype']}</td>
        <td>{$row['dxueli']}</td>
        <td>{$row['dengji']}</td>
        <td>
            <a href='dshan1.php?id={$row['did']}'>删除</a>
        </td>
        </tr>
                        ";
        }
    }
    public function tableorder($db,$table){//医院
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
            $this->str.="<tr>
        <td>{$row['dingdan']}</td>
        <td>{$row['buy']}</td>
        <td>{$row['buy1']}</td>
        <td>{$row['order']}</td>
        <td>{$row['money']}</td>
        </tr> ";
        }
    }
    public function table11($db,$table){//医院
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
//            $str=str_repeat('+',$n);
            $this->str.="
                        <tr>
        <td>{$row['name']}</td>
        <td>{$row['nature']}</td>
        <td>{$row['level']}</td>
        <td>
            <a href='yishan1.php?id={$row['id']}'>删除</a>
        </td>
        </tr>
                        ";
        }
    }
}