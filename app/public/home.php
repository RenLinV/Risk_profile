<?php
require_once 'src/helpers.php';
checkAuth();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta chrset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk profile servey</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        .start{
            margin-bottom: 20px;
            text-align: center;
            max-width: 100%; /* Устанавливаем стандартное выравнивание текста */
            line-height: 1.8;
            font-size: 16px;
            padding-top: 0;
            margin:auto;
            background-color: rgba(255, 255, 255, 0); 
            color: white; 
            transition-duration: 0.4s;
            cursor: pointer;
            border: 2px solid rgb(34, 232, 254);
            border-width: 0.5px;
            border-radius: 8px;
            margin-left: 30%;
            margin-top:10%;
            margin-bottom:10%;
            font-size: 36px;
        }
        .start:hover{
            color: rgb(255, 0, 144);
            border: 2px solid rgb(190, 7, 53);
        }
        .logout{
            margin-bottom: 20px;
            text-align: center;
            max-width: 100%; /* Устанавливаем стандартное выравнивание текста */
            line-height: 1.8;
            padding-top: 0;
            margin:auto;
            background-color: rgba(255, 255, 255, 0); 
            color: white; 
            transition-duration: 0.4s;
            cursor: pointer;
            border: 2px solid rgb(34, 232, 254);
            border-width: 0.5px;
            border-radius: 8px;
            margin-left: 5%;
            margin-top:5%;
            margin-bottom:15%;
            font-size: 20px;
            width:40vh;
            height: 10vh;
        }
        .logout:hover{
            color: rgb(255, 0, 144);
            border: 2px solid rgb(190, 7, 53);
        }
    </style>

</head>
<body>
    <button onclick="location.href = '/test1.php';" class="start">Начать</button>
    <form action="src/actions/logout.php" method="post">
        <button class='logout' role="button">Выйти из аккаунта</button>
    </form>
    
</body>
</html>