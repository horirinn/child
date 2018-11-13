
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import VueRouter from 'vue-router';

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);

Vue.prototype.$http = axios;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('navbar', require('./components/Navbar.vue'));

const router = new VueRouter({
    mode: 'history',
    routes: [
        { path: '/', component: require('./components/Child/Index.vue')},
        { path: '/about', component: require('./components/About.vue')}
    ]
});


// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

 



const app = new Vue({
    router,
    el: '#app'
});
