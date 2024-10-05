<?php
// Pastikan header JSON agar browser tahu ini adalah response JSON
header('Content-Type: application/json');

// Path ke file JSON Anda
$file = 'protected/adm.json';

// Pastikan file JSON ada sebelum membaca
if (file_exists($file)) {
    // Ambil konten file JSON
    $json = file_get_contents($file);
    
    // Tampilkan JSON
    echo $json;
} else {
    // Jika file tidak ditemukan, kembalikan pesan error
    http_response_code(404);
    echo json_encode(["error" => "File not found"]);
}
?>
