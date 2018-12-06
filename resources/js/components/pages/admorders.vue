<template>
    <div>
        <vheader/>
        <vadmorders/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vadmorders from '../admin/vadmorders.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vadmorders,
    vfooter
  }
}
</script>
