<template>
  <div>
    <vheader/>
    <vsearch/>
    <vproducts/>
    <vcharts/>
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

export default {
  components: {
    vheader,
    vsearch,
    vproducts,
    vcharts
	}
}
</script>