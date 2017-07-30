// 1  http  创建服务器
// 2  创建客户端  既能作为别人访问的，也可以访问别人
// 3  http 1.0和1.1 和区别是能否一次性吧所有文件取回来 keep-alive
var http=require('http');
// http.createServer();
/*
* ajax 不能跨域  代理
*   apache 配置项  规则
*
*   服务器  js运行  回调地狱
*
*   压缩包  数据流  可写流 可读流 双向流
*
*   1 液体  流
*
*   2 渴  -> 一口一口
*
*   cookie 也是http协议的内容  session是cookie特殊的一种
*
*   创建命令：
*   1 在要执行的文件中写    #!/usr/bin/env  node
*                         能够使得我们在各种平台上找到nodejs
*   2 创建包文件 package.json  添加配置项  “bin":{"startserver":"./server.js"}  指定
*                                               {指定的命令：代用的文件}
*
*   3 想让别人用 发布npm
*       npm login
*       npm publish
*   4 自己用  npm link
*
*   5 卸载 npm uninstall -g 那个包名；
*
*   var a="/a/b";
*   var b="./b";
*   path.resolve
*
*   命令行  mkdir -p a/b/c
*
*   if-modified-since
*
* */
var config=require("./config.json")[0];
var path=require("path");
const zlib=require('zlib');//流
var fs=require("fs");
var server=http.createServer(function (req,res) {
    if(req.url=="/favicon.ico"){
        res.setHeader("content-type","*/*");
        fs.readFile("./../favicon.ico",function (error,data) {
            res.end(data);
        })
    }else{
        //得到用户请求的信息
        var root=config.root;
        fs.stat("./"+root,function (error) {
            if(error){
                res.setHeader("content-type","text/html;charset=utf-8");
                res.end("根目录不存在")
            }
        })
        // try{
        //     fs.statSync("./"+root)
        // }catch(e){
        //     console.log(e);
        // }

        var requestUrl="."+req.url;//请求的地址
        console.log(requestUrl);
        var fullpage=path.resolve(root,requestUrl);
        var ext=path.extname(fullpage);
        console.log(ext)
        // console.log(ext);

        if(!ext){
            var index=config.index;
            fullpage=path.resolve(fullpage,index);
        }
        // console.log(fullpage);
        fs.stat(fullpage,function (error) {
            if(error){
                res.setHeader("content-type","text/html;charset=utf8");
                res.writeHeader(304);
                res.end("文件找不到")
            }else{


                var info=fs.statSync(fullpage);//文件信息
                // console.log(info)
                var mtime=info.mtime.toUTCString();
                // console.log(mtime)
                var reqtime=req.headers["If-Modified-Since"];//当浏览器有缓存时，就会有该属性。若重新请求了服务器则没有这个属性

                if(reqtime&&reqtime==mtime){
                    res.writeHeader(304);
                    res.end();
                }else{
                    var type=config.type[ext];
                    // fs.readFile(fullpage,function (error,data) {
                    //     console.log(data)
                    //     res.setHeader("content-type",type+";charset=utf8");
                    //     res.setHeader("cache-control","max-age="+1000*10);//读缓存时间
                    //     res.setHeader("last-modified",mtime);//最后一次修改时间
                    //     res.end(data);
                    // })

                        res.setHeader("content-type",type+";charset=utf8");
                        res.setHeader("cache-control","max-age="+1000*10);//读缓存时间
                        res.setHeader("last-modified",mtime);//最后一次修改时间
                    res.setHeader("content-Encoding","gzip")
                    res.setHeader("set-cookie","aa=bb")
                    var read=fs.createReadStream(fullpage);
                    read.pipe(zlib.createGunzip()).pipe(res);

                }

            }
        })}
        // res.end("22");
    // }
}).listen(4444,function () {
    console.log("服务开启");
});
// server.on
// server.request();

