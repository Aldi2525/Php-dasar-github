<html>
    <head>
    <title>
         Konversi Suhu
    </title>
    </head>
    <body>
     <form action="" method="post">
     <h4>  Konversi Suhu</h4>
     
         Suhu <input type="text"  name="suhu"><br><br>
         Konversi: <br>
         <input type="radio" name="konversi" value="kelvin" >Kelvin<br>
        <input type="radio" name="konversi" value="fahrenhait">Fahrenhait<br>
        <input type="radio" name="konversi" value="reamur" >Reamur<br>
         <input type="submit" name="submit" value="Konversi" >
    </form>
    </body>
</html> 

<?php
 $suhu=$_POST['suhu'];
 $konversi=$_POST['konversi'];

 echo "Suhu : $suhu <br>";

 if($konversi=="reamur"){
     $hasil=(4/5)*$suhu;
     echo " Hasil konversi ke Reamur: $hasil ";
 }else if($konversi=="fahrenhait"){
     $hasil=(9/5)*$suhu+32;
     echo "Hasil Konversi ke Fahrenhait : $hasil";
 }else if($konversi=="kelvin"){
     $hasil=$suhu+273;
     echo "Hasil Konversi ke Kelvin: $hasil";
 }else{
     echo "Zonk";
 }
?> 