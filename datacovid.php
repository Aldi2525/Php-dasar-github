<?php

    $url = "https://api.kawalcorona.com/";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $dataCovid = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // menampilkan hasil curl
    // echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Covid Dunia</title>
</head>
<body>
    <center>
        <nav>
            <a href="datacovid.php">Data Covid</a> |
            <a href="datacovidid.php">Data Indonesia</a> |
            <a href="datacovidprov.php">Data Covid Provinsi</a> |
            <a href="positif.php">Data Positif</a> |
            <a href="sembuh.php">Data Sembuh</a> |
            <a href="meninggal.php">Data Meninggal</a>
        </nav>
    </center>
    <fieldset  bgcolor="aqua">
        <legend> Data Covid</legend>
        <table border=1 bgcolor="aqua">
            <tr>
                <th>No</th>
                <th>Country</th>
                <th>positive</th>
                <th>Deaths</th>
                <th>Recovered</th>
            </tr>
            <?php
$no = 1;
$data = json_decode($dataCovid);
foreach ($data as $covid) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $covid->attributes->Country_Region; ?></td>
                <td><?php echo $covid->attributes->Confirmed; ?></td>
                <td><?php echo $covid->attributes->Deaths; ?></td>
                <td><?php echo $covid->attributes->Recovered; ?></td>
            </tr>
            <?php
}?>
        </table>
    </fieldset>
</body>
</html>