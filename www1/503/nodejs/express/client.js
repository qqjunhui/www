var http=require("http");
var config={
    hostname:"www.sxuek.com",
}

var obj=http.request(config,function (res) {
    red.on("data",function (data) {
        console.log(data.toString());

        //爬虫  百度核心技术  大数据  分布式 算法 人工智能
    })
    res.on("end",function () {

    })
})
obj.end();


//安装request包可以处理  安装  cheerio  查询
        获取到的是16进制的