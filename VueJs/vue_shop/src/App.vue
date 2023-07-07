<template>
  <img alt="Vue logo" src="./assets/로고.png" style="width: 300px;">
  <!-- <HelloWorld msg="하이"/> -->
  
  <!-- 네비게이션 바 -->
  <nav class="nav">
    <a href="">HOME</a>
    <a href="">상품</a>
    <a href="">기타</a>
  </nav>

  <!-- 모달 -->
  

  <!-- 상품 리스트 -->
  <!-- 반복문 (v-for) 0706-->
    <div :style="styleB">싸!다!</div>
  <!-- 인덱스(= for in) -->
    <div v-for="(item, i) in products" :key="i">
      <!-- <h4 v-for="name in products" :key="name">{{ name }}</h4> -->
      <img :src="item.img" alt="" style="width:200px;">
      <h4>{{ item.name }}</h4>
      <p>{{ item.price }}원</p>
      <!-- <button v-on:click="count++">수량 증가</button><span>{{ count }}</span> -->
      <!-- <button @click="item.count++">수량 증가</button><span>{{ item.count }}</span> -->
      <button @click="plus(i)">수량 증가</button><br>
      <button @click="item.count--">수량 감소</button>
      <span>{{ item.count }}</span>
    </div>
  
  <!-- 데이터 바인딩 출력 0706 -->
    <!-- <div>
      <h4 :style="styleB">{{ product01 }}</h4>
      <p>{{ price01 }}원</p>
    </div>
    <div>
      <h4 :style="styleR">{{ product02 }}</h4>
      <p>{{ price02 }}원</p>
    </div> -->

  <!-- if (v-if) 0707 -->
    <p v-if="1 == 1">if문 테스트</p>
  
  <!-- event handler (v-on:click / @click) 0707 -->

</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

// import 0707
import data from './assets/js/data.js'

export default {
  name: 'App',
  // components: {
  //   HelloWorld
  // }
  data() { // 데이터 바인딩
    return {
      // products: ['티셔츠', '바지', '셔츠'],
      // products: [
      //   {name: '티셔츠', price: '3000', count:1, img:require('@/assets/티셔츠.jpg')}
      //   ,{name: '바지', price: '5000', count:1, img:require('@/assets/바지.jpg')}
      //   ,{name: '셔츠', price: '3000', count:1, img:require('@/assets/셔츠.jpg')}
      // ],
      products:data, // import 0707
      product01: '싸다 양!말!',
      price01: '9900',
      product02: '후드',
      price02: '9900',
      styleR: 'color:red;',
      styleB: 'color:blue; font-size:30px; font-weight:bold',
      
    }
  },
  methods: { // 함수를 설정하는 영역
    plus(i) {
      this.products[i].count++;
    }
  },
}
</script>

<style>
@import url('./assets/css/app.css');

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  /* margin-top: 60px; */
}

</style>
