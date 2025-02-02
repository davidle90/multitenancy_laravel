import './bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

import Alpine from 'alpinejs';
import { createApp } from 'vue'
import { GridLayout, GridItem } from 'grid-layout-plus'
import TestGrid from './Components/TestGrid.vue';

window.Alpine = Alpine;

Alpine.start();


const app = createApp({})

app.component('GridLayout', GridLayout)
app.component('GridItem', GridItem)
app.component('test-grid', TestGrid)

app.mount('#app')
