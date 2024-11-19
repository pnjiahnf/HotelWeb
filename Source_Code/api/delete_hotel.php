<?php
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
    // Ambil ID hotel yang akan dihapus
    $data = json_decode(file_get_contents("php://input"), true);
    $hotelId = $data['id'];

    // Ambil data hotel dari file hotels.json
    $hotels = json_decode(file_get_contents('../data/hotels.json'), true);

    // Filter hotel yang tidak terpilih berdasarkan ID
    $hotels = array_filter($hotels, function($hotel) use ($hotelId) {
        return $hotel['id'] != $hotelId;
    });

    // Simpan kembali data hotel yang sudah difilter
    file_put_contents('../data/hotels.json', json_encode(array_values($hotels), JSON_PRETTY_PRINT));

    echo json_encode(["message" => "Hotel deleted successfully"]);
}
?>
