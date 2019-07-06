<template>
    <div class="row">
        <PostItem v-for="post in posts" :key="post.id" :post="post"/>
    </div>
</template>

<script>

    import PostItem from './PostItem';

    export default {
        name: "Posts",
        components:{PostItem},
        props:{
            posts:{
                type: Array,
                require: true
            },
            routes:{
                type: Object,
                require: true
            }
        }
    }
</script>

<style scoped>

</style>