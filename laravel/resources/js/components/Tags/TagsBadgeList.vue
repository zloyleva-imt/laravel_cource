<template>
    <div>
        <a v-for="tag in tags" :key="tag.id" href="#" class="badge badge-secondary mx-1">{{ tag.name }}</a>
    </div>
</template>

<script>
    export default {
        name: "TagsBadgeList",
        props:{
            tags:{
                type: Array,
                require: true
            }
        }
    }
</script>

<style scoped>

</style>