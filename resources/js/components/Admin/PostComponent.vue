<template>

    <div>

        hello
    </div>

</template>

<script>
    /*import moment from "moment";
    import axios from 'axios';*/

    export default {
        name: "Post",
        data() {
            return {
                slug: this.$route.params.slug
            }
        },
        created() {
            console.log(this.slug)
          /*  axios
                .get('/api/posts')
                .then(response => {
                    this.loading = false
                    this.posts = response.data
                })
            console.log(this.posts)*/
        }
    }
</script>

<style scoped>
    .card {
        cursor: pointer;
    }

    .card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
    }
</style>
