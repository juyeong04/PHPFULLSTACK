<template>
    <div v-for="(item,i) in todoList" :key="i">
        <div class="list-con" >
                <input type="checkbox" >
                <div class="content">{{ item.content }}</div>
                <div class="date">{{  formatDate(item.created_at) }}</div>
                <button class="del" @click="delete()">삭제</button>
        </div>
    </div>
</template>
<script>

export default {
    name: 'ListComponent',
    props: {
        todoList: Array,
    },
    data() {
        return {

        }
    },
    methods: {
        formatDate(date) {
            const options = { year: 'numeric', month: '2-digit', day: '2-digit' };
            return new Date(date).toLocaleDateString('ko-KR', options);
        },
        delete() {
            axios.delete('/api/items/'+ item.id, {
                item: {
                    content: this.content
                }
            }, {headers:{'Content-Type' : 'application/json'}})
            .then(res => {                                  
                this.$emit('delete',res.data);
            });
        },
    },
}
</script>
<style>

</style>