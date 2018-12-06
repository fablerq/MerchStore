<template>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-3">
                    <div class="sidebar-items">
                        <router-link class="menu-link" :to="{ name: 'admstats' }"><button type="button" class="btn btn-dark btn-lg btn-block add-to-card">Общее</button></router-link>

                        <router-link class="menu-link" :to="{ name: 'admusers' }"><button type="button" class="btn btn-dark btn-lg btn-block add-to-card">Пользователи</button></router-link>

                        <router-link class="menu-link" :to="{ name: 'admlist' }"><button type="button" class="btn btn-dark btn-lg btn-block add-to-card">Товары</button></router-link>

                        <router-link class="menu-link" :to="{ name: 'admorders' }"><button type="button" class="btn btn-dark btn-lg btn-block add-to-card">Заказы</button></router-link>

                        <router-link class="menu-link" :to="{ name: '' }"><button type="button" class="btn btn-dark btn-lg btn-block add-to-card">Вопрос-Ответ</button></router-link>

                        <router-link class="menu-link" :to="{ name: 'admbase' }"><button type="button" class="btn btn-dark btn-lg btn-block add-to-card">База данных</button></router-link>

                        <router-link class="menu-link" :to="{ name: '' }"><button type="button" class="btn btn-dark btn-lg btn-block add-to-card">Настройки</button></router-link>
                    </div>
                </div>
</template>

<script>
export default {
    name: 'vadmsidebar'
}
</script>

<style lang="scss" scoped>
    .sidebar-items {
        width: 100%;
        height: 100%;

        .menu-link {
            color: #fff;
            text-decoration: none;

            .btn {
                background: #FDB777;
                border-radius: 15px;
                border: 1px solid #FDB777;
                margin: 5% 0;

            }

            .active {
                background: #fff;
            }
        }
    }
</style>