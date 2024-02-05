import './bootstrap';



import { createApp } from 'vue';
import { plugin, defaultConfig } from '@formkit/vue'
const app = createApp({}).use(plugin, defaultConfig);


import ExampleComponent from './components/ExampleComponent.vue';
app.component('example-component', ExampleComponent);

import login from './components/login.vue';
app.component('login', login);

import QuestionsComponent from '../../Modules/MediumCompanyModule/resources/assets/js/components/QuestionsComponent.vue';
app.component('questions-component', QuestionsComponent);

import IntroComponent from './../../Modules/MediumCompanyModule/resources/assets/js/components/IntroComponent.vue';
app.component('intro-component', IntroComponent);

import InformationCompanyComponent from './../../Modules/MediumCompanyModule/resources/assets/js/components/InformationCompanyComponent.vue';
app.component('information-company-component', InformationCompanyComponent);




app.mount('#app');
