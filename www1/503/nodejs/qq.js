/*
 * cmd   通用模块定义方式
 * amd   异步模块定义方式
 *   模块化编程  把不同的功能 放到不同的目录或文件  单独管理 减少耦合
 *
 * */
var http=require("http");
var fs=require("fs");
var mine=require('./mine').types;
// console.log(__dirname);
http.createServer(function (req,res) {
    console.log(req.url);
    if(req.url=="/favicon.ico"){
        res.setHeader("content-type","*/*");
        fs.readFile("./favicon.ico",function (error,data) {
            res.end(data);
        })

    }else{
        var url="."+req.url;
        console.log(url);
        fs.readFile(url,function (error,data) {
            console.log(error);
            if(error){
                res.setHeader("content-type","text/html;charset=utf-8");
                res.end("页面未找到");
            }else{
                // res.writeHead(200, {"Content-Type": "image/png"});
                // res.writeHead(404, {"Content-Type": "text/html"});
                res.end(data);
            }
        })
    }
    // res.end("ok");
}).listen(4444,function () {
    console.log("服务开启");
});
// console.log(1);