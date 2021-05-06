import Vue from "vue";
import VueRouter from 'vue-router';
import router from '../router.js';


require('./bootstrap');

window.Vue = require('vue').default;

const files = require.context("./", true, /\.vue$/i);
files.keys().map(key =>
    Vue.component(
        key
            .split("/")
            .pop()
            ?.split(".")[0] ?? "",
        files(key).default
    )
);

Vue.use(VueRouter);

const app = new Vue({
    router,
    el: '#app',
});