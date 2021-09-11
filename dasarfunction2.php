<?php
function perkenalkan($nama, $salam){
  echo $salam.", ";
  echo "Perkenalkan, nama saya ".$nama."<br/>";
  echo "Senang Berkenalan denngan Anda  <br/>";
}
  perkenalkan("Aldi Awaludin", "Hi");

  echo "<hr>";

  $saya ="Diana";
  $ucapanSalam = "Selamat Pagi";

  perkenalkan($saya, $ucapanSalam);
  ?>