<?php
header('Content-Type: application/json');

// Ambil data dari file JSON
$hotels = file_get_contents('../data/hotels.json');
echo $hotels;
?>
