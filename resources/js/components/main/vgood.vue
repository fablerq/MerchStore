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
                            <div class="name">
                                "{{product_title}}""
                                <v-chip class="type" outline color="orange lighten-2" small disabled>{{product_type}}</v-chip>
                            </div>
                            
                            <p class="cost">{{product_price}}р</p>
                            <div>ID товара: {{ $route.params.id }}</div>

                            <div class="form-group">
                                <label for="color">Выберите цвет:</label>
                                <div class="custom-radios">
                                    <div>
                                        <input type="radio" id="color-1" name="color" value="color-1" checked>
                                        <label for="color-1">
                                        <span>
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                                        </span>
                                        </label>
                                    </div>
                                    
                                    <div>
                                        <input type="radio" id="color-2" name="color" value="color-2">
                                        <label for="color-2">
                                        <span>
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                                        </span>
                                        </label>
                                    </div>
                                    
                                    <div>
                                        <input type="radio" id="color-3" name="color" value="color-3">
                                        <label for="color-3">
                                        <span>
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                                        </span>
                                        </label>
                                    </div>

                                    <div>
                                        <input type="radio" id="color-4" name="color" value="color-4">
                                        <label for="color-4">
                                        <span>
                                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg" alt="Checked Icon" />
                                        </span>
                                        </label>
                                    </div>
                                    </div>
                                <select class="form-control color" id="color">
                                    <option v-for="color in colors" :key="color.id">{{color.title}}</option>
                                </select>
                                <label for="size">Выберите размер:</label>
                                <select class="form-control size" id="size">
                                    <option v-for="size in sizes" :key="size.id">{{size.title}}</option>
                                </select>
                                <v-dialog v-model="dialog" width="1000">
                                        <v-btn slot="activator" block color="secondary" dark>
                                            Таблица размеров
                                        </v-btn>
                                        <v-card>
                                            <img class="sizes" src="../../../imgs/size-table.png" alt="">
                                        </v-card>
                                </v-dialog>
                                <v-btn  v-on:click="adds.push(product)" color="orange lighten-2" block dark>Добавить в корзину</v-btn>
                                <v-btn class="fav" flat icon color="pink"><v-icon>favorite</v-icon> </v-btn>Добавить в избранное
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  discription">
                            <h2>Информация о товаре</h2>
                            <p>{{product_description}}</p>
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

                            <div class="row justify-content-center">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                        <v-btn block small color="orange lighten-2" dark>Отправить</v-btn>
                                    </div>
                                </div> 
                            </div>

                            <div class="row comment" v-for="comment in comments" :key="comment.id">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">
                                    <div class="userInfo">
                                        <img src="../../../imgs/user-icon.png" alt="user-icon">
                                        <div class="userName">{{comment.user_id}}</div>
                                        <div class="date">{{comment.created_at}}</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-10">
                                    <p class="commentBody">{{comment.body}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
//components
import vsidebar from './vsidebar.vue'
import vsearch from './vsearch.vue'
import 'swiper/dist/css/swiper.css'
import { swiper, swiperSlide } from 'vue-awesome-swiper'

//database
import axios from 'axios'
import { mapActions, mapGetters } from 'vuex'

export default {
    name: 'vgood',
    components: {swiper, swiperSlide, vsidebar, vsearch},

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
        product: [],
        product_title: '',
        product_description: '',
        product_price: '',
        product_faculty_id: '',
        product_type: '',
      }
    },

    mounted: function () { 
        this.$store.dispatch('LOAD_PRODUCTS')
        this.$store.dispatch('LOAD_COLORS') 
        this.$store.dispatch('LOAD_SIZES') 
        this.$store.dispatch('LOAD_COMMENTS') 
        this.$store.dispatch('LOAD_FACULTIES') 
        this.$store.dispatch('LOAD_TYPES')

        axios.get(`/api/products/${this.$route.params.id}`)
        .then( res => {
          this.product = res.data[0];
          this.product_title = res.data[0].title;
          this.product_description = res.data[0].description;
          this.product_price = res.data[0].price;
          this.product_faculty_id = res.data[0].faculty_id;
          this.product_type = res.data[0].type.title;
        })
    }, 

    computed: { 
        ...mapGetters({ 
        products: 'GET_PRODUCTS',
        colors: 'GET_COLORS',
        sizes: 'GET_SIZES',
        comments: 'GET_COMMENTS',
        faculties: 'GET_FACULTIES',
        types: 'GET_TYPES',
        adds: 'GET_ADDS',
        }) 
    },
  }
</script>

<style lang="scss" scoped>
    .discription {
        background: #e2e2e2;
        margin: 20px 15px 0;
        padding: 10px;
        border-left: 5px solid #212121;
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
            vertical-align: baseline;

            .type {
                font-size: 10px;
            }
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

    .comment {
        margin-top: 20px;
        padding-bottom: 15px;
        border-bottom: 1px solid #e2e2e2;

        .userInfo {
            display: flex;
            align-items: center;
            flex-direction: column;
            border-right: 1px solid #e2e2e2;
            

            img {
                width: 50%;
            }

            .userName {
                font-weight: bold;
                font-size: 18px;
            }
        }
    }

$color-1: #FFB300;
$color-2: #FB8C00;
$color-3: #EF6C00;
$color-4: #E65100;

.custom-radios {
  
  div {
    display: inline-block;
  }

  input[type="radio"] {
    display: none;

    + label {
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 14px;

      span {
        display: inline-block;
        width: 30px;
        height: 30px;
   
        vertical-align: middle;
        cursor: pointer;
        border-radius: 50%;
        border: 2px solid #FFFFFF;
        box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
        background-repeat: no-repeat;
        background-position: center;
        text-align: center;
        line-height: 44px;
    
        img {
          margin-bottom: 60%;
          width: 50%;
          opacity: 0;
          transition: all .3s ease;
        }
      }
    }

    &#color-1 + label span {
      background-color: $color-1;
    }

    &#color-2 + label span {
      background-color: $color-2;
    }

    &#color-3 + label span {
      background-color: $color-3;
    }

    &#color-4 + label span {
      background-color: $color-4;
    }

    &:checked + label span img {
      opacity: 1;
    }
  }
}
</style>