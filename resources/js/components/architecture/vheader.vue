<template>
    <header>
       <div class="container">
            <v-toolbar class="navigashka" toggleable="lg" type="light" height="100px">
                    <v-toolbar-side-icon></v-toolbar-side-icon>
                    <span></span>
               <span></span>
                
                        <div class="menu-link" :to="{ name: 'main' }">
                            <router-link class="menu-link" :to="{ name: 'catalog' }">
                        <img  class="mainlogo" src="../../../imgs/mainlogo.png" alt="logo">
                            </router-link>
                        </div>
                  

                    <v-spacer></v-spacer>

                    <v-toolbar-items class="hidden-sm-and-down">
                    <v-btn flat class="nav-item">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/catalog.png" alt="catalog">
                                    <router-link class="menu-link" :to="{ name: 'catalog' }">Каталог</router-link>
                                </div>   
                    </v-btn>
                    <v-btn flat class="nav-item">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/faq.png" alt="faq">
                                    <router-link class="menu-link" :to="{ name: 'faq' }">F&Q</router-link>
                                </div>
                    </v-btn>
                    <v-btn flat class="nav-item">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/profile.png" alt="profile">
                                    <router-link class="menu-link" :to="{ name: 'lkorders' }">Личный кабинет</router-link>
                                </div>
                    </v-btn>
                     <v-btn flat class="nav-item">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/card.png" alt="card">
                                    <router-link class="menu-link" :to="{ name: 'card' }">Корзина</router-link>
                                </div>
                    </v-btn>
                    </v-toolbar-items>

            </v-toolbar>
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
        width: 100%;
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
        width: 160px;
    }

    @media (max-width: 992px) {
        .flexer {
            justify-content: flex-start;
        }
    }
</style>