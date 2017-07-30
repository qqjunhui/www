/*
*
*
*
* */
function compile(str) {
    var str=str.replace(/\n/g,"").replace(/'/g,'"')//把所有换行去掉  单引号替换成双引号
    str=str.replace(/<%=([^%]+)%>/g,function (a,b) {//a是整体匹配到东西  b是括号中的东西
        return "'+"+b+"+'";
    })
    str=str.replace(/<%=([^%]+)%>/g,function (a,b) {
        return "'\n"+b+"\n tpl+='";
    })
    str="var tpl='';with(obj){tpl+='';tpl+="+str+"'return tpl}";
    return new Function("obj",str);
}
function render(str,data) {
    return compile(str)(data);
}