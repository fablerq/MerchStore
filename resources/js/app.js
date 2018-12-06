import Vue from 'vue'
import VueRouter from 'vue-router'
import Form from 'vform'
import axios from 'axios'
import BootstrapVue from 'bootstrap-vue'

import VueTabs from 'vue-nav-tabs'
import 'vue-nav-tabs/themes/vue-tabs.css'


import VeeValidate, { Validator } from 'vee-validate'
import ru from 'vee-validate/dist/locale/ru'

Validator.localize({ ru: ru })
Vue.use(VeeValidate, {locale: 'ru'})

Vue.prototype.$ajax = axios

Vue.use(BootstrapVue)
Vue.use(VueRouter)

Vue.use(VueTabs)

import App from './components/App.vue'

import CrudUsers from './components/admin/base/CrudUsers.vue'


import main from './components/pages/main.vue'
import catalog from './components/pages/catalog.vue'
import contacts from './components/pages/contacts.vue'
import card from './components/pages/card.vue'
import good from './components/pages/good.vue'
import lkorders from './components/pages/lkorders.vue'
import lkfavorites from './components/pages/lkfavorites.vue'
import lkdata from './components/pages/lkdata.vue'
import signin from './components/pages/signin.vue'
import registration from './components/pages/registration.vue'
import admstats from './components/pages/admstats.vue'
import admorders from './components/pages/admorders.vue'
import admusers from './components/pages/admusers.vue'
import admlist from './components/pages/admlist.vue'
import admbase from './components/pages/admbase.vue'

import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

const router = new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/example_users',
      name: 'users',
      component: CrudUsers,
    },
    // {
    //     path: '/example_products',
    //     name: 'products',
    //     component: ExampleCrudProducts,
    //   },
    //  {
    //     path: '/example_orders',
    //     name: 'orders',
    //     component: ExampleCrudOrders,
    //   },
    //   {
    //     path: '/example_faculties',
    //     name: 'faculties',
    //     component: ExampleCrudFaculties,
    //   },
    //   {
    //     path: '/example_statuses',
    //     name: 'statuses',
    //     component: ExampleCrudStatuses,
    //   },
    //   {
    //     path: '/example_roles',
    //     name: 'roles',
    //     component: ExampleCrudRoles,
    //   },
    //   {
    //     path: '/example_paymentmethods',
    //     name: 'paymentmethods',
    //     component: ExampleCrudPaymentMethods,
    //   },
    //   {
    //     path: '/example_types',
    //     name: 'types',
    //     component: ExampleCrudTypes,
    //   },
    //   {
    //     path: '/example_sizes',
    //     name: 'sizes',
    //     component: ExampleCrudSizes,
    //   },
    //   {
    //     path: '/example_photos',
    //     name: 'photos',
    //     component: ExampleCrudPhotos,
    //   },
    //   {
    //     path: '/example_comments',
    //     name: 'comments',
    //     component: ExampleCrudComments,
    //   },
    //   {
    //     path: '/example_productsvariants',
    //     name: 'productsvariants',
    //     component: ExampleCrudProductsVariants,
    //   },
      // { path: '*', component: NotFoundComponent }
      {
        path: '/',
        name: 'main',
        component: main,
      },
      {
        path: '/catalog',
        name: 'catalog',
        component: catalog,
      },
      {
        path: '/contacts',
        name: 'contacts',
        component: contacts,
      },
      {
        path: '/card',
        name: 'card',
        component: card,
      },
      {
        path: '/catalog/good',
        name: 'good',
        component: good,
      },
      {
        path: '/lk/orders',
        name: 'lkorders',
        component: lkorders,
      },
      {
        path: '/lk/favorites',
        name: 'lkfavorites',
        component: lkfavorites,
      },
      {
        path: '/lk/data',
        name: 'lkdata',
        component: lkdata,
      },
      {
        path: '/signin',
        name: 'signin',
        component: signin,
      },
      {
        path: '/registration',
        name: 'registration',
        component: registration,
      },
      {
        path: '/adm/stats',
        name: 'admstats',
        component: admstats,
      },
      {
        path: '/adm/orders',
        name: 'admorders',
        component: admorders,
      },
      {
        path: '/adm/list',
        name: 'admlist',
        component: admlist,
      },
      {
        path: '/adm/users',
        name: 'admusers',
        component: admusers,
      },
      {
        path: '/adm/base',
        name: 'admbase',
        component: admbase,
      },
  ],
});


const app = new Vue({
  el: '#app',
  components: { App },
  router,
});
