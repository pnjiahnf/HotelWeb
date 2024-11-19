<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $description = $_POST['description'];
    $image = $_POST['image'];

    $query = "INSERT INTO hotels (name, location, description, image) VALUES (?, ?, ?, ?)";
    $stmt = $pdo->prepare($query);
    $stmt->execute([$name, $location, $description, $image]);

    echo json_encode(["message" => "Hotel added successfully"]);
}
?>
