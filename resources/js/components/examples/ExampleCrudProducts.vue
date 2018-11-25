<template>
  <div>
    <h1>products</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>description</td>
            <td>quantity</td>
            <td>status</td>
            <td>price</td>
            <td>thumbnail</td>
            <td>faculty_id</td>
            <td>type_id</td>
            <td>color</td>
            <td>show</td>
            <td>delete</td>
        </tr>
        <tr v-for="product in products">
            <td>{{ product.id }}</td>
            <td>{{ product.name }}</td>
            <td>{{ product.description }}</td>
            <td>{{ product.quantity }}</td>
            <td>{{ product.status }}</td>
            <td>{{ product.price }}</td>
            <td>{{ product.thumbnail }}</td>
            <td>{{ product.faculty.name }} </td>
            <td>{{ product.type.name }}</td>
            <td>{{ product.faculty.color }}</td>
            <td><a href="#" @click="showProduct(product.id)">Show</a></td>
            <td><a href="#" @click="deleteProduct(product.id)">Delete</a></td>
        </tr>
    </table>
<br>
    <div class="card-body">
        <form action="./api/products" method="POST" @submit="addProduct()">
            <div class="form-group">
                <input type="text" name="name" v-model="name" placeholder="name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="description" v-model="description" placeholder="description" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="quantity" v-model="quantity" placeholder="quantity" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="status" v-model="status" placeholder="status" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="price" v-model="price" placeholder="price" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="thumbnail" v-model="thumbnail" placeholder="thumbnail" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="faculty_id" v-model="faculty_id" placeholder="faculty_id" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="type_id" v-model="type_id" placeholder="type_id" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Add Product" class="btn btn-info">
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
             products: {},
             form: new Form({
                name : '',
                description : '',
                quantity : '',
                status : '',
                price : '',
                thumbnail : '',
                faculty_id : '',
                type_id : '',
          })
        }
      },
      created() {
          this.loadProducts();
      },
      methods: {
          loadProducts() {
            axios.get('./api/products')
                .then((response => this.products = response.data));
          },
          addProduct() {
              axios.post('api/products/', { 
                  name: this.name, 
                  description: this.description,
                  quantity: this.quantity,
                  status: this.status,
                  price: this.price, 
                  thumbnail: this.thumbnail,
                  faculty_id: this.faculty_id,
                  type_id: this.type_id,
                  });
          },
          showProduct(id) {       
                axios.get('api/products/' + id)
                .then(response => {
                     this.name = response.data.name;
                     console.log(this.name);
                });
                this.products = this.products.filter(product => {
                    return product.id == id;
                 });
          },
          deleteProduct(id) {
                axios.delete('api/products/' + id)
                    .then(function (resp) {
                        app.$router.replace('/');
                    });
                this.products = this.products.filter(product => {
                return product.id !== id;
                 });
          }
      },
  }
</script>