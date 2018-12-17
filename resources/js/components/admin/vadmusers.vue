<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vadmsidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">


    <vue-tabs>

    <v-tab title="Пользователи">
      <crudusers></crudusers>
    </v-tab>

    <v-tab title="Избранные товары пользователей">
      <crudfavourites></crudfavourites>
    </v-tab>

</vue-tabs>


        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vadmsidebar from './vadmsidebar.vue'

import crudusers from './base/CrudUsers.vue'
import crudfavourites from './base/CrudFavourites.vue'

import {VueTabs, VTab} from 'vue-nav-tabs/dist/vue-tabs.js'

export default {
  name: 'vadmusers',
  components: {
    vadmsidebar,
    VueTabs,
    VTab,

    crudusers,
    crudfavourites
 },
}
</script>

<style lang="scss" scoped>
    .change-btn {
        background: #000;
        border-radius: 15px;
        color: #fff;
        border: 1px solid #000;
        margin-left: -5px;
    }

    .active,
    .done {
        margin-bottom: 2% 0;
    }

    .order {
        margin: 2% 0;
    }
</style>
