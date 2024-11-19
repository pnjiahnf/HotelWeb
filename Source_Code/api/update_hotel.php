<?php
if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
    // Ambil data JSON yang dikirimkan
    $data = json_decode(file_get_contents("php://input"), true);

    // Ambil hotel data dari file hotels.json
    $hotels = json_decode(file_get_contents('../data/hotels.json'), true);

    // Cari hotel yang akan diupdate berdasarkan ID
    foreach ($hotels as &$hotel) {
        if ($hotel['id'] == $data['id']) {
            $hotel['name'] = $data['name'];
            $hotel['location'] = $data['location'];
            $hotel['description'] = $data['description'];
            $hotel['image'] = $data['image'];
            break;
        }
    }

    // Simpan data kembali ke file hotels.json
    file_put_contents('../data/hotels.json', json_encode($hotels, JSON_PRETTY_PRINT));

    echo json_encode(["message" => "Hotel updated successfully"]);
}
?>
