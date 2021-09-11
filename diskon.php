<?php

$harga = 9000000;
    $bulanmei = $harga * 30 / 100;
    $bulanjuni = $harga * 20 / 100;
    $bulanjuli = $harga  * 10 / 100;
    $hasil1 = $harga - $bulanmei;
    $hasil2 = $harga - $bulanjuni;
    $hasil3 = $harga - $bulanjuli;
if ($harga == 8000000) {
    echo "Daftar di Bulan mei anda mendapatkan diskon bulanan 30% sebesar $bulanmei dan menjadi $hasil1" ;
} elseif ($harga == 5000000) {
    echo "Daftar di bulan juni anda mendapatkan diskon bulananS 20% sebesar $bulanjuni dan menjadi $hasil2";
} elseif ($harga == 1000000) {
    echo "Daftar di bulan juli anda mendapatkan diskon bulanan 10% sebesar $bulanjuli dan menjadi $hasil3";
} else {
    echo "Daftar dibulan biasa seharga $harga anda tidak mendapatkan diskon";
}