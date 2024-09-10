<?php

$rows = 4; // Jumlah baris setiap kotak
$bintang = 8; //lebar per baris bintang
$kotak = 2; // Jumlah kotak 

//iterasi =kondisi berhenti, looping, mengontrol aliran
//kotak
for ($k = 0; $k < $kotak; $k++) {
    //  tiap baris dalam satu kotak
    for ($i = 0; $i < $rows; $i++) {
        // cetak jumlah bintang di setiap baris
        for ($b = 0; $b < $bintang; $b++) {
            echo "★"; // bintang
        }
        echo "<br>"; 
    }
    echo "<br>"; 
}