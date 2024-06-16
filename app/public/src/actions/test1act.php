<?php 


require_once '../helpers.php';

$user = currentUser();

$qlist = ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10'];
foreach ($qlist as $val){
    if (empty($_POST[$val])) {
        setEmptyAns1($val);
    }
}

$email = $user['email'];

$pdo = getPDO();
$query = "INSERT INTO test1ans (email, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10) 
          VALUES (:email, :q1, :q2, :q3, :q4, :q5, :q6, :q7, :q8, :q9, :q10)";

$params = [
    ':email'=>$email,
    ':q1'=>$_POST['q1'],
    ':q2'=>$_POST['q2'],
    ':q3'=>$_POST['q3'],
    ':q4'=>$_POST['q4'],
    ':q5'=>$_POST['q5'],
    ':q6'=>$_POST['q6'],
    ':q7'=>$_POST['q7'],
    ':q8'=>$_POST['q8'],
    ':q9'=>$_POST['q9'],
    ':q10'=>$_POST['q10']
];

$stmt = $pdo->prepare($query);
try {
    $stmt->execute($params);
} catch (\Exception $e) {
    die($e->getMessage());
}

redirect('/test2.php');