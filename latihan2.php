<!DOCTYPE html>
<html>
<head>
     <title>Aldi pengulangan</title>
</head>

<body>
    <form action="" method="post">
      Masukan Bintang <input type="text" name="bintang"> 
      <input type="submit" name="submit" value="submit">
      </form>
 </body>
 </html>

 <?php
 echo "<br>";
 echo "Program Bintang Segitiga siku-siku <br>";
 
   if (isset($_POST['submit'])){
       $bin = $_POST['bintang'];

       for ($a = $bin; $a > 0 ; $a--) {
        for ($b = $bin; $b >= $a; $b--) {
            
               echo"*";
           }
           echo "<br>";
       }
      echo "Program Bilangan Genap";
      echo "<br>";

      $nilai1 =$_POST['bintang'];
      $bin = 2;
      while ($bin <= $nilai1){
          if ($bin % 2 == 0){
              echo "". $bin."<br>";
              $bin++;
          } else {
              $bin++;
          }
      }
    
   } 

   ?>
   </body>
 </html>