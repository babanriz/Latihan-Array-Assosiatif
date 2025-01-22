<?php
//Data array asosiatif 
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

// tampikan nama siswa beresta nilai mapel nya

for ($i = 0; $i < count($siswa); $i++) {
    echo "Nama: " . $siswa[$i]['nama'] . "<br>";
    
    // Pengkondisian if untuk menampilkan nilai Matematika lebih dari 80
    if ($siswa[$i]['nilai']['matematika'] > 80) {
        echo "Nilai Matematika: " . $siswa[$i]['nilai']['matematika'] . " (lebih dari 80)<br>";
    } else {
        echo "Nilai Matematika: " . $siswa[$i]['nilai']['matematika'] . " (kurang dari atau sama dengan 80)<br>";
    }

    // Menampilkan nilai Bahasa Indonesia dan Fisika tanpa perubahan
    echo "Nilai Bahasa Indonesia: " . $siswa[$i]['nilai']['bahasaIndonesia'] . "<br>";
    echo "Nilai Fisika: " . $siswa[$i]['nilai']['fisika'] . "<br><br>";
}
?>
