<template>
  <div>
    <h1>users</h1>
    <p>Валидации нет. Потому осторожней. Везде уникальные поля + status_id это намбер. Пароль это hash</p>
    <table border="1">
        <tr>
            <td>id</td>
            <td>login</td>
            <td>password</td>
            <td>email</td>
            <td>status_id</td>
            <td>show</td>
            <td>delete</td>
        </tr>
        <tr v-for="user in users">
            <td>{{ user.id }}</td>
            <td>{{ user.login }}</td>
            <td>{{ user.password }}</td>
            <td>{{ user.email }}</td>
            <td>{{ user.status.name }}</td>
            <td><a href="#" @click="showUser(user.id)">Show</a></td>
            <td><a href="#" @click="deleteUser(user.id)">Delete</a></td>
        </tr>
    </table>
<br>
    <div class="card-body">
        <form action="./api/users" method="POST" @submit="addUser()">
            <div class="form-group">
                <input type="text" name="login" v-model="login" placeholder="login" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="password" v-model="password" placeholder="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="email" v-model="email" placeholder="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="status_id" v-model="status_id" placeholder="status_id" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Add User" class="btn btn-info">
            </div>
        </form>
    </div>

  </div>
</template>

<script>
import Form from 'vform'
import axios from 'axios'

  export default {
      data() {
          return {
             users: {},
             form: new Form({
                login : '',
                password : '',
                email : '',
                status_id : '',
          })
        }
      },
      created() {
          this.loadUsers();
      },
      methods: {
          loadUsers() {
            axios.get('./api/users')
                .then((response => this.users = response.data));
          },
          addUser() {
              axios.post('api/users/', { 
                  title: this.login, 
                  password: this.password,
                  email: this.email,
                  status_id: this.status_id,
                  });
          },
          showUser(id) {       
                axios.get('api/users/' + id)
                     .then(function (resp) {
                        app.$router.replace('/');
                    });
                this.users = this.users.filter(user => {
                return user.id !== id;
                 });
          },
          deleteUser(id) {
                axios.delete('api/users/' + id)
                    .then(function (resp) {
                        app.$router.replace('/');
                    });
                this.users = this.users.filter(user => {
                return user.id !== id;
                 });
          }
      },
  }
</script>