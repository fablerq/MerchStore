import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//routers
import main from './components/main/vproducts.vue'
import catalog from './components/main/vlisting.vue'
import contacts from './components/main/vcontacts.vue'
import card from './components/main/vcard.vue'
import faq from './components/main/vfaq.vue'
import good from './components/main/vgood.vue'
import lkorders from './components/lk/vlkorders.vue'
import lkfavorites from './components/lk/vlkfavorites.vue'
import lkdata from './components/lk/vlkdata.vue'
import signin from './components/main/vsignin.vue'
import registration from './components/main/vregistration.vue'
import admstats from './components/admin/vadmstats.vue'
import admorders from './components/admin/vadmorders.vue'
import admusers from './components/admin/vadmusers.vue'
import admlist from './components/admin/vadmlist.vue'
import admbase from './components/admin/vadmbase.vue'
import admfaq from './components/admin/vadmfaq.vue'

const routes = [
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
        path: '/faq',
        name: 'faq',
        component: faq,
      },
      {
        path: '/catalog/good/:id',
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
      {
        path: '/adm/faq',
        name: 'admfaq',
        component: admfaq,
      },
  ]


  const router = new VueRouter({
    mode: 'history',
    routes,
  });

  export default router;