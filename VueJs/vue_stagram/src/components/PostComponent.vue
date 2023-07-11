<template>
    <!-- {{ $store.state.boardData }} -->
    <div class="post" v-for="item in $store.state.boardData" :key="item">
        <div class="post-img" :style="{backgroundImage : `url('${item.img}')`}"></div>
        <div class="post-content" >
            <p>0 좋아요</p>
            <p><strong>{{ item.name }}</strong> {{ item.content }}</p>
            <p>{{ item.created_at }}</p>
        </div>
    </div>
</template>
<script>
export default {
    name: 'PostComponent',
}
</script>
<style>
    
</style>