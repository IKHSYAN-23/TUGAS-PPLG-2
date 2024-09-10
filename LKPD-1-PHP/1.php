<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <!-- untuk memasukan input -->
    <form action="" method="POST">
        <label for="teks">Masukkan teks : </label>
        <input type="text" name="teks" id="teks">
        <input type="submit" value="?">
    </form>

    <?php
    //metod request yang di sambungkan dengan form
    //Post, Get
    if ($_SERVER['REQUEST_METHOD'] == "POST") { 
        $teks = $_POST["teks"]; 
        // melakukan pencarian dan penggantian teks berdasarkan ekspresi regular (regex)
        //w/s mencari karakter kata
        $simbol = preg_replace('/[\w\s]/', '', $teks);
        if ($simbol) {
            //untuk memecah atau membagi sebuah string menjadi array
            $arrSimbol = str_split($simbol);
            //implode = untuk menggabungkan elemen-elemen dari sebuah array menjadi satu string
            //(.) concat
            echo "Teks mengandung simbol: " . implode(',', $arrSimbol);
        } else {
            echo "Teks tidak mengandung simbol.";
        }
    }
    ?>
</body>

</html>