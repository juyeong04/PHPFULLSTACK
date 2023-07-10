<template >
    <div class="bg_black" v-if="modalFlg">
        <div class="bg_white">
            <img src="" alt="" style="width: 100%">
            <h4>{{ products[productNum].name }}</h4>
            <p>{{ products[productNum].content }}</p>
            <!-- <p>가격 : {{ products[productNum].price*products[productNum].count }}</p> -->
            <p>가격 : {{ products[productNum].price}}</p>
            <span>수량 : {{ productInput }}</span><br>
            <p>총액 : {{ productInput * products[productNum].price }}</p>
            <input type="text" v-model="productInput"><br>
            <!-- <button @click="$emit('plus')">수량 증가</button><br>
            <button @click="$emit('minus')">수량 감소</button> -->
            <button @click="$emit('closeModal'); productInput=0;">닫기</button> 
            <!-- 부모한테 메세지 보냄 $emit('closeModal'); -->
        </div>
    </div>
</template>
<script>
export default {
    name: 'Modal',
    props: {
        modalFlg: Boolean,
        products: Array,
        productNum: Number,
    },
    data() {
        return {
            productInput: '',
        }
    },
    watch: { // 실시간 감시 함수 정의 영역
    productInput(a) {
        if(a > 10){
            alert('수량은 10개를 초과할 수 없습니다.');
            this.productInput= 10;
            }
        },
    },
}
</script>
<style>
    
</style>