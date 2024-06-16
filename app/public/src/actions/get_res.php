<?php
require_once '../helpers.php';

$user = currentUser();
$email = $user['email'];

$pdo = getPDO();

$stmt = $pdo->prepare("SELECT Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9, Q10 FROM test1ans WHERE email = ?");
$stmt->execute([$email]);
$rowt1 = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT answer FROM test2ans WHERE email = ?");
$stmt->execute([$email]);
$rowt2 = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9 FROM test3chart1 WHERE email = ?");
$stmt->execute([$email]);
$rowt3c1 = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9 FROM test3chart2 WHERE email = ?");
$stmt->execute([$email]);
$rowt3c2 = $stmt->fetch(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("SELECT Q1, Q2, Q3, Q4, Q5, Q6, Q7 FROM test3chart3 WHERE email = ?");
$stmt->execute([$email]);
$rowt3c3 = $stmt->fetch(PDO::FETCH_ASSOC);

if ($rowt2) {
    echo json_encode(['success' => true, 'anst2' => $rowt2['answer'], 
                    'q1' => $rowt1['Q1'], 'q2' => $rowt1['Q2'], 'q3' => $rowt1['Q3'], 
                    'q4' => $rowt1['Q4'], 'q5' => $rowt1['Q5'], 'q6' => $rowt1['Q6'], 
                    'q7' => $rowt1['Q7'], 'q8' => $rowt1['Q8'], 'q9' => $rowt1['Q9'], 'q10' => $rowt1['Q10'],
                    'c1q1' => $rowt3c1['Q1'], 'c1q2' => $rowt3c1['Q2'], 'c1q3' => $rowt3c1['Q3'], 
                    'c1q4' => $rowt3c1['Q4'], 'c1q5' => $rowt3c1['Q5'], 'c1q6' => $rowt3c1['Q6'], 
                    'c1q7' => $rowt3c1['Q7'], 'c1q8' => $rowt3c1['Q8'], 'c1q9' => $rowt3c1['Q9'],
                    'c2q1' => $rowt3c2['Q1'], 'c2q2' => $rowt3c2['Q2'], 'c2q3' => $rowt3c2['Q3'], 
                    'c2q4' => $rowt3c2['Q4'], 'c2q5' => $rowt3c2['Q5'], 'c2q6' => $rowt3c2['Q6'],
                    'c2q7' => $rowt3c2['Q7'], 'c2q8' => $rowt3c2['Q8'], 'c2q9' => $rowt3c2['Q9'], 
                    'c3q1' => $rowt3c3['Q1'], 'c3q2' => $rowt3c3['Q2'], 'c3q3' => $rowt3c3['Q3'],
                    'c3q4' => $rowt3c3['Q4'], 'c3q5' => $rowt3c3['Q5'], 'c3q6' => $rowt3c3['Q6'], 
                    'c3q7' => $rowt3c3['Q7']]);
} else {
    echo json_encode(['success' => false]);
}
?>