<!DOCTYPE html>
<html>
<head>

<title>Latihan Aldi</title>

</head>
<body>

<?php

$kdstudio = $_POST["kdstudio"];

$kelas = $_POST["kelas"];

$jumlah = $_POST["jumlah"];





if ($kelas == "VIP")

{

$harga = 500000;

}

elseif ($kelas == "Festival")

{

$harga = 250000;

}

else {

$harga = " ";

}

?>



<form id="form1" name="form1" method="post" action=" ">

<table width="361" border="0">

<tr>

<td colspan="3"><strong>Konser Amal Assalaam Bahagia </strong></td>

</tr>

<tr>

<td colspan="3">================================</td>

</tr>

<tr>

<td width="125">Nama Pemesanan</td>

<td width="5">:</td>

<td width="217">
<?php 
echo $_POST["nama"];
?>&nbsp;</td>

</tr>

<tr>

<td>Kode Studio </td>

<td>:</td>

<td> 
<?php
echo $_POST["kdstudio"];

?>&nbsp;</td>

</tr>
<tr>

<td>Bintang Tamu </td>

<td>:</td>

<td><?php 

$kd =$_POST['kdstudio'];
if($kd == "studio 1"){
        $bintang = "Opick";
    }else {
     $bintang = "Raihan";   
    }
    echo "$bintang";
  
?>&nbsp;</td>

</tr>

<tr>

<td>Jenis Kelas </td>

<td>:</td>

<td>
<?php echo $_POST["kelas"];
?>&nbsp;</td>

</tr>

<tr>

<td>Harga</td>

<td>:</td>

<td><?php 
$kelas =$_POST['kelas'];
if ($kelas == "VIP"){
    echo "500000";
    $harga = 500000;
} elseif ($kelas == "Festival"){
    echo "250000";
    $harga = 250000;
}
?>&nbsp;</td>

</tr>

<tr>

<td>Jumlah Beli </td>

<td>:</td>

<td><?php echo $_POST["jumlah"]; 
?>&nbsp;</td>

</tr>

<tr>

<tdcolspan=”3″>================================</td>

</tr>

<tr>

<td>Total Harga </td>

<td>:</td>

<td>
<?php echo ($harga*$jumlah); 
?> &nbsp;</td>

</tr>

</table>

<p align="left"><a href="latihan1.php">Kembali Ke Awal</a></p>

</form>

</body>

</html>