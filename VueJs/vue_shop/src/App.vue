<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <!-- <HelloWorld msg="하이"/> -->

  <!-- 반복문 -->
  <div :style="styleB">싸!다!</div>
  <div v-for="(item, i) in products" :key="i">
    <!-- <h4 v-for="name in products" :key="name">{{ name }}</h4> -->
    <!-- 인덱스(= for in) -->
    <h4 >{{ item.name }}</h4>
    <p>{{ item.price }}원</p>
  </div>

  <!-- 데이터 바인딩 출력 -->
  <!-- <div>
    <h4 :style="styleB">{{ product01 }}</h4>
    <p>{{ price01 }}원</p>
  </div>
  <div>
    <h4 :style="styleR">{{ product02 }}</h4>
    <p>{{ price02 }}원</p>
  </div> -->
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'App',
  // components: {
  //   HelloWorld
  // }
  data() { // 데이터 바인딩
    return {
      // products: ['티셔츠', '바지', '셔츠'],
      products: [
        {name: '티셔츠', price: '3000'}
        ,{name: '바지', price: '5000'}
        ,{name: '셔츠', price: '3000'}
      ],
      product01: ' 싸다 양!말!',
      price01: '9900',
      product02: '바지',
      price02: '9900',
      styleR: 'color:red',
      styleB: 'color:blue; font-size:30px'
    }
  }
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
