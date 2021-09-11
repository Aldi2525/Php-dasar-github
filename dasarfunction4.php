<?php
function hitungUmur($thn_lahir, $thn_sekarang){
  $umur = $thn_sekarang - $thn_lahir;
  return $umur;
}

echo "Umur saya Adalah ". hitungUmur(2003, 2021). " Tahun";
?>