<template>
    <div>
        <vheader/>
        <vsearch/>
        <vproducts/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vsearch from '../vsearch.vue'
import vproducts from '../vproducts.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vproducts,
    vfooter
  }
}
</script>
