<template >
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
            <img src="" alt="" style="width: 100%">
            <h4></h4>
            <p>설명</p>
            <p>가격</p>
            <button >수량 증가</button><br>
            <button>수량 감소</button>
            <span>0</span><br>
            <button @click="$emit('closeModal');">닫기</button> 
            <!-- 부모한테 메세지 보냄 $emit('closeModal'); -->
        </div>
    </div>
</template>
<script>
export default {
    name: 'Modal',
    props: {
        modalFlg: Array,
        product: Object,
        productNum: Number,
    }
}
</script>
<style>
    
</style>