<template>
    <div class="row goods-row justify-content-center">
        <div v-for="product in products" i = page :key="product" class="flypage col-8 col-sm-8 col-md-6 col-lg-4 col-xl-4">
            <vflypage class="item" :product="product" :title="product.title" :price="product.price" :type="product.type" :product_id="product.id"/>
        </div>
    </div>
</template>

<script>
//database
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'

export default {
    name: 'pagination',
    props: page,
     data () {
      return {
        products: [],
      }
    },
    mounted: function () { 
        axios.get('/api/paginateproducts/' + this.page)
        .then( res => {
          this.products = res.data;
          console.log(res.data)
          console.log(this.products[1].title)
        })

        
    }, 

    
    
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
}
</style>

