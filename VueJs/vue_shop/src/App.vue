<template>
  <img alt="Vue logo" src="./assets/로고.png" style="width: 300px;">
  <!-- <HelloWorld msg="하이"/> -->
  
  <Nav :product1 = "product01" :navList = "navList"></Nav>
  <!-- <Nav :navList = "navList"></Nav> -->

  <!-- 네비게이션 바
  <nav class="nav">
    <a href="">HOME</a>
    <a href="">상품</a>
    <a href="">기타</a>
  </nav> -->

  <!-- 이벤트 훅 : 특정 시점에 동작하게 하고 싶을때 -->
  <div class="discount" v-if="flg">
    <p>지금 당장 구매하시면, 20% 할인!</p>
  </div>
  <button @click="hookTest=!hookTest">훅테스트</button>
  {{ hookTest }}

  <!-- v-model 0710 -->
    <!-- input value type은 String임! -->
    <!-- watch method 유효성검사 함수 작성 -->
      <!-- <input type="text" @input="inputTest = $event.target.value"> -->
      <!-- <input type="text" v-model="inputTest">
      <br>
      <span>{{ inputTest }}</span>
      <br> -->

  <!-- 모달 -->
    <!-- <Modal @closeModal="modalFlg=false" :modalFlg="modalFlg" :products = "products" :productNum = "productNum" @plus="plus(productNum);" @minus="minus(productNum);"></Modal> -->
    <!-- 모달창 부드럽게 뜨기 방법1-->
      <!-- <div class="startTransition" :class="{endTransition : modalFlg}">
      <Modal @closeModal="modalFlg=false;" :modalFlg="modalFlg" :products = "products" :productNum = "productNum"></Modal>
      </div> -->
    <!-- 모달창 부드럽게 뜨기 방법2-->
      <transition name="modalTransition">
        <Modal @closeModal="modalFlg=false;" :modalFlg="modalFlg" :products = "products" :productNum = "productNum"></Modal>
      </transition>

  <!-- <div class="bg_black" v-if="modalFlg">
    <div class="bg_white" >
      <img :src="products[productNum].img" alt="" style="width: 100%">
      <h4>{{products[productNum].name}}</h4>
      <p>{{products[productNum].content}}</p>
      <p>{{products[productNum].price*products[productNum].count}}</p>
      <button @click="products[productNum].count++">수량 증가</button><br>
      <button @click="products[productNum].count--">수량 감소</button>
      <span>{{ products[productNum].count }}</span>
    </div>
    <button @click="modalFlg = false">닫기</button>
  </div> -->

  <!-- 상품 리스트 -->
    <ProductList @openModal="modalFlg=true; productNum=i;" :product = "product" v-for="(product, i) in products" :key="i"></ProductList>

  <!-- 반복문 (v-for) 0706-->
  <!-- 인덱스(= for in) -->
      <!-- <h4 v-for="name in products" :key="name">{{ name }}</h4> -->
      <!-- <button v-on:click="count++">수량 증가</button><span>{{ count }}</span> -->
      <!-- <button @click="item.count++">수량 증가</button><span>{{ item.count }}</span> -->
      <!-- <button @click="plus(i)">수량 증가</button><br>
      <button @click="item.count--">수량 감소</button> -->
      <!-- <span>{{ item.count }}</span> -->
  
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
    <!-- <p v-if="1 == 1">if문 테스트</p> -->
  
  <!-- event handler (v-on:click / @click) 0707 -->

</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'

// import 0707
import data from './assets/js/data.js'
import Nav from './components/Nav.vue'
import ProductList from './components/ProductList.vue'
import Modal from './components/Modal.vue'

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
      product01: '양말',
      price01: '9900',
      product02: '후드',
      price02: '9900',
      styleR: 'color:red;',
      styleB: 'color:blue; font-size:30px; font-weight:bold',
      modalFlg:false,
      productNum: 0,
      navList: ['홈', '상품', '기타'],
      inputTest: '',
      productInput:'',
      hookTest: false,
      // flg: false,
      
      
    }
  },
  // updated() {
  //   this.flg=true;
  // },
  // ** created : 데이터를 다 만들고 나서 실행함
  created() {
    this.flg=true;
  },
  watch: { // 실시간 감시 함수 정의 영역
    inputTest(input) {
      if(input == 3) {
        alert('333');
        this.inputTest='';
        
      }
    },
  },
  methods: { // 함수를 설정하는 영역
    plus(i) {
      this.products[i].count++;
    },
    minus(i) {
      this.products[i].count--;
    }
    // openModal(i) {
    //   this.modalFlg = true
    //   this.productNum = i;
    // }
  },
  components: {
    Nav,
    ProductList,
    Modal
  }
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
