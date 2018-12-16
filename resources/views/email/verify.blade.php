<template>
    <div>

        <!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>

<div>
    <h4> Приветствуем {{ $login }}, </h4>
    <br>
    Спасибо за создание аккаунта в нашем интернет-магазине BonchMerch! Осталось только подтвердить свою почту и можете переходить к заказу.
    <br>
    Если вы не создавали аккаунт просто проигнорируйте это сообщение.
    <br>
    Подтвердите свой e-mail по ссылке снизу или скопируйте и вставьте ссылку в строку поиска своего браузера
    <br>

    <a href="{{ url('verify', $verification_code)}}">Confirm my email address</a>

    <br/>
</div>

</body>
</html>

    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
