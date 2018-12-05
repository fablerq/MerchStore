<template>
    <div>
        <vheader/>
        <vlkorders/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vlkorders from '../vlkorders.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vlkorders,
    vfooter
  }
}
</script>
