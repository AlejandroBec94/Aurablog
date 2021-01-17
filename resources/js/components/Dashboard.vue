<template>

    <li class="nav-item">
        <router-link class="nav-link" to="/posts">Posts</router-link>
    </li>

</template>

<script>
    export default {
        name: "Dashboard",
        data() {
            return {
                token: this.$store.state.token
            }
        },
        created() {

        }
    }
</script>

<style scoped>

</style>
