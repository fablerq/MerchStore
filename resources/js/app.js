import Vue from 'vue'
import VueRouter from 'vue-router'
import Form from 'vform'
import axios from 'axios'
import BootstrapVue from 'bootstrap-vue'

Vue.use(axios)
Vue.use(BootstrapVue);
Vue.use(VueRouter)

import App from './components/App.vue'
import ExampleCrudUsers from './components/examples/ExampleCrudUsers.vue'
import ExampleCrudOrders from './components/examples/ExampleCrudOrders.vue'
import ExampleCrudProducts from './components/examples/ExampleCrudProducts.vue'
import ExampleCrudFaculties from './components/examples/ExampleCrudFaculties.vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

const router = new VueRouter({
  routes: [
    {
      path: '/example_users',
      name: 'users',
      component: ExampleCrudUsers,
    },
    {
        path: '/example_products',
        name: 'products',
        component: ExampleCrudProducts,
      },
     {
        path: '/example_orders',
        name: 'orders',
        component: ExampleCrudOrders,
      },
      {
        path: '/example_faculties',
        name: 'faculties',
        component: ExampleCrudFaculties,
      },
  ],
});

const app = new Vue({
  el: '#app',
  components: { App },
  router,
});
