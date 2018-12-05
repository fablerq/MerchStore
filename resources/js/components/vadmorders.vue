<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vadmsidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">

          <div class="row align-items-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"> 
                    <h1>Список заказаов</h1>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <select class="form-control filter" id="filter">
                        <option>ИСиТ</option>
                        <option>ИКСС</option>
                        <option>РТС</option>
                        <option>ГМ</option>
                        <option>ИВО</option>
                    </select>
                </div>
          </div>

            <div class="row active">
                <h3>Активные</h3>
                <table class="table order">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">Заказ №10 от 27.11.18</th>
                            <th scope="col">1200 р.</th>
                            <th scope="col">ожидает оплаты</th>
                            <th scope="col"><button type="button" class="btn btn-dark btn-sm btn-block change-btn">Изменить</button></th>
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
                <h3>Завршенные</h3>
                <table class="table order">
                    <thead class="table-success">
                        <tr>
                            <th scope="col">Заказ №11 от 27.10.18</th>
                            <th scope="col">1200 р.</th>
                            <th scope="col">успешная оплата</th>
                            <th scope="col"><button type="button" class="btn btn-dark btn-sm btn-block change-btn">Изменить</button></th>
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
import vadmsidebar from './vadmsidebar.vue'

export default {
  name: 'vadmorders',
  components: {vadmsidebar}
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