<template>
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                    <div class="row card-menu">
                        <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-4">
                            <h2>Моя корзина</h2>
                        </div>
                        <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 offset-7 offset-sm-7 offset-md-7 offset-lg-7 offset-xl-6">
                            <button type="button" class="btn btn-primary btn-lg cart-btn">Купить</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card-item">
                                <img src="http://localhost/MerchStore/resources/imgs/card-item.png" alt="">
                                <div class="item-disc">
                                    <input class="remove" type="image" src="http://localhost/MerchStore/resources/imgs/remove.png" />
                                    <span>1</span>
                                    <input class="add" type="image" src="http://localhost/MerchStore/resources/imgs/add.png" />
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="card-item">
                                <img src="http://localhost/MerchStore/resources/imgs/card-item.png" alt="">
                                <div class="item-disc">
                                    <input class="remove" type="image" src="http://localhost/MerchStore/resources/imgs/remove.png" />
                                    <span>2</span>
                                    <input class="add" type="image" src="http://localhost/MerchStore/resources/imgs/add.png" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 payment">
                    <h2>Способы оплаты</h2>
                    <ul>
                        <li class="payment-item">
                            <img class = "marker" src="http://localhost/MerchStore/resources/imgs/marker.png" alt="marker">
                            <p><strong>Наличные</strong><br>вы можете отдать деньги нашему агенту</p>
                        </li>
                        <li class="payment-item">
                            <img class = "marker" src="http://localhost/MerchStore/resources/imgs/marker.png" alt="marker">
                            <p><strong>Онлайн-оплата</strong><br>вы можете оплатить товар онлайн электронными деньгами</p>
                        </li>
                        <li class="payment-item">
                            <img class = "marker" src="http://localhost/MerchStore/resources/imgs/marker.png" alt="marker">
                            <p><strong>Рабство</strong><br>всегда существует вариант пойти в рабство Bonch.dev</p>
                        </li>
                    </ul>
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

    }

    .payment {
        width: 100%;
        border-left: 5px solid #FDB777;

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
</style>