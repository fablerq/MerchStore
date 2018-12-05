<template>
    <div>
        <vheader/>
        <vlkfavorites/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vlkfavorites from '../vlkfavorites.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vlkfavorites,
    vfooter
  }
}
</script>
