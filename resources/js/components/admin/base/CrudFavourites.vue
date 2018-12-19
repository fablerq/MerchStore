<template>
  <div>
<h3>Добавить избранное пользователю</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="user_id">user_id</label>
                <select class="form-control" v-model="user_id">
                    <option v-for="user in users" :value="user.id">{{ user.login }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="product_id">product_id</label>
                <select class="form-control" v-model="product_id">
                    <option v-for="product in products" :value="product.id">{{ product.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Favourite</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица пользователей</h3>
<table class="table table-bordered" >
  <thead>
    <tr>
      <th scope="col">user_id</th>
      <th scope="col">login</th>
      <th scope="col">show</th>
    </tr>
  </thead>
  <tbody> 

     <tr v-for="user in users">
      <td>{{ user.id }}</td>
      <td>{{ user.login }}</td>
      <td><a href="#" @click="showFavourite(user.id)">Show all favourites for this user</a></td>
    </tr>
  </tbody>
</table>










<h3>Таблица избранных у пользователя</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">user_id</th>
      <th scope="col">product_id</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody> 

    <tr v-for="favourite in favourites">
      <!-- <td>{{ favourite.pivot.user_id }}</td> -->
      <template v-for="user in users">
      <td v-if="user.id == favourite.pivot.user_id">
            {{ user.login }}
      </td>
      </template>
      <td>{{ favourite.title }}</td>
      <td><a href="#" @click="deleteFavourite(favourite.pivot.user_id, favourite.pivot.product_id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
import axios from 'axios'

  export default {
      name: 'crudfavourites',
      data() {
          return {
             user_id: '',
             product_id: '',
             feedback: '',
             submitted: false,
        }
      },
      mounted: function () {
        this.$store.dispatch('LOAD_PRODUCTS')
        this.$store.dispatch('LOAD_USERS')
      },
      computed: {
          ...mapGetters({
          products: 'GET_PRODUCTS',
          users: 'GET_USERS',
          favourites: 'GET_FAVOURITESFORUSER',
        })
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addFavourite()
                }
            });
          },
          addFavourite() {
              axios.post('/api/favourites/', { 
                    user_id: this.user_id,
                    product_id: this.product_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.showFavourite(this.user_id)
                  this.feedback = null
          },

            showFavourite(id) {     
                this.$store.dispatch('LOAD_FAVOURITESFORUSER', id)  
                alert('Вот все избранные товары пользователя ' + id); 
            },

          deleteFavourite(userid, productid) {
                axios.delete('/api/favourites/delfavourite/' + userid + '/' + productid)           
                    .then(function (response) {
                        alert(response.data.message);
                    })
                    .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                this.loadFavourites()
          }
      },
  }
</script>
