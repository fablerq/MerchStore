<template>
  <div>
    <h1>roles</h1>
<br>
<h3>Добавить роль</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="title" v-validate="{ required: true, alpha_spaces: true, min: 5, max: 100 }" name="title" class="form-control" :class="{ 'is-invalid': submitted && errors.has('title') }" />
                <div v-if="submitted && errors.has('title')" class="invalid-feedback">{{ errors.first('title') }}</div>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Role</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица ролей</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="role in roles">
      <th>{{ role.id }}</th>
      <td>{{ role.title }}</td>
      <td><a href="#" @click="showRole(role.id)">Show</a></td>
      <td><a href="#" @click="deleteRole(role.id)">Delete</a></td>
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
             roles: {},
             title: '',
             feedback: '',
             submitted: false,
             form: new Form({
                title : '',
          })
        }
      },
      created() {
          this.loadRoles();
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addRole()
                }
            });
          },
          loadRoles() {
            axios.get('api/roles')
                .then((response => this.roles = response.data));
          },
          addRole() {
              axios.post('api/roles', { 
                  title: this.title, 
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadRoles()
                  this.feedback = null
          },
          showRole(id) {       
                axios.get('api/roles/' + id)
                      .then(response => {
                alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.roles = this.roles.filter(role => {
                    return role.id == id;
                 });
                })
          },

          deleteRole(id) {
                axios.delete('api/roles/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadRoles()
          }
      },
  }
</script>