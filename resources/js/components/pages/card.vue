<template>
    <div>
        <vheader/>
        <vcard/>
        <vfooter/>
    </div>
</template>

<script>
import vheader from '../vheader.vue'
import vcard from '../vcard.vue'
import vfooter from '../vfooter.vue'

export default {
  components: {
    vheader,
    vcard,
    vfooter
  }
}
</script>
