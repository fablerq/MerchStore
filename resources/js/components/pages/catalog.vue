<template>
    <div>
        <vheader/>
        <vsearch/>
        <vlisting/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vsearch from '../vsearch.vue'
import vlisting from '../vlisting.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vlisting,
    vfooter
  }
}
</script>
