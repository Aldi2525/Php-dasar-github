<!DOCTYPE html>
<html>
<head>
<title>Latihan Hotel Aldi</title>
</head>
 <form method="POST" action="tampilanlatihan3.php">
 <table>
  <tr>
    <h2> Pemesanan </h2>
  </tr>
  <tr>
    <td>
      <table>

        <tr> 
            <td>Tanggal Menginap</td>
            <td>  :</td>
            <td><input type="date" name="tanggal"></td>
        </tr>

        <tr>
          <td>Nama Tamu</td>
          <td>  :</td>
          <td><input name="nama" type="text"></td>
        </tr>

        <tr> 
          <td>No Identitas</td>
          <td>  :</td>
          <td><input name="id" type="text"></td>
        </tr>

        <tr> 
          <td>Tipe Kamar</td>
          <td>  :</td>
          <td>
            <select name="tipe">
              <option name="-" value="-" hidden>-</option>
              <option name="deluxe" value="Deluxe">Deluxe</option>
              <option name="superior" value="Superior">Superior</option>
              <option name="junior" value="Junior Suite">Junior Suite</option>
            </select>
          </td>
        </tr>

        <tr height="30"> 
          <td>Durasi Menginap</td>
          <td>  :</td>
          <td><input  name="durasi" type="text"> /Malam</td>
        </tr>

        <tr>
       <td></td>
      <td></td>
      <td><input name= "submit" type="submit" id="Submit" value="Tampil" />
      <input type="reset" name="Submit2" value="Batal" /></td>
  </tr> 

        </table>
      </table>
      <br>
      <br>
</form>
</html>
</body>