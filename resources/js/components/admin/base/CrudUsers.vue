<template>
  <div>
<h3>Добавить юзера</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="user.login">Login</label>
                <input type="text" v-model="user.login" v-validate="{ required: true, max: 100, min: 5 }" name="user.login" class="form-control" :class="{ 'is-invalid': submitted && errors.has('user.login') }" />
                <div v-if="submitted && errors.has('login')" class="invalid-feedback">{{ errors.first('login') }}</div>
            </div>
            <div class="form-group">
                <label for="user.password">Password</label>
                <input type="user.password" v-model="user.password" v-validate="{ required: true, min: 7 }" name="user.password" class="form-control" :class="{ 'is-invalid': submitted && errors.has('user.password') }" />
                <div v-if="submitted && errors.has('user.password')" class="invalid-feedback">{{ errors.first('user.password') }}</div>
            </div>
            <div class="form-group">
                <label for="user.email">Email</label>
                <input type="text" v-model="user.email" v-validate="{ required: true, email: true }" name="user.email" class="form-control" :class="{ 'is-invalid': submitted && errors.has('user.email') }" />
                <div v-if="submitted && errors.has('user.email')" class="invalid-feedback">{{ errors.first('user.email') }}</div>
            </div>
            <div class="form-group">
                <label for="user.role_id">role_id</label>
                <select class="form-control" v-model="user.role_id">
                    <option v-for="role in roles" :value="role.id">{{ role.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add User</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица юзеров</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">login</th>
      <th scope="col">password</th>
      <th scope="col">email</th>
      <th scope="col">role_id</th>
      <th scope="col">is_verified</th>
      <!-- <th scope="col">show</th> -->
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users">
      <th>{{ user.id }}</th>
      <td>{{ user.login }}</td>
      <!-- <td>{{ user.password }}</td> -->
      <td>too long hash</td>
      <td>{{ user.email }}</td>
      <td>{{ user.role.title }}</td>
      <td v-if="user.is_verified == 0">Не подтвержден</td>
      <td v-if="user.is_verified == 1">Подтвержден</td>
      <!-- <td><a href="#" @click="showUser(user.id)">Show</a></td> -->
      <td><a href="#" @click="deleteUser(user.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import axios from 'axios'

  export default {
      name: 'crudusers',
      data() {
          return {
             feedback: '',
             submitted: false,
             user: {
                login: '',
                password: '',
                email: '',
                role_id: '',
            }
        }
      },
      mounted: function () {
        this.$store.dispatch('LOAD_ROLES')
        this.$store.dispatch('LOAD_USERS')
      },
      computed: {
          ...mapGetters({
          users: 'GET_USERS',
          roles: 'GET_ROLES',
        })
      },

      methods: {
        handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    //this.$store.dispatch('ADD_USER', this.user)
                    this.addUser();
                }
            });
          },
        addUser() {
              axios.post('/api/users/', { 
                    login: this.user.login,
                    password: this.user.password,
                    email: this.user.email,
                    role_id: this.user.role_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                      console.log(error.response)
                  });
                   this.$store.dispatch('LOAD_USERS')
                  this.feedback = null
          },
        //   showUser(id) {       
        //         axios.get('/api/users/' + id)
        //               .then(response => {
        //          alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
        //          this.users = this.users.filter(user => {
        //             return user.id == id;
        //          });
        //         })
        //   },
          deleteUser(id) {
                axios.delete('/api/users/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                 this.$store.dispatch('LOAD_USERS')
          }
      },
  }
</script>