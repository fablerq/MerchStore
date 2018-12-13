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
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                    <v-form v-model="valid">
                                        <v-text-field
                                        v-model="name"
                                        :rules="nameRules"
                                        :counter="10"
                                        label="Name"
                                        required
                                        ></v-text-field>
                                        <v-text-field
                                        class="email"
                                        v-model="email"
                                        :rules="emailRules"
                                        label="E-mail"
                                        required
                                        ></v-text-field>
                                    </v-form>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                                    <v-textarea
                                    name="input-7-1"
                                    value=""
                                    hint="Hint text"
                                    ></v-textarea>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                        <v-btn block small color="orange lighten-2" dark>Отправить</v-btn>
                                    </div>
                                </div> 
                        </div>
                    </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'vgood',
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
</style>