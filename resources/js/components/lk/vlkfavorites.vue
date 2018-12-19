<template>
  <div class="goodslist">
    <div class="container">
      <div class="row">
        <vlksidebar/>
        <div class="col-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">

            <div class="row align-items-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-9"> 
                    <h1>Избранное</h1>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-3">
                    <button type="button" class="btn btn-secondary btn-lg btn-block cart-btn">Купить все</button>
                </div>
          </div>

<p>Функционал избранных готов в админке, сюда еще предстоит добавить</p>

          <div class="row favorites align-items-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4"> 
                   <div class="favorite-card">
                       <img src="../../../imgs/favorite-img.png" alt="">
                       <div class="name">Футболка “На связи”</div>
                       <div class="cost">600 р.</div>
                       <div class="availability text-success"><div>На складе</div><img src="../../../imgs/check.png" alt=""></div>
                       <button type="button" class="btn btn-secondary btn-sm btn-buy">Купить</button>
                   </div>
                </div>
                                <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4"> 
                   <div class="favorite-card">
                       <img src="../../../imgs/favorite-img.png" alt="">
                       <div class="name">Футболка “На связи”</div>
                       <div class="cost">600 р.</div>
                       <div class="availability text-success"><div>На складе</div><img src="../../../imgs/check.png" alt=""></div>
                       <button type="button" class="btn btn-secondary btn-sm btn-buy">Купить</button>
                   </div>
                </div>
                                <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4"> 
                   <div class="favorite-card">
                       <img src="../../../imgs/favorite-img.png" alt="">
                       <div class="name">Футболка “На связи”</div>
                       <div class="cost">600 р.</div>
                       <div class="availability text-success"><div>На складе</div><img src="../../../imgs/check.png" alt=""></div>
                       <button type="button" class="btn btn-secondary btn-sm btn-buy ">Купить</button>
                   </div>
                </div>
          </div>

          <div class="row favorites align-items-center">
                <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4"> 
                   <div class="favorite-card">
                       <img src="../../../imgs/favorite-img.png" alt="">
                       <div class="name">Футболка “На связи”</div>
                       <div class="cost">600 р.</div>
                       <div class="availability text-success"><div>На складе</div><img src="../../../imgs/check.png" alt=""></div>
                       <button type="button" class="btn btn-secondary btn-sm btn-buy">Купить</button>
                   </div>
                </div>
                                <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4"> 
                   <div class="favorite-card">
                       <img src="../../../imgs/favorite-img.png" alt="">
                       <div class="name">Футболка “На связи”</div>
                       <div class="cost">600 р.</div>
                       <div class="availability text-success"><div>На складе</div><img src="../../../imgs/check.png" alt=""></div>
                       <button type="button" class="btn btn-secondary btn-sm btn-buy">Купить</button>
                   </div>
                </div>
                                <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-4"> 
                   <div class="favorite-card">
                       <img src="../../../imgs/favorite-img.png" alt="">
                       <div class="name">Футболка “На связи”</div>
                       <div class="cost">600 р.</div>
                       <div class="availability text-success"><div>На складе</div><img src="../../../imgs/check.png" alt=""></div>
                       <button type="button" class="btn btn-secondary btn-sm btn-buy">Купить</button>
                   </div>
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
  name: 'vlkfavorites',
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