<?php
require_once '../src/helpers.php';

//checkGuest();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta chrset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk profile servey</title>
    <link rel="stylesheet" href="app.css">
</head>
<body>

<form class="card" action="/register.php" method="post" enctype="multipart/form-data">
    <h1>Регистрация</h1>
    
    <button
        type="submit"
        id="submit"
    >Продолжить</button>

</form>
<script src="../src/app.js"></script>
</body>
</html>