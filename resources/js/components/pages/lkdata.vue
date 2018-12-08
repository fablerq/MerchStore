<template>
    <div>
        <vheader/>
        <vlkdata/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vlkdata from '../lk/vlkdata.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vlkdata,
    vfooter
  }
}
</script>
