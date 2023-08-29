import { createRouter, createWebHistory } from 'vue-router';
import Register from './components/Auth/Register.vue';
import Login from './components/Auth/Login.vue';
import Dashboard from './components/Admin/Dashboard.vue';

const routes = [
  { path: '/', component:Dashboard},
  { path: '/login', component:Login},
  { path: '/register', component:Register },
  // Define more routes as needed
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
