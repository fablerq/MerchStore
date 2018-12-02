<template>
  <div>
    <vheader/>
    <vadmlist/>
    <div class="container">
      <router-view></router-view>
    </div>
  </div>
</template>

<script>
import vheader from './vheader.vue'
import vsearch from './vsearch.vue'
import vproducts from './vproducts.vue'
import vcharts from './vcharts.vue'
import vfooter from './vfooter.vue'
import vlisting from './vlisting.vue'
import vsidebar from './vsidebar.vue'
import vcard from './vcard.vue'
import vgood from './vgood.vue'
import vadmsidebar from './vadmsidebar.vue'
import vadmstats from './vadmstats.vue'
import vadmusers from './vadmusers.vue'
import vadmlist from './vadmlist.vue'

export default {
  components: {
    vheader,
    vsearch,
    vproducts,
    vcharts,
    vfooter,
    vlisting,
    vsidebar,
    vcard,
    vgood,
    vadmsidebar,
    vadmstats,
    vadmusers,
    vadmlist
	}
}
</script>