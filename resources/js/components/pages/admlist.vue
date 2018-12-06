<template>
    <div>
        <vheader/>
        <vadmlist/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vadmlist from '../admin/vadmlist.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vadmlist,
    vfooter
  }
}
</script>
