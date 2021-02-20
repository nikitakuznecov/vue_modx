import * as Vue from 'vue'
import App from './App.vue'
import axios from 'axios'

window.axios = axios;

var app = Vue.createApp(App);
window.vm = app.mount('#app');