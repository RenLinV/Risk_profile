<?php
require_once 'src/helpers.php';
checkAuth();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Final</title>
<style>
    *{
        font-family: "Andale Mono", monospace;
        font-weight: 900;
    }
    body {
        background: rgb(19, 4, 39);
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        flex-direction: column;
    }
    h1 {
        text-align: center;
        font-size: 38px;
        color: rgb(255, 0, 144);
        font-weight: 1000;
        padding-top: 17%;
    }
    .play{
        margin-bottom: 20px;
        text-align: center;
        max-width: 100%; /* Устанавливаем стандартное выравнивание текста */
        line-height: 1.8;
        font-size: 24px;
        background-color: rgba(255, 255, 255, 0); 
        color: rgba(255, 0, 144, 0); 
        transition-duration: 0.4s;
        cursor: pointer;
        border:rgba(255, 0, 144, 0);
        border-width: 0.5px;
        border-radius: 8px;
        margin-left: 0%;
        margin-top:3%;
        margin-bottom:0%;
    }
    #testRes, #gameRes{
        display: none;
        text-align: center;
        font-size: 26px;
        color: white;
        font-weight: 1000;
        padding-top: 0%;
    }
    #testResValue, #gameResValue{
        color:rgb(34, 232, 254);
    }
</style>
</head>
<body>
    <h1>Спасибо за участие в исследовании!</h1>
    <button id="result" class='play' type="button" style='display: block;'>Результат</button>
    <div id="testRes" class="test">Результат опроса: <span id="testResValue"></span></div> <br/>
    <div id="gameRes" class="game">Результат интерактивной игры: <span id="gameResValue"></span></div>
    <script src='js/finish.js'></script>
</body>
</html> 
