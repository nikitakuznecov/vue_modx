import * as Vue from 'vue'
import App from './App.vue'
import axios from 'axios'

import router from './router.js'

window.axios = axios;

var app = Vue.createApp(App);
app.use(router);
window.vm = app.mount('#app');