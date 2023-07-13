<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <h1>App.vue</h1>
  <PostComponent :propsTest="1"></PostComponent>
  <hr>


  <h2>{{ test }}</h2>
  <button @click="test = '김김'">김</button>
  <!-- button 동작 안함! -->

  
  <h2>{{ data.name }}</h2>
  <button @click="data.name = '김김2'">김</button><br>
  
  <h2>{{ data2.name }}</h2>
  <button @click="data2.name = 'data2'">data2</button><br>
  <hr>
  
  <router-link to="/">홈으로</router-link><br>
  <router-link to="/post">post</router-link>
  
  <router-view :test="222">
    
  </router-view>
  
</template>

<script>
import PostComponent from './components/PostComponent.vue';
import {ref, reactive} from 'vue';

export default {
  name: 'App',
  components: {
    PostComponent,
  },
  setup() { //created
    let data = ref({name: '홍길동', age: 20}); // 데이터 쓸려면 ref안에 선언해야됨
    let data2 = reactive({name: '철수', age:5});
    let test = 'aaa'; // 데이터 바인딩 안됨! 실시간 업데이트 안됨

    onMounted(() => {
      // 처리
    }),
    onBeforeMount(() => {
      // 처리
    }),

    return { test, data, data2 };
  },

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
