<template>
    <div class="con">
        <!-- 헤더 -->
        <div class="header">
            <h1 class="title">Todo List</h1>
        </div>
        <!-- 투두리스트 작성 -->
        <WriteComponent @submit="todoList.unshift($event)"></WriteComponent>

        <!-- 투두리스트 출력 -->
        <ListComponent :todoList = "todoList" @delete="todoList"></ListComponent>
    </div>
</template>
<script>
import WriteComponent from './components/WriteComponent.vue';
import ListComponent from './components/ListComponent.vue';
import axios from 'axios';


export default {
    name: 'App',
    data() {
        return {
            todoList: [],
            
        }
    },
    components: {
        WriteComponent,
        ListComponent,
    },
    methods: {

    },
    created() {
        axios.get('/api/items')
        .then(res => {
            this.todoList = res.data;
            // console.log(this.todoList);
        })
        .catch(error => {
            console.log(error); // 에러 처리
        });
    },
}
</script>
<style >
    @import url(./css/main.css);
</style>