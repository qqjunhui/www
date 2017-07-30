import Vue from 'vue'
import Index from './App'
import Router from 'vue-router'
import css from '@/assets/css.css'
Vue.use(Router)
import Hello from '@/components/Hello'//对应的路由
//配置路由
var router= new Router({
    routes: [
        {
            path: '/',
            name: 'Hello',
            component: Hello
        }
    ]
})

new Vue({
  el: '#app',
  router,
  css,
  template:"<Index>",
  components: {Index}//注册为组件
})
// 1.找到入口文件
// 2.载入 vue    import Vue from 'vue'
// 3.载入入口页面
// 4.写入口页面的组件 APP.vue
// 5.template  script(export default{name:})
// 6.<router-view></router-view>  放到入口页面指定的位置  路由进来的组件都会呈现到这
// 7.配置路由
// 8.载入 import Router from 'vue-router'
// 9.Vue.use(Router)
// 10.设置路由
//     var router= new Router({
//         routes: [
//             {
//                 path: '/',
//                 name: 'Hello',
//                 component: Hello
//             }
//         ]
//     })
// 11.指定路由的路径以及路由对应的组件
