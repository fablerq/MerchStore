<template>
    <div class="faq">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <h3>Частозадаваемые вопросы</h3>
                    <ul class="faqItems">
                        <li class="faqItem">
                            <p class="question">- Что делать если качество мерча плохое?</p>
                            <p class="answer">- Если у вас возникла такая проблема, то вам следует обратиться к   менеджеру по продажам. Его почту вы можете найти во вкладке "Контакты".</p>
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
                        <li class="faqItem">
                            <p class="question">- Какие вас найти?</p>
                            <p class="answer">- Жмакай на кнопку<router-link class="menu-link" :to="{ name: 'contacts' }"><button type="button" class="btn btn-sm btn-dark contacts">Контакты</button></router-link></p>
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
                <div class="col-xl-12">
                    <form>
                        <div class="form-row align-items-center">
                            <div class="col-xl-2">
                                <input type="text" class="form-control mb-2" id="nameInput" placeholder="Имя">
                            </div>
                            <div class="col-xl-2">
                                <div class="input-group mb-2">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-xl-2 offset-xl-6">
                                <button type="submit" class="btn btn-black btn-block mb-2">Submit</button>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-xl-12">
                                <textarea class="form-control" id="commentText" rows="5"></textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                            <div class="col-xl-12">
                                <div class="userComment">
                                    <div class="row commentInfo">
                                        <div class="col-xl-2"><span class="username">krendeleno</span></div>
                                        <div class="col-xl-2 offset-xl-8">
                                            <div class="commentDate">05/12/2018</div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <p class="userCommentText">Что делать если я ничего не понимаю?</p>
                                        </div>
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

        .contacts {
            margin-left: 1%;
            background: #C4C4C4;
            border-color: #C4C4C4;
        }

        form {
            background: #C4C4C4;
            padding: 15px;
            border-radius: 15px;
            margin-bottom: 15px;

            .btn {
                background: #FDB777;
                color: #fff;
                border: 1px solid #FDB777;
    }
        }

        .userComment {
            background: #C4C4C4;
            padding: 0 15px;
            border-radius: 15px;
            width: 100%;
            margin-bottom: 15px;

            .commentInfo {
                padding: 10px 0;
            }

            .username {
                font-weight: bold;
                margin: 15px 0;
            }

            .commentDate {
                width: 100%;
                text-align: right;
            }

            p {
                background: #ffffff;
                padding: 5px;
                border-radius: 5px;
                width: 100%;
                min-height: 75px;
            }
        }
    }
</style>