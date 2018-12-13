<template>
  <div class="catalog">
    <vsearch/>
    <div class="container">
      <div class="row">
        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 offset-10 offset-sm-10 offset-md-10 offset-lg-10 offset-xl-10">
          <select class="form-control filter" id="filter">
            <option>ИСиТ</option>
            <option>ИКСС</option>
            <option>РТС</option>
            <option>ГМ</option>
            <option>ИВО</option>
          </select>
        </div>
      </div>
      <div class="row">
        <vsidebar/>
        <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
          <div class="row goods-row justify-content-center">
            <div v-for="n in 10" :key="n" class="flypage col-8 col-sm-8 col-md-6 col-lg-4 col-xl-4">
                <vflypage class="item"/>
            </div>
          </div>
          <div class="paginationBlock">
              <v-pagination color="orange darken-1" v-model="page" :length="6"></v-pagination>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vsidebar from './vsidebar.vue'
import vsearch from './vsearch.vue'
import vflypage from '../architecture/vflypage.vue'
export default {
  name: 'vlisting',
  components: {vsidebar, vsearch, vflypage},
  data () {
      return {
        page: 1
      }
    }
}
</script>

<style lang="scss" scoped>
.catalog {
  width: 100%;
  .filter {
    margin-bottom: 9%;
  }
  .flypage{
    margin-bottom: 3%;
    .item {
     
    }
  }
  .paginationBlock {
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
}
</style>