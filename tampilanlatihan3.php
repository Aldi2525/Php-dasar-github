<html>
  <body>
 
<?php
 
    $tanggal= $_POST['tanggal'];
    $nama = $_POST['nama'];
    $id = $_POST['id'];
    $durasi = $_POST['durasi'];
    $tipe = $_POST['tipe'];
    $deluxe = 950000;
    $superior = 850000;
    $junior = 1400000;
    $harga;
    $diskon;
    $total;

            ?>
         
      <table>
      <tr>
        <td><?php echo '&nbsp Tanggal Menginap';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$tanggal;?></td>
      </tr>
      <br>
      <tr>
        <td><?php echo '&nbsp Nama Tamu';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$nama;?></td>
      </tr>
      <br>
      <tr>
        <td><?php echo '&nbsp No Identitas';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$id;?></td>
      </tr>
      <br>
      <tr>
        <td><?php echo '&nbsp Tipe Kamar';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$tipe;?></td>
      </tr>
      <br>
      <tr>
        <td><?php echo '&nbsp Durasi Penginapan';?></td>
        <td><?php echo '&nbsp : ';?></td>
        <td><?php echo '&nbsp'.$durasi.' Malam';?></td>
      </tr>
      <br>
      <tr>

        <?php
                //Menentukan Diskon 
                if($tipe){
                  if($durasi == ""){
                      echo "Durasi belum diisi";
                  }elseif($tipe == "Deluxe"){
                    $hasil = $deluxe * $durasi ;
                    $hasil;
                  }elseif($tipe == "Superior"){
                    $hasil = $superior * $durasi;
                    $hasil;
                  } else{
                    $hasil = $junior * $durasi;
                    $hasil;
                  }
                }?>
                </td>
              </tr>

                  
<tr>
                    <td><?php echo '&nbsp Diskon';?></td>
                    <td><?php echo '&nbsp : ';?></td>
                    <td>
                      <?php
                    if($hasil > 1700000){
                    $diskon = $hasil*(15/100);
                    $total = $hasil - $diskon;
                    echo "&nbsp Mendapat Potongan diskon 15% = ";
                    echo " $total";
                  }elseif($hasil > 2500000){
                    $diskon = $hasil*(25/100);
                    $total = $hasil - $diskon;
                    echo "&nbsp Mendapat Potongan diskon 25% = ";
                    echo " $total";
                  }else{
                    echo "&nbspAnda tidak berhak mendapatkan diskon";
                    }
                     
            ?>
    </td>


              
            </tr>
            <br>
            <tr>
              <?php
              
            $total2 = $hasil * $durasi;?>
            
            <td><?php echo '&nbsp Total';?></td>
                  
                    <td><?php  echo '&nbsp :'.$total2;?></td>
                  
                    </tr>
                  </table>
          
        </body>
        </html>
