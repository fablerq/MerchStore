<template>
  <div>
<h3>Добавить конкретный товар</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="product_id">product_id</label>
                <select class="form-control" v-model="product_id">
                    <option v-for="product in products" :value="product.id">{{ product.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="size_id">size_id</label>
                <select class="form-control" v-model="size_id">
                    <option v-for="size in sizes" :value="size.id">{{ size.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="color_id">color_id</label>
                <select class="form-control" v-model="color_id">
                    <option v-for="color in colors" :value="color.id">{{ color.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add ProductVariant</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица конкретных товаров</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">order_id</th>
      <th scope="col">product_id</th>
      <th scope="col">size_id</th>
      <th scope="col">color_id</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>  
  <!-- ПРОВЕРКА НА НАЛ АНАЛ В ОРДЕРЕ -->
  <tbody>
    <tr v-for="productsvariant in productsvariants">
      <th>{{ productsvariant.id }}</th>
      <td v-if="productsvariant.order">{{ productsvariant.order.id }}</td>
      <td v-if="!productsvariant.order">Не куплено</td>
      <td>{{ productsvariant.product.title }}</td>
      <td>{{ productsvariant.size.title }}</td>
      <td>{{ productsvariant.color.title }}</td>
      <td><a href="#" @click="showProductsVariant(productsvariant.id)">Show</a></td>
      <td><a href="#" @click="deleteProductsVariant(productsvariant.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import axios from 'axios'

  export default {
      name: 'crudproductsvariants',
      data() {
          return {
             product_id: '',
             size_id: '',
             color_id: '',
             feedback: '',
             submitted: false,
        }
      },
      mounted: function () {
        this.$store.dispatch('LOAD_PRODUCTS')
        this.$store.dispatch('LOAD_PRODUCTSVARIANTS')
        this.$store.dispatch('LOAD_SIZES')
        this.$store.dispatch('LOAD_COLORS')
      },
      computed: {
          ...mapGetters({
          products: 'GET_PRODUCTS',
          productsvariants: 'GET_PRODUCTSVARIANTS',
          sizes: 'GET_SIZES',
          colors: 'GET_COLORS',
        })
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addProductsVariant()
                }
            });
          },
          addProductsVariant() {
              axios.post('/api/productsvariants', { 
                    product_id: this.product_id,
                    size_id: this.size_id,
                    color_id: this.color_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                      console.log(error.response)
                  });
                 // this.loadProductsVariants()
                  this.feedback = null
          },
          showProductsVariant(id) {       
                axios.get('/api/productsvariants/' + id)
                      .then(response => {
                 alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.productsvariants = this.productsvariants.filter(productsvariant => {
                    return productsvariant.id == id;
                 });
                })
          },

          deleteProductsVariant(id) {
                axios.delete('/api/productsvariants/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                //this.loadProductsVariants()
          }
      },
  }
</script>