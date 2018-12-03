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


export default {
  components: {
		vheader
	}
}
</script>
