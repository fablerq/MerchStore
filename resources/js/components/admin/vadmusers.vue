

<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vadmsidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">


          <crudusers v-if="this.users" :users="users" @users="loadUsers" @roles="loadRoles"></crudusers>




        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vadmsidebar from './vadmsidebar.vue'

import crudusers from './base/CrudUsers.vue'

export default {
  name: 'vadmusers',
  components: {
    vadmsidebar,
    crudusers
 },
 data() {
    return {
        users: {},
        roles: {},
    }
 },
 methods: {
    loadUsers(kek) {
         this.users = kek
         console.log(this.users)
    },
    loadRoles(kek) {
         this.roles = kek
         console.log(this.roles)
    }
 },
 mounted() {
   console.log('few')
   console.log(this.users)
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
