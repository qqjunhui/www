<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/16
 * Time: 17:57
 */
include_once "../public.php";
$id=$_REQUEST['id'];
$user_name=$_REQUEST['user_name'];
$name=$_REQUEST['name'];
$user_school=$_REQUEST['user_school'];
$user_major=$_REQUEST['user_major'];
$user_title=$_REQUEST['user_title'];
$user_duty=$_REQUEST['user_duty'];
$user_qualification=$_REQUEST['user_qualification'];
$user_practicing=$_REQUEST['user_practicing'];
$user_certificate=$_REQUEST['user_certificate'];
$user_city=$_REQUEST['user_city'];
$user_address=$_REQUEST['user_address'];
$user_speciality=$_REQUEST['user_speciality'];
//$sql="select *from user WHERE user_id='$id'";
//$result=$db->query($sql);
//$row=$result->fetch_assoc();
//if($row['user_name']=$user_name&&$row['user_sex']=$name&&$row['user_school']=$user_school&&$row['']){
//    if(){
//        if(){
//            if(user_major='$user_major'){
//                if(user_title='$user_title'){
//                    if(user_duty='$user_duty'){
//                        if(user_qualification='$user_qualification'){
//                            if(user_practicing='$user_practicing'){
//                                if()
//                            }
//                        }
//                    }
//                }
//                    ,,,,user_certificate='$user_certificate',user_city='$user_city',user_address='$user_address',user_speciality='$user_speciality'
//            }
//        }
//    }
//}
$sql="update user set user_name='$user_name',user_sex='$name',user_school='$user_school',user_major='$user_major',user_title='$user_title',user_duty='$user_duty',user_qualification='$user_qualification',user_practicing='$user_practicing',user_certificate='$user_certificate',user_city='$user_city',user_address='$user_address',user_speciality='$user_speciality' WHERE user_id='$id'";
$result=$db->query($sql);
if ($result) {
    $mess = "修改成功";
} else {
    $mess = "修改失败";
}
$src="dxiu.php";
include_once "../login/index.html";