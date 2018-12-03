<template>
  <div>
    <h1>products</h1>
<br>
<h3>Добавить товар (не конкертный, а просто наименование)</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="title" v-validate="{ required: true, max: 200, min: 5 }" name="title" class="form-control" :class="{ 'is-invalid': submitted && errors.has('title') }" />
                <div v-if="submitted && errors.has('title')" class="invalid-feedback">{{ errors.first('title') }}</div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" v-model="description" v-validate="{ required: true, max: 1000, min: 5 }" name="description" class="form-control" :class="{ 'is-invalid': submitted && errors.has('description') }" />
                <div v-if="submitted && errors.has('description')" class="invalid-feedback">{{ errors.first('description') }}</div>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" v-model="price" v-validate="{ required: true, numeric: true }" name="price" class="form-control" :class="{ 'is-invalid': submitted && errors.has('price') }" />
                <div v-if="submitted && errors.has('price')" class="invalid-feedback">{{ errors.first('price') }}</div>
            </div>
            <div class="form-group">
                <label for="faculty_id">faculty_id</label>
                <select class="form-control" v-model="faculty_id">
                    <option v-for="faculty in faculties" :value="faculty.id">{{ faculty.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type_id">type_id</label>
                <select class="form-control" v-model="type_id">
                    <option v-for="type1 in types" :value="type1.id">{{ type1.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Product</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица товаров</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">description</th>
      <th scope="col">price</th>
      <th scope="col">faculty_id</th>
      <th scope="col">type_id</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="product in products">
      <th>{{ product.id }}</th>
      <td>{{ product.title }}</td>
      <td>{{ product.description }}</td>
      <td>{{ product.price }}</td>
      <td>{{ product.faculty.title }}</td>
      <td>{{ product.type.title }}</td>
      <td><a href="#" @click="showProduct(product.id)">Show</a></td>
      <td><a href="#" @click="deleteProduct(product.id)">Delete</a></td>
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
             products: {},
             faculties: {},
             types: {},
             title: '',
             description: '',
             price: '',
             faculty_id: '',
             type_id: '',
             feedback: '',
             submitted: false,
             form: new Form({
                title: '',
                description: '',
                price: '',
                faculty_id: '',
                type_id: '',
          })
        }
      },
      created() {
          this.loadProducts();
          this.loadFaculties();
          this.loadTypes();
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addProduct()
                }
            });
          },
          loadProducts() {
            axios.get('api/products')
                .then((response => this.products = response.data));
          },
          loadFaculties() {
            axios.get('api/faculties')
                .then((response => this.faculties = response.data));
          },
          loadTypes() {
            axios.get('api/types')
                .then((response => this.types = response.data));
          },
          addProduct() {
              axios.post('api/products', { 
                    title: this.title,
                    description: this.description,
                    price: this.price,
                    faculty_id: this.faculty_id,
                    type_id: this.type_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadProducts()
                  this.feedback = null
          },
          showProduct(id) {       
                axios.get('api/products/' + id)
                      .then(response => {
                 alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.products = this.products.filter(product => {
                    return product.id == id;
                 });
                })
          },

          deleteProduct(id) {
                axios.delete('api/products/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadProducts()
          }
      },
  }
</script>