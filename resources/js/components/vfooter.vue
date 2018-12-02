<template>
    <footer>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 offset-5 offset-sm-5 offset-md-5 offset-lg-5 offset-xl-5">
                    <div class="about-us">
                        <p>
                            inst: @bonchmerch<br>tel: +799999999999
                        </p>
                        <p>
                            © Bonch.Dev 2018
                        </p>
                    </div>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 offset-3 offset-sm-3 offset-md-3 offset-lg-3 offset-xl-3">
                    <img  class="mainlogo" src="http://localhost/MerchStore/resources/imgs/mainlogo.png" alt="logo">
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name: 'vfooter'
}
</script>

<style lang="scss" scoped>
footer {
    width: 100%;
    height: 100%;
    background-color: #fff;
    padding: 15px 0;
    border-top: 10px solid black;

    .about-us {
        width:100%;
        text-align: center;
    }

    .mainlogo {
        width: 70%;
        float: right;
    }
}
</style>