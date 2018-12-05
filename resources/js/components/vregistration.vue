<template>
    <div class="reg-page">
        <div class="registration">
            <div class="container">
                <div class="row">
                        <h4>Форма регистрации</h4>
                        <form class="col" action="./api/users" method="POST" @submit="addUser()">
                            <div class="form-group">
                                <input type="text" name="email" v-model="email" placeholder="Почта" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" v-model="password" placeholder="Пароль" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" v-model="password" placeholder="Повторите пароль" class="form-control">
                            </div>
                            <label for="networks">или вход через социальные сети</label>
                            <div class="networks" id="networks">
                                <a href="#"><img src="http://localhost/MerchStore/resources/imgs/google.png" alt=""></a>
                                <a href="#"><img src="http://localhost/MerchStore/resources/imgs/facebook.png" alt=""></a>
                                <a href="#"><img src="http://localhost/MerchStore/resources/imgs/vk.png" alt=""></a>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Зарегистрироваться" class="btn btn-light btn-block">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'vregistration'
}
</script>

<style lang="scss" scoped>
    h4 {
        width: 100%;
        text-align: center;
        margin-bottom: 15px;
    }

    .logo {
        width: 20%;
    }

        .registration {
            width: 300px;
            background: #e2e2e2;
            position: fixed;
            top: 40%;
            left: 50%;
            margin-top: -150px;
            margin-left: -150px;
            padding: 20px 5px 5px 5px;
            border-radius: 15px;

            .networks img {
                width: 12%;
                display: inline-block;
                margin-right: 5%;
            }

            .btn {
                margin-top: 5%;
                background: #FDB777;
                color: #fff;
                border: 1px solid #FDB777;
            }
        }

</style>