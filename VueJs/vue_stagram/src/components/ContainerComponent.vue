<template >
    <!-- 리스트 -->
    <div v-if="$store.state.tabFlg == 0">
        <PostComponent></PostComponent>
    </div>

    <!-- 이미지 필터 -->
    <div v-if="$store.state.tabFlg == 1">
        <div class="upload-img" :class="$store.state.filter" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
        <div class="filter-box">
            <div @click="$store.commit('changeFilter', item)" class="filter" :class ="item" v-for="item in filterList" :key="item" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}">
                <span>{{ item }}</span>
            </div>
        </div>
    </div>

    <!-- 글 작성 -->
    <div v-if="$store.state.tabFlg == 2">
        <div class="upload-img" :class="$store.state.filter" :style="{backgroundImage : `url('${$store.state.imgUrl}')`}"></div>
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
    },
    data() {
        return {
            filterList: [ "aden", "_1977", "brannan", "brooklyn", "clarendon", "earlybird", "gingham", "hudson", "inkwell", "kelvin", "lark", "lofi", "maven", "mayfair", "moon", "nashville", "perpetua", "reyes", "rise", "slumber", "stinson", "toaster", "valencia", "walden", "willow", "xpro2"],

        }
    }
}
</script>
<style >
    
</style>