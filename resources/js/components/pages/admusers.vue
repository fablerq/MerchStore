<template>
    <div>
        <vheader/>
        <vadmusers/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vadmusers from '../admin/vadmusers.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vadmusers,
    vfooter
  }
}
</script>