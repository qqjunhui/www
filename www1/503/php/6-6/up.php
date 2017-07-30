<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/6/8
 * Time: 9:46
 * 给用户提供方便
 * 数据验证
 * 朋友
 */
class upload{

    public $type="image/jpeg,image/jpg,image/png,image/gif";
    public $size;
    public $root="upload";
    public $fullpath="";
    function __construct(){
        $this->size=1024*1024*10;
    }

    //得到接收数据
    function accept($attr="file"){
        $this->data=$_FILES[$attr];
        var_dump($this->data["tmp_name"]);
    }

    //验证
    function check(){
        if(is_uploaded_file($this->data["tmp_name"])){
            if (strrchr($this->type,$this->data["type"])&&$this->data["size"]<$this->size){
                return true;
            }
        }
        return false;
    }
    // 定义路径
        private function customUrl(){
//          更目录是否存在
            if(!is_dir($this->root)){
                mkdir($this->root);
            }
//              创建分类目录
            $path=$this->root."/".date("y-m-d");
            echo $path;
            if(!is_dir($path)){
                mkdir($path);
            }
//            创建文件的随机名字
            $name=md5(time().mt_rand(0,10000)).$this->data["name"];

//            4 整合完整的路径
            $this->fullpath=$path."/".$name;
        }
//
        private function moveFile(){
            move_uploaded_file($this->data["tmp_name"],$this->fullpath);
        }
    // move
        public function move(){
            $this->accept();
            if($this->check()){
                $this->customUrl();
                $this->moveFile();
            }else{
                echo "error";
            }
        }
    }

$obj=new upload();
$obj->move();

exit;