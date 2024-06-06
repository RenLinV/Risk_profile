<?php
require_once 'src/helpers.php';
//checkGuest();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta chrset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risk profile servey</title>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

<form class="card" action="src/actions/register.php" method="post" enctype="multipart/form-data">
    <h1>Регистрация</h1>
    <lable>
        <input
            type="text"
            id="name"
            name="name"
            placeholder="Имя"
            value="<?php echo old('name') ?>"

	    >
        <?php if(hasValidationError('name')): ?>
            <small><?php echo validationErrorMessage('name'); ?></small>
        <?php endif; ?>
    </lable>

    <lable>
        <input
            type="text"
            id="email"
            name="email"
            placeholder="E-mail"
            value="<?php echo old('email') ?>"
            <?php echo validationErrorAttr('email'); ?> 
	    >
        <?php if(hasValidationError('email')): ?>
            <small><?php echo validationErrorMessage('email'); ?></small>
        <?php endif; ?>
    </lable>

    <lable>
        <input
            type="text"
            id="password"
            name="password"
            placeholder="*****"
            value="<?php echo old('password') ?>"
            <?php echo validationErrorAttr('password'); ?> 
	    >
        <?php if(hasValidationError('password')): ?>
            <small><?php echo validationErrorMessage('password'); ?></small>
        <?php endif; ?>
    </lable>
    
    <button
        type="submit"
        id="submit"
    >Продолжить</button>

</form>
<script src="/app.js"></script>
</body>
</html>