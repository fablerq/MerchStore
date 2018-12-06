<template>
    <div>
        <vheader/>
        <vsearch/>
        <vgood/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vsearch from '../main/vsearch.vue'
import vgood from '../main/vgood.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vgood,
    vfooter
  }
}
</script>
