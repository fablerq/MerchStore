<template>
  <div>

    <div class="card-body">


        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>


<h3>Добавить ответ в фак</h3>
        <form @submit.prevent="handleSubmitReply">
            <div class="form-group">
                <label for="question_id">question_id</label>
                <select class="form-control" v-model="question_id">
                    <option v-for="faq in faqs" :value="faq.id">{{ faq.id }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="user_id">user_id</label>
                <select class="form-control" v-model="user_id">
                    <option v-for="user in users" :value="user.id">{{ user.email }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="answer">answer</label>
                <input type="text" v-model="answer" v-validate="{ required: true, max: 400, min: 20 }" name="answer" class="form-control" :class="{ 'is-invalid': submittedReply && errors.has('answer') }" />
                <div v-if="submittedReply && errors.has('answer')" class="invalid-feedback">{{ errors.first('answer') }}</div>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add answer</button>
            </div>
        </form>

    </div>

<br>

<h3>Таблица вопросов с ответами</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">askername</th>
      <th scope="col">email</th>
      <th scope="col">question</th>
      <th scope="col">user_id</th>
      <th scope="col">answer</th>
      <th scope="col">Создан</th>
      <th scope="col">апдетед (ответ)</th>
      <th scope="col">delete</th>
    </tr>
  </thead> 
  <tbody>
    <tr v-for="faq in faqs">
      <th>{{ faq.id }}</th>
      <td>{{ faq.askername }}</td>
      <td>{{ faq.email }}</td>
      <td>{{ faq.question }}</td>
      <td v-if="faq.user">{{ faq.user.login }}</td>
      <td v-if="!faq.user">заполните форму...</td>
      <td v-if="faq.answer">{{ faq.answer }}</td>
      <td v-if="!faq.answer">заполните форму...</td>
      <td>{{ faq.updated_at }}</td>
      <td>{{ faq.created_at }}</td>
      <td><a href="#" @click="deleteFAQ(faq.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'

  export default {
      name: 'crudfaqsreply',
      data() {
          return {
             askername: '',
             email: '',
             question: '',
             question_id: '',
             user_id: '',
             answer: '',
             feedback: '',
             submittedReply: false,
        }
      },
      mounted: function () {
        this.$store.dispatch('LOAD_FAQS')
        this.$store.dispatch('LOAD_USERS')
      },
      computed: {
          ...mapGetters({
          faqs: 'GET_FAQS',
          users: 'GET_USERS',
        })
      },
      methods: {
          handleSubmitReply(e) {
            this.submittedReply = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addReply(this.question_id)
                }
            });
          },
          addReply(id) {
              axios.put('/api/faqs/' + id, { 
                    question_id: this.question_id,
                    user_id: this.user_id,
                    answer: this.answer,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                      console.log(error.response)
                  });
                  //this.loadFAQs()
                  this.feedback = null
          },

          deleteFAQ(id) {
                axios.delete('/api/faqs/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                //this.loadFAQs()
          }
      },
  }
</script>
