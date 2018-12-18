<template>
    <div class="search">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">                   

                          <v-text-field
        append-icon="search"
        label="Search"
        single-line
        hide-details
      ></v-text-field>
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