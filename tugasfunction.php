<!DOCTYPE html>
<html>
<head>
<title>Tugas Function</title>
</head>
<body>
<fieldset>
 <table>
<legend>Perhitungan Bangun Ruang lingkaran</legend>
  <form action = " " method="post">
  
  <td>Masukan jari jari: </td>
  <td><input type='text' name=jari ></input>
  <td><input type="submit" name=simpan value='Hasil'></input>
</form>
</body>
</table>
</fieldset>
  </html>
  <?php
  if(isset($_POST['simpan'])){
    function luaslingkaran( $jari, $phi="3.14"){
        $jari **= 2;    
      $luas = $jari * $phi;
      return $luas;
 }  

 function kellingkaran($jari, $phi="3.14" ){
     $kel = ($jari * $phi) * 2;
     return $kel;
    }  
    echo "jari-jari = ";
    echo $_POST['jari'];
    echo "<br>";
    echo "Luas Lingkaran = ";
    echo luaslingkaran($_POST['jari']);
    echo "<br>";
    echo "Keliling Lingkaran = ";
    echo kellingkaran($_POST['jari']);
 }
?>