<?php 


require_once '../helpers.php';

$user = currentUser();

if (empty($_POST['Question'])) {
    setEmptyAns1('Question');
}

$email = $user['email'];

$pdo = getPDO();
$query = "INSERT INTO test2ans (email, answer) 
          VALUES (:email, :Question)";

$params = [
    ':email'=>$email,
    ':Question'=>$_POST['Question'],
];

$stmt = $pdo->prepare($query);
try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/test3chart1.php');