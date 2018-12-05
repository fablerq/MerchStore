<template>
  <div>
    <vheader/>
    <vsearch/>
    <vcontacts/>
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
import vadmorders from './vadmorders.vue'
import vlksidebar from './vlksidebar.vue'
import vlkorders from './vlkorders.vue'
import vlkfavorites from './vlkfavorites.vue'
import vlkdata from './vlkdata.vue'
import vregistration from './vregistration.vue'
import vsignin from './vsignin.vue'
import vcontacts from './vcontacts.vue'



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
    vadmlist,
    vadmorders,
    vlksidebar,
    vlkorders,
    vlkfavorites,
    vlkdata,
    vregistration,
    vsignin,
    vcontacts
	}
}
</script>