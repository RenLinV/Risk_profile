<?php 


require_once '../helpers.php';

$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$password = $_POST['password'] ?? null;

if (empty($name)) {
    setValidationError('name', 'Неверное имя');
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setValidationError('email', 'Указана неправильная почта');
}
if (empty($password)) {
    setValidationError('password', 'Пароль пустой');
}
$usercheck = findUser($email);

if ($usercheck) {
    setValidationError('email', "Пользователь уже зарегистрирован");
    setOldValue('name', $name);
    redirect('/register.php');
}

if (!empty($_SESSION["validation"])) {
    setOldValue('name', $name);
    setOldValue('email', $email);
    redirect('/register.php');
}

if (empty($_SESSION["validation"])) {
    $pdo = getPDO();
    $query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";

    $params = [
        'name'=>$name,
        'email'=>$email,
        'password'=>$password,
    ];

    $stmt = $pdo->prepare($query);
    try {
        $stmt->execute($params);
    } catch (\Exception $e) {
        die($e->getMessage());
    }

    redirect('/index.php');
}