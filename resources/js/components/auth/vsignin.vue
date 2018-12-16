<template>
    <div class="reg-page">
        <div class="registration">
            <div class="container">
                <div class="row">
                        <h4>Форма входа</h4>
                        <form class="col" @submit.prevent="signin">
                            <div class="form-group">
                                <input type="text" name="login" v-model="login.login" placeholder="Ведите логин" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" v-model="login.password" placeholder="Введите пароль" class="form-control">
                            </div>
                            <label for="networks">или вход через социальные сети</label>
                            <div class="networks" id="networks">
                                <a href="#"><img src="../../../imgs/google.png" alt=""></a>
                                <a href="#"><img src="../../../imgs/facebook.png" alt=""></a>
                                <a href="#"><img src="
                                /../imgs/vk.png" alt=""></a>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Войти" class="btn btn-light btn-block">
                                <router-link class="menu-link to-reg" :to="{ name: 'register' }">Вы ещё не с нами?</router-link>
                            </div>
                        </form>
                        <input type="submit" value="Чекнуть" v-on:click="check" class="btn btn-light btn-block">
                        <input type="submit" value="Выйти" v-on:click="logout" class="btn btn-light btn-block">
                        <a href="http://127.0.0.1:8000/login/github" class="btn btn-secondary">Через гитхаб</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios' 
import { mapActions, mapGetters } from 'vuex'

export default {
    name: 'vsignin',
    data() {
        return {
            login: {
                login: '',
                password: '',
            }
        }
    },
    methods: {
        signin() {
            axios.post('/api/login', { login: this.login.login, password: this.login.password })
            .then(response=> {
                console.log(response);
                //this.$store.dispatch('LOAD_CURRENTUSER', response.data.userdata);
                //store.commit('increment');
            })
            .catch(error=> {
                console.log(error.response)
            })
            //console.log('юзер: ', this.$store.state.currentUser)
        },
        check() {
            axios.post('/api/getuser')
            .then(response=> {
                console.log(response);
            })
            .catch(error=> {
                console.log(error.response)
            })
        },
        logout() {
            axios.post('/api/logout')
            .then(response=> {
                console.log(response);
            })
            .catch(error=> {
                console.log(error.response)
            })
        },
        github() {
            axios.get('/login/github')
        }
    }
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
            margin: auto;
            margin-top: 40px;
            padding: 20px 5px 5px 5px;
            border-radius: 15px;

            .networks img {
                width: 12%;
                display: inline-block;
                margin-right: 5%;
            }

            .btn {
                margin: 15px 0 5px;
                background: #FDB777;
                color: #fff;
                border: 1px solid #FDB777;
            }
        }

</style>