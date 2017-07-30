// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Index from './App'
import Router from 'vue-router'
import '@/assets/css.css'
Vue.use(Router)
import Hello from '@/components/Hello'//对应的路由
import one from '@/components/one'//对应的路由
import two from '@/components/two'//对应的路由
import three from '@/components/three'//对应的路由
//配置路由
var router= new Router({
    routes: [
        {
            path: '/',
            name: 'Hello',
            component: Hello
        },
        {
            path: '/one',
            name: 'one',
            component: one
        },
        {
            path: '/two',
            name: 'two',
            component: two
        },
        {
            path: '/three',
            name: 'three',
            component: three
        }
    ]
})
new Vue({
  el: '#app',
  router,
  template: '<Index/>',
  components: { Index }
})
