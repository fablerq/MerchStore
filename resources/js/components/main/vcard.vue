<template>
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
                    <div class="row card-menu">
                        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                            <h2>Моя корзина</h2>
                        </div>
                        <div class="col-12 col-sm-12 col-md-3 col-lg-2 col-xl-2 offset-md-3 offset-lg-6 offset-xl-6">
                            <v-btn color="orange lighten-2" block dark large>Купить</v-btn>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div v-for="n in 2" :key="n" class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                            <v-card class="flypage">
                                <router-link class="menu-link" :to="{ name: 'good' }">
                                    <v-img class="item-img" :src="require('../../../imgs/flypage.png')" aspect-ratio="2.75" height="150px"></v-img>
                                </router-link>
                                <v-card-title primary-title>
                                <div>
                                    <h5 class=" mb-0">Футболка “Три скобки”</h5>
                                </div>
                                </v-card-title>

                                <v-card-actions>
                                    <div  class="item-navbar">
                                    <h2>800р</h2>
                                    <v-btn fab light small color="white" class="remove"><v-icon dark>remove</v-icon></v-btn>
                                    <v-text-field
                                        solo
                                        class="count"
                                    ></v-text-field>
                                    <v-btn fab light small color="white" class="add"><v-icon dark>add</v-icon></v-btn>
                                    </div>
                                </v-card-actions>
                            </v-card>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-4 offset-lg-7 offset-xl-8 total">
                            <h1>Итого: 1600р</h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 offset-lg-1 offset-xl-0 col-xl-4 payment">
                    <h2>Способы оплаты</h2>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input pay-type">
                        <label class="custom-control-label" for="customRadio1"><p><strong>Наличные</strong><br>вы можете отдать деньги нашему агенту</p></label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input pay-type">
                        <label class="custom-control-label" for="customRadio2"><p><strong>Онлайн-оплата</strong><br>вы можете оплатить товар онлайн электронными деньгами</p></label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input pay-type">
                        <label class="custom-control-label" for="customRadio3"><p><strong>Рабство</strong><br>всегда существует вариант пойти в рабство Bonch.dev</p></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'vcard'
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
        }
        .count {
            width: 50px;
        }

.item-img {
    width: 100%;
}

.item-navbar{
        display: flex;
        justify-content: center;

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

        .pay-type {
            background: orange;
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
</style>