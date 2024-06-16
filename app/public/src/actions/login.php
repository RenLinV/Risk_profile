<?php 


require_once '../helpers.php';

$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;
$_SESSION['cnt'] = 0;

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setOldValue('email', $email);
    setValidationError('email', 'Неверный формат электронной почты');
    setMessage('error', 'Неверный формат электронной почты');
    redirect('/');
}

$user = findUser($email);

if (!$user) {
    setMessage('error', "Пользователь не найден");
    redirect('/');
}

if ($password!=$user['password']) {
    setMessage('error', 'Неверный пароль');
    redirect('/');
}

$_SESSION['user']['id'] = $user['id'];

redirect('/home.php');