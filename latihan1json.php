<title>Tugas JSON</title>
<body bgcolor="aqua">
<?php
$json = '{
    "dosen": ["1. Danny Indra Gunawan","2. Muhamad Sabar","3. Tarsinah Sumarni","4. Saepudin"],
    "siswa": [
    "<b><u>Dosen :Danny Indra Gunawan</b></u><br>",
    "NIM: 198265, 194355, 197665, 198565, 198575",
    "Nama: Naruto , Sasuke, Shikamaru, Kiba, Garra",
    "umur: 18, 20, 19, 25, 22",
    "Email: narto@gmail.com, saskeh@gmail.com, kamaru@gmail.com, kiba@gmail.com, garra@gmail.com<br>",
    "<b><u>Dosen : Muhamad Sabar</b></u><br>",
     "NIM: 198460, 198461, 198462, 198463, 198464",
     "Nama: Aldi , Adit , Defan , Rizky , Zendri ",
     "Umur: 18, 18, 17, 17, 17",
     "Email: aldi@gmail.com, adit@gmail.com, defan@gmail.com, iki@gmail.com, zendray@gmail.com<br>",
    "<b><u>Dosen : Tarsinah Sumarni</b></u><br>",
     "NIM: 193460, 193461, 193462, 1934653 , 193464",
     "Nama: Dono , Kasino , Indro , Sule , Andre ",
     "Umur: 33, 32, 35, 30, 30",
     "Email: dono@gmail.com, kasino@gmail.com, indro@gmail.com, sule@gmail.com, andre@gmail.com<br>",
    "<b><u>Dosen : Saepudin<br></b></u>", 
    "NIM: 198455, 198454, 198453, 198452, 198451",
    "Nama: Ilyas , Robi , Kidam , Tyo , Teguh",
    "Umur: 20, 19, 20, 19, 20",
    "Email: ilyas@gmail.com, robi@gmail.com, kidam@gmail.com, tyo@gmail.com, teguh@gmail.com<br>"]
}';

$mahasiswa  = json_decode($json);

echo " Dosen : <br><br>". implode("<br> ", $mahasiswa -> dosen);
echo "<br><hr>";
echo "Pembimbing: <br><br>".implode("<br>", $mahasiswa -> siswa); 
?>