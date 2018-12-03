<template>
  <div>
    <h1>sizes</h1>
<br>
<h3>Добавить размер</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="title" v-validate="{ required: true, max: 100 }" name="title" class="form-control" :class="{ 'is-invalid': submitted && errors.has('title') }" />
                <div v-if="submitted && errors.has('title')" class="invalid-feedback">{{ errors.first('title') }}</div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" v-model="description" v-validate="{ required: true, max: 300, min: 5 }" name="description" class="form-control" :class="{ 'is-invalid': submitted && errors.has('description') }" />
                <div v-if="submitted && errors.has('description')" class="invalid-feedback">{{ errors.first('description') }}</div>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Size</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица статусов</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="size in sizes">
      <th>{{ size.id }}</th>
      <td>{{ size.title }}</td>
      <td>{{ size.description }}</td>
      <td><a href="#" @click="showSize(size.id)">Show</a></td>
      <td><a href="#" @click="deleteSize(size.id)">Delete</a></td>
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
             sizes: {},
             title: '',
             description: '',
             feedback: '',
             submitted: false,
             form: new Form({
                title : '',
                description : '',
          })
        }
      },
      created() {
          this.loadSizes();
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addSize()
                }
            });
          },
          loadSizes() {
            axios.get('api/sizes')
                .then((response => this.sizes = response.data));
          },
          addSize() {
              axios.post('api/sizes/', { 
                  title: this.title, 
                  description: this.description,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadSizes()
                  this.feedback = null
          },
          showSize(id) {       
                axios.get('api/sizes/' + id)
                      .then(response => {
                alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.sizes = this.sizes.filter(size => {
                    return size.id == id;
                 });
                })
          },

          deleteSize(id) {
                axios.delete('api/sizes/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadSizes()
          }
      },
  }
</script>