import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import VueAxios from 'vue-axios'
import createPersistedState from 'vuex-persistedstate'

Vue.use(Vuex)
Vue.use(VueAxios, axios)

export default new Vuex.Store({
  plugins: [createPersistedState()],
  state: {
     currentUser: null,
     users: [],
     roles: [],
     colors: [],
     comments: [],
     faqs: [],
     faculties: [],
     orders: [],
     paymentmethods: [],
     photos: [],
     products: [],
     productsvariants: [],
     sizes: [],
     statuses: [],
     types: [],
     adds: [],
  },
  actions: {
    LOAD_USERS({ commit }) {
        axios.get('/api/users')
             .then(response => {
            commit('SET_USERS', response.data)
            }) 
    },
    LOAD_ROLES({ commit }) {
        axios.get('/api/roles')
            .then(response => {
                commit('SET_ROLES', response.data)
                })
    },
    LOAD_COLORS({ commit }) {
        axios.get('/api/colors')
            .then(response => {
            commit('SET_COLORS', response.data)
            })
    },
    LOAD_COMMENTS({ commit }) {
        axios.get('/api/comments')
            .then(response => {
            commit('SET_COMMENTS', response.data)
            })
    },
    LOAD_PRODUCTS({ commit }) {
        axios.get('/api/products')
            .then(response => {
            commit('SET_PRODUCTS', response.data)
            })
    },
    LOAD_FACULTIES({ commit }) {
        axios.get('/api/faculties')
            .then(response => {
            commit('SET_FACULTIES', response.data)
            })
    },
    LOAD_FAQS({ commit }) {
        axios.get('/api/faqs')
            .then(response => {
            commit('SET_FAQS', response.data)
            })
    },
    LOAD_ORDERS({ commit }) {
        axios.get('/api/orders')
            .then(response => {
            commit('SET_ORDERS', response.data)
            })
    },
    LOAD_PRODUCTSVARIANTS({ commit }) {
        axios.get('/api/productsvariants')
            .then(response => {
            commit('SET_PRODUCTSVARIANTS', response.data)
            })
    },
    LOAD_STATUSES({ commit }) {
        axios.get('/api/statuses')
            .then(response => {
            commit('SET_STATUSES', response.data)
            })
    },
    LOAD_PAYMENTMETHODS({ commit }) {
        axios.get('/api/paymentmethods')
            .then(response => {
            commit('SET_PAYMENTMETHODS', response.data)
            })
    },
    LOAD_PHOTOS({ commit }) {
        axios.get('/api/photos')
            .then(response => {
            commit('SET_PHOTOS', response.data)
            })
    },
    LOAD_TYPES({ commit }) {
        axios.get('/api/types')
            .then(response => {
            commit('SET_TYPES', response.data)
            })
    },
    LOAD_SIZES({ commit }) {
        axios.get('/api/sizes')
            .then(response => {
            commit('SET_SIZES', response.data)
            })
    },
  },
  mutations: {
    SET_CURRENTUSER (state, user) {
        state.currentUser = user
    },
    SET_USERS (state, users) {
        state.users = users
    },
    SET_ROLES (state, roles) {
        state.roles = roles
    },
    SET_COLORS (state, colors) {
        state.colors = colors
    },
    SET_COMMENTS (state, comments) {
        state.comments = comments
    },
    SET_PRODUCTS (state, products) {
        state.products = products
    },
    SET_FACULTIES (state, faculties) {
        state.faculties = faculties
    },
    SET_FAQS (state, faqs) {
        state.faqs = faqs
    },
    SET_ORDERS (state, orders) {
        state.orders = orders
    },
    SET_PRODUCTSVARIANTS (state, productsvariants) {
        state.productsvariants = productsvariants
    },
    SET_STATUSES (state, statuses) {
        state.statuses = statuses
    },
    SET_PAYMENTMETHODS (state, paymentmethods) {
        state.paymentmethods = paymentmethods
    },
    SET_PHOTOS (state, photos) {
        state.photos = photos
    },
    SET_TYPES (state, types) {
        state.types = types
    },
    SET_SIZES (state, sizes) {
        state.sizes = sizes
    },
    SET_ADDS (state, adds) {
        state.adds = adds
    },
  },
  getters: {
    GET_CURRENTUSER (state) {
        return state.currentUser
    },
    GET_USERS(state) {
        return state.users
    },
    GET_ROLES(state) {
        return state.roles
    },
    GET_COLORS(state) {
        return state.colors
    },
    GET_COMMENTS(state) {
        return state.comments
    },
    GET_PRODUCTS(state) {
        return state.products
    },
    GET_PRODUCTSCOUNT: (state, getters) => {
        return getters.GET_PRODUCTS.length;
    },
    GET_FACULTIES(state) {
        return state.faculties
    },
    GET_FAQS(state) {
        return state.faqs
    },
    GET_ORDERS(state) {
        return state.orders
    },
    GET_PRODUCTSVARIANTS(state) {
        return state.productsvariants
    },
    GET_STATUSES(state) {
        return state.statuses
    },
    GET_PAYMENTMETHODS(state) {
        return state.paymentmethods
    },
    GET_PHOTOS(state) {
        return state.photos
    },
    GET_TYPES(state) {
        return state.types
    },
    GET_SIZES(state) {
        return state.sizes
    },
    GET_ADDS(state) {
        return state.adds
    },
    GET_ADDSCOUNT: (state, getters) => {
        return getters.GET_ADDS.length;
    }
  }
})