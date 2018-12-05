<template>
  <div>

    <h1>The best store ever. Changed</h1>
    <vheader/>
    


    <p>
      <!-- поменять на home page
        <router-link :to="{ name: '' }">Home</router-link> | -->
      <router-link :to="{ name: 'users' }">ExampleCrudUsers</router-link> |
      <router-link :to="{ name: 'products' }">ExampleCrudProducts</router-link> |
      <router-link :to="{ name: 'orders' }">ExampleCrudOrders</router-link> |
      <router-link :to="{ name: 'faculties' }">ExampleCrudFaculties</router-link> |
      <router-link :to="{ name: 'statuses' }">ExampleCrudStatuses</router-link> |
      <router-link :to="{ name: 'roles' }">ExampleCrudRoles</router-link> |
      <router-link :to="{ name: 'paymentmethods' }">ExampleCrudPaymentMethods</router-link> |
      <router-link :to="{ name: 'types' }">ExampleCrudTypes</router-link> |
      <router-link :to="{ name: 'sizes' }">ExampleCrudSizes</router-link> |
      <router-link :to="{ name: 'photos' }">ExampleCrudPhotos</router-link> |
      <router-link :to="{ name: 'comments' }">ExampleCrudComments</router-link> |
      <router-link :to="{ name: 'productsvariants' }">ExampleCrudProductsVariants</router-link> |
    </p>
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import vheader from './vheader.vue'
import vsearch from './vsearch.vue'
import vproducts from './vproducts.vue'
import vcharts from './vcharts.vue'
import vfooter from './vfooter.vue'
import vlisting from './vlisting.vue'
import vsidebar from './vsidebar.vue'
import vcard from './vcard.vue'
import vgood from './vgood.vue'
import vadmsidebar from './vadmsidebar.vue'
import vadmstats from './vadmstats.vue'
import vadmusers from './vadmusers.vue'
import vadmlist from './vadmlist.vue'
import vadmorders from './vadmorders.vue'
import vlksidebar from './vlksidebar.vue'
import vlkorders from './vlkorders.vue'
import vlkfavorites from './vlkfavorites.vue'
import vlkdata from './vlkdata.vue'
import vregistration from './vregistration.vue'
import vsignin from './vsignin.vue'
import vcontacts from './vcontacts.vue'



export default {
  components: {
    vheader,
    vsearch,
    vproducts,
    vcharts,
    vfooter,
    vlisting,
    vsidebar,
    vcard,
    vgood,
    vadmsidebar,
    vadmstats,
    vadmusers,
    vadmlist,
    vadmorders,
    vlksidebar,
    vlkorders,
    vlkfavorites,
    vlkdata,
    vregistration,
    vsignin,
    vcontacts
	}
}
</script>