<template>
  <div class="catalog">
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
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
          <div class="row goods-row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
          </div>
          <div class="row  goods-row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
          </div>
          <div class="row  goods-row">
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4"><router-link class="menu-link" :to="{ name: 'good' }"><img src="../../../imgs/good.png" alt=""></router-link></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vsidebar from './vsidebar.vue'

export default {
  name: 'vlisting',
  components: {vsidebar}
}

</script>

<style lang="scss" scoped>
.catalog {
  width: 100%;

  .filter {
    margin-bottom: 9%;
  }

  .goods-row{
    margin-bottom: 3%;
  }

  img {
    width: 100%;
  }
}
</style>