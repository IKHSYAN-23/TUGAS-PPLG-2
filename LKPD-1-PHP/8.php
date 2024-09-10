<?php
function uniqueMajors(...$jurusan) {
    // strtoupper besar
    //strtolower kecil
    //berfungsi mempertahankan  argumen array jika dan hanya jika tepat satu array dilewatkan
    $uniqueArray = array_map('strtoupper', $jurusan);
    // hapus nilai duplikat
    $uniqueArray = array_unique($uniqueArray);
    return $uniqueArray;
}

$result = uniqueMajors("PPLG", "htl", "KLN", "PMN", "pplg", "HTL", "kln");
print_r($result);