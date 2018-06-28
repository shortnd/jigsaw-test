window.Vue = require('vue');

Vue.component('example-component', require('./component/ExampleComponent.vue'));

const app = new Vue ({
  el: '#app',
  data: {
    message: 'Hello World'
  }
});