<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data JSON yang dikirimkan
    $data = json_decode(file_get_contents("php://input"), true);

    // Ambil hotel data dari file hotels.json
    $hotels = json_decode(file_get_contents('../data/hotels.json'), true);

    // Tambahkan id baru berdasarkan jumlah hotel
    $newHotel = [
        "id" => count($hotels) + 1,
        "name" => $data['name'],
        "location" => $data['location'],
        "description" => $data['description'],
        "image" => $data['image']
    ];

    // Masukkan hotel baru ke dalam array hotels
    array_push($hotels, $newHotel);

    // Simpan data kembali ke file hotels.json
    file_put_contents('../data/hotels.json', json_encode($hotels, JSON_PRETTY_PRINT));

    echo json_encode(["message" => "Hotel added successfully"]);
}
?>
