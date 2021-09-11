<?php
$belanja = 15000;
if ($belanja >= 15000) {
    echo "maka anda mendapatkan silverqueen";
} elseif($belanja <= 10000 && $belanja >= 5000) {
    echo "anda mendapatkan teh pucuk harum 2 botol";
} else {
    echo "anda mendapatkan cireng";
}