<?php
echo "1. Output array dengan menggunakan PRINT_R()";
$array = [];
$array[] = 'Indonesia';
$array[] = 'Malaysia';
$array[] = 'Singapura';
$array[] = 'Brunei Darussalam';
$array[] = 'Filipina';
echo '<pre>';
print_r($array);

echo "<br">
$ibukota = [
    "Indonesia" => 'Jakarta',
    'Malaysia' => 'Kuala Lumpur',
    'Singapura' => 'Singapura',
    'Thailand' => 'Bangkok',
    'Filipina' => 'Manila'
];
echo "<br>";
;// get the value of employee name


// get all values
    echo "2. Output Array Assosiatif";
    echo "<br>";
foreach ($ibukota as $key => $value) {
     echo "<br>";
    echo "<li>Ibukota " .$key. " adalah " . $value;
    echo '<br>';
}


?>