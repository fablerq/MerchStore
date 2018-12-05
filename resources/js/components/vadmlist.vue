<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vadmsidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">

          <div class="row align-items-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10"> 
                    <h1>Список товаров</h1>
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

          <div class="row good align-items-center">

                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 good-image-name">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                            <img src="http://localhost/MerchStore/resources/imgs/item-in-list.png" alt="good-icon" class="good-icon">
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 name-of-item"> 
                            <span>Футболка 1</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="type area rounded mb">Одежда, футболки</div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="fac area rounded ">ИСиТ</div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="cost area rounded ">600 р.</div>
                        </div>
                    </div>
                </div>

                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                            <button type="button" class="btn btn-primary btn-md btn-block">Изменить товар</button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                            <button type="button" class="btn btn-primary btn-md btn-block">Удалить товар</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row good align-items-center">

                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 good-image-name">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                            <img src="http://localhost/MerchStore/resources/imgs/item-in-list.png" alt="good-icon" class="good-icon">
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 name-of-item"> 
                            <span>Футболка 2</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="type area rounded mb">Одежда, футболки</div>
                        </div>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="fac area rounded ">ИСиТ</div>
                        </div>
                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                            <div class="cost area rounded ">600 р.</div>
                        </div>
                    </div>
                </div>

                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                            <button type="button" class="btn btn-primary btn-md btn-block">Изменить товар</button>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"> 
                            <button type="button" class="btn btn-primary btn-md btn-block">Удалить товар</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import vadmsidebar from './vadmsidebar.vue'

export default {
  name: 'vadmlist',
  components: {vadmsidebar}
}

</script>

<style lang="scss" scoped>
    .good {
        margin-bottom: 3%;
    }

    .good-image-name {
        text-align: center;
    }

    .good-icon {
        width: 80%;
        margin-top: 10%;
    }

    .area {
        width: 100%;
        border: 1px solid #000;
        padding: 2%;
        text-align: center;
    }

    .mb {
       margin-bottom: 5%;
    }

    .btn {
            background: #000;
            border-radius: 3px;
            color: #fff;
            border: 1px solid #000;
            margin: 5% 0;
        }
</style>