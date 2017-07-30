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
    public function orders($db,$table){//订单
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
            $this->str.="
                        <tr>
        <td>{$row['order_name']}</td>
        <td>{$row['disease_type']}</td>
        <td>{$row['order_start_time']}</td>
        <td>{$row['order_take_time']}</td>
        <td>{$row['money']}</td>
        <td>
            <a href='order_detail.php?id={$row['order_id']}
            &post_doctor_id={$row['post_doctor_id']}
            &take_doctor_id={$row['take_doctor_id']}
            &disease_type={$row['disease_type']}
            &file_id={$row['file_id']}
            &order_start_time={$row['order_start_time']}
            &order_take_time={$row['order_take_time']}
            &money={$row['money']}
            &title={$row['order_name']}'>查看</a>
        </td>
        </tr>
                        ";
        }
    }
    public function orders1($db,$table){//订单
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
            $this->str.="
                        <tr>
        <td>{$row['order_name']}</td>
        <td>{$row['disease_type']}</td>
        <td>{$row['order_start_time']}</td>
        <td>{$row['order_take_time']}</td>
        <td>{$row['money']}</td>
        </tr>
                        ";
        }
    }
    public function table1($db,$table){//医院
        $sql="select * from $table";
        $resule=$db->query($sql);
        while($row=$resule->fetch_assoc()){
//            $str=str_repeat('+',$n);
            $this->str.="
                        <tr>
        <td>{$row['hospital_name']}</td>
        <td>{$row['hospital_type']}</td>
        <td>{$row['hospital_level']}</td>
        <td>{$row['hospital_equity_type	']}</td>
        <td>{$row['hospital_address	']}</td>
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
        <td>{$row['user_name']}</td>
        <td>{$row['user_sex']}</td>
        <td>{$row['user_school']}</td>
        <td>{$row['user_major']}</td>
        <td>{$row['user_title']}</td>
        <td>{$row['user_duty']}</td>
        <td>{$row['user_speciality']}</td>
        <td>
            <a href='dxiu1.php?id={$row['user_id']}'>编辑</a>
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
        <td>{$row['user_name']}</td>
        <td>{$row['user_sex']}</td>
        <td>{$row['user_school']}</td>
        <td>{$row['user_major']}</td>
        <td>{$row['user_title']}</td>
        <td>{$row['user_duty']}</td>
        <td>{$row['user_speciality']}</td>
        <td>
            <a href='dshan1.php?id={$row['user_id']}'>删除</a>
        </td>
        </tr>
                        ";
        }
    }





    public function fun($db,$table,$pid,$n=0,$aa=0){
        $sql="select * from $table WHERE parentid='$pid'";
        $resule=$db->query($sql);
//        var_dump($resule);
        while($row=$resule->fetch_assoc()){
            $str=str_repeat('+',$n);
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