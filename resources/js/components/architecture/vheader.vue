<template>
    <header>
       
            <v-toolbar class="navigashka"  type="light" height="100px">
                    <v-toolbar-side-icon @click.stop="drawer = !drawer" class="botton"></v-toolbar-side-icon>
    
                    <v-toolbar-title>
                        <div class="menu-link" :to="{ name: 'main' }">
                            <router-link class="menu-link" :to="{ name: 'main' }">
                        <img  class="mainlogo" src="../../../imgs/mainlogo.png" alt="logo">
                            </router-link>
                        </div>
                    </v-toolbar-title>

                    <v-spacer></v-spacer>

                    <v-toolbar-items class="hidden-sm-and-down">
                    <v-btn flat class="nav-item">
                            <router-link class="menu-link" :to="{ name: 'catalog' }">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/catalog.png" alt="catalog">
                                    Каталог
                                </div>   
                            </router-link>
                    </v-btn>
                    <v-btn flat class="nav-item">
                        <router-link class="menu-link" :to="{ name: 'faq' }">
                            <div class="flexer">
                                <img class="nav-img" src="../../../imgs/faq.png" alt="faq">
                                F&Q
                            </div>
                        </router-link>
                    </v-btn>
                    <v-btn flat class="nav-item profile">
                        <router-link class="menu-link" :to="{ name: 'lkorders' }">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/profile.png" alt="profile">
                                    Личный кабинет
                                </div>
                            </router-link>
                    </v-btn>
                     <v-btn flat class="nav-item">
                         <router-link class="menu-link" :to="{ name: 'card' }">
                                <div class="flexer">
                                    <img class="nav-img" src="../../../imgs/card.png" alt="card">
                                    Корзина
                                </div>
                            </router-link>
                    </v-btn>
                    </v-toolbar-items>

            </v-toolbar>
      
       <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
    >


      <v-list class="pt-0" dense>
        <v-divider></v-divider>

        <v-list-tile class="sidebar-item">
        <router-link class="menu-link" :to="{ name: 'catalog' }">
                <div class="flexer">
                    <img class="nav-img" src="../../../imgs/catalog.png" alt="catalog">
                    Каталог
                </div>   
            </router-link>
            </v-list-tile>
            <v-divider></v-divider>
        <v-list-tile class="sidebar-item">
            <router-link class="menu-link" :to="{ name: 'faq' }">
                <div class="flexer">
                    <img class="nav-img" src="../../../imgs/faq.png" alt="faq">
                    F&Q
                </div>
            </router-link>
            </v-list-tile>
            <v-divider></v-divider>
        <v-list-tile class="sidebar-item">
            <router-link class="menu-link" :to="{ name: 'lkorders' }">
                <div class="flexer">
                    <img class="nav-img" src="../../../imgs/profile.png" alt="profile">
                    Личный кабинет
                </div>
            </router-link>
            </v-list-tile>
            <v-divider></v-divider>
            <v-list-tile class="sidebar-item">
            <router-link class="menu-link" :to="{ name: 'card' }">
                <div class="flexer">
                    <img class="nav-img" src="../../../imgs/card.png" alt="card">
                    Корзина
                </div>
            </router-link>
        </v-list-tile>
        <v-divider></v-divider>
      </v-list>
    </v-navigation-drawer>
    </header>
</template>

<script>
export default {
    name: 'vheader',
    data () {
      return {
        drawer: null,
        items: [
          { title: 'Home', icon: 'dashboard' },
          { title: 'About', icon: 'question_answer' }
        ]
      }
    }
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
        width: 80px;
    }

    .menu-link {
        color: black;
        text-decoration: none;
    }


    .flexer {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: row;
        width: 120px;
        height: 100px;

        .nav-img {
            width: 40px;
            margin-right: 10px;
            
        }
    }

    .nav-item {
        width: 22%;
    }

    .nav-item.profile {
        width: 33%;
    }

    .sidebar-item {
        .flexer {
            height: 60px;
            width: 270px;
            justify-content: flex-start;
        }
    }

    @media (max-width: 992px) {
        .flexer {
            width: 100%;
        }
    }

    @media (min-width: 992px) {
        .botton {
            display: none;
        }
    }
</style>