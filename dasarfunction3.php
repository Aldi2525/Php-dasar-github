<?php
function perkenalan($nama, $salam="Assalamualaikum"){
  echo $salam.", <br>";
  echo "Perkenalkan, nama saya ".$nama."<br>";
  echo "Senang Berkenalan denngan Anda  <br>";
}
 perkenalan("Aldi Awaludin", "Hi");

  echo "<hr>";

  $saya ="Diana";
  $ucapanSalam = "Selamat Pagi";

  perkenalan($saya);
  ?>