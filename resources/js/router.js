import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
//import หน้าทุกครั้งห้ามลืม
import firstPage from './components/page/myFirstVuePage'
import NewRoutePage from './components/page/NewRoutePage'


//project page
import tags from './admin/pages/tags'
import  category from './admin/pages/category'
import Home from './components/page/Home'
import  adminusers from './admin/pages/adminusers'
import  login from './admin/pages/login'





const routes = [
    //project routes.....
    {
        path:'/Admin',
        component:firstPage
    },
    
    {
        path:'/Home',
        component:Home
    },
    {
        path:'/tags',
        component:tags
    },
    {
        path:'/category',
        component:category
    },
    {
        path:'/adminusers',
        component:adminusers
    },
    {
        path:'/login',
        component:login
    },
















    // test
    {
        path:'/my-new-vue-route',
        component:firstPage
    },
    {
        path:'/new-route',
        component:NewRoutePage
    }

]
export default new Router({
    mode: 'history',
    routes

})