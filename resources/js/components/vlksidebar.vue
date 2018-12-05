<template>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="sidebar-items">
                        <div class="user-icon">
                            <img src="http://localhost/MerchStore/resources/imgs/user-icon.png" alt="user-icon">
                        </div>

                        <router-link class="menu-link" :to="{ name: 'lkorders' }"><button type="button" class="btn btn-secondary btn-lg btn-block">Мои заказы</button></router-link>

                        <router-link class="menu-link" :to="{ name: 'lkfavorites' }"><button type="button" class="btn btn-secondary btn-lg btn-block">Избранное</button></router-link>

                        <router-link class="menu-link" :to="{ name: 'lkdata' }"><button type="button" class="btn btn-secondary btn-lg btn-block">Личные данные</button></router-link>

                        <router-link class="menu-link" :to="{ name: 'signin' }"><button type="button" class="btn btn-secondary btn-lg btn-block">Выход</button></router-link>

                        <router-link class="menu-link" :to="{ name: 'admstats' }">Админка</router-link>
                    </div>
                </div>
</template>

<script>
export default {
    name: 'vlksidebar'
}
</script>

<style lang="scss" scoped>
    .sidebar-items {
        width: 100%;
        height: 100%;
        text-align: center;

        .adminka {
            color: black;
        }

        .menu-link {
            color: #000;
            text-decoration: none;

            .btn {
                background: #FDB777;
                border-radius: 15px;
                border: 1px solid #FDB777;
                margin: 5% 0;
                padding: 5% 0;

            }
        }

        .user-icon {
            width: 100%;
            text-align: center;
            margin: 0 0 15%; 

            img {
                width: 80%;
            }
        }
    }
</style>