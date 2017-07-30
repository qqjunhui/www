# vue 对象绑定参数
1. el 要绑定dom元素作为vue的控制区间
2. data  就绑定该区间内的数据
3. methods 绑定该区域内的方法，但是这些方法会随着视图的变化而不断变化
4. computed 绑定该区间内的方法，使用方式不需要调用，只需要些方法名，并且不会随着无关数据的变化执行


@是v-on： 的简写

v-if="statu==done"
v-for="item in all"
：是v-bind：的简写    ：class={red:item.id==2}//绑定属性
 new Vue({
        el:".vue",//通过选择器绑定元素
        data:{//属性放data
            one:0,
            two:0,
            three:0,
        },
        methods:{//放方法  须运行 调用括号 模块内全部都涉及，全部刷新渲染
            sum:function () {
                console.log(22)
                return this.one*1+this.two*1;//this调用这个数据
            }
        },
 computed:{//计算方法  不用运行 不调用括号  只刷新涉及到的变量
            sum1:function () {
                console.log(11)
                return this.one*1+this.two*1;//this调用这个数据
            },
        },
        
        
###组件
    <btn></btn>
    angular.module("myapp",[])
    .directive("btn",function(){
        return {
            restrict:"E",
            template:"<div style='' ng-click='add()'></div>",
            link:function(a){
                a.add=function(){
                    alert(1);
                }
            }
        }
    })
    
    
    vue 
    创建组件
    1 具有抽象结构的能力
    2 行为能力，逻辑能力
    3 处理数据的能力
    <aaa :datas="[]"></aaa>
    Vue.component("aaa",{
        props:['datas'],//属性值,从外部获取标签的数据
        template:`
            <div @click="change()">232323</div>
        `，
        data(){
            return:{
                color:"",
            }
        }
        methods:{
            change:function(){}
        }
    })
### 程序生命周期

###webpack 解析编译各种文件 
    1. 全局安装 npm install webpack -g
               webpack -v 检测 
               webpack （入口文件**.js） (目标文件**.js)
    2.webpack.config.js  配置文件
      本地安装webpack    npm install webpack
      在配置文件中引入webpack 
      var webpack=requir("webpack");
      module.exports = {
        entry:'./entry.js',//入口文件
        output:{
            path:__
        }，
        moudle:{
            loaders:[
                {test:\/.css/,loader}
            ]
        }
      }
      
      下载基于webpack的loaders（模块和资源转换器） 能解析css的包（css-loader style-style-loader）
      创建package.json管理  包名和文件名不能相同
      loader放到moudle中
      命令webpack  在package.json中的script中可以更改命令  npm run **
      
###babel  把文件解析成es5
      setup->webpack1->
      创建一个文件  根目录
      进行一些预设  
      装 基于es2015的包。。
      在新建的文件中
####vue基于webpack
#### fetch  和ajax相同，异步获取
    fetch("ssss").then(function(e){
        return e.json();
    })      
    
    获取数据  干涉生命周期
    在试图和对象绑定之前  beforeMount:function(){
    
}      
    