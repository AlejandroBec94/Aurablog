import Vue from 'vue'
import VueRouter from 'vue-router'
import PostsComponent from "./components/Admin/PostsComponent";
import PostComponent from "./components/Admin/PostComponent";
import ExampleComponent from "./components/ExampleComponent";
import LoginComponent from "./components/auth/LoginComponent";

import Dashboard from "./components/Dashboard"

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {path: '/posts', name: "Posts", component: PostsComponent},
        {path: '/post/:slug', name: "PostDetails", component: PostComponent, props: true},
        {path: '/login/', name: "Login", component: LoginComponent},
        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,
            meta: {
                requiresAuth: true,
            }
        }
    ],
    mode: 'history'
})
