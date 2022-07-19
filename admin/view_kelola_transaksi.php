<?php 

  include('config/connect-db.php'); 
  include('template/atas.php'); 

?>
  
   


    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:15px"> 
    <h1 class="w3-xxxlarge judul-content"><b>Kelola Transaksi</b></h1>
    <hr class="w3-round garis-judul-content">
      <br>


        

        <?php
          $no = 1;
          $result = mysqli_query($mysqli, "SELECT a.*, b.nama_menu, 
                                           CONCAT(a.nomor_meja, '-', a.session_meja) kode 
                                           FROM table_transaksi a 
                                           LEFT JOIN table_menu b ON a.id_menu = b.id
                                           ORDER BY a.tgl_pesan DESC, a.waktu DESC, a.nomor_meja, a.session_meja");
          
          $kode="";
          $kode1="";
          $nomor="";
          $ses="";
          $nomor1="";
          $ses1="";
          $total=0;

          while($data = mysqli_fetch_array($result)) { 

        ?>


        <?php
          //if($nomor1 <> $data['nomor_meja'] && $ses1 <> $data['session_meja'])
          if($kode1 <> $data['kode'])
          {
            $nomor1 = $data['nomor_meja'];
            $ses1 = $data['session_meja'];
            $kode1 = $data['kode'];

            if($total > 0){
        ?>  
        </table><b>Total Bayar: Rp. <?php echo number_format($total); $total=0; ?></b><br><br>
        <?php } } ?>
        
        <?php        
          //if($nomor == "" && $ses == "" OR $nomor <> $data['nomor_meja'] && $ses <> $data['session_meja'])
          if($kode == "" OR $kode <> $data['kode'])
          {
            $nomor = $data['nomor_meja'];
            $ses = $data['session_meja'];
            $kode = $data['kode'];
        ?>


         <table border=1 width="100%" style="border-collapse: collapse;">
          <tr class="w3-red">
            <th>No</th>
            <th>Nomor Meja</th>
            <th>Pesanan</th>
            <th>Tanggal</th>
            <th>Waktu</th>
            <th>Metode<br>Pembayaran</th>
            <th>Total Bayar</th>
            <th>Status</th>
          </tr>
         
         <?php } 
          $total = $total+$data['total_bayar']; ?>

          <tr>
            <td><center><?php echo $no; ?></td>
            <td><center>Meja <?php echo $data['nomor_meja']; ?></td>
            <td><center><?php echo $data['nama_menu']; ?></td>
            <td><center><?php echo TanggalIndo($data['tgl_pesan']); ?></td>
            <td><center><?php echo $data['waktu']; ?></td>
            <td><center><?php echo $data['metode_pembayaran']; ?></td>
            <td><center>Rp. <?php echo number_format($data['total_bayar']); ?></td>
            <td><center><?php if($data['sts_jadi']){echo'<span style="color:green;font-weight:bold">Makanan<br>Sudah Jadi</span>';}else{echo "<a href='edit_makanan_dah_jadi.php?id=".$data['id']."' class='btn btn-danger waves-effect' onclick='return confirm(`Apakah Makanan Sudah Jadi?`);'>Belum Selesai</a>";} ?></td>
          </tr>

        <?php $no++; } ?>



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

