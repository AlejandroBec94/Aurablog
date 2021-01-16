import Vue from 'vue'
import VueRouter from 'vue-router'
import PostsComponent from "./components/Admin/PostsComponent";

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        { path: '/posts', component: PostsComponent }
    ],
    mode: 'history'
})
