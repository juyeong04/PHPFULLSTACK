<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>

  <router-link to="/">홈으로</router-link><br>
  <router-link to="/post">post</router-link>

  <router-view :test="222">
  
  </router-view>

</template>

<script>

export default {
  name: 'App',
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
