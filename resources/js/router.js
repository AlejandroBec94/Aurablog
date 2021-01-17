import Vue from 'vue'
import VueRouter from 'vue-router'
import PostsComponent from "./components/Admin/PostsComponent";
import PostComponent from "./components/Admin/PostComponent";
import ExampleComponent from "./components/ExampleComponent";

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {path: '/posts', component: PostsComponent},
        {path: '/post/:slug', name: "PostDetails", component: PostComponent, props: true}
    ],
    mode: 'history'
})
