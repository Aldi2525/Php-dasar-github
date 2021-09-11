<!DOCTYPE html>
<html>
<head>
<title>Latihan Aldi</title>
</head>
<body>
<h2>Konser Amal Assalam Bahagia</h2>
<form id="form1" name= "form1" method= "post" action="tampilanlatihan1.php">
  <table>
  <tr>
  <td>Nama Pemesan</td>
  <td>  :</td>
  <td><input type='text' name=nama></td>
  </tr> 
  <tr>
  <td>Kode Studio</td>
  <td>  :</td>
  <td><select name=kdstudio id=kd >
  <option>-:Pilih:-</option>
  <option value="studio 1">STUDIO 1</option>
  <option value="studio 2">STUDIO 2</option>

  </td>
  </tr> 
  <tr>
  <td>Jenis Kelas</td>
  <td>  :</td>
  <td><input type='radio' name=kelas value=VIP>VIP</input>
  <input type='radio' name=kelas value=Festival>FESTIVAL</input>
  </td>
  </tr>
  <tr>
  <td>Jumlah Tiket</td>
  <td>  :</td>
  <td><input type='text' name=jumlah></td>
  </tr>  
  <tr>
  <td></td>
  <td></td>
  <td><input name= "submit" type="submit" id="Submit" value="Tampil" />
  <input type="reset" name="Submit2" value="Batal" /></td>
  </tr> 
  </table>
  </form>
  </body>
  </html>
