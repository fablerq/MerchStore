<template>
    <div class="search">
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <form class="form-inline">
                        <input class="form-control-lg" type="text" placeholder="Искать..." aria-label="Search">
                        <!--<button class="btn btn-primary search-btn" type="submit">Button</button>-->
                    </form>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2">
                    <button type="button" class="btn btn-primary btn-lg btn-block cart-btn">Корзина</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'vsearch'
}
</script>

<style lang="scss" scoped>
.search {
    background: white;
    margin: 15px 0;
    width: 100%;

    .form-control-lg {
        width: 100%;
        border-radius: 15px;
        background: #000;
        color: #fff;
        border: none;
        outline: none;
    }

    .cart-btn {
        background: #FDB777;
        border-radius: 15px;
        color: #fff;
        border: 1px solid #FDB777;
        margin-left: -5px;
    }

    /*
    .btn-primary {
        border-radius: 10px;
    }
    */
}
</style>