<template >
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg == 0">
        <PostComponent></PostComponent>
    </div>

    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabFlg == 1">
        <div class="upload-img" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <div class="filter-box">
            <div class="filter"></div>
            <div class="filter"></div>
            <div class="filter"></div>
            <div class="filter"></div>
            <div class="filter"></div>
            <div class="filter"></div>
        </div>
    </div>

    <!-- 글 작성 -->
    <div v-if="$store.state.tabFlg == 2">
        <div class="upload-img"></div>
        <div >
            <textarea name="content" id="content" placeholder="글 작성 하세요" class="write-box"></textarea>
        </div>
    </div>

</template>
<script>
import PostComponent from './PostComponent.vue'

export default {
    name: 'ContainerComponent',
    components: {
        PostComponent,
    }
}
</script>
<style >
    
</style>