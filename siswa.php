<html>
    <head>
        <title>Data Siswa</title>
</head>
<body>
<center> 
MENAMPILKAN DATA SISWA 
<br>
<br>

<form action='tambah.php' method='POST'>
<table >
 <tr>
 <td> <input type='submit' name='tambah' value='Tambah siswa'> </td> 
 </tr>
</table>
</form>


<table  border='1' Width='600' >  
<tr>
 <th > Nama </th>
 <th> Jenis Kelamin </th>
 <th> Kelas </th>
 <th> Alamat </th>
 
</tr>
 <?php
 if(isset($_POST['simpan'])){
     $nama = $_POST['nama'];
     $jk = $_POST['jk'];
     $kelas = $_POST['kelas'];
     $alamat = $_POST['alamat'];

 }
 ?>

<td> <?php echo $_POST ['nama'];?></td>
<td> <?php echo $_POST ['jk'];?></td>
<td> <?php echo $_POST ['kelas'];?></td>
<td> <?php echo $_POST ['alamat'];?></td>
<center>

</table>

</form>
</body>
</html>