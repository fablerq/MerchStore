<template>
    <div>
        <vheader/>
        <vadmstats/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vadmstats from '../admin/vadmstats.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vadmstats,
    vfooter
  }
}
</script>
