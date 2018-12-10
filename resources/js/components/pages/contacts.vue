<template>
    <div>
        <vsearch/>
        <vcontacts/>
    </div>
</template>

<script>
import vsearch from '../main/vsearch.vue'
import vcontacts from '../main/vcontacts.vue'

export default {
  components: {
    vsearch,
    vcontacts
  }
}
</script>
