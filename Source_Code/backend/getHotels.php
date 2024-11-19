<?php
include 'db.php';

$query = "SELECT * FROM hotels";
$stmt = $pdo->prepare($query);
$stmt->execute();
$hotels = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($hotels);
?>
