<template>
    <header>
       <div class="container">
            <b-navbar class="navigashka" toggleable="lg" type="light">
                <b-navbar-toggle target="nav_collapse"></b-navbar-toggle>
                    <b-navbar-brand>
                        <b-link class="menu-link" :to="{ name: 'main' }">
                        <img  class="mainlogo" src="../../../imgs/mainlogo.png" alt="logo">
                        </b-link>
                    </b-navbar-brand>
                <b-collapse is-nav id="nav_collapse">
                    <b-navbar-nav class="ml-auto">
                        <b-navbar-nav>
                            <b-nav-item class="nav-item">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/catalog.png" alt="catalog">
                                    <router-link class="menu-link" :to="{ name: 'catalog' }">Каталог</router-link>
                                </div>   
                            </b-nav-item>
                            <b-nav-item class="nav-item">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/faq.png" alt="faq">
                                    <router-link class="menu-link" :to="{ name: 'faq' }">F&Q</router-link>
                                </div>
                            </b-nav-item>
                            <b-nav-item class="nav-item">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/profile.png" alt="profile">
                                    <router-link class="menu-link" :to="{ name: 'lkorders' }">Личный кабинет</router-link>
                                </div>
                            </b-nav-item>
                            <b-nav-item class="nav-item">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/card.png" alt="card">
                                    <router-link class="menu-link" :to="{ name: 'card' }">Корзина</router-link>
                                </div>
                            </b-nav-item>
                        </b-navbar-nav>
                    </b-navbar-nav>
                </b-collapse>
            </b-navbar>
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
        box-shadow: 0px 4px 5px -5px grey;
        
    }

    .navigashka {
        background: #fff;
    }

    .mainlogo {
        width: 120px;
    }

    .menu-link {
        color: black;
        
    }

    .flexer {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;

        .nav-img {
            width: 40px;
            margin-right: 10px;
            
        }
    }

    .nav-item {
        width: 180px;
    }

    @media (max-width: 992px) {
        .flexer {
            justify-content: flex-start;
        }
    }
</style>