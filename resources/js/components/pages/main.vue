<template>
    <div>
        <vheader/>
        <vsearch/>
        <vproducts/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vsearch from '../main/vsearch.vue'
import vproducts from '../main/vproducts.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vproducts,
    vfooter
  }
}
</script>
