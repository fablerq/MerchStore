<template>
  <div class="stats">
    <div class="container">
      <div class="row">
        <vadmsidebar/>
        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-9">
          <div class="row">
            <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-12"> 
                <h1>Статистика</h1>
            </div>
          </div>
          <div class="row space">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6"> 
                    <div class="stats-item">
                        <h4>Посещений: 1234</h4>
                        <img  class="graph" src="http://localhost/MerchStore/resources/imgs/graph.png" alt="">
                    </div> 
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6"> 
                    <div class="stats-item">
                        <h4>Уникальных посещений: 868</h4>
                        <img  class="graph" src="http://localhost/MerchStore/resources/imgs/graph.png" alt="">
                    </div> 
                </div>
          </div>
          <div class="row">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6"> 
                    <div class="stats-item">
                        <h4>Покупок: 23</h4>
                        <img  class="graph" src="http://localhost/MerchStore/resources/imgs/graph.png" alt="">
                    </div> 
                </div>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-6"> 
                    <div class="stats-item">
                        <h4>Новых пользователей: 23</h4>
                        <img  class="graph" src="http://localhost/MerchStore/resources/imgs/graph.png" alt="">
                    </div> 
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vadmsidebar from './vadmsidebar.vue'

export default {
  name: 'vadmstats',
  components: {vadmsidebar}
}

</script>

<style lang="scss" scoped>
    .graph {
        width: 100%;
    }
    
    .space {
        margin-bottom: 5%;
    }
</style>