<template>
  <div class="catalog">
  
        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 offset-9 offset-sm-9 offset-md-9 offset-lg-9 offset-xl-9">
          <select class="form-control filter" id="filter" @change="facultyonChanged()" v-model="activefaculty">
            <option disabled value="0">Выберите факультет</option>
            <option v-for="faculty in faculties" :value="faculty.id">{{faculty.title}}</option>           
          </select>

        </div>

        <div>
            <h2>Все товары</h2>
        </div>

        <div class="row goods-row justify-content-center">
            
          <div v-for="product in products" :key="product.id" class="flypage col-8 col-sm-8 col-md-6 col-lg-4 col-xl-4">
                <vflypage class="item" :product="product" :title="product.title" :price="product.price" :type_id="product.type_id" :product_id="product.id"/>
            </div>
        

        <div class="paginationBlock">
              <v-pagination color="orange darken-1" v-model="page" :length="Math.ceil(this.productsfilter/6)"></v-pagination>
        </div>
</div>
  </div>
</template>

<script>
//components
import vsidebar from './vsidebar.vue'
import vsearch from './vsearch.vue'
import vflypage from '../architecture/vflypage.vue'

//database
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'

export default {
  name: 'vlistingclear',
  components: {vsidebar, vsearch, vflypage},
  data () {
      return {
        page: 1,
        activefaculty: 0,
      }
  },

  mounted: function () { 
        let payload = {
          page: this.page,
          type: 0,
          activefaculty: this.activefaculty
        }
        let payload2 = {
          type: 0,
          activefaculty: this.activefaculty
        }
       this.$store.dispatch('LOAD_PRODUCTSCOUNT', payload2)
       this.$store.dispatch('LOAD_PAGINATEPRODUCTS', payload) 
    }, 

    computed: { 
        ...mapGetters({
        faculties: 'GET_FACULTIES',
        types: 'GET_TYPES',
        productsfilter: 'GET_PRODUCTSCOUNT2',
        products: 'GET_PAGINATEPRODUCTS'
        }),
    },

    watch: {
      page: function(nPage, oPage) {
        let payload = {
          page: nPage,
          type: 0,
          activefaculty: this.activefaculty
        }
        this.$store.dispatch('LOAD_PAGINATEPRODUCTS', payload) 
      },
    },
    
    methods: {
      // check() {
      //     axios.post('/api/getuser')
      //       .then(response=> {
      //           console.log(response.data)
      //       })
      //       .catch(error => {
      //         console.log(error.response)
      //       })
      // },
        facultyonChanged() {
            let payload = {
                page: 1,
                type: 0,
                activefaculty: this.activefaculty
              }
            let payload2 = {
              type: 0,
              activefaculty: this.activefaculty
            }
              this.$store.dispatch('LOAD_PRODUCTSCOUNT', payload2)
              this.$store.dispatch('LOAD_PAGINATEPRODUCTS', payload) 
          }
    }
}
</script>

<style lang="scss" scoped>
.catalog {
  width: 100%;
  .filter {
    margin-bottom: 9%;
  }
  .flypage{
    margin-bottom: 3%;
  }
  .paginationBlock {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .paginationBlock {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
}
</style>