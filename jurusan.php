<?php
echo "Program memilih jurusan <br>";
$jurusan = "RPL";
switch ($jurusan){
    case "RPL":
        echo "Anda memilih RPL";
        break;
    case "TKRO":
        echo "Anda Memilih jurusan TKRO";
        break;
    case "TBSM":
        echo "Anda memilih jurusan TBSM";
        break;
    default:
    echo "Maaf jurusan NOT FOUND 404";
}