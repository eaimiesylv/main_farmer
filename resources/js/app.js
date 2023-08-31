
import './bootstrap';
import { createApp } from 'vue';
import router from './router';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import LogReg from './components/Auth/LogReg.vue';
import SideNav from './components/Navigation/SideNav.vue';
import HeaderNav from './components/Navigation/HeaderNav.vue';

app.component('log-reg', LogReg);
app.component('side-nav', SideNav);
app.component('header-nav', HeaderNav);
app.component('example-component', ExampleComponent);
app.use(router); // Use the Vue Router
app.mount('#app');
