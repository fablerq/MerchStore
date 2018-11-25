<template>
  <div>
    <h1>The best store ever</h1>

    <p>
      <router-link :to="{ name: 'app' }">Home</router-link> |
      <router-link :to="{ name: 'users' }">ExampleCrudUsers</router-link>
      <router-link :to="{ name: 'products' }">ExampleCrudProducts</router-link>
      <router-link :to="{ name: 'orders' }">ExampleCrudOrders</router-link>
    </p>

    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
  export default {}
</script>