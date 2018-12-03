<template>
  <div>
    <h1>orders</h1>
<br>
<h3>Добавить заказ</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="productsvariants_id">productsvariants_id</label>
                <select class="form-control" v-model="productsvariants_id">
                    <option v-for="productsvariant in productsvariants" :value="productsvariant.id">{{ productsvariant.product.title }}</option>
                </select>
            </div>
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
      <th scope="col">productsvariants_id</th>
      <th scope="col">productsvariants_size</th>
      <th scope="col">user_id</th>
      <th scope="col">status_id</th>
      <th scope="col">paymentmethod_id</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="order in orders">
      <th>{{ order.id }}</th>
      <td>{{ order.productsvariants.product_id }}</td>
      <td>{{ order.productsvariants.size_id }}</td>
      <td>{{ order.user.login }}</td>
      <td>{{ order.status.title }}</td>
      <td>{{ order.paymentmethod.title }}</td>
      <td><a href="#" @click="showOrder(order.id)">Show</a></td>
      <td><a href="#" @click="deleteOrder(order.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import Form from 'vform'
import axios from 'axios'

  export default {
      data() {
          return {
             //главный массив
             orders: {},
             //вспомогательные для значений
             productsvariants: {},
             users: {},
             statuses: {},
             paymentmethods: {},
             //названия селектов
             productsvariants_id: '',
             user_id: '',
             status_id: '',
             paymentmethod_id: '',
             //прочее
             feedback: '',
             submitted: false,
             form: new Form({
                productsvariants_id: '',
                user_id: '',
                status_id: '',
                paymentmethod_id: '',
          })
        }
      },
      created() {
          this.loadOrders();
          this.loadProductsVariants();
          this.loadUsers();
          this.loadStatuses();
          this.loadPaymentmethods();
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addOrder()
                }
            });
          },
          loadOrders() {
            axios.get('api/orders')
                .then((response => this.orders = response.data));
          },
          loadProductsVariants() {
            axios.get('api/productsvariants')
                .then((response => this.productsvariants = response.data));
          },
          loadUsers() {
            axios.get('api/users')
                .then((response => this.users = response.data));
          },
          loadStatuses() {
            axios.get('api/statuses')
                .then((response => this.statuses = response.data));
          },
          loadPaymentmethods() {
            axios.get('api/paymentmethods')
                .then((response => this.paymentmethods = response.data));
          },
          addOrder() {
              axios.post('api/orders', { 
                    productsvariants_id: this.productsvariants_id,
                    user_id: this.user_id,
                    status_id: this.status_id,
                    paymentmethod_id: this.paymentmethod_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadOrders()
                  this.feedback = null
          },
          showOrder(id) {       
                axios.get('api/orders/' + id)
                      .then(response => {
                 alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.orders = this.orders.filter(order => {
                    return order.id == id;
                 });
                })
          },

          deleteOrder(id) {
                axios.delete('api/orders/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadOrders()
          }
      },
  }
</script>
