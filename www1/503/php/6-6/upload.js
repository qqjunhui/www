/**
 * Created by think on 2017/6/6.
 */
class upload{
    constructor(){
        this.size=1024*1024*10;
        this.type='image/jpeg,image/jpg,image/png,image/gif';
        this.containerStyle={width:300,height:'auto'}
        this.selectBtnStyle={width:150,height:40,background: 'orange',text:'选择图片'}
        this.uploadBtnStyle={width:150,height:40,background: 'yellow',text:'上传图片'}
        this.PStyle={width:300,height:'auto'}
        this.progressStyle={height:20,border_top:'1px solid #ccc'}
        this.backStyle={width:'0%',background:'red'}
        this.list=[];
    }
    createView(params={}){
        // 创建上传的大容器
        this.createContainer(params.container,params.parent,()=>{

            // 创建选择按钮
            this.createSelectBtn(params.selectBtn);
            // 创建上传按钮
            this.createUploadBtn(params.uploadBtn);
            // 创建预览
            this.createP(params.p);
            //创建列表   选择的数量  this.createList(params.list);

            // 注册change 事件
            this.change();
        })
    }

    change(){
        var that=this;
        this.selectBtn.onchange=function () {
             that.data=Array.prototype.slice.call(this.files);
             that.check();
        }
    }

    up(url){
        let that=this;
        console.log(url)
        if(!url){
            console.error('必须要传入数据');
            return;
        }
        this.uploadBtn.onclick=()=>{
            for(var i=0;i<this.data.length;i++){
                var form=new FormData();
                form.append("file",that.data[i]);
                var ajax=new XMLHttpRequest();
                ajax.onload=()=>{
                    console.log(ajax.responseText);
                }
                !function(i){
                    ajax.upload.onprogress=function(e){
                        let total=e.total;
                        let loaded=e.loaded;
                        let per=loaded/total*100+"%";
                        let back=that.list[i].back;
                        back.innerHTML=per;
                        back.style.width=per;

                    }
                }(i);
                console.log(form)
                ajax.open("post",url,true);
                ajax.send(form);

            }

        }



    }

    //检查
    check(){
        let that=this;
        var temp=[];
        for(var i=0;i<this.data.length;i++){
            temp[i]=this.data[i];
        }
        for(let i=0;i<temp.length;i++){
            var obj=this.createList();
            var read=new FileReader();
            read.readAsDataURL(temp[i]);
            (function (obj,read) {
                read.onload=function(e){
                    obj.img.src=e.target.result;
                }
            })(obj,read);
            if(!(temp[i].size<this.size&&this.type.indexOf(temp[i].type)>-1)){
                obj.message.style.display="block";
                obj.message.innerHTML="不符合条件";
                for(let j=0;j<temp.length;j++){
                    if(this.data[i]===temp[j]){
                        this.data.splice(i,1);
                        console.log(this.data);
                    }
                }
                obj.del.onclick=function () {
                    this.parentNode.parentNode.removeChild(this.parentNode);
                }
            }else{
                this.list.push(obj);
            }
        }

        for(let i=0;i<this.list.length;i++){
            this.list[i].del.index=i;
            this.list[i].del.onclick=function () {
                this.parentNode.parentNode.removeChild(this.parentNode);
                console.log(this.index)
                that.data.splice(this.index,1);

            }
        }
        console.log(this.list);
        console.log(this.data);
    }



    createContainer(container,parent,callback){
        if(container){
            this.container=container;
            return;
        }
        if(!parent){
            console.error('父容器未设置');
            return;
        }
        this.parent=parent;
        this.container=document.createElement('div');
        this.container.style.cssText=`width:${this.containerStyle.width}px;overflow: hidden;border:1px solid #ccc;`;
        this.parent.appendChild(this.container);
        callback();
    }
    //让程序更健壮，可移植性
    createSelectBtn(btnEle){
        if(btnEle){
            this.selectBtn=btnEle;
            return;
        }
        var div=document.createElement('div');
        div.style.cssText=`width:${this.selectBtnStyle.width}px;height:${this.selectBtnStyle.height}px;background:${this.selectBtnStyle.background};text-align: center;line-height:${this.selectBtnStyle.height}px;border-radius:5px;color:#fff;font-weight: bold;position: relative;`;
        var span=document.createElement('span');
        span.innerHTML=this.selectBtnStyle.text;
        var input=this.selectBtn=document.createElement('input');
        input.style.cssText="width:100%;height:100%;opacity: 0;position: absolute;top:0;left:0;cursor:pointer;";

        input.type='file';
        input.accept =this.type;
        input.multiple='multiple';
        div.appendChild(span);
        div.appendChild(input);
        this.container.appendChild(div);
    }
    createUploadBtn(btnEle){
        if(btnEle){
            this.uploadBtn=btnEle;
            return;
        }
        var div=this.uploadBtn=document.createElement('div');
        div.style.cssText=`width:${this.uploadBtnStyle.width}px;height:${this.uploadBtnStyle.height}px;background:${this.uploadBtnStyle.background};text-align: center;line-height:${this.uploadBtnStyle.height}px;border-radius:5px;color:#fff;font-weight: bold;position: relative;`;
        var span=document.createElement('span');
        span.innerHTML=this.uploadBtnStyle.text;
        div.appendChild(span);
        this.container.appendChild(div);
    }
    createP(ele){
        if(ele){
            return;
        }
        var div=this.P=document.createElement('div');
        div.style.cssText=`width:${this.PStyle.width}px;height:${this.PStyle.height}`;
        this.container.insertBefore(div,this.uploadBtn);
    }
    createList(ele){// 返回值：包含图片 img   错误信息 message 及   当前的地址
        if(ele){
            this.list=ele;
            return;
        }
        //创建列表容器
        var div=document.createElement('div');
        div.style.cssText=`width:100px;height:100px;position:relative;display:inline-block`;
        // 放入图片
        var img=document.createElement('img');
        img.style.cssText=`width:100%;height:100%;position:absolute;top:0;left:0;`;
        // 进度条
        var progress=document.createElement('div');
        progress.style.cssText=`width:100%;height:${this.progressStyle.height}px;border:${this.progressStyle.border};position:absolute;bottom:0;left:0;`;
        // 创建进度条背景
        var back=document.createElement('div');
        back.style.cssText=`width:${this.backStyle.width};height:100%;text-align:center;font-size:10px;background:${this.backStyle.background};position:absolute;top:0;left:0;`;
        progress.appendChild(back);
        // 提示信息
        var message=document.createElement('div');
        message.style.cssText=`width:100px;height:30px;background:#ccc;position:absolute;top:50%;margin-top:-30px;left:50%;margin-left:-50px;border-radius:5px;display:none`;
        // 创建删除按钮
        var del=document.createElement('div');
        del.style.cssText=`width:30px;height:20px;background:yellow;font-size:12px;position:absolute;top:0;right:0;text-align:center;line-height:20px;display:none`;
        del.innerHTML='删除';
        div.appendChild(img);
        div.appendChild(progress);
        div.appendChild(message);
        div.appendChild(del);
        div.appendChild(del);
        this.P.appendChild(div);
        div.onmouseover=function(){
            del.style.display="block";
        }
        div.onmouseout=function () {
            del.style.display='none';
        }
        del.onclick=function(){
            let parent=this.parentNode;
            let p=parent.parentNode;
            p.removeChild(parent);
        }
        return {
            list:div,
            img:img,
            back:back,
            message:message,
            del:del,
        }
    }
}
var obj=new upload();
obj.createView({
    parent:document.body,
})
obj.up("up.php");