import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//routers
import main from './components/main/vproducts.vue'
import catalog from './components/productlayout/vlisting.vue'
import catalogclear from './components/productlayout/vlistingclear.vue'
import contacts from './components/main/vcontacts.vue'
import card from './components/main/vcard.vue'
import faq from './components/main/vfaq.vue'
import good from './components/productlayout/vgood.vue'
import lkorders from './components/lk/vlkorders.vue'
import lkfavorites from './components/lk/vlkfavorites.vue'
import lkdata from './components/lk/vlkdata.vue'
import admstats from './components/admin/vadmstats.vue'
import admorders from './components/admin/vadmorders.vue'
import admusers from './components/admin/vadmusers.vue'
import admlist from './components/admin/vadmlist.vue'
import admbase from './components/admin/vadmbase.vue'
import admfaq from './components/admin/vadmfaq.vue'
import signin from './components/auth/vsignin.vue'
import registration from './components/auth/vregistration.vue'
import error404 from './components/architecture/404.vue'
import verify from './components/auth/verify.vue'
import successreg from './components/auth/successreg.vue'
import successlog from './components/auth/successlog.vue'

import productlayout from './components/productlayout/productlayout.vue'

const routes = [
      { path: '/404', component: error404 },
      //{ path: '*', redirect: '/404' },  
      {
        path: '/',
        name: 'main',
        component: main,
      },
      {
        path: '/catalog/',
        component: productlayout,
        children: [
          {
            path: '',
            name: 'catalog',
            component: catalogclear,
          },
          {
            path: '/catalog/filter/:id',
            name: 'catalogid',
            component: catalog,
          },
          {
            path: '/catalog/good/:id',
            name: 'good',
            component: good,
          },
        ]
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
        path: '/faq',
        name: 'faq',
        component: faq,
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
        path: '/login',
        name: 'login',
        component: signin,
      },
      {
        path: '/register',
        name: 'register',
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
      {
        path: '/adm/faq',
        name: 'admfaq',
        component: admfaq,
      },
      {
        path: '/verify/:id',
        name: 'verify',
        component: verify,
      },
      {
        path: '/successreg',
        name: 'successreg',
        component: successreg,
      },
      {
        path: '/successlog',
        name: 'successlog',
        component: successlog,
      },
  ]


  const router = new VueRouter({
    mode: 'history',
    routes,
  });

  export default router;