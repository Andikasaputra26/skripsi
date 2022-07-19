<?php session_start(); ?>    <center>
<h3>Malebbi Resto<br>Kabupaten Bone<br>========================</h3>
      <?php echo date('Y-m-d H:i:s'); ?>
      <table class='w3-table-all' style='width:30%'>
      <tr class='w3-orange'>
        <th>No</th>
        <th>Nama Menu</th>
        <th>Harga</th>
      </tr>
      <?php
        $no=1;
        $hrg=0; 
        foreach ($_SESSION['cetak'] as $i => $val) {
          if (is_int($i)) {
          $dat = explode('||', $_SESSION['cetak'][$i]);
          $hrg=$hrg+$dat[1];
          echo "<tr>
                  <td><center>".$no."</td>
                  <td>".$dat[0]."</td>
                  <td><center>Rp. ".number_format($dat[1])."</td>
                </tr>";
          $no++;  
         }
        }
      ?>

    </table>
    <b>Total Rp. <?php echo number_format($hrg); ?></b><br>
    <b>Metode Pembayaran: <?php echo $_GET['metode']; ?></b>
    <br>
    ========================<br>
    Terima Kasih - Selamat Jalan
  