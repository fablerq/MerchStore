<template>
    <div class="good">
        <vsearch/>
        <div class="container">
            <div class="row">
                <vsidebar/>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <router-view ></router-view>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//components
import vsidebar from './vsidebar.vue'
import vsearch from './vsearch.vue'
import vgood from './vgood.vue'
import vlisting from './vlisting.vue'
import vlistingclear from './vlistingclear.vue'

export default {
    name: 'vproductlayout',
    components: {
        vsidebar,
        vsearch,
        vgood,
        vlisting,
        vlistingclear
    },
}
</script>

<style lang="scss" scoped>
    
</style>