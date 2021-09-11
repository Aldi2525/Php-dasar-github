<?php
echo "Program lalu lintas <br>";
$lampu = "Hijau";
switch ($lampu){
    case "Merah":
        echo "Anda harus berhenti";
        break;
    case "Kuning":
        echo "Anda harus Siap-siap";
        break;
    case "Hijau":
        echo "Anda harus Maju";
        break;
    default:
    echo "lampu lalu lintas error";
}