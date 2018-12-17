<template>
    <div class="reg-page">
        <div class="registration">
            <div class="container">
                <div class="row">
                        <h4>Форма регистрации</h4>

                                <div class="alert alert-danger" v-if="feedback">
                                    <ul>
                                        <li v-for="error in feedback">{{ error[0] }}</li>
                                    </ul>
                                </div>

                        <form class="col" @submit.prevent="handleSubmit">
                            <div class="form-group">
                                <input type="text" name="login" v-model="register.login" placeholder="Логин" class="form-control" v-validate="{ required: true, max: 50, min: 5 }" :class="{ 'is-invalid': submitted && errors.has('login') }" >
                                <div v-if="submitted && errors.has('login')" class="invalid-feedback">{{ errors.first('login') }}</div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" v-model="register.email" placeholder="Почта" class="form-control" v-validate="{ required: true, email: true }" :class="{ 'is-invalid': submitted && errors.has('email') }" >
                                <div v-if="submitted && errors.has('email')" class="invalid-feedback">{{ errors.first('email') }}</div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="password" v-model="register.password" placeholder="Пароль" class="form-control" v-validate="{ required: true, min: 7 }" :class="{ 'is-invalid': submitted && errors.has('password') }" >
                                <div v-if="submitted && errors.has('password')" class="invalid-feedback">{{ errors.first('password') }}</div>
                            </div>
                            <label for="networks">или вход через социальные сети</label>
                            <div class="networks" id="networks">
                                <a href="#"><img src="../../../imgs/google.png" alt=""></a>
                                <a href="#"><img src="../../../imgs/facebook.png" alt=""></a>
                                <a href="#"><img src="../../../imgs/vk.png" alt=""></a>
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
import axios from 'axios' 

export default {
    name: 'vregistration',
    data() {
        return {
            register: {
                login: '',
                email: '',
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
                    this.registerUser()
                }
            });
        },

        registerUser() {
            axios.post('/api/register', this.register)
            .then(response=> {
                window.location.href = "/successreg";
                this.feedback = null
            })
            .catch(error => {
                console.log(error.response)
                this.feedback = error.response.data.errors;
            });
            this.feedback = null
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
                margin-top: 5%;
                background: #FDB777;
                color: #fff;
                border: 1px solid #FDB777;
            }
        }

</style>