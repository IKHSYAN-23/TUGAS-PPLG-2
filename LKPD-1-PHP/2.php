<?php
$hariBelanja = date('l');  //Sesuai dengan Hari di laptop l(hari ini) d(tanggal)
$totalPembelian = 10000;
$diskonHariSelasa = 0.05;
$diskonPembelianBesar = 0.07;
$totalDiskon = 0;

    //pemberian diskon hari selasa
if ($hariBelanja == 'Tuesday') { //operator perbandingan
    $totalDiskon = $diskonHariSelasa;
}
    //jika menyentuh total pembelian tertentu maka akan mendapat diskon
if ($totalPembelian >= 100000) {
    $totalDiskon = $diskonPembelianBesar;
}

$totalPembayaran = $totalPembelian  - ($totalPembelian * $totalDiskon); // rumus matematika perlalian

echo "  Hari ini adalah: <b> $hariBelanja\n</b>";
echo "<br>";
//number_format menentukan separator ribu dan simbol desimal 
echo "Total Belanja: <b>Rp" . number_format($totalPembelian, 0,) . "\n </b>";
echo "<br>";
echo "Total Diskon: " . ($totalDiskon * 100) . "%"; // modulus
echo "<br>";
echo "Total yang harus dibayar: <b>Rp" . number_format($totalPembayaran, 0,) . "\n</b>";
