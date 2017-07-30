<template>
  <div id="app">
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
      <li role="presentation" v-for="item in nav"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">{{item}}</a></li>
    </ul>
  </div>
</template>
<!--可移植性比较强（优点）-->
<!--灵活性不够（缺点）-->
<script>
export default new Vue({
  name: 'index',
  data(){
      return {
          nav:[Profile,Messages,Settings]
      }
  }
})
</script>