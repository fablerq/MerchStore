import Vue from 'vue'
import VueRouter from 'vue-router'
import axios from 'axios'
import Vuetify from 'vuetify'

Vue.use(Vuetify, {
  iconfont: 'fa',
  icons: {
    'cancel': 'fas fa-ban',
    'cart': 'fas fa-shopping-cart'
  }
 })

import WebFontLoader from 'webfontloader'

//icons for Vuetify
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faFacebook, faTwitter, faGooglePlus, faLinkedin, faInstagram } from '@fortawesome/free-brands-svg-icons'
import { faCartPlus } from '@fortawesome/free-solid-svg-icons'

// TODO: Вероятно, можно добавлять скопом.
library.add(faTwitter)
library.add(faFacebook)
library.add(faGooglePlus)
library.add(faLinkedin)
library.add(faInstagram)
library.add(faCartPlus)

Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.config.productionTip = false


import VueTabs from 'vue-nav-tabs'
import 'vue-nav-tabs/themes/vue-tabs.css'



import VeeValidate, { Validator } from 'vee-validate'
import ru from 'vee-validate/dist/locale/ru'

Validator.localize({ ru: ru })
Vue.use(VeeValidate, {locale: 'ru'})

Vue.prototype.$ajax = axios

Vue.use(VueRouter)

Vue.use(VueTabs)

//styles for Vutify
import 'bootstrap/dist/css/bootstrap.css'
import "vue-material-design-icons/styles.css"
import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'




import App from './components/App.vue'

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

const router = new VueRouter({
  mode: 'history',
  routes: [
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
      {
        path: '/adm/faq',
        name: 'admfaq',
        component: admfaq,
      },
  ],
});


const app = new Vue({
  el: '#app',
  components: { App },
  router,

  mounted () {
    WebFontLoader.load({
      google: {
        families: ['Roboto:100,300,400,500,700,900']
      },
      active: this.setFontLoaded
    })
  },
  methods: {
    setFontLoaded () {
      this.$emit('font-loaded')
    }
  }
});
