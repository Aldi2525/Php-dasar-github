<?php
echo "1. Contoh Program Array numeric";
echo "<br>";
$jurusan = array('Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer', 'Manajemen Informatika');
$jum_array = count($jurusan);
for ($i = 0; $i < $jum_array; ++$i) {
  echo "Jurusan " . $jurusan[$i]."- ada di index $i";
  echo '<br>';
}
  
  echo "<br>";
  
  echo "2. Contoh Program Array Assosiatif";
  echo "<br>";
  $jurusan = array('Teknik Informatika', 'Sistem Informasi', 'Teknik Komputer', 'Manajemen Informatika');
foreach ($jurusan as $key => $value) {
    echo  "Kata Kunci Index= Jurusan" .($key+1) ."," ." Nilai = " .$value;
    echo '<br>';
  }
?>
