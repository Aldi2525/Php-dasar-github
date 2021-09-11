<?php
$a = 2000000;
$b = 10;
$c = $a * ($b/100);
$d = $a - $c;

echo "SOAl 1<br><br>";
echo "Gaji ahmad sebelum pajak senilai = $a<br>";
echo "Gaji ahmad sesudah pajak senilai = $d<br>";
echo "Pajak $b%<br><br>";

$luasalas= 10;
    $luasselimut= 30;
    $hasil =2* $luasalas + $luasselimut;
    
    echo "SOAl 2<br><br>";
    echo "Menghitung luas Tabung<br>";
    echo "Luas Alas :$luasalas <br> ";
    echo "Luas Selimut tabung :$luasselimut <br>";
    echo "Hasil L Tabung = 2 x $luasalas + $luasselimut = $hasil<br><br>";

$r= 8;
    $t= 12;
    $hasil = 0.3 * 3.14 * $r * $r * $t;
    
    echo "SOAl 3<br><br>";
    echo "MENGHITUNG VOLUME KERUCUT<br>";
    echo "R :$r<br> ";
    echo "T :$t <br>";
    echo " Hasil volume kerucut = $hasil<br><br>";

$p = 7;
    $l = 15;
    $t =25;
    $hasil =1/2 * $p * $l * $t;
    
    echo "SOAl 4<br><br>";
    echo "MENGHITUNG VOLUME PRISMA<br>";
    echo "Panjang :$p <br>";
    echo "Lebar : $l <br>";
    echo "Tinggi : $t <br>";
    echo "Hasil volume prisma: $hasil<br><br>";
?>