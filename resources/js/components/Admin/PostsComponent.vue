<template>

    <!--<div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col" v-for="post in posts" >
            <div class="card mb-3" >
                <div class="card-body" onclick="alert('hola')">
                    <h5 class="card-title">{{ post.title }}</h5>
                    <p class="card-text">{{ post.content }}</p>
                    <p class="card-text">
                        <small class="text-muted">
                            {{ moment(post.created_at,"DD-MM-YYYY").fromNow() }}
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>-->
    <!--<div>
        <div v-for="post in posts">
            {{post.title}}
        </div>
    </div>-->

</template>

<script>
    import moment from "moment";

    export default {
        name: "Posts",
        data() {
            return {
                moment: moment,
                posts: null
            }
        },
        mounted (){
            axios
                .get('localhost:8001/api/my-api-endpoint')
                // .get('localhost:8001/api/posts')
                // .get(process.env.APP_URL + '/api/posts')
                .then(response => console.log(response))
            console.log(this.posts)
        }
    }
</script>

<style scoped>
    .card{
        cursor: pointer;
    }
    .card:hover{
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
    }
</style>
