<?php
function cekJawaban($nama, $example, $Betul) {
    // Inisialisasi array untuk menyimpan hasil
    $hasil = [
        'benar' => 0, 
        'salah' => 0  
    ];

    // Iterasi dari jawaban yang diberikan pengguna
    foreach ($example as $index => $jawaban) {
        // Memeriksa apakah jawaban ada pada array contoh
        if (isset($example[$index])) {
            // Membandingkan jawaban dengan jawaban yang benar
            if ($jawaban === $Betul[$index]) {
                // Jika jawaban benar, tambah jumlah benar
                $hasil['benar']++;
            } else {
                // Jika jawaban salah, tambah jumlah salah
                $hasil['salah']++;
            }
        } 
    }


    echo "Nama: " . $nama . "<br>"; 
    echo "Jumlah jawaban benar: " . $hasil['benar'] . "<br>"; 
    echo "Jumlah jawaban salah: " . $hasil['salah'] . "<br>"; // Tampilan jawaban salah
}

//jawaban benar
$Betul = [
    'A',  
    'B',  
    'C', 
    'D'   
];

// jawaban  
$jawaban = [
    'A',  // Jawaban salah
    'B', 
    'C',  
    'D'   
];

$nama = 'Aepracing';
cekJawaban($nama, $jawaban, $Betul);
