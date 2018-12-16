<template>
  <div>
<h3>Добавить фотку</h3>
    <div class="card-body">

        <div class="alert alert-danger" v-if="feedback">
            <ul>
                <li v-for="error in feedback">{{ error[0] }}</li>
            </ul>
        </div>

        <form @submit.prevent="handleSubmit" enctype='multipart/form-data'>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" v-model="title" v-validate="{ required: true, min: 5 }" name="title" class="form-control" :class="{ 'is-invalid': submitted && errors.has('title') }" />
                <div v-if="submitted && errors.has('title')" class="invalid-feedback">{{ errors.first('title') }}</div>
            </div>
            <div class="form-group">
                <label for="image">image</label>
                <input type="file" name="image" class="form-control" @change="imageChanged" v-validate.reject="{ required: true, image: true, size:4048 }" :class="{ 'is-invalid': submitted && errors.has('image') }"/>
                <div v-if="submitted && errors.has('image')" class="invalid-feedback">{{ errors.first('image') }}</div>
            </div>
            <div class="form-group">
                <label for="product_id">product_id</label>
                <select class="form-control" v-model="product_id">
                    <option v-for="product in products" :value="product.id">{{ product.title }}</option>
                </select>
            </div>
            <div class="col-md-3" >
                 <label>Фотография</label>
                 <img v-if="image" :src="image" class="img-responsive" height="70" width="90">
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
      <th scope="col">image</th>
      <th scope="col">product_id</th>
      <th scope="col">show</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="photo in photos">
      <th>{{ photo.id }}</th>
      <td>{{ photo.title }}</td>
      <td><img :src="'../images/upload/' + photo.image" alt="Girl in a jacket"> </td>
      <td>{{ photo.product.title }}</td>
      <td><a href="#" @click="showPhoto(photo.id)">Show</a></td>
      <td><a href="#" @click="deletePhoto(photo.id)">Delete</a></td>
    </tr>
  </tbody>
</table>

  </div>
</template>

<script>
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'

  export default {
      name: 'crudphotos',
      data() {
          return {
             title: '',
             image: '',
             product_id: '',
             feedback: '',
             submitted: false,
        }
      },
      mounted: function () {
        this.$store.dispatch('LOAD_PRODUCTS')
        this.$store.dispatch('LOAD_PHOTOS')
      },
      computed: {
          ...mapGetters({
          photos: 'GET_PHOTOS',
          products: 'GET_PRODUCTS',
        })
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
          addPhoto() {
              axios.post('/api/photos', { 
                    title: this.title,
                    image: this.image,
                    product_id: this.product_id,
                  })                    
                  .then(function (response) {
                        alert(response.data.message)
                  })
                  .catch(error => {
                      this.feedback = error.response.data.errors;
                  });
                  //this.loadPhotos()
                  this.feedback = null
          },
          showPhoto(id) {       
                axios.get('/api/photos/' + id)
                      .then(response => {
                 alert('Вот твоя строчка номер ' + id + ' (я пришел с клиента) (Влад, исправь меня, я не так передаю данные)'); 
                 this.photos = this.photos.filter(photo => {
                    return photo.id == id;
                 });
                })
          },

          deletePhoto(id) {
                axios.delete('/api/photos/' + id)
                    .then(function (response) {
                        alert(response.data.message);
                    });
                //this.loadPhotos()
          },
         imageChanged(e) {
            var fileReader = new FileReader()
            fileReader.readAsDataURL(e.target.files[0])
            fileReader.onload = (e) => {
                this.image = e.target.result
            }
          }
      },
  }
</script>