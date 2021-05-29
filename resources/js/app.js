import Vue from 'vue';
import VueRouter from 'vue-router';

require('./bootstrap');


Vue.use(VueRouter);

const router = new VueRouter();



new Vue({
    router,
    render: h => h(App)
}).$mount('#app');