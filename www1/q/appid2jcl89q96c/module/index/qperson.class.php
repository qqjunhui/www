<?php
class qperson extends indexMain {
    function __construct(){
        parent::__construct();
        if (!$this->session->get("uid")){
            echo "<script>location.href='index.php?m=index&f=login&a=log'</script>";
            exit();
        }
        $this->db=new db();
        $this->uid=$this->session->get("uid");
    }

    function person(){
        $result=$this->db->where("uid=".$this->uid)->select('userinfo');
        $this->smarty->assign("result",$result);
        $this->smarty->display("qyh-person.html");
    }
    function xiuperson(){

        $result=$this->db->where("uid=$this->uid")->select('userinfo');
        if(!$result){
            $this->db->insert("uid=$this->uid,ustate='1',uiname='未设置昵称',uaddress='未设置地址',utel='未设置电话',unotes='未设置简介',uimg='upload/17-07-14/4dbedba0153e60fa74fa6cb48dec8e25q-5.png'","userinfo");
            $result=$this->db->where("uid=$this->uid")->select('userinfo');
        }
        $this->smarty->assign("user",$result);
        $this->smarty->display("qyh-xiuperson.html");
    }
    function xiupersonCon(){
        $name=$_REQUEST['name'];
        $tel=$_REQUEST['tel'];
        $address=$_REQUEST['address'];
        $notes=$_REQUEST['notes'];
        $aa=$this->db->where("uid=$this->uid")->update("uiname='$name',uaddress='$address',unotes='$notes',utel=$tel",userinfo);
        if($aa>0){
            echo "ok";
        }else{
            echo "no";
        }
    }
    function img(){
        $this->smarty->display("qyh-img.html");
    }
    function imgurl(){
        $obj=new upload();
        $obj->move();
    }
    function imgCon(){
        $img=$_REQUEST['img'];
        $aa=$this->db->where("uid=$this->uid")->update("uimg='$img'","userinfo");
        if($aa>0){
            echo "ok";
        }else{
            echo "no";
        }
    }
    function logout(){
        $this->smarty->display("xx-person.html");
    }
    function logoutCon(){
        $_SESSION['uid']="";
        echo "ok";
    }
}