/**
 * Created by think on 2017/5/12.
 */
window.onload=function(){
    class Uplode{
        constructor(url,fileobj,imgbox,progressobj,success){
            this.fileobj=fileobj;
            this.imgobj=imgbox;
            this.progress=progressobj;
            this.size=10*1024*1024;
            this.url=url;
            this.imgarr=['jpg','jpeg','png','gif'];
            this.success=success;
        }
        change(){//文件读到浏览器
            let that=this;
            this.fileobj.onchange=function(){
                that.file=this.files[0];//获取的是是 file的对象 name,size,type等  输出来但显示不出来
                let fileread=new FileReader();//创建文件阅读器
                fileread.readAsDataURL(that.file);//读取文件的格式
                fileread.onload=function (e) {//加载完毕后只想的函数文件加载完毕
                    // console.log(e);//会把图片信息保存下来
                    if(that.check()){//判断文件是否满足格式
                        that.imgobj.src=e.target.result;//浏览器把图片读成得格式
                    }
                }
                that.uploadimg();
            }
        }
        check(){
            if(this.file.size > this.size){
                alert('图片过大!');
                return false;
            }
            if(!this.imgarr.includes(this.file.name.split('.')[1].toLowerCase())){
                console.log(this.file.name.split('.')[1].toLowerCase())
                alert('文件格式不正确！');
                return false;
            }
            return true;
        }
        uploadimg(){
            let that=this;
            let ajax=new  XMLHttpRequest();//创建ajax
            let formdate=new FormData();//不需要将整个表单放进去
            formdate.append('img',this.file);
            ajax.onload=function(){
                that.success(ajax.responseText);
                // console.log(ajax.responseText)
            }
            ajax.upload.onprogress=function (e) {
                console.log(e);
                let pro=e.loaded/e.total*100;
                that.progress.style.width=pro+'%';

            }
            ajax.open('post',this.url,true);//传输文件只能用post
            ajax.send(formdate);
        }
        // aa(fun){
        //     this.fun=fun;
        // }
    }
    let fileobj=document.querySelector('#file');
    let imgobj=document.querySelector('img');
    let progress=document.querySelector('.progress');
    let urlimg=document.querySelector('#imgurl');

    let newup=new Uplode('qupload.php',fileobj,imgobj,progress,function(text){
        urlimg.value=text;
    });
    newup.change();
}