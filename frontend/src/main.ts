import {createApp} from 'vue'
import App from './App.vue'
import router from './router'

import BookIndex from './components/BookIndex.vue';
import BookCreate from './components/BookCreate.vue';
import BookEdit from './components/BoockEdit.vue';
import BookShow from './components/BookShow.vue';

createApp(App).use(router, BookIndex, BookCreate, BookEdit, BookShow).mount('#app')
