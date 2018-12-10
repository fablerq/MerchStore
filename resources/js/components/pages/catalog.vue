<template>
    <div>
        <vsearch/>
        <vlisting/>
    </div>
</template>

<script>
import vsearch from '../main/vsearch.vue'
import vlisting from '../main/vlisting.vue'

export default {
  components: {
    vsearch,
    vlisting
  }
}
</script>
