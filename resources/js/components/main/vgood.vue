<template>
    <div class="good">
        <vsearch/>
        <div class="container">
            
            <div class="row">
                <vsidebar/>
                <div class="col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7 col-xl-7">
                            <img class="good-img" src="../../../imgs/tee.png" alt="">
                                    <swiper :options="swiperOption">
                                        <swiper-slide><img src="../../../imgs/tee.png" alt=""></swiper-slide>
                                        <swiper-slide><img src="../../../imgs/tee.png" alt=""></swiper-slide>
                                        <swiper-slide><img src="../../../imgs/tee.png" alt=""></swiper-slide>
                                        <div class="swiper-button-prev" slot="button-prev"></div>
                                        <div class="swiper-button-next" slot="button-next"></div>
                                    </swiper>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 info-block">
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
                                <v-dialog v-model="dialog" width="1000">
                                        <v-btn slot="activator" block color="secondary" dark>
                                            Таблица размеров
                                        </v-btn>
                                        <v-card>
                                            <img class="sizes" src="../../../imgs/size-table.png" alt="">
                                        </v-card>
                                </v-dialog>
                                <v-btn color="orange lighten-2" block dark>Добавить в корзину</v-btn>
                                <v-btn class="fav" flat icon color="pink"><v-icon>favorite</v-icon> </v-btn>Добавить в избранное
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  disc">
                            <h2>Информация о товаре</h2>
                            <p>
                               • Состав: 20% пыли единорога  80% шерсти грифона<br>
                                • Принт выдерживает неограниченное количество стирок. <br>
                                • Производство футболки: 72 часа<br>
                                • Факультет: Без факультета<br>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 feedback">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <h2>Отзывы</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3">
                                    <v-form v-model="valid">
                                        <v-text-field
                                        v-model="name"
                                        :rules="nameRules"
                                        :counter="10"
                                        label="Name"
                                        required
                                        ></v-text-field>
                                        <v-text-field
                                        class="email"
                                        v-model="email"
                                        :rules="emailRules"
                                        label="E-mail"
                                        required
                                        ></v-text-field>
                                    </v-form>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-9 col-xl-9">
                                    <v-textarea
                                    name="input-7-1"
                                    value=""
                                    hint="Hint text"
                                    ></v-textarea>
                                </div>
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
import vsearch from './vsearch.vue'
import 'swiper/dist/css/swiper.css'
import { swiper, swiperSlide } from 'vue-awesome-swiper'
export default {
    name: 'vgood',
    components: {
    swiper,
    swiperSlide,
    vsidebar,
    vsearch
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
        },
        dialog: false,
        valid: false,
      name: '',
      nameRules: [
        v => !!v || 'Name is required',
        v => v.length <= 10 || 'Name must be less than 10 characters'
      ],
      email: '',
      emailRules: [
        v => !!v || 'E-mail is required',
        v => /.+@.+/.test(v) || 'E-mail must be valid'
      ]
      }
    }
  }
</script>

<style lang="scss" scoped>
    .disc {
        background: #e2e2e2;
        margin-top: 20px;
    }
    .good-img {
        margin-bottom: 5%;
    }
    img {
        width: 100%;
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
    .feedback {
        margin-top: 20px;
        .email {
            margin-top: 8px;
        }
    }
</style>