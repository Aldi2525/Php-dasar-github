<!DOCTYPE html>
<html>
<body>
<?php
$array = [];
$array[] = 'One';
$array[] = 'Two';
$array[] = 'Three';
$array[] = 'Four';
echo '<pre>';
print_r($array);

echo "<br">
$employee = [
    'name' => 'John',
    'email' => 'john@example.com',
    'phone' => '1234567890',
];

// get the value of employee name
echo $employee['name'];

// get all values
foreach ($employee as $key => $value) {
    echo $key . ':' . $value;
    echo '<br>';
}


?>

</body>
</html>