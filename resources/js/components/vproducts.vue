<template>
    <div class="products">
        <div class="container-fluid">
            <div class="row">
                <div class="col-5 col-sm-5 col-md-5 col-lg-5 col-xl-5">
                    <div class="sweatshirts"></div>
                </div>
                <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="pins"></div>
                        </div>
                    </div>
                    <div class="row top-buffer">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="stickers"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row top-buffer">
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="stationery"></div>
                </div>
                <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                    <div class="backpacks"></div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="tees"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'vproducts'
}
</script>

<style lang="scss" scoped>
    .products {
        width: 100%;
    }
    .sweatshirts {
        background: orange;
        height: 420px;
        width: 103%;
    }

    .stickers {
        background: black;
        height: 202.5px;
        width: 100%;
    }

    .pins  {
        background:grey;
        height: 202.5px;
        width: 100%;
    }

    .stationery {
        background: orange;
        height: 400px;
        width: 105%;
    }

    .backpacks{
        background: orange;
        height: 400px;
        width: 105%;
    }

    .tees {
        background: orange;
        height: 400px;
        width: 100%;
    }
    .top-buffer {
        margin-top: 15px;
    }
</style>