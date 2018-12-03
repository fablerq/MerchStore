<template>
  <div>
    <h1>productsvariants</h1>
<br>
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
      <th scope="col">product_id</th>
      <th scope="col">size_id</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="productsvariant in productsvariants">
      <th>{{ productsvariant.id }}</th>
      <td>{{ productsvariant.product.title }}</td>
      <td>{{ productsvariant.size.title }}</td>
      <td><a href="#" @click="showProductsVariant(productsvariant.id)">Show</a></td>
      <td><a href="#" @click="deleteProductsVariant(productsvariant.id)">Delete</a></td>
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
             productsvariants: {},
             products: {},
             sizes: {},
             product_id: '',
             size_id: '',
             feedback: '',
             submitted: false,
             form: new Form({
             product_id: '',
             size_id: '',
          })
        }
      },
      created() {
          this.loadProductsVariants();
          this.loadProducts();
          this.loadSizes();
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
          loadProductsVariants() {
            axios.get('api/productsvariants')
                .then((response => this.productsvariants = response.data));
          },
          loadProducts() {
            axios.get('api/products')
                .then((response => this.products = response.data));
          },
          loadSizes() {
            axios.get('api/sizes')
                .then((response => this.sizes = response.data));
          },
          addProductsVariant() {
              axios.post('api/productsvariants', { 
                    product_id: this.product_id,
                    size_id: this.size_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadProductsVariants()
                  this.feedback = null
          },
          showProductsVariant(id) {       
                axios.get('api/productsvariants' + id)
                      .then(response => {
                 alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.productsvariants = this.productsvariants.filter(productsvariant => {
                    return productsvariant.id == id;
                 });
                })
          },

          deleteProductsVariant(id) {
                axios.delete('api/productsvariants' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadProductsVariants()
          }
      },
  }
</script>