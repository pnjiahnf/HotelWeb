<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $query = "DELETE FROM hotels WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$id]);

    echo json_encode(["message" => "Hotel deleted successfully"]);
}
?>
