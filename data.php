<?php

// Set header agar browser tahu ini adalah data JSON
header('Content-Type: application/json');

// Data sederhana (simulasi database)
$data = [
    ['nama' => 'AJI', 'pekerjaan' => 'Menganalisis Lawan', 'lokasi' => 'Purwokerto'],
    ['nama' => 'MESSI', 'pekerjaan' => 'Passing ke Bambang Pamungkas', 'lokasi' => 'Argentina'],
    ['nama' => 'BAMBANG PAMUNGKAS', 'pekerjaan' => 'Mencetak Goal', 'lokasi' => 'Jakarta']
];

// Ubah array menjadi JSON dan tampilkan
echo json_encode($data);
