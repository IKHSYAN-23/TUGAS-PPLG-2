<?php
$bill1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bill2 = [77, 99, 55, 81, 45, 90, 91];

$Gabungan = array_merge($bill1, $bill2); // menggabungkan array (index/brjajar)(keyvalue/asosiatif)(md/ada keduanya) 
sort($Gabungan);
//asort kecil ke besar
//ksort  array arrow

echo implode(",", $Gabungan); //implode = untuk menggabungkan elemen-elemen 
                              //dari sebuah array menjadi satu string