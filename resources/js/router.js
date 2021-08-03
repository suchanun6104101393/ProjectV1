import Vue from 'vue'
import Router from 'vue-router'
Vue.use(Router)
//import หน้าทุกครั้งห้ามลืม
import firstPage from './components/page/myFirstVuePage'
import NewRoutePage from './components/page/NewRoutePage'
import Home from './components/page/Home'

//project page
import tags from './components/page/tags'



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