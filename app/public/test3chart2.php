<?php
require_once 'src/helpers.php';
checkAuth();

$user = currentUser();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Test3</title>
<link rel="stylesheet" href="/css/test3.css">
</head>
<body>
<div class="container">
    <div class="video">
        <video id="myVideo" ><source src="materials/second_chart.mov"></video>
    </div>
    <div class='ans'>
        <div class="question-block">
            <h2>Третий этап</h2>
            <div id="balanceDisplay" class="balance">Текущая стоимость портфеля: <span id="balanceValue">10000</span></div>
            <div id="changeDisplay" class="change">Изменение: <span id="changeValue">0</span></div>
            <div id="resultDisplay" class="result">Итог: <span id="resultValue">0</span></div>
            <button id="playVideo" class='play' type="button" style='display: block;'>Продолжить</button>

            <form class="formContainer" action='src/actions/test3chart2act.php' method="post" enctype="multipart/form-data">
                <div id='Q1' class="radioBlock">
                    <input type="radio" name="q1" value="1" required checked>Купить &ensp;
                    <input type="radio" name="q1" value="2">Продать &ensp;
                    <input type="radio" name="q1" value="3">Пропустить
                </div>
                <div id='Q2' class="radioBlock">
                    <input type="radio" name="q2" value="1" required checked>Купить &ensp;
                    <input type="radio" name="q2" value="2">Продать &ensp;
                    <input type="radio" name="q2" value="3">Пропустить
                </div>
                <div id='Q3' class="radioBlock">
                    <input type="radio" name="q3" value="1" required checked>Купить &ensp;
                    <input type="radio" name="q3" value="2">Продать &ensp;
                    <input type="radio" name="q3" value="3">Пропустить
                </div>
                <div id='Q4' class="radioBlock">
                    <input type="radio" name="q4" value="1" required>Купить &ensp;
                    <input type="radio" name="q4" value="2">Продать &ensp;
                    <input type="radio" name="q4" value="3">Пропустить
                </div>
                <div id='Q5' class="radioBlock">
                    <input type="radio" name="q5" value="1" required>Купить &ensp;
                    <input type="radio" name="q5" value="2">Продать &ensp;
                    <input type="radio" name="q5" value="3">Пропустить
                </div>
                <div id='Q6' class="radioBlock">
                    <input type="radio" name="q6" value="1" required>Купить &ensp;
                    <input type="radio" name="q6" value="2">Продать &ensp;
                    <input type="radio" name="q6" value="3">Пропустить
                </div>
                <div id='Q7' class="radioBlock">
                    <input type="radio" name="q7" value="1" required>Купить &ensp;
                    <input type="radio" name="q7" value="2">Продать &ensp;
                    <input type="radio" name="q7" value="3">Пропустить
                </div>
                <div id='Q8' class="radioBlock">
                    <input type="radio" name="q8" value="1" required>Купить &ensp;
                    <input type="radio" name="q8" value="2">Продать &ensp;
                    <input type="radio" name="q8" value="3">Пропустить
                </div>
                <div id='Q9' class="radioBlock">
                    <input type="radio" name="q9" value="1" required>Купить &ensp;
                    <input type="radio" name="q9" value="2">Продать &ensp;
                    <input type="radio" name="q9" value="3">Пропустить
                </div>
                <button class="formsubmitbutton" id='submitButton' type='submit'>Следующий кейс</button><br><br>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script src='/test3script/chart2.js'></script>

</body>
</html> 