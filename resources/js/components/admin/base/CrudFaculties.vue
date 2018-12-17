<template>
  <div>

<h3>Добавить факультет</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="title" v-validate="{ required: true, alpha_spaces: true, max: 100, min: 2 }" name="title" class="form-control" :class="{ 'is-invalid': submitted && errors.has('title') }" />
                <div v-if="submitted && errors.has('title')" class="invalid-feedback">{{ errors.first('title') }}</div>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Faculty</button>
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
      <!-- <th scope="col">show</th> -->
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="faculty in faculties">
      <th>{{ faculty.id }}</th>
      <td>{{ faculty.title }}</td>
      <!-- <td><a href="#" @click="showFaculty(faculty.id)">Show</a></td> -->
      <td><a href="#" @click="deleteFaculty(faculty.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import axios from 'axios'

  export default {
      name: 'crudfaculties',
      data() {
          return {
             title: '',
             feedback: '',
             submitted: false,
        }
      },
      mounted: function () {
        this.$store.dispatch('LOAD_FACULTIES')
      },
      computed: {
          ...mapGetters({
          faculties: 'GET_FACULTIES',
        })
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addFaculty()
                }
            });
          },
          addFaculty() {
              axios.post('/api/faculties', { 
                  title: this.title, 
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.$store.dispatch('LOAD_FACULTIES')
                  this.feedback = null
          },
        //   showFaculty(id) {       
        //         axios.get('/api/faculties/' + id)
        //               .then(response => {
        //         alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
        //          this.faculties = this.faculties.filter(faculty => {
        //             return faculty.id == id;
        //          });
        //         })
        //   },

          deleteFaculty(id) {
                axios.delete('/api/faculties/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.$store.dispatch('LOAD_FACULTIES')
          }
      },
  }
</script>