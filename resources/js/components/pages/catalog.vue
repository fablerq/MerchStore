<template>
    <div>
        <vheader/>
        <vsearch/>
        <vlisting/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vsearch from '../main/vsearch.vue'
import vlisting from '../main/vlisting.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vlisting,
    vfooter
  }
}
</script>
