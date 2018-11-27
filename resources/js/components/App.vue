<template>
  <div>
    <h1>The best store ever v2</h1>

    <p>
      <router-link :to="{ name: 'app' }">Home</router-link> |
      <router-link :to="{ name: 'users' }">ExampleCrudUsers</router-link>
      <router-link :to="{ name: 'products' }">ExampleCrudProducts</router-link>
      <router-link :to="{ name: 'orders' }">ExampleCrudOrders</router-link>
      <router-link :to="{ name: 'faculties' }">ExampleCrudFaculties</router-link>
    </p>
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
  export default {}
</script>
