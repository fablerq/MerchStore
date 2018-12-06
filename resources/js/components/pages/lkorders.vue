<template>
    <div>
        <vheader/>
        <vlkorders/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vlkorders from '../lk/vlkorders.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vlkorders,
    vfooter
  }
}
</script>
