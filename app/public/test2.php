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
<title>Dynamic Line Charts with Chart.js</title>
<link rel="stylesheet" href="/css/test2.css">
</head>
<body>
<div class="container">
    <div class="charts">
        <div class="chart-container">
            <canvas id="lineChart"></canvas>
        </div> <br/>
        <div class="chart-container">
            <canvas id="lineChart1"></canvas>
        </div> <br/>
        <div class="chart-container">
            <canvas id="lineChart2"></canvas>
        </div> <br/>
    </div>
    <div class='ans'>
        <div class="question-block">
            <h2>Второй этап</h2>
            <div class="question-text">На графиках представлены варианты разной динамики изменения % от вложеных инвестиций. Выберете тот, который по Вашему мнению, вам наиболее подходит.</div>
            <form class="radio-buttons" action='src/actions/test2act.php' method="post" enctype="multipart/form-data">
                <input type="radio" name="Question" value="1" required/>
                <label for="option1">Вариант 1</label><br>
                <input type="radio" name="Question" value="2"/>
                <label for="option2">Вариант 2</label><br>
                <input type="radio" name="Question" value="3"/>
                <label for="option3">Вариант 3</label> <br/>
                <button class="start" id='test1but'>Продолжить</button><br><br>
            </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="script.js"></script>

</body>
</html>
