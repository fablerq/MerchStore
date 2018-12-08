<template>
    <div>
        <vheader/>
        <vlkfavorites/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vlkfavorites from '../lk/vlkfavorites.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vlkfavorites,
    vfooter
  }
}
</script>
