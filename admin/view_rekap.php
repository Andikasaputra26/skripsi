<?php 

  include('config/connect-db.php'); 
  include('template/atas.php'); 

?>
  
   


    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:15px"> 
    <h1 class="w3-xxxlarge judul-content"><b>Rekap Penghasilan</b></h1>
    <hr class="w3-round garis-judul-content">
      <br>


        <?php
          $no = 1;
          $pekan = 1;
          $pekan_tot = 1;
          $mgg_h = 1;
          $mgg_f = 0;
          $mgg_gg = 0;
          $result = mysqli_query($mysqli, "SELECT tgl_pesan, SUM(total_bayar) tot FROM table_transaksi GROUP BY tgl_pesan;");
          while($data = mysqli_fetch_array($result)) { 

            $mgg_gg = $mgg_gg + $data['tot'];

            if($mgg_h == 1){
              echo '<h3>Pekan Ke - '.$pekan.'</h3>'; $pekan++; 
              echo '<table border=1 width="100%" style="border-collapse: collapse;">';
              
              echo '
              <tr class="w3-red">
                <th>No</th>
                <th>Tanggal</th>
                <th>Total Keuntungan Harian</th>
              </tr>';
              $mgg_h=0;
            
            }
              
            echo '
                <tr>
                  <td><center>'.$no.'</td>
                  <td><center>'.TanggalIndo($data['tgl_pesan']).'</td>
                  <td><center>Rp. '.number_format($data['tot']).'</td>
                </tr>
              ';

            if($no==7){$mgg_f = 1; $mgg_h = 1; $no = 0; }

            if($mgg_f == 1){
              $pekan_tot++;
              echo '<tr>
                      <th colspan="2">Total Keuntungan Mingguan</th>
                      <th>Rp. '.number_format($mgg_gg).'</th>
                    </tr>

              </table><br>';
              $mgg_f = 0;
              $mgg_gg = 0;
            }

            $no++;
      } 


      if($pekan <> $pekan_tot){
        echo '<tr>
                <th colspan="2">Total Keuntungan Mingguan</th>
                <th>Rp. '.number_format($mgg_gg).'</th>
              </tr>

        </table><br>';
      }

      ?>
  </div>


  
  
<!-- End page content -->
</div>


<br><br><br><br><br>


<?php 
   

function TanggalIndo($date){
  $BulanIndo = array( 
                    "Jan", 
                    "Feb", 
                    "Mar", 
                    "Apr", 
                    "Mei", 
                    "Jun", 
                    "Jul", 
                    "Agu", 
                    "Sep", 
                    "Okt", 
                    "Nov", 
                    "Des"
                    );

  $tahun = substr($date, 0, 4);
  $bulan = substr($date, 5, 2);
  $tgl   = substr($date, 8, 2);

  $result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;   
  return($result);
}

  include('template/bawah.php'); 


?>

