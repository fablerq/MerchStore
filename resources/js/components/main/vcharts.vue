<template>
    <div class="top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h1>Лучшие товары</h1>
                        <!-- swiper -->
                        <swiper :options="swiperOption" class="swiper-box">
                            <swiper-slide v-for="product in products" :key="product.id">
                                <vflypage class="item" :product="product" :title="product.title" :price="product.price" :type="product.type.title" :product_id="product.id"/>
                            </swiper-slide>
                            <div class="swiper-button-prev" slot="button-prev"></div>
                            <div class="swiper-button-next" slot="button-next"></div>
                        </swiper>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//swiper
import 'swiper/dist/css/swiper.css'
import { swiper, swiperSlide } from 'vue-awesome-swiper'

//components
import vflypage from '../architecture/vflypage.vue'

//database
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'

 export default {
    name: 'vcharts',
    components: {swiper, swiperSlide, vflypage},
    data() {
      return {
        swiperOption: {
          slidesPerView: 4,
          slidesPerGroup: 4,
          loop: true,
          autoHeight: true,
          loopFillGroupWithBlank: true,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          },
            // Responsive breakpoints
            breakpoints: {
                // when window width is <= 320px
                768: {
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 0
                },
                // when window width is <= 640px
                996: {
                slidesPerView: 2,
                slidesPerGroup: 2,
                spaceBetween: 0
                },
                1200: {
                slidesPerView: 3,
                slidesPerGroup: 3,
                spaceBetween: 30
                }
            }
        }
      }
    },
    mounted: function () { 
        this.$store.dispatch('LOAD_PRODUCTS') 
    }, 

    computed: { 
        ...mapGetters({
        products: 'GET_PRODUCTS'
        }) 
    },
  }
</script>

<style lang="scss" scoped>
.top {
    margin: 15px 0;
    width: 100%;
    h1 {
        margin-bottom: 25px;
    }
    .item{
        margin-left: 5px;
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

    @media (max-width: 768px) {
        .item{
            margin-left: 10%;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .item{
            margin-left: 10px;
        }   
        .swiper-button-next,
        .swiper-button-prev{
            display: none;
        }
    }
    @media (min-width: 992px) and (max-width: 1199.98px) {
        .item{
            margin-left: 10px;
        }   
    }
    
}

.swiper-box {
    width: 100%;
    height: 85%;
    margin: 0 auto;
  }
  .swiper-item {
    height: 100%;
    text-align: center;
    font-size: 18px ;
    background: #fff;
  }
</style>