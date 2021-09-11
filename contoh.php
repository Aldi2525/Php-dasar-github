<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Latihan 6</title>
</head>
<body style="background-image:url(http://localhost/Adam/Background%20Blogger/white%20house.jpg)">
<?php
$notiket=$_POST['notiket'];
$anggota=$_POST['anggota'];
$nostudio=$_POST['nostudio'];
$jml=$_POST['jml'];
if($nostudio=='1')
{
    $judul='Man In Black 2';
    $harga=25000;
}
else
if($nostudio=='2')
{
    $judul='The Passanger';
    $harga=30000;
}
else
if($nostudio=='3')
{
    $judul='The Shinjuku Incident';
    $harga=30000;
}
else
if($nostudio=='4')
{
    $judul='Sherlock Holmes 2';
    $harga=30000;
}
else
{
    $judul='Salah';
    $harga=0;
}

$total=$harga*$jml;
if($anggota=='Member')
{
    $diskon=0.1*$total;
}
else
{
    $diskon=0;
}
$totbay=$total-$diskon;

echo "<center><h1>Studio 22 Mal Jakarta</center></h1>";
echo "<center><h2>Pemesanan Tiket Bioskop</center></h2>";
echo "<hr />";
echo "<pre>";
echo "No Tiket          : $notiket<br>";
echo "Keanggotaan       : $anggota<br>";
echo "No Studio         : $nostudio<br>";
echo "Judul Film        : $judul<br>";
echo "Harga             : $harga<br>";
echo "Jumlah            : $jml<br>";
echo "Total Harga       : $total<br>";
echo "Diskon            : $diskon<br>";
echo "Total Bayar       : $totbay<br>";
?>
<br>
<center><h3><a href="latihan6.html">Input Kembali</a></h3></center>
</body>
</html>