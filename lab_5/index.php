<?php
    session_start();
    // if (!isset($_SESSION['username'])) {
        // header("Location: form.php");
        // exit();
    // }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/main.css">
        <title>Авторизация</title>
    </head>
    <body>
        <form action="login.php" method="POST">
            <label>Логин</label>
            <input type="text" name="login" placeholder="Введите свой логин">
            <label>Пароль</label>
            <input type="password" name="password" placeholder="Введите пароль">
            <button type="submit" name="enterAcc">Войти</button>
            <button type="submit" name="createAcc">Создать аккаунт</button>
        </form>
    </body>
</html>