<template>
  
                <div class="col-12 col-sm-12 col-md-12 col-lg-2 col-xl-2">

                        <v-expansion-panel class="sidebar" expand>

                            <v-expansion-panel-content>
                                <div slot="header">Одежда</div>
                                <v-card>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Толстовки</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Футболки</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Свитшоты</router-link></v-card-text>
                                </v-card>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header">Значки</div>
                                <v-card>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Деревянные</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Металические</router-link></v-card-text>
                                </v-card>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header"><router-link class="menu-link" :to="{ name: '#' }">Стикерпаки</router-link></div>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header"><router-link class="menu-link" :to="{ name: '#' }">Канцелярия</router-link></div>
                                <v-card>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Тетради</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Блокноты</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Обложки на документы</router-link></v-card-text>
                                    <v-card-text class="grey lighten-3"><router-link class="menu-link" :to="{ name: '#' }">Письменные принадлежности</router-link></v-card-text>
                                </v-card>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header"><router-link class="menu-link" :to="{ name: '#' }">Сумки</router-link></div>
                            </v-expansion-panel-content>

                            <v-expansion-panel-content>
                                <div slot="header"><router-link class="menu-link" :to="{ name: '#' }">Другое</router-link></div>
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