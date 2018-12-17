<template>
  <div>
    <h1>Заказы</h1>
<br>
<h3>Добавить заказ</h3>

<p>Задачи:</p>
<p>1) Текст заглушка у пустых ордеров будет добавлена позже</p>
<p>2) Красивая валидация checboxes с конкретными товарами будет добавлена позже. (а то сейчас даже не написано что пусто)</p>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">

        <label for="productsvariants_id">productsvariants_id</label>
          <ul class="form-group" v-for="productsvariant in productsvariants">
            <li v-if="!productsvariant.order_id">
              <input type="checkbox" :id="productsvariant.id" :value="productsvariant.id" v-model="productsvariants_id">
              <label :for="productsvariant.id">{{ productsvariant.product.title }}</label>
              <label :for="productsvariant.id">{{ productsvariant.color.title }}</label>
              <label :for="productsvariant.id">{{ productsvariant.size.title }}</label>
            </li>
          </ul>
            <div class="form-group">
                <label for="user_id">user_id</label>
                <select class="form-control" v-model="user_id">
                    <option v-for="user in users" :value="user.id">{{ user.login }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status_id">status_id</label>
                <select class="form-control" v-model="status_id">
                    <option v-for="status in statuses" :value="status.id">{{ status.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="paymentmethod_id">paymentmethod_id</label>
                <select class="form-control" v-model="paymentmethod_id">
                    <option v-for="paymentmethod in paymentmethods" :value="paymentmethod.id">{{ paymentmethod.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Order</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица заказов</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">product_id</th>
      <th scope="col">size_id</th>
      <th scope="col">color_id</th>
      <th scope="col">user_id</th>
      <th scope="col">status_id</th>
      <th scope="col">paymentmethod_id</th>
      <!-- <th scope="col">show</th> -->
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="order in orders">
      <th>{{ order.id }}</th>
      <td>
          <ul class="form-group" v-for="productsvariant in productsvariants"> 
            <li v-if="order.id == productsvariant.order_id">
                {{ productsvariant.product.title }}
            </li>
          </ul>
          <!-- <p v-if="productsvariants"></p>   -->
      </td>
      <td>
          <ul class="form-group" v-for="productsvariant in productsvariants"> 
            <li v-if="order.id == productsvariant.order_id">
                {{ productsvariant.size.title }}
            </li>
          </ul>  
      </td>
      <td>
          <ul class="form-group" v-for="productsvariant in productsvariants"> 
            <li v-if="order.id == productsvariant.order_id">
                {{ productsvariant.color.title }}
            </li>
          </ul>  
      </td>
      <td>{{ order.user.login }}</td>
      <td>{{ order.status.title }}</td>
      <td>{{ order.paymentmethod.title }}</td>
      <!-- <td><a href="#" @click="showOrder(order.id)">Show</a></td> -->
      <td><a href="#" @click="deleteOrder(order.id)">Delete</a></td>
    </tr>
  </tbody>          
</table>



  </div>
</template>

<script>
import axios from 'axios' 
import { mapActions, mapGetters } from 'vuex'

  export default {
      name: 'crudorders',
      data() {
          return {
             //названия селектов
             productsvariants_id: [],
             user_id: '',
             status_id: '',
             paymentmethod_id: '',
             //прочее
             feedback: '',
             submitted: false,
        }
      },
      mounted: function () {
        this.$store.dispatch('LOAD_ORDERS')
        this.$store.dispatch('LOAD_PRODUCTSVARIANTS')
        this.$store.dispatch('LOAD_USERS')
        this.$store.dispatch('LOAD_STATUSES')
        this.$store.dispatch('LOAD_PAYMENTMETHODS')
      },
      computed: {
          ...mapGetters({
          orders: 'GET_ORDERS',
          productsvariants: 'GET_PRODUCTSVARIANTS',
          users: 'GET_USERS',
          statuses: 'GET_STATUSES',
          paymentmethods: 'GET_PAYMENTMETHODS',
        })
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    if (this.productsvariants_id)
                    {
                       this.addOrder()
                    }
                    else {
                        this.feedback = 'Выберите конкретный товар к заказу'
                    }
                }
            });
          },
          addOrder() {
              axios.post('/api/orders', { 
                    user_id: this.user_id,
                    status_id: this.status_id,
                    paymentmethod_id: this.paymentmethod_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)        
                  })
                  .catch(error => {
                      console.log(error.response)
                      this.feedback = error.response.data.errors;
                  }); 

              for (let i = 0; i < this.productsvariants_id.length; i++) { 
                    axios.put('/api/productsvariants/' + this.productsvariants_id[i], { 
                        order_id: this.orders[this.orders.length-1].id+1,
                    })                    
                    .then(function (response) {
                        alert(response.data.message)
                    })
                    .catch(error => {
                        this.feedback = error.response.data.errors;
                    });
              }
                this.$store.dispatch('LOAD_ORDERS')
                this.$store.dispatch('LOAD_PRODUCTSVARIANTS')
                this.feedback = null
          },
        //   showOrder(id) {       
        //         axios.get('/api/orders/' + id)
        //               .then(response => {
        //          alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
        //          this.orders = this.orders.filter(order => {
        //             return order.id == id;
        //          });
        //         })
        //   },

          deleteOrder(id) {
                axios.delete('/api/orders/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                    this.$store.dispatch('LOAD_ORDERS')
          },
      },
  }
</script>
