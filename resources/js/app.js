import './bootstrap';
import { createApp } from 'vue';
import Router from './router.js';
import App from "./components/App.vue";

createApp(App).use(Router).mount('#app-vue');
