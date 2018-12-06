<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vadmsidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">

<div>

    
    <vue-tabs>

    <v-tab title="Комментарии">
      <crudcomments></crudcomments>
    </v-tab>

    <v-tab title="Факультеты">
      <crudfaculties></crudfaculties>
    </v-tab>

    <v-tab title="Методы оплаты">
      <crudpaymentmethods></crudpaymentmethods>
    </v-tab>

    <v-tab title="Фотографии">
      <crudphotos></crudphotos>
    </v-tab>

    <v-tab title="Роли пользователей">
      <crudroles></crudroles>
    </v-tab>

    <v-tab title="Размеры">
      <crudsizes></crudsizes>
    </v-tab>

    <v-tab title="Статусы заказа">
      <crudstatuses></crudstatuses>
    </v-tab>

    <v-tab title="Типы товаров">
      <crudtypes></crudtypes>
    </v-tab>

</vue-tabs>





</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vadmsidebar from './vadmsidebar.vue'

import crudcomments from './base/CrudComments.vue'
import crudfaculties from './base/CrudFaculties.vue'
import crudpaymentmethods from './base/CrudPaymentMethods.vue'
import crudphotos from './base/CrudPhotos.vue'
import crudroles from './base/CrudRoles.vue'
import crudsizes from './base/CrudSizes.vue'
import crudstatuses from './base/CrudStatuses.vue'
import crudtypes from './base/CrudTypes.vue'

import {VueTabs, VTab} from 'vue-nav-tabs/dist/vue-tabs.js'

export default {
  name: 'vadmbase',
  components: {
      vadmsidebar,
      VueTabs,
      VTab,

      crudcomments,
      crudfaculties,
      crudpaymentmethods,
      crudphotos,
      crudroles,
      crudsizes,
      crudstatuses,
      crudtypes
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