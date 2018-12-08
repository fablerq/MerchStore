<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vadmsidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">

<div>
<div>
    <vue-tabs>
    <v-tab title="Наименования товаров" >
      <crudproducts></crudproducts>
    </v-tab>

    <v-tab title="Конкретные товары">
       <crudproductsvariants></crudproductsvariants>
    </v-tab>

</vue-tabs>

</div>



</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vadmsidebar from './vadmsidebar.vue'
import crudproducts from './base/CrudProducts.vue'
import crudproductsvariants from './base/CrudProductsVariants.vue'
import {VueTabs, VTab} from 'vue-nav-tabs/dist/vue-tabs.js'

export default {
  name: 'vadmlist',
  components: {
      vadmsidebar,
      VueTabs,
      VTab,
      crudproducts,
      crudproductsvariants
  },
}

</script>

<style lang="scss" scoped>
    .good {
        margin-bottom: 3%;
    }

    .good-image-name {
        text-align: center;
    }

    .good-icon {
        width: 80%;
        margin-top: 10%;
    }

    .area {
        width: 100%;
        border: 1px solid #000;
        padding: 2%;
        text-align: center;
    }

    .mb {
       margin-bottom: 5%;
    }

    .btn {
            background: #000;
            border-radius: 3px;
            color: #fff;
            border: 1px solid #000;
            margin: 5% 0;
        }
</style>
