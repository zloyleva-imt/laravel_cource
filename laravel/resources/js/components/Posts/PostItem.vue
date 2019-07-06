<template>
    <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-2">
        <b-card :title="post.title" sub-title="Card subtitle">

            <TagsBadgeList :tags="post.tags"/>

            <b-card-text>{{ postBody(post.body) }}</b-card-text>

            <a href="#" class="card-link">Card link</a>
            <b-link href="#" class="card-link">Another link</b-link>
        </b-card>
    </div>
</template>

<script>
    import TagsBadgeList from '../Tags/TagsBadgeList'
    export default {
        name: "PostItem",
        components:{
            TagsBadgeList
        },
        props:{
            post:{
                type: Object,
                require: true
            }
        },
        methods:{
            postBody(text){
                return text.split(' ').slice(0,10).join(' ') + '...';
            }
        }
    }
</script>

<style scoped>

</style>