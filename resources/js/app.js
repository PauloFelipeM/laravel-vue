import { createApp } from 'vue'
import VueAxios from 'vue-axios';
import axios from 'axios';
import App from './App.vue'
import router from './routes'

createApp(App).use(VueAxios, axios).use(router).mount('#app');
