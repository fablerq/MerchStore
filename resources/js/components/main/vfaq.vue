<template>
    <div class="faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3>Частозадаваемые вопросы</h3>
                    <ul class="faqItems">
                        <li class="faqItem">
                            <p class="question">- Что делать если качество мерча плохое?</p>
                            <p class="answer">- Если у вас возникла такая проблема, то вам следует обратиться к   менеджеру по продажам. Его почту вы можете найти во вкладке <router-link class="menu-link" :to="{ name: 'contacts' }"> 
                                    <v-btn  class="contactBtn" small color="orange lighten-2">Контакты</v-btn>
                                </router-link>.</p>
                        </li>
                        <li class="faqItem">
                            <p class="question">- Что делать если я не получил товар?</p>
                            <p class="answer">- Быть такого не может. Сейчас мы отдаем товар строго в руки. Доставки еще нет.</p>
                        </li>
                        <li class="faqItem">
                            <p class="question">- Как добавить свой мерч на сайт?</p>
                            <p class="answer">- Вы можете добавить свой мерч, написав администратору или дизайнеру. Мы оценим вашу работу и решим, пустим мы  ее в продажу или нет.</p>
                        </li>
                        <li class="faqItem">
                            <p class="question">- Какие гениальные люди сделали этот сайт?</p>
                            <p class="answer">- Ну как бы это. Самая крутая команда по Деву номер 1. АГАГА</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <h3>Вопрос-ответ</h3>
                    <p>Если мы не смогли ответить на ваш вопрос, то вы можете написать его в форме ниже и отправить нам. Другие ответы вы можете посмотреть ниже.</p>
                </div>
            </div>
            <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 feedback">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h2>Ждём ваших вопросов</h2>
                                </div>
                            </div>
                            <form @submit.prevent="handleSubmitAsk">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                        <div class="form-group">
                                        <label for="askername">Ваше имя</label>
                                        <input type="text" v-model="askername" v-validate="{ required: false, max: 100, min: 3 }" name="askername" class="form-control" :class="{ 'is-invalid': submittedAsk && errors.has('askername') }"/>
                                        <div v-if="submittedAsk && errors.has('askername')" class="invalid-feedback">{{ errors.first('askername') }}</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" v-model="email" v-validate="{ required: true, email: true }" name="email" class="form-control" :class="{ 'is-invalid': submittedAsk && errors.has('email') }"/>
                                        <div v-if="submittedAsk && errors.has('email')" class="invalid-feedback">{{ errors.first('email') }}</div>
                                    </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                                        <div class="form-group">
                                            <label for="question">Ваш вопрос</label>
                                            <textarea type="text" rows="5" v-model="question" v-validate="{ required: true, max: 400, min: 20 }" name="question" class="form-control" :class="{ 'is-invalid': submittedAsk && errors.has('question') }"></textarea>
                                            <div v-if="submittedAsk && errors.has('question')" class="invalid-feedback">{{ errors.first('question') }}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                        <div class="form-group">
                                            <v-btn type="submit" block small color="orange lighten-2" dark>Отправить</v-btn>
                                        </div>
                                    </div>
                                </div> 
                            </form>
                        </div>
                    
            </div>
            <div class="row comment" v-for="faq in faqs" :key="faq.id">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                    <div class="userInfo">
                                        <img src="../../../imgs/user-icon.png" alt="user-icon">
                                        <div class="userName">{{faq.askername}}</div>
                                        <div class="date">12/12/2018</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-10">
                                    <p class="commentBody">{{faq.question}}</p>
                                </div>
                            </div>
        </div>
    </div>
</template>

<script>
//database
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'

export default {
    name: 'vgood',

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
    },

    computed: { 
        ...mapGetters({ 
        faqs: 'GET_FAQS'
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
                  //this.loadFAQs()
                  this.feedback = null
          },

     }
}
</script>

<style lang="scss" scoped>
    
    .faq {
        width: 100%;
        h3 {
            margin-bottom: 15px;
        }
        .contactBtn {
            color: #fff;
            text-decoration: none;
            vertical-align: baseline;
        }
        .menu-link {
            text-decoration: none;
        }
        
        .feedback {
        margin-top: 20px;
        .email {
            margin-top: 8px;
        }
      }
    }

    .comment {
        margin-top: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e2e2e2;

        .userInfo {
            display: flex;
            align-items: center;
            flex-direction: column;
            border-right: 1px solid #e2e2e2;
            

            img {
                width: 50%;
            }

            .userName {
                font-weight: bold;
                font-size: 14px;
            }
        }
      }
</style>