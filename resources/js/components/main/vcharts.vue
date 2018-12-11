<template>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1>Лучшие товары</h1>
                        <!-- swiper -->
                        <swiper :options="swiperOption">
                            <swiper-slide v-for="n in 10" :key="n"><vflypage class="item"/></swiper-slide>
                            <div class="swiper-button-prev" slot="button-prev"></div>
                            <div class="swiper-button-next" slot="button-next"></div>
                        </swiper>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import 'swiper/dist/css/swiper.css'

import { swiper, swiperSlide } from 'vue-awesome-swiper'
import vflypage from '../architecture/vflypage.vue'

 export default {
    name: 'vcharts',
    components: {swiper, swiperSlide, vflypage},
    data() {
      return {
        swiperOption: {
          slidesPerView: 3,
          slidesPerGroup: 3,
          loop: true,
          autoHeight: true,
          loopFillGroupWithBlank: true,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          }
        }
      }
    }
  }
</script>

<style lang="scss" scoped>
.top {
    margin: 15px 0;
    width: 100%;

    h1 {
        margin-bottom: 15px;
    }

    .item{
        width: 530px;
        margin-left: -80px;
    }

    .swiper-button-prev {
        background-size: contain;
        outline: none;
        background-image: url(../../../imgs/left.png);
    }
    .swiper-button-next {
        background-size: contain;
        outline: none;
        background-image: url(../../../imgs/right.png);
    }

    @media (max-width: 992px) {
        .swiper-button-next,
        .swiper-button-prev{
            display: none;
        }
    }
}
</style>