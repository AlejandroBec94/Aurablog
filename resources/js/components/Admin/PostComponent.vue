<template>

    <div class="container">

        <div class="card col-lg-12">
            {{ token }}
            <div class="card-body">
                <h5 class="card-title">{{ post.title }}</h5>
                <p class="card-text">{{ post.content }}</p>
                <p class="card-subtitle mb-2 text-muted">
                    {{ moment(post.created_at).format('LLLL') }}
                </p>
            </div>
        </div>

    </div>

</template>

<script>
    import moment from "moment";
    import axios from 'axios';

    export default {
        name: "Post",
        data() {
            return {
                moment: moment,
                slug: this.$route.params.slug,
                post: [],
                token: localStorage.getItem('api_token'),
            }
        },
        created() {
            console.log(this.slug)
            axios
                .get('/api/post/' + this.slug)
                .then(response => {
                    this.post = response.data
                    console.log(this.post)
                })
        }
    }
</script>

<style scoped>

</style>
