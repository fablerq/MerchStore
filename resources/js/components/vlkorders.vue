<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vlksidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
            <div class="row active">
                <h3>Активные заказы</h3>
                <table class="table order">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Заказ №10 от 27.11.18</th>
                            <th scope="col">1200 р.</th>
                            <th scope="col">ожидает оплаты</th>
                            <th scope="col"><button type="button" class="btn btn-dark btn-sm btn-block change-btn">Повторить</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Футболка “ИСиТ”</td>
                            <td>500 р</td>
                            <td colspan="2">количество: 1</td>
                        </tr>
                        <tr>
                            <td>Свитшот “Мощь”</td>
                            <td>700р</td>
                            <td colspan="2">количество: 1</td>
                        </tr>
                        <tr>
                            <td class="table-active" colspan="4">Онлайн-оплата</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="row done">
                <h3>Завершенные заказы</h3>
                <table class="table order">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">Заказ №11 от 27.10.18</th>
                            <th scope="col">1200 р.</th>
                            <th scope="col">успешная оплата</th>
                            <th scope="col"><button type="button" class="btn btn-dark btn-sm btn-block change-btn">Повторить</button></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Футболка “ИСиТ”</td>
                            <td>500 р</td>
                            <td colspan="2">количество: 1</td>
                        </tr>
                        <tr>
                            <td>Свитшот “Мощь”</td>
                            <td>700р</td>
                            <td colspan="2">количество: 1</td>
                        </tr>
                        <tr>
                            <td class="table-active" colspan="4">Онлайн-оплата</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vlksidebar from './vlksidebar.vue'

export default {
  name: 'vlkorders',
  components: {vlksidebar}
}

</script>

<style lang="scss" scoped>
    .change-btn {
        background: #000;
        border-radius: 15px;
        color: #fff;
        border: 1px solid #000;
        margin-left: -5px;
    }

    .active,
    .done {
        margin-bottom: 2% 0;
    }

    .order {
        margin: 2% 0;
    }
</style>