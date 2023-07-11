<template>
  <!-- {{ $store.state.test }} -->

  <!-- 헤더 -->
    <div class="header">
      <ul>
        <li class="header-button header-button-left" v-if="$store.state.tabFlg != 0" @click="$store.commit('changeTabFlg', 0); $store.commit('clearState')">취소</li>
        <li>
          <img class="logo" alt="Vue logo" src="./assets/logo.png">
        </li>
        <li class="header-button header-button-right" @click="$store.commit('changeTabFlg', 2)" v-if="$store.state.tabFlg == 1">다음</li>
      </ul>
    </div>
    <!-- {{ $store.state.lastId }} -->
  <!-- 컨텐츠 -->
    <ContainerComponent></ContainerComponent>

      <button v-if="$store.state.addBtnFlg && $store.state.tabFlg == 0" @click="$store.dispatch('getMoreList')">더보기</button>


  <!-- 푸터 -->
    <div class="footer">
      <div class="footer-button-store">
        <label for="file" class="label-store">+</label>
        <!-- <input @change="$store.commit('changeTabFlg', 1)" accept="image/*" type="file" id="file" class="input-file"> -->
        <input @change="updateImg" accept="image/*" type="file" id="file" class="input-file">
      </div>
    </div>
</template>

<script>

import ContainerComponent from './components/ContainerComponent.vue'

export default {
  name: 'App',
  created() {
    this.$store.dispatch('getMainList'); // store에 있는 getMainList()에 접근
  },
  methods: {
    updateImg(e) {// 이미지 파일 저장
      let file = e.target.files;
      let imgUrl = URL.createObjectURL(file[0]); //url로 만듦
      this.$store.commit('changeImgUrl', imgUrl);
      this.$store.commit('changeTabFlg', 1);
      e.target.value=''; // 이벤트 타겟 value 초기화(같은 사진 넣을수 있게)
    }
  },
  components: {
    ContainerComponent,
  }
}
</script>

<style>
@import url(./assets/css/common.css);

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
