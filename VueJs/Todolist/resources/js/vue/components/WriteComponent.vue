<template>
    <div>
        <input class="write-part" type="text" placeholder="오늘의 할 일" v-model="content">
        <button @click="submit()">등록</button>
    </div>
</template>
<script>
export default {
    name: 'WriteComponent',
    props : {
    },
    data() {
        return {
            content: '',

        }
    },
    methods: {
        submit() {
            if(this.content === '') {
                    alert("글을 입력해야지!!");
                } else {
                    axios.post('/api/items', {
                        item: {
                            content: this.content
                        }
                    }, {headers:{'Content-Type' : 'application/json'}})
                    .then(res => {                                  
                        this.$emit('submit',res.data);
                    });
                }         
        }
    },
}
</script>
<style>
</style>