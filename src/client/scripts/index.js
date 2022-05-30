import Vue from 'vue';
import App from './vue/app.vue';

export default class InitPage {
  constructor(props) {
    this.props = props;
    
    this.initVue();
  }

  initVue() {
    const el = document.querySelector('#app');

    new Vue({
      el,
      render: h => h(App, {
        props: this.props,
      })
    })
  }
}

window.InitPage = InitPage;
