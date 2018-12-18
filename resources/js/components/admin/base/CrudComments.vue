<template>
  <div>
<h3>Добавить комент (отзыв)</h3>
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
                    <option v-for="user in users" :value="user.id">{{ user.email }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="text" v-model="body" v-validate="{ required: true, max: 3000, min: 20 }" name="body" class="form-control" :class="{ 'is-invalid': submitted && errors.has('body') }" />
                <div v-if="submitted && errors.has('body')" class="invalid-feedback">{{ errors.first('body') }}</div>
            </div>
            <div class="form-group">
                <label for="product_id">product_id</label>
                <select class="form-control" v-model="product_id">
                    <option v-for="product in products" :value="product.id">{{ product.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Comment</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица комментариев</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">user_id</th>
      <th scope="col">body</th>
      <th scope="col">product_id</th>
      <!-- <th scope="col">show</th> -->
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="comment in comments">
      <th>{{ comment.id }}</th>
      <td>{{ comment.user.email }}</td>
      <td>{{ comment.body }}</td>
      <td>{{ comment.product.title }}</td>
      <!-- <td><a href="#" @click="showComment(comment.id)">Show</a></td> -->
      <td><a href="#" @click="deleteComment(comment.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'

  export default {
      name: 'crudcomments',
      data() {
          return {
             user_id: '',
             body: '',
             product_id: '',
             feedback: '',
             submitted: false,
        }
      },
      mounted: function () {
        this.$store.dispatch('LOAD_COMMENTS')
        this.$store.dispatch('LOAD_PRODUCTS')
        this.$store.dispatch('LOAD_USERS')
      },
      computed: {
          ...mapGetters({
          comments: 'GET_COMMENTS',
          products: 'GET_PRODUCTS',
          users: 'GET_USERS',
        })
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addComment()
                }
            });
          },
          addComment() {
              axios.post('/api/comments', { 
                    user_id: this.user_id,
                    body: this.body,
                    product_id: this.product_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  //this.loadComments()
                  this.feedback = null
                  this.$store.dispatch('LOAD_COMMENTS')
          },
        //   showComment(id) {       
        //         axios.get('/api/comments/' + id)
        //               .then(response => {
        //          alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
        //          this.comments = this.comments.filter(comment => {
        //             return comment.id == id;
        //          });
        //         })
        //   },

          deleteComment(id) {
                axios.delete('/api/comments/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.$store.dispatch('LOAD_COMMENTS')
          }
      },
  }
</script>
