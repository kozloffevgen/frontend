import Vue from 'vue';
import App from './vue/app.vue';

document.addEventListener('DOMContentLoaded', () => {
  new Vue({
    el: '#app',
    render: h => h(App),
  });
})
