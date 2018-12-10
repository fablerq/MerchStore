import Vue from 'vue'
import VueRouter from 'vue-router'
import Form from 'vform'
import axios from 'axios'
// import BootstrapVue from 'bootstrap-vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)


import WebFontLoader from 'webfontloader'

//icons for Vuetify
import { library } from '@fortawesome/fontawesome-svg-core'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { faFacebook, faTwitter, faGooglePlus, faLinkedin, faInstagram } from '@fortawesome/free-brands-svg-icons'

// TODO: Вероятно, можно добавлять скопом.
library.add(faTwitter)
library.add(faFacebook)
library.add(faGooglePlus)
library.add(faLinkedin)
library.add(faInstagram)

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

// Vue.use(BootstrapVue)
Vue.use(VueTabs)

//styles for Vutify
import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import 'bootstrap/dist/css/bootstrap.css'
import "vue-material-design-icons/styles.css"



import App from './components/App.vue'

import CrudUsers from './components/admin/base/CrudUsers.vue'

//routers
import main from './components/pages/main.vue'
import catalog from './components/pages/catalog.vue'
import contacts from './components/pages/contacts.vue'
import card from './components/pages/card.vue'
import faq from './components/main/vfaq.vue'
import good from './components/pages/good.vue'
import lkorders from './components/pages/lkorders.vue'
import lkfavorites from './components/pages/lkfavorites.vue'
import lkdata from './components/pages/lkdata.vue'
import signin from './components/pages/signin.vue'
import registration from './components/pages/registration.vue'
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
