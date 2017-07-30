<?php
 class backshop extends indexMain {
     //判断用户是否有店铺
     function mode(){
         $user=$this->session->get("uid")!=null?$this->session->get("uid"):"1";
         header("content-type:text/html;charset=utf8");
         //获取当前用户    测试阶段使用test账号
         $db=new db2("user");//查询用户是否有商铺
         $result=$db->where("uid='{$user}'")->select();
         $this->session->set("uid",$result[0]['uid']);
         if($result[0]["uroles"]==2){
             echo "<script>location.href='index.php?m=index&f=backshop&a=showshop'</script>";
         }else{
             $db2=new db2("lists");//查询店铺分类
             $result=$db2->select();
             $this->smarty->assign("list",$result);//分配变量
             $db3=new db2("rules");      //查询优惠活动
             $result=$db3->select();
             $this->smarty->assign("rules",$result);
             $this->smarty->assign("rules",null);
             $this->smarty->display("addshop.html");
         };
     }
     function addshop(){
         //添加商铺
         $uid=$this->session->get("user")!=null?$this->session->get("user"):1;
         $simg=$_POST["simg"];
         $sname=$_POST["sname"];
         $snotes=$_POST["snotes"];
         $saddress=$_POST["saddress"];
         $senotes=$_POST["senotes"];
         $srules=$_POST['srules'];
         $lid=$_POST['lid'];
         $rid=$_POST["rid"];
         //连接数据库插入
         $db=new db2("shop");
         $result=$db->insert("simg='{$simg}',sname='{$sname}',snotes='{$snotes}',saddress='{$saddress}',senotes='{$senotes}',srules='{$srules}',lid='{$lid}',uid='{$uid}',rid='{$rid}',srec=0,status=1,state=0");
         if($result>0){
             $db2=new db2("user");
             if($db2->where("uid='{$uid}'")->update("uroles=2")>0) {
                 $this->smarty->assign("arr", $result);
                 echo "<script>alert('ok');location.href='index.php?m=index&f=backshop&a=showshop'</script>";
                 return;
             }
         }
             echo "<script> alert('error');location.href='index.php?m=index&f=backshop'</script>";

     }
     //修改商铺图片
     function changeimg(){
        $this->smarty->display("changeimg.html");

     }
     //修改商铺图片数据库
     function updateimg(){
        $img=$_POST["img"];
        $sid=$this->session->get("sid");
        $db=new db();
        $aa=$db->where("sid=$sid")->update("simg='{$img}'","shop");
        if($aa>0){
            echo "ok";
        }else{
            echo "no";
        }
     }
     //展示店铺消息
     function showshop(){
         $uid=$this->session->get("uid");
         $db2=new db2("shop");
         $result=$db2->where("uid='{$uid}'")->select();
         $this->session->set("sid",$result[0]['sid']);
         $db2=new db2("slist");
         $slist=$db2->where("sid=".$result[0]['sid'])->select("slname");
         $db=new db2("lists");
         $lname=$db->where('lid='.$result[0]['lid'])->select("lname");
         if ($result){
             $this->smarty->assign("arr",$result);
             if($slist){
                 $this->smarty->assign("slist",$slist);
             }
             if ($lname){
                 $this->smarty->assign("lname",$lname);
             }
             $this->smarty->display("showShop.html");
         }
     }
     //修改店铺
     function modifyshop(){
         $snotes=$_POST['snotes'];
         $senotes=$_POST['senotes'];
         $srules=$_POST['srules'];
         $sid=$this->session->get('sid');
         $srec=$_POST['srec'];
         $db=new db2("shop");
         $result=$db->where("sid=".$sid)->update("senotes='{$senotes}',snotes='{$snotes}',srules='{$srules}',status='{$srec}'");
         if($result>0){
             header("content-type:text/html;charset=utf8");
             echo "<script>alert('修改成功');history.go(-1)</script>";
         }else{
             header("content-type:text/html;charset=utf8");
             echo "<script>alert('未修改/修改失败');history.go(-1)</script>";
         }

     }
     //连接修改店铺图
     function changecomimg(){
         $this->smarty->display("changecomimg.html");
         $coid=$_GET["coid"];
         $this->session->set("coid",$coid);
     }
     //修改店铺图片
     function updatecomimg(){
         $img=$_POST["img"];
         $coid=$this->session->get("coid");
         $db=new db();
         $aa=$db->where("coid=$coid")->update("coimg='{$img}'","commodity");
         if($aa>0){
             echo "ok";
         }else{
             echo "no";
         }
     }
     //添加商品分类
     function addslist(){
         $sid=$_GET['id'];
         $this->smarty->assign("sid",$sid);
         $db=new db2("slist");
         $result=$db->where("sid=".$sid)->select("slname");
         $this->smarty->assign("arr",$result);
         $this->smarty->display("addslist.html");
     }
     //
     function addlist(){
         $slname=$_POST["slname"];
         $sid=$_POST["sid"];
         $db=new db2("slist");
         if($db->insert("slname='{$slname}',sid='{$sid}'")){
             header("content-type:text/html;charset=utf8");
             echo "<script>alert('添加成功');history.go(-1)</script>";
         }else{
             header("content-type:text/html;charset=utf8");
             echo "<script>alert('添加失败');history.go(-1)</script>";
         }

     }
     //展示商品
     function addcom(){
         $sid=$this->session->get("sid");
         $db=new db2("slist");
         $result=$db->where("sid=".$sid)->select();
         $this->smarty->assign("arr",$result);
         $this->smarty->display("addcom.html");
     }
     //添加商品数据
     function addcomcom(){
         //名称 价格 图片 简介 分类 商铺 当前状态 下一刻状态
         $coname=$_POST["cname"];
         $coimg=$_POST["cimg"];
         $conote=$_POST['cnotes'];
         $coprice=$_POST['cprice'];
         $slid=$_POST['slid'];
         $sid=$this->session->get("sid");
         $db=new db2("commodity");
         $result=$db->insert("coname='{$coname}',coimg='{$coimg}',conote='{$conote}',coprice='{$coprice}',slid='{$slid}',sid='{$sid}',srec=0,status=1");
         if ($result>0){
             header("content-type:text/html;charset=utf8");
             echo "<script>alert('添加成功');history.go(-1)</script>";
         }else{
             header("content-type:text/html;charset=utf8");
             echo "<script>alert('添加失败');history.go(-1)</script>";
         }
     }
     //查看商品
     function showcom(){
         //查询商品   点击到修改商品到页面   最后添加商品
         $sid=$this->session->get("sid");
         $db=new db2("commodity");
         $result=$db->where("sid=".$sid)->select();
         $this->smarty->assign("arr",$result);
         $db2=new db2("slist");
         $slist=$db2->where("sid=".$result[0]['sid'])->select();
         $this->smarty->assign("slist",$slist);
         $this->smarty->display("showcom.html");
     }
     //删除商品
     function delcom(){
        $coid=$_POST['coid'];
        $db=new db2("commodity");
        $result=$db->del("coid=".$coid);
        if ($result>0){
            echo  "ok";
        }else{
            echo "error";
        }
     }
     //修改商品
     function changecom(){
         $coid=$_GET['id'];
         $db=new db2("commodity");
         $result=$db->where("coid='{$coid}'")->select();
         if ($result){
             $this->smarty->assign("arr",$result);
             $this->smarty->assign("cid",$coid);
         }
         $this->smarty->display("changecom.html");
     }
     //修改商品数据
     function changecomcom(){
         $coid=$_POST["coid"];
         $coname=$_POST["coname"];
         $coprice=$_POST["coprice"];
         $conote=$_POST["conote"];
         $srec=$_POST["srec"];
         $db=new db2("commodity");
         $result=$db->where("coid=".$coid)->update("coname='{$coname}',coprice='{$coprice}',conote='{$conote}',status='{$srec}'");
         if ($result>0){
             header("content-type:text/html;charset=utf8");
             echo "<script>alert('修改成功');history.go(-1)</script>";
         }else{
             header("content-type:text/html;charset=utf8");
             echo "<script>alert('未修改／修改失败');history.go(-1)</script>";
         }

     }


 }