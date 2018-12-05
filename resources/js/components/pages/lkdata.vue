<template>
    <div>
        <vheader/>
        <vlkdata/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vlkdata from '../vlkdata.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vlkdata,
    vfooter
  }
}
</script>
