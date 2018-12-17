import Vue from 'vue'
import Vuetify from 'vuetify'
Vue.config.productionTip = true;
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

Vue.use(VueTabs)

//styles for Vutify
import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import 'bootstrap/dist/css/bootstrap.css'
import "vue-material-design-icons/styles.css"


import App from './components/App.vue'

import router from './routes';

import store from './store/store';

const app = new Vue({
  store,
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
