<template>
    <div>
        <vheader/>
        <vadmlist/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vadmlist from '../vadmlist.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vadmlist,
    vfooter
  }
}
</script>
