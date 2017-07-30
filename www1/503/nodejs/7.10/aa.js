//angular
// 1. nodejs  没有服务器
// 2 根据用户的需求指定自己的规则
//

/*
* 动态的服务器
* */

var http=require('http');
var path=require('path');
var fs=require('fs');
/*
* 如何创建一个动态的服务器
* 对象 get post listen
*
* 用户有请求
* 服务有响应
*
* */
class server{
    constructor(){
        this.getArr={};
        this.staticType=".jpg|.png|.jpeg|.css|.js|.gif|.html";//静态文件的格式
        this.mimeType={//匹配静态文件的头文件的匹配格式
            ".jpg":"image/jpeg",
            ".png":"image/png",
            ".gif":"image/gif",
            ".jpeg":"image/jpeg",
            ".css":"text/css",
            ".html":"text/html",
            ".js":"application/x-javascript",
        }
        this.staticDir="static"//指定静态目录；
    }

    listen(port,callback){//
        var that=this;
        http.createServer(function (req,res) {
            // res.end("ok");
            that.done(req,res);
        }).listen(port,function () {
            if(callback){
                callback();
            }
        })
    }
    /*
    *   服务器
    *   Apache  地址栏的地址映射到文件的地址
    *   PHP Apache   ？mvc架构
    *   nodejs 基础代码（http） 服务器
    *   服务器  1 接受客户端的请求  2 响应请求
    *    如何接受 如何响应  模拟Apache接收和响应的流程
    *   更灵活 自己定义访问的规则 返回的规则 自己定义接受用户请求的规则，自己定义响应用户的规则
    *     1  使得编程更灵活  2  服务器更安全
    *
    *
    *     接受请求和响应流程
    *
    *     1 请求
    *       get
    *       post
    *       put  终端都没有实现put dalete nodejs
    *       delete
    *
    *       http://baidu.com/a/s/d/f/a.html
    *
    *       nodejs在横多大型的网站中，已经替换了  单线程异步机制  处理大数据  大并发
    *
    *       get
    *
    *       process.exit()  nodejs中的退出
    *
    *
    *       模板引擎  jake esc
    *
    *       自己的模板引擎
    *
    *       <%=变量%>
    *       <%j s代码 %>
    *
    *
    * */
    done(){
        var that=this;
        var url=req.url;
        if(url=="/favicon.ico"){
            res.end();
        }else{
            var urlinfo=path.parse(url);
            // 如果访问静态文件
            if(that.staticType.indexOf(urlinfo.ext)>-1&&urlinfo.ext){
                var staticUrl=path.join(this.staticDir,urlinfo.dir,urlinfo.base);
                fs.readFile(staticUrl,function (error,data) {
                    if(error){
                        console.log("不存在");
                        res.end();
                    }else{
                        res.setHeader("content-type",that.mimeType[urlinfo.ext]+";charset=utf-8");
                        res.end(data);
                    }
                })
            }else{


                var fullpath=req.url;
                that.flag=true;
                for(let i in that.getArr){
                    if(eval(i).test(fullpath)){
                        that.flag=false;
                        var result=eval(i).exec(fullpath);
                        for(let j=0;j<that.getArr.attr.length;j++){
                            req[that.getArr[i].attr[j]]=result[j+1];
                        }

                        res.sengFile=function (filepath) {
                            res.end(filepath);
                        }

                        fa.createReadStream(filepath).pipe(res);

                        that.getArr[i].fn(req,res);
                    }
                }
                if(that.flag){

                }
            }
            if(that.flag){
                res.setHeader("content-type","text/html;charset=utf-8");
                res.end("迷路了");
            }
        }
    }
    get(url,callback){
        var attr=url.match(/:[^\/]+/g||[]);//找完是个数组
        attr=attr.map(function (a,b) {
            return a.substr(1);
        })
        var reg=url.replace(/:[^\/]+/,"([^\/]+)");
        reg="/^"+reg.replace(/\//g,"\\/")+"$/";

        this.getArr[reg]={};
        this.getArr[reg].attr=attr;
        this.getArr[reg].fn=callback;
        console.log(this.getArr);
    }
}
module.exports=function () {
    return new server();
}











