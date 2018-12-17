<template>
 
      <v-card class="flypage">
          <router-link class="menu-link" :price="price" :to="{ path: 'catalog/good/' + product_id}">
        <v-img
            class="item-img"
          :src="require('../../../imgs/flypage.png')"
          aspect-ratio="2.75"
          height="150px"
        ></v-img>
          </router-link>
        <v-card-title primary-title>
          <div class="discription">
            <h5 class=" mb-0">{{title}}<v-chip v-for="type in types" :key="type.id" v-if="type_id === type.id" class="type" outline color="orange lighten-2" small disabled>{{type.title}}</v-chip></h5>
          </div>
        </v-card-title>

        <v-card-actions class="item-navbar">
          <h1>{{price}}р</h1>
          <v-btn class="fav" flat icon color="pink">
            <v-icon>favorite</v-icon>
            
          </v-btn>
          <v-btn class="add"  v-on:click="adds.push(product)" outline fab color="orange">
      <font-awesome-icon class="cart" :icon="['fas', 'cart-plus']" size="lg"/>
    </v-btn>
        </v-card-actions>
      </v-card>
   
</template>

<script>
//database
import axios from 'axios'
import { mapActions, mapGetters, mapMutations } from 'vuex'

export default {
  name: 'vflypage',
  props: ['title', 'price', 'type_id', 'product_id', 'product'],

  mounted: function () { 
        this.$store.dispatch('LOAD_TYPES') 
      
    }, 

    computed: { 
        ...mapGetters({ 
        types: 'GET_TYPES',
        adds: 'GET_ADDS'
        }),
        /*GetTypeById: function () {
          for (let type in this.types) {
            console.log(this.type)
            if (this.type_id === this.type.id)
            return this.type.title;
          }
       }*/
    },
    methods: {
      ...mapMutations([
        'SET_ADDS'
    ]),
  }
}

</script>

<style lang="scss" scoped>
.flypage {
  width: 270px;

  .discription {
    width: 100%;
    height: 30px;
    word-wrap: break-word; 
  }
  

  .type {
    font-size: 10px;
  }
}
.item-navbar{
    margin: 0 10px;
    .item-img {
        width: 100%;
    }
    .fav{
        margin-left: 20%;
        outline: none;
    }
    .add{
        margin-left: 5px;
        outline: none;
    }
}
</style>