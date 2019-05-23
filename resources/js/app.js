// vue
import Vue from 'vue';

// bootstrap.js
require('./bootstrap');

// windowに追加
window.Vue = require('vue');

// vue-router
import VueRouter from 'vue-router';
Vue.use(VueRouter);

// element-ui
import Element from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import ja from 'element-ui/lib/locale/lang/ja';
Vue.use(Element, {
    locale: ja
});

// axios
Vue.prototype.$http = axios;

//vue-uuid導入
import UUID from 'vue-uuid';
Vue.use(UUID);

//navbar
Vue.component('navbar', require('./components/Navbar.vue'));
Vue.component('BackGround', require('./components/app/BackGround.vue'));
Vue.component('LabelAndCheckBox', require('./components/app/LabelAndCheckBox.vue'));
Vue.component('LabelAndDate', require('./components/app/LabelAndDate.vue'));
Vue.component('LabelAndValue', require('./components/app/LabelAndValue.vue'));
Vue.component('TitleAndDetail', require('./components/app/TitleAndDetail.vue'));

const router = new VueRouter({
    mode: 'history',
    routes: [{
            path: '/',
            component: require('./components/child/List.vue')
        },
        {
            path: '/child/:id',
            component: require('./components/child/Show.vue')
        },
        {
            path: '/child/:id/edit',
            component: require('./components/child/Edit.vue')
        },
        {
            path: '/about',
            component: require('./components/About.vue')
        },
        {
            path: '/:id/suckle',
            component: require('./components/suckle/List.vue')
        },
    ],
    //ページ移動時にページを一番上に移動
    scrollBehavior(to, from, savedPosition) {
        if (savedPosition) {
            return savedPosition;
        } else {
            return {
                x: 0,
                y: 0
            }
        }
    }
});

const app = new Vue({
    router,
    el: '#app'
});
