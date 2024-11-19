<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $query = "UPDATE hotels SET name = ?, location = ?, description = ?, image = ? WHERE id = ?";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $location, $description, $image, $id]);

    echo json_encode(["message" => "Hotel updated successfully"]);
}
?>
