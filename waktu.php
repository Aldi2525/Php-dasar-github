<?php
  $init = 86400;
  $hari = floor($init / 86400);
  $jam = floor($init / 3600);
  $menit = floor($init / 60) % 60;
  $detik = $init % 60;

  echo "$hari:$jam:$menit:$detik";
  ?>