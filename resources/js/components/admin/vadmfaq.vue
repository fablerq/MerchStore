<template>
  <div class="stats">
    <div class="container">

           <div class="row align-items-center">
      <div class="row">
        <vadmsidebar/>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-9">

    <!--      <div class="row align-items-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"> 
                    <h1>Список вопросов</h1>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <select class="form-control filter" id="filter">
                        <option>ИСиТ</option>
                        <option>ИКСС</option>
                        <option>РТС</option>
                        <option>ГМ</option>
                        <option>ИВО</option>
                    </select>
                </div>
          </div>
           <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                    <h3>Без ответа</h3>
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
                                <div class="userCommentForm">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <span class="userCommentText">Что делать если я ничего не понимаю?</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-2 offset-xl-8 delete"><button type="submit" class="btn btn-sm btn-black btn-block mb-2">Удалить</button></div>
                                        <div class="col-xl-2"><button type="submit" class="btn btn-black btn-sm btn-block mb-2">Ответить</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <div class="userCommentForm">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <span class="userCommentText">Что делать если я ничего не понимаю?</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-2 offset-xl-8 delete"><button type="submit" class="btn btn-sm btn-black btn-block mb-2">Удалить</button></div>
                                            <div class="col-xl-2"><button type="submit" class="btn btn-black btn-sm btn-block mb-2">Ответить</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                    <h3>С ответом</h3>
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
                                    <div class="userCommentForm">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <span class="userCommentText">когда вам подвезут толстовки с факультетов, кроме Исита?</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             <div class="row">
                <div class="col-xl-10 offset-xl-2">
                    <div class="adminComment">
                        <div class="row commentInfo">
                            <div class="col-xl-2"><span class="username">admin</span></div>
                                <div class="col-xl-2 offset-xl-8">
                                    <div class="commentDate">05/12/2018</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="adminCommentForm">
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <span class="adminCommentText">Мы не знаем, может быть, никогда</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-2 offset-xl-8 delete"><button type="submit" class="btn btn-sm btn-black btn-block mb-2">Удалить</button></div>
                                            <div class="col-xl-2"><button type="submit" class="btn btn-black btn-sm btn-block mb-2">Ответить</button></div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div> 

                <vue-tabs>

    <v-tab title="Добавить вопрос в фак" >
      <crudfaqsask></crudfaqsask>
    </v-tab>

    <v-tab title="Добавить ответ в фак">
       <crudfaqsreply></crudfaqsreply>
    </v-tab>

</vue-tabs>
                
        </div>
      </div> 

      <!-- ВЛАД ТВОЯ ВЕРСТКА СВЕРХУ -->

    </div>
  </div>
</template>
 <script>
import vadmsidebar from './vadmsidebar.vue'
import crudfaqsask from './base/CrudFAQSask.vue' 
import crudfaqsreply from './base/CrudFAQSreply.vue'

import {VueTabs, VTab} from 'vue-nav-tabs/dist/vue-tabs.js'

 export default {
  name: 'vadmfaqs',
  components: {
      vadmsidebar,
      VueTabs,
      VTab,
      crudfaqsask,
      crudfaqsreply,
      }
}
 </script>
 <style lang="scss" scoped>
    %comment {
        background: #C4C4C4;
        padding: 0 15px 15px;
        border-radius: 15px;
        width: 100%;
        margin-bottom: 15px;
    }
     .adminComment {
        @extend %comment;
        background: #FDB777;
    }
     .userComment {
        @extend %comment;
    }
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
             .userCommentForm,
            .adminCommentForm {
                background: #ffffff;
                padding: 5px 10px;
                border-radius: 5px;
                width: 100%;
                min-height: 75px;
            }
             .btn {
                background: #FDB777;
                color: #fff;
                border: 1px solid #FDB777;
            }
             .delete {
                margin-right: -1.5%;
            }
</style> 
