<template>
  <div>
    <h1>photos</h1>
<br>
<h3>Добавить фотку</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="title" v-validate="{ required: true, min: 5 }" name="title" class="form-control" :class="{ 'is-invalid': submitted && errors.has('title') }" />
                <div v-if="submitted && errors.has('title')" class="invalid-feedback">{{ errors.first('title') }}</div>
            </div>
            <div class="form-group">
                <label for="photo_link">photo_link</label>
                <input type="text" v-model="photo_link" v-validate="{ required: true, min: 5 }" name="photo_link" class="form-control" :class="{ 'is-invalid': submitted && errors.has('photo_link') }" />
                <div v-if="submitted && errors.has('photo_link')" class="invalid-feedback">{{ errors.first('photo_link') }}</div>
            </div>
            <div class="form-group">
                <label for="product_id">product_id</label>
                <select class="form-control" v-model="product_id">
                    <option v-for="product in products" :value="product.id">{{ product.title }}</option>
                </select>
            </div>
            <div class="form-group">
                <button class="btn btn-info">Add Photo</button>
            </div>
        </form>
    </div>

<br>

<h3>Таблица юзеров</h3>

<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">title</th>
      <th scope="col">photo_link</th>
      <th scope="col">product_id</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="photo in photos">
      <th>{{ photo.id }}</th>
      <td>{{ photo.title }}</td>
      <td>{{ photo.photo_link }}</td>
      <td>{{ photo.product.title }}</td>
      <td><a href="#" @click="showPhoto(photo.id)">Show</a></td>
      <td><a href="#" @click="deletePhoto(photo.id)">Delete</a></td>
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
             photos: {},
             products: {},
             title: '',
             photo_link: '',
             product_id: '',
             feedback: '',
             submitted: false,
             form: new Form({
                title: '',
                photo_link: '',
                product_id: '',
          })
        }
      },
      created() {
          this.loadPhotos();
          this.loadProducts();
      },
      methods: {
           handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.addPhoto()
                }
            });
          },
          loadPhotos() {
            axios.get('api/photos')
                .then((response => this.photos = response.data));
          },
          loadProducts() {
            axios.get('api/products')
                .then((response => this.products = response.data));
          },
          addPhoto() {
              axios.post('api/photos', { 
                    title: this.title,
                    photo_link: this.photo_link,
                    product_id: this.product_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  this.loadPhotos()
                  this.feedback = null
          },
          showPhoto(id) {       
                axios.get('api/photos/' + id)
                      .then(response => {
                 alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.photos = this.photos.filter(photo => {
                    return photo.id == id;
                 });
                })
          },

          deletePhoto(id) {
                axios.delete('api/photos/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                this.loadPhotos()
          }
      },
  }
</script>