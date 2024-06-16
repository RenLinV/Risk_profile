<?php
require_once 'src/helpers.php';
checkAuth();

$user = currentUser();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
<meta chrset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk profile servey</title>
    <link rel="stylesheet" href="/css/test1.css">
</head>
<body>
<div class="header">
    <!--<h2>Первый этап</h2>--><div class='headertxt'><h2>Первый этап</h2></div>
</div>
<form class="test1" action="src/actions/test1act.php" method="post" enctype="multipart/form-data">
    <label class='question'>1.Ваш возраст:</label> <br><br>
    <label><input type="radio" name="q1" value="1" required></label> до 25 лет<br>
    <label><input type="radio" name="q1" value="2"></label> от 25 до 50 лет<br>
    <label><input type="radio" name="q1" value="3"></label> больше 50 лет<br>
    <hr>
    <label class='question'>2.Опыт инвестирования:</label> <br><br>
    <label><input type="radio" name="q2" value="1" required></label> банковские вклады, наличная валюта<br>
    <label><input type="radio" name="q2" value="2"></label> пенсионные фонды, страхование жизни<br>
    <label><input type="radio" name="q2" value="3"></label> паеввые фонды, доверительное управление, пассивное инвестирование<br>
    <label><input type="radio" name="q2" value="4"></label> самостоятельная активная торговля ценными бумагами<br>
    <hr>
    <label class='question'>3.Срок инвестирования:</label> <br><br>
    <label><input type="radio" name="q3" value="1" required></label> до 1 года<br>
    <label><input type="radio" name="q3" value="2"></label> 1-3 года<br>
    <label><input type="radio" name="q3" value="3"></label> 3-5 лет<br>
    <label><input type="radio" name="q3" value="4"></label> более 5 лет<br>
    <hr>
    <label class='question'>4.Соотношение средних расходов и доходов:</label> <br><br>
    <label><input type="radio" name="q4" value="1" required></label> расходы больше доходов<br>
    <label><input type="radio" name="q4" value="2"></label> расходы меньше доходов<br>
    <hr>
    <label class='question'>5.Соотношение активов, которые готовы <br/> &ensp;инвестировать, и сбережений:</label> <br><br>
    <label><input type="radio" name="q5" value="1" required></label> передаются практически все сбережения <br>
    <label><input type="radio" name="q5" value="2"></label> передается большая часть сбережений <br>
    <label><input type="radio" name="q6" value="3"></label> передается меньшая часть сбережений<br>
    <hr>
    <label class='question'>6.Цель инвестирования:</label> <br><br>
    <label><input type="radio" name="q6" value="1" required></label> сохранить капитал, который уже есть. Меня устраивают ставки <br/> &emsp;&emsp;&emsp; по вкладам. Не хочу рисковать.<br>
    <label><input type="radio" name="q6" value="2"></label> Стремлюсь получить более высокую доходность, чем по обычным <br/> &emsp;&emsp;&emsp; вкладам, поэтому готов принять небольшие риски.<br>
    <label><input type="radio" name="q6" value="3"></label> Основная цель – получить существенный доход. Спокойно отношусь <br/> &emsp;&emsp;&emsp; к рискам.<br>
    <label><input type="radio" name="q6" value="3"></label> Главное – получить максимальный доход. Готов мириться <br/> &emsp;&emsp;&emsp; со значительными рисками.<br>
    <hr>
    <label class='question'>7.Доход от Ваших инвестиций предназначен для:</label> <br><br>
    <label><input type="radio" name="q7" value="1" required></label> покрытия текущих расходов<br>
    <label><input type="radio" name="q7" value="2"></label> реализации пректов (совершение крупных покупок) на среднесрочной <br/> &emsp;&emsp;&emsp; перспективе<br>
    <label><input type="radio" name="q7" value="3"></label> формирование капитала в долгосрочной перспективе<br>
    <label><input type="radio" name="q7" value="4"></label> максимизация богатства (инвестиционный портфель не критичен <br/> &emsp;&emsp;&emsp;для реализации как краткосрочных, так и долгосрочных целей)<br>
    <hr>
    <label class='question'>8.Планируете ли тратить инвестируемые <br/> &ensp;средства на ежедневные расходы:</label> <br><br>
    <label><input type="radio" name="q8" value="1" required></label> Не планирую их использовать.<br>
    <label><input type="radio" name="q8" value="2"></label> Планирую тратить инвестированные средства на небольшую часть <br/> &emsp;&emsp;&emsp; текущих расходов.<br>
    <label><input type="radio" name="q8" value="3"></label> Планирую тратить инвестированные средства на большую часть <br/> &emsp;&emsp;&emsp; текущих расходов <br>
    <hr>
    <label class='question'>9.Какова вероятность, что Вы захотите изъять <br/> &ensp;большую часть инвестированной суммы досрочно?</label> <br><br>
    <label><input type="radio" name="q9" value="1" required></label> низкая<br>
    <label><input type="radio" name="q9" value="2"></label> средняя<br>
    <label><input type="radio" name="q9" value="3"></label> скорее высокая<br>
    <label><input type="radio" name="q9" value="4"></label> высокая<br>
    <hr>
    <label class='question'>10.Ваши действия в случае снижения стоимости <br/> &ensp;портфеля:</label> <br><br>
    <label><input type="radio" name="q10" value="1" required></label> Для меня это недопустимо. Интересует стабильный доход<br>
    <label><input type="radio" name="q10" value="2"></label> Выведу средства из рискованных продуктов и размещу все на вкладах<br>
    <label><input type="radio" name="q10" value="3"></label> Буду ждать, когда стоимость портфеля снова увеличится, а также <br/> &emsp;&emsp;&emsp; буду докупать инвестиционные продукты небольшими частями<br>
    <label><input type="radio" name="q10" value="4"></label> Использую этот момент для активных покупок инвестиционных <br/> &emsp;&emsp;&emsp; продуктов с целью получения более высокого потенциального дохода<br>
    <button class="start" id='test1but' type='sybmit'>Продолжить</button><br><br>
    <button onclick="location.href = 'src/actions/logout.php';" class="start">logout</button>
</form>
<script>
    function checkNameAndRedirect() {
        window.location.href = '/test2.php';
    }
document.getElementById('test1but').addEventListener('click', checkNameAndRedirect);
</script>
</body>
</html>