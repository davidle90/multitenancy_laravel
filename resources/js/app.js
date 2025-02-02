import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import Alpine from 'alpinejs';
import { createApp } from 'vue'
import Counter from './Components/Counter.vue';

window.Alpine = Alpine;

Alpine.start();


const app = createApp({})

app.component('Counter', Counter)

app.mount('#app')
