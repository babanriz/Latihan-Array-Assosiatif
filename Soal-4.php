<?php
// Data array asosiatif
$siswa = [
    [
        "nama" => "Ayu Rahma",
        "usia" => 17,
        "kelas" => "XI IPA 3",
        "nilai" => [
            "matematika" => 85,
            "bahasaIndonesia" => 90,
            "fisika" => 88
        ]
    ],
    [
        "nama" => "Budi Santoso",
        "usia" => 16,
        "kelas" => "XI IPS 1",
        "nilai" => [
            "matematika" => 78,
            "bahasaIndonesia" => 82,
            "fisika" => 80
        ]
    ],
    [
        "nama" => "Citra Dewi",
        "usia" => 17,
        "kelas" => "XI IPA 2",
        "nilai" => [
            "matematika" => 92,
            "bahasaIndonesia" => 88,
            "fisika" => 91
        ]
    ],
    [
        "nama" => "Dedi Suryanto",
        "usia" => 16,
        "kelas" => "X IPA 1",
        "nilai" => [
            "matematika" => 65,
            "bahasaIndonesia" => 70,
            "fisika" => 75
        ]
    ],
    [
        "nama" => "Eka Putra",
        "usia" => 17,
        "kelas" => "XII IPA 4",
        "nilai" => [
            "matematika" => 88,
            "bahasaIndonesia" => 87,
            "fisika" => 90
        ]
    ]
];

// tampilkan nama siswa, kelas siswa dan nilai matematikanya saja

for ($i = 0; $i < count($siswa); $i++) {
    // Mengambil nama siswa, kelas, dan nilai matematika
    $nama = $siswa[$i]["nama"];
    $kelas = $siswa[$i]["kelas"];
    $nilaiMatematika = $siswa[$i]["nilai"]["matematika"];

    // Pengkondisian if untuk menampilkan nilai matematika lebih dari 80
    if ($nilaiMatematika >= 65) {
        // Menampilkan nama siswa, kelas, dan nilai matematika
        echo "Nama: " . $nama . "<br>";
        echo "Kelas: " . $kelas . "<br>";
        echo "Nilai Matematika: " . $nilaiMatematika . "<br><br>";
    }
}
?>