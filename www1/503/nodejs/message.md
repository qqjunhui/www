考题 考生  老师 类型  分数

1   考题
1.1 类型（选择题 【单选，多选】 填空 简答）
1.2 阶段（高级 初级 中级）
1.3 方向（开发 设计）
1.4 内容

2  考生
//2.1 班级（）
2.2 基本信息（） 班级  阶段 类型

 
3 老师
3.1 基本信息  班级 阶段 类型

4 编辑管理表

5 阶段管理表

6 方向管理表

7 组题表  内容 方向 阶段  类型 班级 老师 
         js  开发   js   单选 1701 月
8 用户表

9 学生  老师

10 成绩表 分数 学生 班级 阶段 方向 老师 出错

11 考题管理员录入 管理员表



promise   承诺
0 为止
1 实现     reslove
2 拒绝实现 reject


1 要做承诺
2 要做的事情
我要做一个承诺，如果成功了就是reslove("成功")，失败就是reject（“失败”）
完了执行下面的函数，成功执行第一个，失败执行第二个

var obj=new Promise(function(reslove,reject){
    setTimeout(function(){
        reslove();
    },2000)
})
obj.then(function(){
    成功执行
},function(){
    不成功执行
})

var obj=new Promise(function(reslove,reject){
    var obj=new XMLHttpRequest();
    obj.open("get","aa/bb");
    obj.onload=function(){
        reslove("success");
    }
    obj.onerror=function(){
        reject("no")
    }
})
obj.then(function(){
    console.log(data)
},function(){
    console.log(data)

})

即时通信 
    社交功能
    http无状态协议
    分布式系统 数据库分布到不同电脑上 缓存 技术 
    socket  socket.io  服务器和客户端
    
    客户端  var soocket=io.(http://localtion:8888) 
                socket.on(connect,function(){
                    socket.emit(“aa”,"123")；
                }) ejs
    服务器  io.on("connention",function(c){
                c.emit("aa","我收到了")
            })
    服务器 安装 
    nodejs 单线程异步机制 因此可以用极小的代价处理大数据 高并发 包比较多 angular 
    vue
    
    
    git 上传大小配置
    git config --global  http.postBuffer 524288000 
    
    
    
####ajax
    只限于同源策略  同一个域名下面
    跨域 
    解决跨域的问题
       1 jsonp 依赖script标签对的两个特性，异步获取数据的能力 远程访问的能力 
         访问远程地址  拿回来的东西当做js代码执行
        script  src="http://localhost:7777/abc?callback=aa"//传递函数
         
         fn=req.query.callback;
         
         劣势：两台服务器必须都能控制  
        $.ajax({
            url:"http://localhost:7777/abc",
            dataType:"jsonp",
            jsonp:"callback",
            success:function(e){}
            
        })  动态的创建一个script标签对
       
       2 代理的方式
        require("http")
        
        进程 
        