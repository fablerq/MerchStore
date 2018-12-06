<template>
  
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <ul class="sidebar-menu">
                        <li><router-link class="menu-link" :to="{ name: '#' }"><h4>Одежда</h4></router-link>
                            <ul>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Толстовки</router-link></li>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Футболки</router-link></li>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Свитшоты</router-link></li>
                            </ul>
                        </li>
                        <li><router-link class="menu-link" :to="{ name: '#' }"><h4>Значки</h4></router-link>
                            <ul>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Деревянные</router-link></li>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Металические</router-link></li>
                            </ul>
                        </li>
                        <li><router-link class="menu-link" :to="{ name: '#' }"><h4>Стикерпаки</h4></router-link></li>
                        <li><router-link class="menu-link" :to="{ name: '#' }"><h4>Канцелярия</h4></router-link>
                            <ul>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Тетради</router-link></li>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Блокноты</router-link></li>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Обложки на документы</router-link></li>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Письменные принадлежности</router-link></li>
                            </ul>
                        </li>
                        <li><router-link class="menu-link" :to="{ name: '#' }"><h4>Сумки</h4></router-link></li>
                        <li><router-link class="menu-link" :to="{ name: '#' }"><h4>Другое</h4></router-link>
                            <ul>
                                <li><router-link class="menu-link" :to="{ name: '#' }">Браслеты</router-link></li>
                            </ul>
                        </li>
                    </ul>
                </div>
</template>

<script>

</script>

<style lang="scss" scoped>
    .sidebar-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    

        ul {
            list-style: none;
            padding: 0;
            margin: 0 0 10px 10px;

            li {
                margin-bottom: 10px;
            }
        }
    }

    .menu-link {
        color: black;
    }

</style>