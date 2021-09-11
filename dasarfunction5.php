<?php
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", <br>";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
 echo "Umur saya adalah ".hitungumur(2003, 2021).  " tahun <br>";
  echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Aldi");
?>