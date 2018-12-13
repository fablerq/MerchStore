import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(Vuex)
Vue.use(VueAxios, axios)

export default new Vuex.Store({
  state: {
     users: [],
     roles: [],
  },
  actions: {
    loadUsers: async function({ commit }) {
        await axios.get('/api/users')
             .then(response => {
            commit('SET_USERS', response)
            })
            
    },
    loadRoles({ commit }) {
        axios.get('/api/roles')
            .then(response => {
                commit('SET_ROLES', response)
                })
      },
  },
  mutations: {
    SET_USERS (state, users) {
        state.users = users
    },
    SET_ROLES (state, roles) {
        state.roles = roles
    },
  },
  getters: {
    users(state) {
        return state.users
    },
    users(state) {
        return state.users
    },

  }
})