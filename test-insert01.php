<?php
require __DIR__ .'/parts/connect_db.php';

$postData = [
    'total' => 240,
];

$sql = "INSERT INTO `order-history`(`total`) 
VALUES (?)";

$stmt = $pdo -> prepare($sql);

$stmt -> execute([
    $postData['total']
]);

echo $stmt -> rowCount();


