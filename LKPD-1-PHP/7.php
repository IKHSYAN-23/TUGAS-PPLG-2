<?php
function formatKalimat($kalimat) {
    //mengembalikan panjang string.
    $jumlahKarakter = strlen($kalimat);

    //  lebih dari 50 karakter
    if ($jumlahKarakter >= 50) {
        //  '...' di tambah otomatis ke  dalam kalimat ,jadi di tulis 47
        //ekstrak bagian string
        $kalimat = substr($kalimat, 0, 47,) . '...';
    }
    return $kalimat;
}

$kalimat = "kalimat panjang yang digunakan untuk menjadi contoh untuk lkpd ini ";
$hasil = formatKalimat($kalimat);
echo "Kalimat yang diformat: " . $hasil . "<br>";
echo "Jumlah karakter: " . strlen($hasil);



