<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vadmsidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">

          <crudorders></crudorders>

        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vadmsidebar from './vadmsidebar.vue'

import crudorders from './base/CrudOrders.vue'

export default {
  name: 'vadmorders',
  components: {
    vadmsidebar,
    crudorders
    }
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