<template>
  <div>

    <div class="container">
      <router-view></router-view>
    </div>

  </div>
</template>

<script>
//Architecture
import vheader from './architecture/vheader.vue'
import vfooter from './architecture/vfooter.vue'

//Main
import vsidebar from './main/vsidebar.vue'
import vsearch from './main/vsearch.vue'
import vproducts from './main/vproducts.vue'
import vcharts from './main/vcharts.vue'
import vlisting from './main/vlisting.vue'
import vcard from './main/vcard.vue'
import vgood from './main/vgood.vue'
import vregistration from './main/vregistration.vue'
import vsignin from './main/vsignin.vue'
import vcontacts from './main/vcontacts.vue'

//Админка
import vadmsidebar from './admin/vadmsidebar.vue'
import vadmstats from './admin/vadmstats.vue'
import vadmusers from './admin/vadmusers.vue'
import vadmlist from './admin/vadmlist.vue'
import vadmorders from './admin/vadmorders.vue'
import vadmbase from './admin/vadmbase.vue'
import vadmfaq from './admin/vadmfaq.vue'

//Личный кабинет
import vlksidebar from './lk/vlksidebar.vue'
import vlkorders from './lk/vlkorders.vue'
import vlkfavorites from './lk/vlkfavorites.vue'
import vlkdata from './lk/vlkdata.vue'

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
    vadmbase,
    vadmfaq,
    vlksidebar,
    vlkorders,
    vlkfavorites,
    vlkdata,
    vregistration,
    vsignin,
    vcontacts,
	}
}
</script>

<style lang="scss" scoped>
    .container {
        border: 5px solid grey;
    }

</style>
