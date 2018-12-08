<template>
    <div>
        <vheader/>
        <vsearch/>
        <vcontacts/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vsearch from '../main/vsearch.vue'
import vcontacts from '../main/vcontacts.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vsearch,
    vcontacts,
    vfooter
  }
}
</script>
