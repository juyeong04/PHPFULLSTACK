<template>
  <!-- {{ $store.state.test }} -->

  <!-- 헤더 -->
    <div class="header">
      <ul>
        <li class="header-button header-button-left">취소</li>
        <li>
          <img class="logo" alt="Vue logo" src="./assets/logo.png">
        </li>
        <li class="header-button header-button-right">다음</li>
      </ul>
    </div>

    <ContainerComponent></ContainerComponent>

  <!-- 푸터 -->
    <div class="footer">
      <div class="footer-button-store">
        <label for="file" class="label-store">+</label>
        <input accept="image/*" type="file" id="file" class="input-file">
      </div>
    </div>
</template>

<script>

import ContainerComponent from './components/ContainerComponent.vue'

export default {
  name: 'App',
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
