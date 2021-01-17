import Vue from 'vue'
import VueRouter from 'vue-router'
import PostsComponent from "./components/Admin/PostsComponent";
import PostComponent from "./components/Admin/PostComponent";
import ExampleComponent from "./components/ExampleComponent";
import LoginComponent from "./components/auth/LoginComponent";

import Dashboard from "./components/Dashboard"
import LogoutComponent from "./components/auth/LogoutComponent";

Vue.use(VueRouter)

export default new VueRouter({
    routes: [
        {path: '/posts', name: "Posts", component: PostsComponent},
        {path: '/post/:slug', name: "PostDetails", component: PostComponent, props: true},
        {path: '/login/', name: "Login", component: LoginComponent},
        {path: '/logout/', name: "Logout", component: LogoutComponent},
        {
            path: "/dashboard",
            name: "Dashboard",
            component: Dashboard,/*
            meta: {
                requiresAuth: true,
            }*/
        },
        { path: '', name: 'home', component: PostsComponent },
        { path: '/', name: 'home', component: PostsComponent },
        { path: '*', redirect: '/' }
    ],
    mode: 'history'
})
