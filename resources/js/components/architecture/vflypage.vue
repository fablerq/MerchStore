<template>
  <v-layout>
    <v-flex xs12 sm6 offset-sm3>
      <v-card>
          <router-link class="menu-link" :to="{ name: 'good' }">
        <v-img
            class="item-img"
          :src="require('../../../imgs/flypage.png')"
          aspect-ratio="2.75"
          height="150px"
        ></v-img>
          </router-link>
        <v-card-title primary-title>
          <div>
            <h5 class=" mb-0">Футболка “Три скобки”</h5>
          </div>
        </v-card-title>

        <v-card-actions class="item-navbar">
          <h1>800р</h1>
          <v-btn class="fav" flat fab icon color="pink">
            <v-icon>favorite</v-icon>
            
          </v-btn>
          <v-btn class="add" outline fab color="orange">
      <font-awesome-icon class="cart" :icon="['fas', 'cart-plus']" size="lg"/>
    </v-btn>
        </v-card-actions>
      </v-card>
    </v-flex>
  </v-layout>
</template>

<script>
export default {
  name: 'vflypage'
}
</script>

<style lang="scss" scoped>
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
        margin-left: -1%;
        outline: none;
    }
}
</style>