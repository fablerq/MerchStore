<template>
    <div class="contacts">
            <div class="container">
                <div class="row">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <h2>Контакты магазина</h2>
                        <div class="contact">
                            <img src="http://localhost/MerchStore/resources/imgs/inst.png" alt="">
                            <a href="#">@bonchmerch</a>
                        </div>
                        <div class="contact">
                            <img src="http://localhost/MerchStore/resources/imgs/vk.png" alt="">
                            <a href="#">Вконтакте</a>
                        </div>
                        <div class="contact">
                            <img src="http://localhost/MerchStore/resources/imgs/phone.png" alt="">
                            <a href="tel:+78142332211">+7(814)-233-22-11</a>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <img class="map" src="http://localhost/MerchStore/resources/imgs/map.png" alt="">
                        <p>Адрес</p>
                    </div>
                </div>
                <div class="row">
                    <p>Возникли вопросы? Пишите в поддержку. маааааааааааайл.</p>
                </div>
            </div>
        </div>
</template>

<script>
export default {
    name: 'vcontacts'
}
</script>

<style lang="scss" scoped>
    .contacts {
        width: 100%;

        h2 {
            margin-bottom: 15px;
        }

        .contact {
            display: flex;
            align-items: center;
            margin-bottom: 15px;

            img {
                width: 10%;
                margin-right: 10px;
            }

        }

    .map {
            width: 100%;
        }
    }
</style>