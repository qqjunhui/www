<template>
  <div id="app">
    <ul class="nav nav-tabs" role="tablist">
      <router-link tag="li" to="/" role="presentation" active-class="active" exact><a>Home</a></router-link>
      <router-link tag="li" v-for="item in nav" to="{{item.url}}" role="presentation"active-class="active" ><a>{{item.name}}</a></router-link>
    </ul>
    <router-view></router-view>
  </div>
</template>

<script>
export default {
  name: 'index',
  data(){
      return {
          nav:[
              {name:"one",url:"/one"},
              {name:"two",url:"/two"},
              {name:"three",url:"/three"},
              ]
      }
  }
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
