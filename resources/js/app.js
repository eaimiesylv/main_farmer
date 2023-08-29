
import './bootstrap';
import { createApp } from 'vue';
import router from './router';

const app = createApp({});

import ExampleComponent from './components/ExampleComponent.vue';
import LogReg from './components/Auth/LogReg.vue';

app.component('log-reg', LogReg);
app.component('example-component', ExampleComponent);
app.use(router); // Use the Vue Router
app.mount('#app');
