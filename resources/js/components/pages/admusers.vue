<template>
    <div>
        <vheader/>
        <vadmusers/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vadmusers from '../vadmusers.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vadmusers,
    vfooter
  }
}
</script>