<template>
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-9 col-lg-10 col-xl-10">
                    <div class="row card-menu">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <h2>Моя корзина</h2>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 offset-md-3 offset-lg-6 offset-xl-6">
                            <v-btn  v-on:click="removeAll" color="orange lighten-2" block dark large>Купить</v-btn>
                        </div>
                    </div>
                    <div class="row">
                        <!--<p>
                            <i>Ваша корзина пуста!</i>
                            <router-link to="/">Продолжить покупки</router-link>
                        </p>-->
                        <div v-for="add in adds" :key="add.id" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-4">
                            <v-card class="flypage">
                                <router-link class="menu-link" :price="price" :to="{ path: 'catalog/good/' + add.id}">
                                    <v-img class="item-img" :src="require('../../../imgs/flypage.png')" aspect-ratio="2.75" height="150px"></v-img>   
                                </router-link>
                                <v-card-title primary-title>
                                <div>
                                    <h5 class=" mb-0">{{add.title}}</h5>
                                </div>
                                </v-card-title>

                                <v-card-actions>
                                    <div  class="item-navbar">
                                        <h2>{{add.price}}р</h2>
                                        <div class="counter">
                                            <button class="remove" type="button" onclick="this.parentNode.querySelector('[type=number]').stepDown();">
                                                -
                                            </button>
                                            <input v-model="count" type="number" name="number" min="1" max="100" value="1">
                                            <button class="add" type="button" onclick="this.parentNode.querySelector('[type=number]').stepUp();">
                                                +
                                            </button>
                                        </div>
                                    </div>
                                </v-card-actions>
                            </v-card>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-4 offset-lg-7 offset-xl-8 total">
                            <h1>{{total}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 payment">
                    <h2>Способы оплаты</h2>
                    <div class="custom-control custom-radio" v-for="paymentmethod in paymentmethods" :key="paymentmethod.id">
                        <input type="radio" :id="'customRadio' + paymentmethod.id" name="customRadio" class="custom-control-input pay-type">
                        <label class="custom-control-label" :for="'customRadio' + paymentmethod.id">{{paymentmethod.title}}</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
//database
import axios from 'axios'
import { mapActions, mapGetters, mapMutations } from 'vuex'

export default {
    name: 'vcard',

    mounted: function () { 
        this.$store.dispatch('LOAD_PAYMENTMETHODS') 
        this.$store.dispatch('LOAD_PRODUCTS')
        this.$store.dispatch('LOAD_COLORS') 
        this.$store.dispatch('LOAD_SIZES') 
        this.$store.dispatch('LOAD_COMMENTS') 
        this.$store.dispatch('LOAD_FACULTIES') 
        this.$store.dispatch('LOAD_TYPES')
    }, 

    computed: { 
        ...mapGetters({ 
        paymentmethods: 'GET_PAYMENTMETHODS',
        adds: 'GET_ADDS'
        }),
    },

    methods: {
        ...mapMutations([
            'SET_ADDS'
        ]),
        
        
        removeAll() {
            console.log(adds);
            this.adds.forEach(function(add) {
                adds.remove(add)
            });
        }
    }
}
</script>

<style lang="scss" scoped>
    .card {
        width: 100%;
        height: 100%;
        border: none;
        margin: 10px;
        margin-bottom: 20px;
        .card-menu {
            margin-bottom: 2%;
        }
    
        .cart-btn {
            background: #FDB777;
            border-radius: 15px;
            color: #fff;
            border: 1px solid #FDB777;
            
        }
        img {
            width: 100%;
        }
        
        .item-disc {
            display: flex;
            width:100%;
            padding: 5px;
            align-items: center;
            justify-content: center;
            input {
                outline: none;
            }
            span {
                font-size: 150%;
                margin: 0 10px;
            }
        }
        .flypage {
            width: 290px;
            padding-top: 20px;
            margin-bottom: 20px;
        }
        .count {
            width: 50px;
        }
.item-img {
    width: 100%;
}
.item-navbar{
        display: flex;
        justify-content: space-between;
        width: 100%;
        h2 {
            margin: 7px;
            margin-right: 50px;
        }
        .remove,
        .add {
            margin: 7px;
            outline: none;
        }       
}
    }
    .payment {
        width: 100%;
        border-left: 3px solid #C4C4C4;

        .custom-control-label {
            font-size: 16px;
            vertical-align: baseline;
            margin-bottom: 20px;
        }

        .pay-type {
            background: #FDB777;
        }
        h2 {
            margin-bottom: 7%;
        }
        ul {
            list-style: none;
            padding: 0;
            
            .payment-item {
                display: inline-flex;
                margin-bottom: 5%;
                .marker {
                    width: 10%;
                    height: 10%;
                    margin-right: 5%;
                }
                p {
                    float: left;
                }
            }
        } 
    }
    .total {
        margin-top: 15px;
    }
    @media (max-width: 768px) {
        .payment {
        border-left: none;
        margin-top: 20px;
        }
        .flypage {
            width: 100%;
        }
    }

    .counter {
        height: 50px;
        width: 130px;
        margin: 0 0 10px 0;

        input {
  text-align:center;
  border: 1px solid  #C4C4C4;
   width: 50px;
    box-shadow: inset -1px 3px 5px -3px #c2c2c2;
    margin: 0 -12px;
    height: 100%;
}

.add,
.remove {
    width: 30px;
    height: 100%;
    border: 1px solid  #C4C4C4;
}

.add {
    border-radius: 0 5px 5px 0 ;
}

.remove {
    border-radius: 5px 0 0 5px;

}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  margin: 0;
  
}
    }
    
    
</style>