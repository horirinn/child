
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import Vue from 'vue';
import VueRouter from 'vue-router';
import Element from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import ja from 'element-ui/lib/locale/lang/ja';

require('./bootstrap');

window.Vue = require('vue');

Vue.use(VueRouter);
Vue.use(Element, {locale: ja});

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
        { path: '/child/:id', component: require('./components/Child/Id.vue')},
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
