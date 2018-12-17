<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vlksidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
            <div class="row active">
               
                                <h3>Заказы</h3>


          <!-- <ul class="form-group" v-for="order in ordersforuser"> 
            <li>
                {{ order.id }}
            </li>
          </ul>  -->



                <table class="table order">
                    <thead class="table-success">
                        <tr>
                            <!-- <th scope="col">Заказ №{{order.id}} от {{order.created_at}}</th> -->
                            <th scope="col">Заказ № от </th>
                            <th scope="col">1200 р.</th>
                            <th scope="col">ожидает оплаты</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Футболка “ИСиТ”</td>
                            <td>500 р</td>
                            <td colspan="2">количество: 1</td>
                        </tr>
                        <tr>
                            <td>Свитшот “Мощь”</td>
                            <td>700р</td>
                            <td colspan="2">количество: 1</td>
                        </tr>
                        <tr>
                            <td class="table-active" colspan="4">Онлайн-оплата</td>
                        </tr>
                    </tbody>
                </table>



            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios' 
import vlksidebar from './vlksidebar.vue'
import { mapActions, mapGetters } from 'vuex'

export default {
  name: 'vlkorders',
  components: {vlksidebar},
  data() {
      return {
           ordersforuser: [],
        }
      },
    computed: {
       ...mapGetters({
        currentuser: 'GET_CURRENTUSER',
        orders: 'GET_ORDERS',
       }),
       getorders() {
            axios.get('/api/showforuser' + currentuser.id)                    
                  .then(function (response) {
                        this.ordersforuser = response.data
                        console.log(this.ordersforuser)       
                        console.log('wefwe')   
                  })
       }
  },
  methods: {
      kek() {
          console.log(this.orders) 
      }
  }
}

</script>

<style lang="scss" scoped>
    .change-btn {
        background: #000;
        border-radius: 15px;
        color: #fff;
        border: 1px solid #000;
        margin-left: -5px;
    }

    .active,
    .done {
        margin-bottom: 2% 0;
    }

    .order {
        margin: 2% 0;
    }
</style>