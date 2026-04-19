<?php

// Set header agar browser tahu ini adalah data JSON
header('Content-Type: application/json');

// Data sederhana (simulasi database)
$data = [
    ['nama' => 'Arvan', 'pekerjaan' => 'Web Developer', 'lokasi' => 'Tegal'],
    ['nama' => 'Aji', 'pekerjaan' => 'Data Scientist', 'lokasi' => 'Baseh'],
    ['nama' => 'Arnanda', 'pekerjaan' => 'Mobile Developer', 'lokasi' => 'Cilacap']
];

// Ubah array menjadi JSON dan tampilkan
echo json_encode($data);
