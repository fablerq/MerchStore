import Vue from 'vue'
import VueRouter from 'vue-router'
import Form from 'vform'
import axios from 'axios'
import BootstrapVue from 'bootstrap-vue'

import VeeValidate, { Validator } from 'vee-validate'
import ru from 'vee-validate/dist/locale/ru'

Validator.localize({ ru: ru })
Vue.use(VeeValidate, {locale: 'ru'})



Vue.prototype.$ajax = axios
Vue.use(BootstrapVue)
Vue.use(VueRouter)


import App from './components/App.vue'
import ExampleCrudUsers from './components/examples/ExampleCrudUsers.vue'
import ExampleCrudOrders from './components/examples/ExampleCrudOrders.vue'
import ExampleCrudProducts from './components/examples/ExampleCrudProducts.vue'
import ExampleCrudFaculties from './components/examples/ExampleCrudFaculties.vue'
import ExampleCrudStatuses from './components/examples/ExampleCrudStatuses.vue'
import ExampleCrudRoles from './components/examples/ExampleCrudRoles.vue'
import ExampleCrudPaymentMethods from './components/examples/ExampleCrudPaymentMethods.vue'
import ExampleCrudTypes from './components/examples/ExampleCrudTypes.vue'
import ExampleCrudSizes from './components/examples/ExampleCrudSizes.vue'
import ExampleCrudPhotos from './components/examples/ExampleCrudPhotos.vue'
import ExampleCrudComments from './components/examples/ExampleCrudComments.vue'
import ExampleCrudProductsVariants from './components/examples/ExampleCrudProductsVariants.vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'


const router = new VueRouter({
  mode: 'history',
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
      {
        path: '/example_statuses',
        name: 'statuses',
        component: ExampleCrudStatuses,
      },
      {
        path: '/example_roles',
        name: 'roles',
        component: ExampleCrudRoles,
      },
      {
        path: '/example_paymentmethods',
        name: 'paymentmethods',
        component: ExampleCrudPaymentMethods,
      },
      {
        path: '/example_types',
        name: 'types',
        component: ExampleCrudTypes,
      },
      {
        path: '/example_sizes',
        name: 'sizes',
        component: ExampleCrudSizes,
      },
      {
        path: '/example_photos',
        name: 'photos',
        component: ExampleCrudPhotos,
      },
      {
        path: '/example_comments',
        name: 'comments',
        component: ExampleCrudComments,
      },
      {
        path: '/example_productsvariants',
        name: 'productsvariants',
        component: ExampleCrudProductsVariants,
      },
      // { path: '*', component: NotFoundComponent }
  ],
});


const app = new Vue({
  el: '#app',
  components: { App },
  router,
});
