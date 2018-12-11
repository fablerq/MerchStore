<template>
    <div>
        <vheader/>
        <vadmfaq/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vadmfaq from '../admin/vadmfaq.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vadmfaq,
    vfooter
  }
}
</script>
