<template>
  <div>
<br>
    <div class="card-body">
        <form action="./api/faculties" method="POST" @submit="addFac()">
            <div class="form-group">
                <input type="text" name="name" v-model="name" placeholder="name" class="form-control">
            </div>
            <div class="form-group">
                <input type="text" name="color" v-model="color" placeholder="color" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Add Fac" class="btn btn-info">
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
             form: new Form({
                name : '',
                color : '',
          })
        }
      },
      methods: {
          addFac() {
              axios.post('api/faculties', { 
                  name: this.name, 
                  color: this.color,
                  });
          },
      },
  }
</script>
