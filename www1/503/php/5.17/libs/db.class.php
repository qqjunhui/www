<?php
/**
 * Created by PhpStorm.
 * User: think
 * Date: 2017/5/17
 * Time: 17:09
 */
if(!defined("MVC")){
    echo "非法入侵！";
    exit();
}
class db{
    public $host="localhost";
    public $user="root";
    public $pass="";
    public $database="one";
    private $link;
    private $opts=array();
    private $val="";
//    private $setvalue="";
//    private $setfile="";
//    private $setval="";
    function __construct($table){
        $this->table=$table;
        $this->link=new mysqli($this->host,$this->user,$this->pass,$this->database);
        if(mysqli_connect_errno()){
            echo "数据库连接错误";
            exit();
        }
        $this->fields="*";
    }
    public function select(){
        $this->opts['where']=$this->opts['group']=$this->opts['order']=$this->opts['limit']=" ";
//        var_dump($this->opts['where']);
        $sql="select  $this->fields from  $this->table ".$this->opts['where'] ." ".$this->opts['group']." ".$this->opts['order']." ".$this->opts['limit'];
        $result=$this->link->query($sql);
//        var_dump($sql);
        $this->link->query("set names utf8");
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        return $arr;
    }
    public function filed($val){
        $this->fields=$val;
        return $this;
    }
    public function where($params){
        $this->opts['where']="WHERE ".$params;
        return $this;
    }
    public function group($params){
        $this->opts['group']="GROUP BY ".$params;
        return $this;
    }
    public function order($params){
        $this->opts['order']="ORDER BY ".$params;
        return $this;
    }
    public function limit($params){
        $this->opts['limit']="limit ".$params;
        return $this;
    }
    public function update(){
        $sql="update $this->table set $this->setvalue "." ".$this->opts['where'];
        $this->link->query("set names utf8");
        $this->link->query($sql);
        return $this->link->affected_rows;
    }
    public function setvalue($value=""){
        $this->setvalue=$value;
        return $this;
    }
    public function insert(){
        $sql="insert into $this->table (".$this->setfile.")  VALUES  (".$this->setval.")";
        $this->link->query($sql);
        return $this->link->affected_rows;
    }
    public function setval($val=""){
        $this->setval=$val;
        return $this;
    }
    public function setfile($file=""){
        $this->setfile=$file;
        return $this;
    }
    public function delete(){
        $sql="delete from $this->table"." ".$this->opts['where'];
        $this->link->query($sql);
        return $this->link->affected_rows;
    }

}

//$obj=new db('goods');
//$obj->filed("name,num")->select();