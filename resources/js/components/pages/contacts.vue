<template>
    <div>
        <vheader/>
        <vsearch/>
        <vcontacts/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vsearch from '../vsearch.vue'
import vcontacts from '../vcontacts.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vcontacts,
    vfooter
  }
}
</script>
