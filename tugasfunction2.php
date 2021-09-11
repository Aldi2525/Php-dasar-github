<!DOCTYPE html>
<html>
<head>
<title>FORMULIR</title>
</head>
<body>
    <fieldset>
        <table bgcolor="aqua">
<legend>FORMULIR</legend>
  <form action = "" method="post">
  
  <tr>
  <td><b>Nama</b></td>
  <td>:</td>
  <td><input type='text' name=nama ></input>
  </tr> 
   <tr>
  <td><b>Jenis kelamin</b></td>
  <td>:</td>
  <td><input type='radio' name=jk value=laki-laki>laki-laki
  <input type='radio' name=jk value=perempuan>perempuan</td>
</tr>
  <tr>
  <td><b>Tanggal Lahir</b></td>
  <td>:</td>
  <td><input type='date' name=tgl ></input>
  </tr>
  <tr>
  <td><b>Agama</b></td>
  <td>:</td>
  <td><select name = agama>
    <option>-'Pilih'-</option>
    <option value = islam> islam</option>
    <option value = kristen> Kristen</option>
    <option value = hindu> Hindu</option>
    <option value = buddha> Buddha</option>
    <option value = konghucu> Konghucu</option>
 <tr>
    <td><b>Alamat</b></td>
    <td>:</td>
    <td><textarea cols="30" name=alamat></textarea>
  </td>
</tr>
<tr>
    <td><b>Hobi</b></td>
    <td>:</td>
      <td>
        <input type='checkbox' name=hobi[] value=menonton>Menonton</input>
        <input type='checkbox' name=hobi[] value=berlari>Berlari</input>
        <input type='checkbox' name=hobi[] value=makan>Makan</input>
        <input type='checkbox' name=hobi[] value=menghayal>Menghayal</input>
        <input type='checkbox' name=hobi[] value=jongging>Jongging</input>
        <input type='checkbox' name=hobi[] value=workout>WorkOut</input>
   </td>
</tr>
<td><input type="submit" name=simpan value='hasil'></input>
  </tr> 
  </table>
</fieldset>
  </form>
  </body>
  </html>

  <?php

if(isset($_POST['simpan'])){
    $nama = $_POST["nama"];
    $jk = $_POST["jk"];
    $tgl = $_POST["tgl"];
    $agama = $_POST["agama"];
    $alamat = $_POST["alamat"];
    $hobi = $_POST["hobi"];

   function Biodata($nama,$jk,$tgl,$agama,$alamat,$hobi) {
       $biodata = "<td>Nama</td> <td>:</td> $nama<br>";
       $biodata .= "Jenis Kelamin <td>:</td> $jk <br>";
       $biodata .= "<tr><td>Tanggal Lahir : $tgl<br>";
       $biodata .= "<tr><td>Agama : $agama<br>" ;
       $biodata .= "<tr><td>Alamat : $alamat<br>";
       $biodata .= "<tr><td>Hobi : " .implode(" , ", $hobi);
        return $biodata;
   }
   echo Biodata($nama,$jk,$tgl,$agama,$alamat,$hobi);
}
    ?>