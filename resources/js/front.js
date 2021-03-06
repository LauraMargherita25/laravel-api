/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// const { default: Axios } = require('axios');

require('./bootstrap');

window.Vue = require('vue');
window.Axios = require('axios');


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import VueRouter from 'vue-router'
import App from './views/App.vue'
import HomePage from './pages/HomePage.vue'
import AboutPage from './pages/AboutPage.vue'
import ContactUsPage from './pages/ContactUsPage.vue'
import PostIndex from './pages/PostIndex.vue'
import PostShow from './pages/PostShow.vue'
import Page404 from './pages/Page404.vue'

Vue.use(VueRouter)

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomePage,
        },
        {
            path: '/about',
            name: 'about',
            component: AboutPage,
        },
        {
            path: '/contact-us',
            name: 'contactUs',
            component: ContactUsPage,
        },
        {
            path: '/blog',
            name: 'postIndex',
            component: PostIndex,
        },
        {
            path: '/blog/:slug',
            name: 'postShow',
            component: PostShow,
            props: true,
        },
        {
            path: '*',
            name: 'page404',
            component: Page404,
        },
    ]
})

const app = new Vue({
    el: '#app',
    render: h => h(App),
    router
});

