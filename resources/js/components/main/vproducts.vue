<template>
    <div class="products">
        <vsearch/>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-5 col-lg-5 col-xl-5 hoody-col">
                    <div class="hoodys">
                        <router-link class="menu-link" :to="{ name: 'main' }">
                            <img  class="" src="../../../imgs/hoody.jpg" alt="logo">
                        </router-link>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-7 col-lg-7 col-xl-7">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pins-col">
                            <div class="pins">
                                <router-link class="menu-link" :to="{ name: 'main' }">
                            <img  class="" src="../../../imgs/stickers.png" alt="logo">
                        </router-link>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 top-buffer">
                            <div class="stickers">
                                <router-link class="menu-link" :to="{ name: 'main' }">
                            <img  class="" src="../../../imgs/badge.png" alt="logo">
                        </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 top-buffer">
                    <div class="stationery">
                        <router-link class="menu-link" :to="{ name: 'main' }">
                            <img  class="" src="../../../imgs/stationery.png" alt="logo">
                        </router-link>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-3 col-lg-3 col-xl-3 top-buffer">
                    <div class="backpacks">
                        <router-link class="menu-link" :to="{ name: 'main' }">
                            <img  class="" src="../../../imgs/backpack.jpg" alt="logo">
                        </router-link>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 top-buffer">
                    <div class="tees">
                        <router-link class="menu-link" :to="{ name: 'main' }">
                            <img  class="" src="../../../imgs/tees.jpg" alt="logo">
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
        <vcharts/>
    </div>
</template>

<script>
import vsearch from '../main/vsearch.vue'
import vcharts from '../main/vcharts.vue'

export default {
    name: 'vproducts',
    components: {vsearch, vcharts}
}
</script>

<style lang="scss" scoped>
    .menu-link {
        img {
            width: 100%;
        }
    }
    
    .top-buffer {
        margin-top: 15px;
    }

    

    @media (max-width: 768px) {
        .pins-col {
            margin-top: 15px;
        }
            
        .backpacks {
            img {
                width: 107%;
                margin-left: -7%;
            }
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .top-buffer {
            margin-top: 10px;
        }

        .hoodys {
            img {
                width: 103%;
                
            }
        }

        .stickers,
        .pins {
            img {
                width: 103%;
                margin-left: -3%;
            }
        }
        
        .stationery {
            img {
                width: 104.5%;
            }
        }

        .tees {
            img {
                width: 104%;
                margin-left: -4%;
            }
        }

        .backpacks {
            img {
                width: 112%;
                margin-left: -8%;
            }
        }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
        .hoodys {
            img {
                width: 101.5%;
                
            }
        }

        .stickers,
        .pins {
            img {
                width: 102%;
                margin-left: -2%;
            }
        }
        
        .stationery {
            img {
                width: 100.5%;
            }
        }

        .tees {
            img {
                width: 102.5%;
                margin-left: -2.5%;
            }
        }

        .backpacks {
            img {
                width: 107.5%;
                margin-left: -5.5%;
            }
        }
    }

    @media (min-width: 1200px) { 
        .hoodys {
            img {
                width: 100.5%;
                
            }
        }

        .stickers,
        .pins {
            img {
                width: 102%;
                margin-left: -2%;
            }
        }
        
        .stationery {
            img {
                width: 99.5%;
            }
        }

        .tees {
            img {
                width: 102.5%;
                margin-left: -2.5%;
            }
        }

        .backpacks {
            img {
                width: 106.5%;
                margin-left: -6.5%;
            }
        }
    }



</style>