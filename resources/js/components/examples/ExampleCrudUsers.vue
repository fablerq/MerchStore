<template>
  <div>
    <h1>users</h1>
<br>
<h3>Добавить юзера</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="login">Login</label>
                <input type="text" v-model="login" v-validate="{ required: true, max: 100, min: 5 }" name="login" class="form-control" :class="{ 'is-invalid': submitted && errors.has('login') }" />
                <div v-if="submitted && errors.has('login')" class="invalid-feedback">{{ errors.first('login') }}</div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" v-model="password" v-validate="{ required: true, min: 7 }" name="password" class="form-control" :class="{ 'is-invalid': submitted && errors.has('password') }" />
                <div v-if="submitted && errors.has('password')" class="invalid-feedback">{{ errors.first('password') }}</div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" v-model="email" v-validate="{ required: true, email: true }" name="email" class="form-control" :class="{ 'is-invalid': submitted && errors.has('email') }" />
                <div v-if="submitted && errors.has('email')" class="invalid-feedback">{{ errors.first('email') }}</div>
            </div>
            <div class="form-group">
                <label for="role_id">role_id</label>
                <select class="form-control" v-model="role_id">
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
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="user in users">
      <th>{{ user.id }}</th>
      <td>{{ user.login }}</td>
      <td>{{ user.password }}</td>
      <td>{{ user.email }}</td>
      <td>{{ user.role.title }}</td>
      <td><a href="#" @click="showUser(user.id)">Show</a></td>
      <td><a href="#" @click="deleteUser(user.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import Form from 'vform'
import axios from 'axios'

  export default {
      data() {
          return {
             users: {},
             roles: {},
             login: '',
             password: '',
             email: '',
             role_id: '',
             feedback: '',
             submitted: false,
             form: new Form({
                login: '',
                password: '',
                email: '',
                role_id: '',
          })
        }
      },
      created() {
          this.loadUsers();
          this.loadRoles();
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addUser()
                }
            });
          },
          loadUsers() {
            axios.get('api/users')
                .then((response => this.users = response.data));
          },
          loadRoles() {
            axios.get('api/roles')
                .then((response => this.roles = response.data));
          },
          addUser() {
              axios.post('api/users/', { 
                    login: this.login,
                    password: this.password,
                    email: this.email,
                    role_id: this.role_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadUsers()
                  this.feedback = null
          },
          showUser(id) {       
                axios.get('api/users/' + id)
                      .then(response => {
                 alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.users = this.users.filter(user => {
                    return user.id == id;
                 });
                })
          },

          deleteUser(id) {
                axios.delete('api/users/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadUsers()
          }
      },
  }
</script>