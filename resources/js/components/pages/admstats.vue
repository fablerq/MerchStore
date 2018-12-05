<template>
    <div>
        <vheader/>
        <vadmstats/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vadmstats from '../vadmstats.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vadmstats,
    vfooter
  }
}
</script>
