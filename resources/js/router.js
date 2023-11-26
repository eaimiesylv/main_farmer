import { createRouter, createWebHistory } from 'vue-router';
import Register from './components/Auth/Register.vue';
import Login from './components/Auth/Login.vue';
import Profile from './components/Profile/Profile.vue';
import Dashboard from './components/Dashboard/index.vue';
import Pitch from './components/Pitch/index.vue';
import AddPitch from './components/Pitch/AddPitch.vue';
import Investor from './components/Investor/index.vue';
import AgricBusiness from './components/AgricBusiness/index.vue';
import Deal from './components/Deal/index.vue';
import Proposal from './components/Proposal/index.vue';

const routes = [
  { path: '/', component:Dashboard},
  { path: '/login', component:Login},
  { path: '/register', component:Register },
  { path: '/profile', component:Profile},
  { path: '/pitch', component:Pitch},
  { path: '/create_pitch', component:AddPitch},
  { path: '/investors', component:Investor},
  { path: '/agribusiness', component:AgricBusiness},
  { path: '/deals', component:Deal},
  { path: '/proposals', component:Proposal},
 
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
