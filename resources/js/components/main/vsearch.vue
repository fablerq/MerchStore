<template>
    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                   
                    <b-input-group>
                        <b-form-input  class="bg-black" variant="dark"  v-model="search" type="search" placeholder="Искать"></b-form-input>
                        <b-input-group-append>
                        <b-btn size="sm" text="Button" variant="dark" class="search-btn">Поиск</b-btn>
                        </b-input-group-append>
                    </b-input-group>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'vsearch',
    data () {
    return {
      search: ''
    }
  }
}
</script>

<style lang="scss" scoped>
.search {
    background: white;
    margin: 15px 0;
    width: 100%;

    .bg-black {

    }

    .search-btn {
        background: #FDB777;
        color: #fff;
        border: 1px solid #FDB777;
    }
}
</style>