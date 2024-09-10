<?php
$bilangan =100;
    //iterasi =kondisi berhenti, looping, mengontrol aliran
    //$i++ perulangan yang berhenti jika tidak akan terus menerus
    //for= perulangan/lebih fleksibel sedangkan each harus memakai value
for ($i=1; $i <=  18; $i++) { 
    if ($bilangan % $i == 0) { //cek apabila bisa di bagi sampai 0 , modulus mencari sisa
        $pembagi = $bilangan /$i ;
        echo "$bilangan : $i = $pembagi<br>" ;
    }
}       