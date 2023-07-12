<template>
    <div>
        <h1>PostComponent.vue</h1>
        <!-- <p>{{ test }}</p> -->
        <p>{{ propsTest }}</p>
    </div>
</template>
<script>
import { ref, toRefs } from 'vue';

export default {
    name: 'PostComponent',
    props: {
        // test: Number,
        propsTest: Number,
    },
    setup(props) {
        let data = ref([]);
        let {propsTest} = toRefs(props);
        console.log(propsTest.value);

        return{data};
    }
}
</script>
<style>
    
</style>