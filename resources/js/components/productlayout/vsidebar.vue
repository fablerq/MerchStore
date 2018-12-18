<template>
  
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">

                        <v-expansion-panel class="sidebar" expand>

                            <v-expansion-panel-content>
                                <div slot="header"><router-link class="menu-link" :to="{ path: '/catalog' }">Все товары</router-link></div>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header">Одежда ➤</div>
                                <v-card>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ path: '/catalog/filter/1'}">Толстовки</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ path: '/catalog/filter/2'}">Футболки</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ path: '/catalog/filter/3'}">Свитшоты</router-link></v-card-text>
                                </v-card>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header">Значки ➤</div>
                                <v-card>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ path: '/catalog/filter/4'}">Деревянные</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ path: '/catalog/filter/5'}">Металические</router-link></v-card-text>
                                </v-card>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header"><router-link class="menu-link" :to="{ path: '/catalog/filter/6'}">Стикерпаки</router-link></div>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header">Канцелярия ➤</div>
                                <v-card>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ path: '/catalog/filter/7' }">Тетради</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{  path: '/catalog/filter/8' }">Блокноты</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{  path: '/catalog/filter/9' }">Обложки на документы</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{  path: '/catalog/filter/10' }">Письменные принадлежности</router-link></v-card-text>
                                </v-card>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header"><router-link class="menu-link" :to="{  path: '/catalog/filter/11' }">Сумки</router-link></div>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header"><router-link class="menu-link" :to="{  path: '/catalog/filter/12' }">Другое</router-link></div>
                            </v-expansion-panel-content>
                        </v-expansion-panel>
                </div>
</template>

<script>
</script>

<style lang="scss" scoped>
    @media (max-width: 992px) {
        .sidebar {
            margin: 25px 0;
        }
    }
    .menu-link {
        color: black;
    }

    
</style>