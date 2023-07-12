<template>
    <div>
        <h1>PostComponent.vue</h1>
        <p>{{ test }}</p>
    </div>
</template>
<script>
export default {
    name: 'PostComponent',
    props: {
        test: Number,
    }
}
</script>
<style>
    
</style>