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
                                <th scope="row">Фамилия</th>
                                <td>Спасите</td>
                            </tr>
                            <tr>
                                <th scope="row">Имя</th>
                                <td>Я</td>
                            </tr>
                            <tr>
                                <th scope="row">Эл. почта</th>
                                <td>хочу@gmail.com</td>
                            </tr>
                            <tr>
                                <th scope="row">Телефон</th>
                                <td>+7(91с)пат-ь3-76</td>
                            </tr>
                            <tr>
                                <th scope="row">Дата регистрации</th>
                                <td>20.10.2000</td>
                            </tr>
                            <tr>
                                <td colspan="2"><button type="button" class="btn btn-dark btn-sm btn-block change-btn">Изменить пароль</button></td>
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

export default {
  name: 'vlkdata',
  components: {vlksidebar}
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