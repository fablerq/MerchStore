<template>
    <div>
        <vsearch/>
        <vproducts/>
        <vcharts/>
    </div>
</template>

<script>
import vsearch from '../main/vsearch.vue'
import vproducts from '../main/vproducts.vue'
import vcharts from '../main/vcharts.vue'

export default {
  components: {
    vsearch,
    vproducts,
    vcharts
  }
}
</script>
