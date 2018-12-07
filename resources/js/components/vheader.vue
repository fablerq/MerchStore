<template>
    <header>
       
                <b-navbar class="navigashka" toggleable="lg" type="light">
                    <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>

                    <b-navbar-brand><b-link class="menu-link" :to="{ name: 'main' }"><img  class="mainlogo" src="http://localhost/MerchStore/resources/imgs/mainlogo.png" alt="logo"></b-link></b-navbar-brand>

                    <b-collapse is-nav id="nav_collapse">
                     
                       

                        <b-navbar-nav class="ml-auto">
                             <b-navbar-nav>
                            <b-nav-item><img style="width: 40px" src="http://localhost/MerchStore/resources/imgs/catalog.png" alt="catalog"><router-link class="menu-link" :to="{ name: 'catalog' }">Каталог</router-link></b-nav-item>
                            <b-nav-item><img style="width: 40px" src="http://localhost/MerchStore/resources/imgs/faq.png" alt="catalog"><router-link class="menu-link" :to="{ name: 'faq' }">F&Q</router-link></b-nav-item>
                            <b-nav-item><img style="width: 40px" src="http://localhost/MerchStore/resources/imgs/profile.png" alt="catalog"><router-link class="menu-link" :to="{ name: 'lkorders' }">Личный кабинет</router-link></b-nav-item>
                            <b-nav-item><img style="width: 40px" src="http://localhost/MerchStore/resources/imgs/card.png" alt="card"><router-link class="menu-link" :to="{ name: 'card' }">Корзина</router-link></b-nav-item>
                        </b-navbar-nav>


     

    </b-navbar-nav>


                    </b-collapse>
                </b-navbar>

    </header>
</template>

<script>
export default {
    name: 'vheader'
}
</script>

<style lang="scss" scoped>

    .navigashka {
        background: #fff;
    }

    .mainlogo {
        width: 120px;
    }

    .menu-link {
        color: black;
        margin-left: 15px;
    }

    b-nav-item img {
        width: 30px;
    }
</style>