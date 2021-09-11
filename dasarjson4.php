<?php
$listMahasiswaJSON = '[
    { "nama": "Nurul Huda"},
    { "nama": "Renza ilhami Risqi"},
    { "nama": "Taufan Aji"},
    { "nama": "RAhmad Dwi Oktanto"}
]';

$listMahasiswa = json_decode($listMahasiswaJSON);

foreach ($listMahasiswa as $key => $mahasiswa) {
    echo "{$key}. Nama: {$mahasiswa ->nama} <br>";
}
?>