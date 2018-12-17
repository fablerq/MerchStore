<template>
    <div class="reg-page">
        <div class="registration">
            <div class="container">
                <div class="row">
                        <h4>Форма входа</h4>

                        <div class="alert alert-danger" v-if="feedback">
                                    {{ feedback}}
                                </div>

                        <form class="col" @submit.prevent="handleSubmit">
                            <div class="form-group">
                                <input type="text" name="login" v-model="login.login" placeholder="Введите логин" class="form-control" v-validate="{ required: true }" :class="{ 'is-invalid': submitted && errors.has('login') }">
                                <div v-if="submitted && errors.has('login')" class="invalid-feedback">{{ errors.first('login') }}</div>
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" v-model="login.password" placeholder="Введите пароль" class="form-control" v-validate="{ required: true }" :class="{ 'is-invalid': submitted && errors.has('password') }">
                                <div v-if="submitted && errors.has('password')" class="invalid-feedback">{{ errors.first('password') }}</div>

                            </div>
                            <div class="form-group">
                                <input type="submit" value="Войти" class="btn btn-light btn-block">
                                <router-link class="menu-link to-reg" :to="{ name: 'register' }">Вы ещё не с нами?</router-link>
                            </div>
                        </form>
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
            },
            feedback: '',
            submitted: false,
        }
    },
    methods: {
        handleSubmit(e) {
            this.submitted = true;
            this.$validator.validate().then(valid => {
                if (valid) {
                    this.signin()
                }
            });
        },
        signin() {
            axios.post('/api/login', { login: this.login.login, password: this.login.password })
            .then(response=> {
                if (response.data.error) {
                    console.log(response.data.error)
                    this.feedback = response.data.error;
                } else {
                    console.log(response.data)
                    this.$store.commit('SET_CURRENTUSER', response.data.userdata);
                    this.$router.push('successlog') 
                }
            })
            this.feedback = null
        },
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