<template>
    <div>
        <vheader/>
        <vsearch/>
        <vproducts/>
        <vcharts/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vsearch from '../main/vsearch.vue'
import vproducts from '../main/vproducts.vue'
import vcharts from '../main/vcharts.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vproducts,
    vcharts,
    vfooter
  }
}
</script>
