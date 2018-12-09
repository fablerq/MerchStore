<template>
  <div>
    <h1>orders</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>product_id</td>
            <td>user_id</td>
            <td>is_paid</td>
            <td>final_price</td>
            <td>created_at</td>
            <td>updated_at</td>
            <td>show</td>
            <td>delete</td>
        </tr>
        <tr v-for="order in orders">
            <td>{{ order.id }}</td>
            <td>{{ order.product.name }}</td>
            <td>{{ order.user.login }} </td>
            <td>{{ order.is_paid }}</td>
            <td>{{ order.final_price }}</td>
            <td>{{ order.created_at }}</td>
            <td>{{ order.updated_at }}</td>
            <td><a href="#" @click="showOrder(order.id)">Show</a></td>
            <td><a href="#" @click="deleteOrder(order.id)">Delete</a></td>
        </tr>
    </table>
<br>
    <div class="card-body">
        <form action="./api/orders" method="POST" @submit="addOrder()">
            <div class="form-group">
                <input type="text" name="product_id" v-model="product_id" placeholder="product_id" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="user_id" v-model="user_id" placeholder="user_id" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="is_paid" v-model="is_paid" placeholder="is_paid" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="final_price" v-model="final_price" placeholder="final_price" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Add Order" class="btn btn-info">
            </div>
        </form>
    </div>

  </div>
</template>

<script>
import Form from 'vform'
import axios from 'axios'

  export default {
      data() {
          return {
             orders: {},
             form: new Form({
                product_id : '',
                user_id : '',
                is_paid : '',
                final_price : '',
          })
        }
      },
      created() {
          this.loadOrders();
      },
      methods: {
          loadOrders() {
            axios.get('./api/orders')
                .then((response => this.orders = response.data));
          },
          addOrder() {
              axios.post('api/orders/', { 
                  product_id: this.product_id, 
                  user_id: this.user_id,
                  is_paid: this.is_paid,
                  final_price: this.final_price,
                  });
          },
          showOrder(id) {       
                axios.get('api/orders/' + id)
                .then(response => {
                this.name = response.data.name;
                console.log(this.name);
                });
                this.orders = this.orders.filter(order => {
                    return order.id == id;
                 });
          },
          deleteOrder(id) {
                axios.delete('api/orders/' + id)
                .then(response => {
                   console.log(response.data);
                    });
                this.orders = this.orders.filter(orders => {
                return orders.id !== id;
      });
          }
      },
  }
</script>