import { createRouter, createWebHistory, RouteRecordRaw } from 'vue-router'
import BookIndex from '../components/BookIndex.vue';
import BookShow from '../components/BookShow.vue';
import BookCreate from '../components/BookCreate.vue';
import BookEdit from '../components/BoockEdit.vue';

const routes: Array<RouteRecordRaw> = [
  {
    path: '/home',
    name: 'books.index',
    component: BookIndex
  },
  {
    path: '/books/:id/show',
    name: 'books.show',
    component: BookShow,
    props: true
  },
  {
    path: '/books/create',
    name: 'books.create',
    component: BookCreate,
  },
  {
    path: '/books/:id/edit',
    name: 'books.edit',
    component: BookEdit,
    props: true
  },
  { path: "/:pathMatch(.*)", component: { template: "Not found"} }
];

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
