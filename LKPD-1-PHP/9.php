<?php
function Koin($jumlah) {
    $koin = [1000, 500, 200, 100];
    // Array kosong yang akan menampung hasil koin yang digunakan
    $hasil = [];

    // looping untuk setiap nilai koin
    foreach ($koin as $nilaiKoin) {
        while ($jumlah >= $nilaiKoin) {
            // Menambahkan koin ke dalam array hasil
            $hasil[] = $nilaiKoin;
            // Mengurangi jumlah uang dengan nilai koin
            $jumlah -= $nilaiKoin; 
        }
    }
    return $hasil;
}
$jumlahUang = 1750;
// Memanggil fungsi 'cariKoin' untuk menentukan koin yang digunakan untuk jumlah uang
$koin = Koin($jumlahUang);

echo "Jenis Koin untuk uang Rp. $jumlahUang: ";
echo "<br>";
echo "<li>" . implode("</li><li>", $koin) . "</li>";

