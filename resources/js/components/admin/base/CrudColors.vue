<template>
  <div>

<h3>Добавить цвет</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="title" v-validate="{ required: true, alpha_spaces: true, max: 100, min: 3 }" name="title" class="form-control" :class="{ 'is-invalid': submitted && errors.has('title') }" />
                <div v-if="submitted && errors.has('title')" class="invalid-feedback">{{ errors.first('title') }}</div>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Color</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица факультетов</h3>

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
    <tr v-for="color in colors">
      <th>{{ color.id }}</th>
      <td>{{ color.title }}</td>
      <td><a href="#" @click="showColor(color.id)">Show</a></td>
      <td><a href="#" @click="deleteColor(color.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import Form from 'vform'
import axios from 'axios'

  export default {
      name: 'crudcolors',
      data() {
          return {
             colors: {},
             title: '',
             feedback: '',
             submitted: false,
        }
      },
      created() {
          this.loadColors();
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addColor()
                }
            });
          },
          loadColors() {
            axios.get('/api/colors')
                .then((response => this.colors = response.data));
          },
          addColor() {
              axios.post('/api/colors', { 
                  title: this.title, 
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadColors()
                  this.feedback = null
          },
          showColor(id) {       
                axios.get('/api/colors/' + id)
                      .then(response => {
                alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.colors = this.colors.filter(color => {
                    return color.id == id;
                 });
                })
          },

          deleteColor(id) {
                axios.delete('/api/colors/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadColors()
          }
      },
  }
</script>