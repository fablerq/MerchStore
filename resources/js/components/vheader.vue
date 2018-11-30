<template>
    <header>
        <div class="container-fluid">
            <div class="row justify-content-between row align-items-center">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <img  class="mainlogo" src="http://localhost/MerchStore/resources/imgs/mainlogo.png" alt="logo">
                </div>
                <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <nav>
                        <ul class="menu">
                            <li>
                                <div class="menu-item mainpage">
                                    <img src="http://localhost/MerchStore/resources/imgs/catalog.png" alt="catalog">
                                    <router-link class="menu-link" :to="{ name: 'app' }">Каталог</router-link>
                                </div>
                            </li>
                            <li class="slash"><img src="http://localhost/MerchStore/resources/imgs/slash.png" alt=""></li>
                            <li>
                                <div class="menu-item faq">
                                    <img src="http://localhost/MerchStore/resources/imgs/faq.png" alt="catalog">
                                    <router-link class="menu-link" :to="{ name: 'users' }">F&Q</router-link>
                                </div>
                            </li>
                            <li class="slash"><img src="http://localhost/MerchStore/resources/imgs/slash.png" alt=""></li>
                            <li>
                                <div class="menu-item faq">
                                    <img src="http://localhost/MerchStore/resources/imgs/contacts.png" alt="catalog">
                                    <router-link class="menu-link" :to="{ name: 'products' }">Контакты</router-link>
                                </div>
                            </li>
                            <li class="slash"><img src="http://localhost/MerchStore/resources/imgs/slash.png" alt=""></li>
                            <li>
                                <div class="menu-item profile">
                                    <img src="http://localhost/MerchStore/resources/imgs/profile.png" alt="catalog">
                                    <router-link class="menu-link" :to="{ name: 'orders' }">Личный кабинет</router-link>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: 'vheader'
}
</script>

<style lang="scss" scoped>
header {
    width: 100%;
    height: 100%;
    background-color: #fff;
    padding: 10px 0;

    .mainlogo {
        
    }

    .menu {
        list-style: none;
        display: flex;
        height: 100%;
        align-items: baseline;
        justify-content: flex-end;

        .menu-item {
            display: flex;
            flex-direction: column;
            width: 200px;
            height: auto;
            align-items: center;
        }

        .slash {
            align-self: center;
        }
        
        li {
            text-decoration: none;
            margin-right: 20px;

            .menu-link {
                color: black;
                font-size: 23px;
            }
        }
    }
}
</style>