<template>
  <div>

    <div class="card-body">
<p>Пока можно добавить ответ от любого пользователя, но когда-нибудь добавлю кастомное правило с проверкой where на одмена и модеров</p>
        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

<h3>Добавить вопрос в фак</h3>
        <form @submit.prevent="handleSubmitAsk">
            <div class="form-group">
                <label for="askername">Askername</label>
                <input type="text" v-model="askername" v-validate="{ required: false, max: 100, min: 3 }" name="askername" class="form-control" :class="{ 'is-invalid': submittedAsk && errors.has('askername') }" />
                <div v-if="submittedAsk && errors.has('askername')" class="invalid-feedback">{{ errors.first('askername') }}</div>
            </div>
            <div class="form-group">
                <label for="email">Email*</label>
                <input type="text" v-model="email" v-validate="{ required: true, email: true }" name="email" class="form-control" :class="{ 'is-invalid': submittedAsk && errors.has('email') }" />
                <div v-if="submittedAsk && errors.has('email')" class="invalid-feedback">{{ errors.first('email') }}</div>
            </div>
            <div class="form-group">
                <label for="question">question*</label>
                <input type="text" v-model="question" v-validate="{ required: true, max: 400, min: 20 }" name="question" class="form-control" :class="{ 'is-invalid': submittedAsk && errors.has('question') }" />
                <div v-if="submittedAsk && errors.has('question')" class="invalid-feedback">{{ errors.first('question') }}</div>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add question</button>
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
      name: 'crudfaqsask',
      data() {
          return {
             askername: '',
             email: '',
             question: '',
             question_id: '',
             user_id: '',
             answer: '',
             feedback: '',
             submittedAsk: false,
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
           handleSubmitAsk(e) {
            this.submittedAsk = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addAsk()
                }
            });
          },

          addAsk() {
              axios.post('/api/faqs', { 
                    askername: this.askername,
                    email: this.email,
                    question: this.question,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                          this.$store.dispatch('LOAD_FAQS')
                  this.feedback = null
          },

          deleteFAQ(id) {
                axios.delete('/api/faqs/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                        this.$store.dispatch('LOAD_FAQS')
          }
      },
  }
</script>
