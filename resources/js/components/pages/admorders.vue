<template>
    <div>
        <vheader/>
        <vadmorders/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vadmorders from '../vadmorders.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vadmorders,
    vfooter
  }
}
</script>
