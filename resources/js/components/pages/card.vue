<template>
    <div>
        <vheader/>
        <vcard/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../architecture/vheader.vue'
import vcard from '../main/vcard.vue'
import vfooter from '../architecture/vfooter.vue'

export default {
  components: {
    vheader,
    vcard,
    vfooter
  }
}
</script>
