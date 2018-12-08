<template>
    <div>
        <vheader/>
        <vadmbase/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vadmbase from '../admin/vadmbase.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vadmbase,
    vfooter
  }
}
</script>
