<?php
echo "1. Pengulangan FOR <br>";
echo "<br>";
   for ($i=0; $i < 10; $i++){
       echo "Ini pengulangan ke - $i <br>";
   }
   echo "<br>";
   echo "2. Pengulangan WHILE <br>";
   echo "<br>";
   $ulangi =0;
      while ($ulangi < 10){
          echo "Ini perulangan ke - $ulangi <br>";
          $ulangi++;
      }

      echo "<br>";
echo "3. Pengulangan Do-While <br>";
echo "<br>";
$ulangi =0;
   do {
       echo "Ini perulangan ke - $ulangi <br>";
       $ulangi++;
   } while ($ulangi < 10);
   echo "<br>";
   echo "4. pengulangan FOREACH <br>";
   echo "<br>";
   $books = [
       "Panduan belajar java untuk pemula",
       "Membangun Aplikasi Java dengan Netbeans",
       "tutorial Java dan Mysql",
       "Membuart penggajian Desktop dengan java"
   ];
   echo "<h5>Judul buku java</h5>";
   echo "<ol>";
   foreach ($books as $buku) {
       echo "<li>$buku</li>";
   }
   echo "</ol>";
   ?>