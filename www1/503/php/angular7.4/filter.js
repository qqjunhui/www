var ang=angular.module("filters",[]);
    ang.filter("maxOrmin",function () {
        return function(val,type=1){
            if(angular.isArray(val)){
                var item=val[0];
                console.log(val)
                if(type==1){
                    angular.forEach(val,function(value,index){
                        if(value>item){
                            item=value;
                        }
                        console.log(item)
                    })
                }else{
                    angular.forEach(val,function(value,index){
                        if(value<item){
                            item=value;
                        }
                    })
                }
                return item;
            }else{
                console.error("请选择数组形式")
            }

        }
    }).filter("trim",function () {
        return function (val,type='a') {
            var str="";
            if(angular.isString(val)){
                if(type=='a'){
                    str=val.replace(/(\s*)/g, "");
                }else if(type=='b'){
                    str=val.replace(/(^\s*)|(\s*$)/g, "");
                }else if(type=='l'){
                    str=val.replace(/(^\s*)/g, "");
                }else if(type=='r'){
                    str=val.replace(/(\s*$)/g, "");
                }
                return str;
            }else{
                console.error("请选择字符串形式")
            }
        }
    })