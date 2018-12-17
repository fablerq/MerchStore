<template>
<div>
    <v-app>
  <v-jumbotron v-if='istrue'>
    <v-container fill-height>
      <v-layout align-center>
        <v-flex>
          <h3 class="display-3">Добро пожаловать на сайт</h3>

          <span class="subheading">Вы успешно подтвердили свой email адрес и теперь имеете доступ ко всем функциям интернет магазина!</span>

          <v-divider class="my-3"></v-divider>

          <div class="title mb-3">Переходите в каталог и выбирайте нужный для Вас товар!</div>



          <router-link class="menu-link" :to="{ name: 'catalog' }">
                <v-btn
                class="mx-0"
                color="primary"
                large
                >
                Каталог
                </v-btn>
         </router-link>
          

        </v-flex>
      </v-layout>
    </v-container>
  </v-jumbotron>
  <h2 v-if='!istrue'></h2>

</v-app>
</div>
</template>

<script>
import axios from 'axios'

export default {
   name: 'verify',
   data() {
       return {
           istrue: true,
       }
   },
   mounted: function () {
            axios.post('/user/verify/' + this.$route.params.id)
            .then(response=> {
                if(response.data.error) {
                  console.log(response.data.error);
                  window.location.href = "/404";
                } else {
                  console.log(response.data.message);
                }
            })
    }
}
</script>

<style>

</style>

