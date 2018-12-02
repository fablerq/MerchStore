<template>
    <div class="good">
        <div class="container">
            <div class="row">
                <vsidebar/>
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <div class="row">
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-7">
                            <img class="good-img" src="http://localhost/MerchStore/resources/imgs/tee.png" alt="">
                            <md-card>
                                <md-card-media>
                                    <swiper :options="swiperOption">
                                        <swiper-slide><img src="http://localhost/MerchStore/resources/imgs/tee.png" alt=""></swiper-slide>
                                        <swiper-slide><img src="http://localhost/MerchStore/resources/imgs/tee.png" alt=""></swiper-slide>
                                        <swiper-slide><img src="http://localhost/MerchStore/resources/imgs/tee.png" alt=""></swiper-slide>
                                        <div class="swiper-button-prev" slot="button-prev"></div>
                                        <div class="swiper-button-next" slot="button-next"></div>
                                    </swiper>
                                </md-card-media>
                            </md-card>
                        </div>
                        <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-5 info-block">
                            <span class="name">Футболка "Три скобочки"</span>
                            <p class="cost">800 руб.</p>
                            <div class="form-group">
                                <label for="color">Выберите цвет:</label>
                                <select class="form-control color" id="color">
                                    <option>оранжевый</option>
                                    <option>белый</option>
                                </select>
                                <label for="size">Выберите размер:</label>
                                <select class="form-control size" id="size">
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                </select>
                                <button type="button" class="btn btn-primary btn-lg btn-block add-to-card">Добавить в корзину</button>
                                <img src="http://localhost/MerchStore/resources/imgs/rating.png" alt="stars">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2>Информация о товаре</h2>
                            <p>
                                Состав: 20%пыли единорога 80%шерсти грифона. <br>
                                Принт выдерживает неограниченное количество стирок. <br>
                                <br>
                                Свободная и мягкая футболка “Три скобки” покажет всем что вы из )))
                            </p>
                            <img src="http://localhost/MerchStore/resources/imgs/size-table.png" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="comment rounded">
                                <img src="http://localhost/MerchStore/resources/imgs/avatar.png" alt="avatar" class="avatar">
                                <p>Ваащеееееееееее футболка зачеееееееееет аааооаоаоаооаоа jdsifjdiasf adsjfoipdsjaf i adsjfio asdjifj odsijf oidsj foijasp fidaojf </p>
                            </div>
                            <div class="comment rounded">
                                <img src="http://localhost/MerchStore/resources/imgs/avatar.png" alt="avatar" class="avatar">
                                <p>Ваащеееееееееее футболка зачеееееееееет аааооаоаоаооаоа jdsifjdiasf adsjfoipdsjaf i adsjfio asdjifj odsijf oidsj foijasp fidaojf </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import vsidebar from './vsidebar.vue'

import 'swiper/dist/css/swiper.css'
import { swiper, swiperSlide } from 'vue-awesome-swiper'

export default {
    name: 'vgood',
    components: {
    swiper,
    swiperSlide,
    vsidebar
   },

    data() {
      return {
        swiperOption: {
          slidesPerView: 3,
          spaceBetween: 5,
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
    .good-img {
        width: 100%;
        margin-bottom: 5%;
    }

    .swiper-slide img {
        width: 100%;
    }

    .swiper-button-prev {
        background-size: contain;
        outline: none;
        background-image: url(http://localhost/MerchStore/resources/imgs/left.png);
    }
    .swiper-button-next {
        background-size: contain;
        outline: none;
        background-image: url(http://localhost/MerchStore/resources/imgs/right.png);
    }

    .info-block{
        text-align: center;

        .name {
            font-size: 24px;
        }

        .cost {
            font-size: 32px;
        }

        .add-to-card {
            background: #FDB777;
            border-radius: 15px;
            color: #fff;
            border: 1px solid #FDB777;
            margin: 5% 0;
        }
    }

    .comment {
        background: #000;
        margin: 5% 0;
        display: flex;
        align-items: center;
        padding: 1%;

        .avatar {
            width: 10%;
            margin-right: 2%;
        }

        p {
            color: #fff;
            font-size: 16px;
        }
    }
</style>