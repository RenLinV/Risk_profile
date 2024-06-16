<?php
require_once 'src/helpers.php';
checkGuest();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta chrset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk profile servey</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<form class="login" action="src/actions/login.php" method="post" enctype="multipart/form-data">
    <h1>Вход</h1>

    <?php if(hasMessage('error')): ?>
        <div class="notice error"><?php echo getMessage('error') ?></div>
    <?php endif; ?>

    <lable>
        <input
            type="text"
            id="email"
            name="email"
            placeholder="E-mail"
            value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?> 
	    >
    </lable>

    <lable>
        <input
            type="text"
            id="password"
            name="password"
            placeholder="*****"
	    >
    </lable>
    
    <button
        type="submit"
        id="submit"
    >Продолжить</button>

    <p class="link">У меня еще нет  <a href="/register.php">аккаунта</a></p>

</form>
<script src="/app.js"></script>
</body>
</html>