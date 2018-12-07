<template>
  <div>
<h3>Добавить тип товара</h3>
    <div class="card-body">
        
        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="title" v-validate="{ required: true, alpha_spaces: true, max: 100, min: 5 }" name="title" class="form-control" :class="{ 'is-invalid': submitted && errors.has('title') }" />
                <div v-if="submitted && errors.has('title')" class="invalid-feedback">{{ errors.first('title') }}</div>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Status</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица типов</h3>

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
    <tr v-for="type1 in types">
      <th>{{ type1.id }}</th>
      <td>{{ type1.title }}</td>
      <td><a href="#" @click="showType(type1.id)">Show</a></td>
      <td><a href="#" @click="deleteType(type1.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import Form from 'vform'
import axios from 'axios'

  export default {
      name: 'crudtypes',
      data() {
          return {
             types: {},
             title: '',
             feedback: '',
             submitted: false,
             form: new Form({
                title : '',
          })
        }
      },
      created() {
          this.loadTypes();
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addType()
                }
            });
          },
          loadTypes() {
            axios.get('/api/types')
                .then((response => this.types = response.data));
          },
          addType() {
              axios.post('/api/types', { 
                  title: this.title, 
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadTypes()
                  this.feedback = null
          },
          showType(id) {       
                axios.get('/api/types/' + id)
                      .then(response => {
                alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.types = this.types.filter(type => {
                    return type.id == id;
                 });
                })
          },

          deleteType(id) {
                axios.delete('/api/types/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadTypes()
          }
      },
  }
</script>