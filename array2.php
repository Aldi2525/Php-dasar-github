<?php
$perusahaan = [
  'name' => 'Aldi AWaludin',
  'umur' => '18',
  'Alamat' => 'Jl. Cangkuang baru',
  'hobi' => ['Menonton', 'Workout'],
  'Media Sosial' => ['Instagram' => 'aldi_2', 'Whatsapp' => '089662747512']
];
 
// access hobbies
echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo "Pemanggilan Array 2 Dimensi". "<br>";
echo $perusahaan['hobi'][0]."<br>";
// Menonton
 
echo $perusahaan['hobi'][1]."<br>";
// Workout
 
// access Media
echo $perusahaan['Media Sosial']['Instagram']."<br>";
// aldi IG
 
echo $perusahaan['Media Sosial']['Whatsapp']."<br>";
// aldi WA
?>