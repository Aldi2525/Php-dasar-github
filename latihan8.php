<?php
echo "<b><u>Negara Negara</u></b>";
$negara = array(
    array('Benua Asia','Indonesia', 'Jepang','India'),
    array('Benua Afrika', 'Ghana', 'Mesir', 'Libya'),
    array('Benua Australia','Australia', 'Tasmania', 'Victoria'),
    array('Benua Eropa', 'Germany', 'Italy', 'Swiss')

    
);
$kota1 = array(
    array('Indonesia','Bandung', 'Solo','Jakarta','Tegal','Surabaya'),
    array('Jepang', 'Tokyo', 'Kyoto', 'Osaka','Hiroshima','Nagasaki'),
    array('India','Mumbai', 'Chennai', 'New Delhi','Jaipur','Dolakpur'),
   

);

$kota2 = array(
    array('Ghana','Tumu', 'Tongo','Tamale','Accra','Kumasi'),
    array('Mesir', 'Cairo', 'Alexandria', 'Luxor','Giza','Arish'),
    array('Libya','Sirte', 'Zuwara', 'Benghazi','Misrata','Tripoli'),
   

);

$kota3 = array(
    array('Australia','Cairns', 'Darwin','Sydney','Perth','Canberra'),
    array('Tasmania', 'Taroona', 'Hagley', 'Hobart','Burnie','Relbia'),
    array('Victoria','Ballarat', 'Bendigo', 'Geelong','Kinglake','Benalla'),
   

);

$kota4 = array(
    array('Germany','Berlin', 'Munich','Hamburg','Bonn','Dresden'),
    array('Italy', 'Bologna', 'Naples', 'Rome','Milan','Venice'),
    array('Swiss','Lucerne', 'Bern', 'Geneva','Basel','Zermatt'),
   

);

?>
<ul>
<?php foreach ($negara as $key => $value): ?>
  <li><?= $value[0] ?> : <?= $value[1].
  ', '.$value[2]. ', '.$value[3] ?></li>
  <?php endforeach ?>
</ul>

<br>

<ul>
  <?php echo "<b>Benua Asia</b>";?>
<?php foreach ($kota1 as $key => $value): ?>
  <li><?= 'Kota di ' .$value[0] ?> : <?= $value[1].
  ', '.$value[2]. ', '.$value[3].', '.$value[4]. ', '.$value[5] ?></li>
  <?php endforeach ?>
</ul>

<ul>
<?php echo "<b>Benua Afrika</b>";?>
<?php foreach ($kota2 as $key => $value): ?>
  <li><?= 'Kota di ' .$value[0] ?> : <?= $value[1].
  ', '.$value[2]. ', '.$value[3].', '.$value[4]. ', '.$value[5] ?></li>
  <?php endforeach ?>
</ul>

<ul>
<?php echo "<b>Benua Australia</b>";?>
<?php foreach ($kota3 as $key => $value): ?>
  <li><?= 'Kota di ' .$value[0] ?> : <?= $value[1].
  ', '.$value[2]. ', '.$value[3].', '.$value[4]. ', '.$value[5] ?></li>
  <?php endforeach ?>
</ul>

<ul>
<?php echo "<b>Benua Eropa</b>";?>
<?php foreach ($kota4 as $key => $value): ?>
  <li><?= 'Kota di ' .$value[0] ?> : <?= $value[1].
  ', '.$value[2]. ', '.$value[3].', '.$value[4]. ', '.$value[5] ?></li>
  <?php endforeach ?>
</ul>