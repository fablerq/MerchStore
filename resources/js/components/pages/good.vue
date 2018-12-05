<template>
    <div>
        <vheader/>
        <vsearch/>
        <vgood/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vsearch from '../vsearch.vue'
import vgood from '../vgood.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vgood,
    vfooter
  }
}
</script>
