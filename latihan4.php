<!DOCTYPE html>
<html>
<head>
  <title>Latihan Bilangan Aldi</title>
  </head>
  <body>
<h1>Input Bilangan</h1>
<form method="post" action="">
Masukkan Banyaknya Bilangan <input type="text" name="n" />
<input type="submit" name="submit" value="Submit" />
</form>

<?php
if(isset($_POST['submit'])){
   echo "<h1>Cari Rata-rata Bilangan</h1>";
$n = $_POST['n'];
echo "<form method='post' action='proses.php'>";
for ($i = 0; $i <= $n-1; $i++)
{
 echo "Bil ke-".($i+1)." <input type='text' name='data".$i."' /><br>";
}
 echo "<input type='submit' name='submit' value='Submit' />";
 echo "<input type='hidden' name='n' value='".$n."' />";
echo "</form>";
}
?>


</body>
</html>