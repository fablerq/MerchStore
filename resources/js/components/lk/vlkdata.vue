<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vlksidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">

            <div class="row align-items-center">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                    <h1>Личные данные</h1>
                </div>
          </div>

          <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                   <table class="table order">
                        <tbody>
                            <tr>
                                <th scope="row">Логин</th>
                                <td>{{ currentuser.login }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Статус</th>
                                <td>
                                    <ul class="form-group" v-for="role in roles" style="list-style: none;"> 
                                        <li v-if="role.id == currentuser.role_id">
                                            {{ role.title }}
                                        </li>
                                    </ul>  
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Статус верификации</th>
                                <td v-if="currentuser.is_verified == 0">Почта не подтверждена</td>
                                <td v-if="currentuser.is_verified == 1">Почта подтверждена</td>
                            </tr>
                            <tr>
                                <th scope="row">Эл. почта</th>
                                <td>{{ currentuser.email }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Дата регистрации</th>
                                <td>{{ currentuser.created_at }} </td>
                            </tr>
                            <tr>
                                <td colspan="2"><button type="button" class="btn btn-dark btn-sm btn-block change-btn">Изменить пароль (not ready)</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vlksidebar from './vlksidebar.vue'
import { mapActions, mapGetters } from 'vuex'
export default {
  name: 'vlkdata',
  components: {vlksidebar},
  computed: {
       ...mapGetters({
        currentuser: 'GET_CURRENTUSER',
        roles: 'GET_ROLES',
       })
  },
}

</script>

<style lang="scss" scoped>
    .cart-btn {
        background: #FDB777;
        border-radius: 15px;
        color: #fff;
        border: 1px solid #FDB777;
    }

    .username {
        font-size: 1em;
        width: 100%;
        text-align: center;
    }

    .favorites {
        margin: 30px 0;
    }

    .favorite-card {
        width: 100%;
        padding: 3%;
        background: #E5E5E5;
        text-align: center;

        img {
            width: 100%;
        }

        .name {
            font-size: 1.3em;
        }

        .cost {
            font-size: 1.5em;
            font-weight: bold;
        }

        .availability {
            width: 100%;
            margin: 0 0 3%;
            display: flex;
            align-items: center;
            justify-content: center;

            img {
                width: 10%;
                margin-left: 2%;
            }
        }

        .btn-buy {
            background: #FDB777;
            border-radius: 15px;
            color: #fff;
            border: 1px solid #FDB777;
            width: 60%;
        }
    }
</style>