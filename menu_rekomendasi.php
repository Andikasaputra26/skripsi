<?php include "template/top.php"; ?>

<?php


  include('admin/config/connect-db.php'); 

  # Deklarasi Variabel
  $key_kepentingan = array();
  $val_kepentingan = array();
  $data            = array();
  $kep1            = array();
  $kep2            = array();
  $kep3            = array();
  $kep4            = array();
  $normalisasi     = array();
  $hasil           = array();

  # Nilai Kepentingan
  $i = 0;
  $r = mysqli_query($mysqli, "SELECT * FROM table_setting_saw");
  while($e = mysqli_fetch_array($r)) {
    
     $key_kepentingan[$i] = $e['kepentingan']; 
     $val_kepentingan[$i] = $e['nilai_kepentingan']; 
     
     $i++;

  }  


  # Prepare Data
  $j = 0;
  $result = mysqli_query($mysqli, "SELECT * FROM table_menu");
  while($d = mysqli_fetch_array($result)) { 
    
    $r = mysqli_query($mysqli, "SELECT COUNT(*) tot FROM table_transaksi WHERE id_menu = $d[id]");
    $rc = mysqli_fetch_array($r);
    $s = mysqli_query($mysqli, "SELECT COUNT(*) tot FROM table_transaksi");
    $rs = mysqli_fetch_array($s);

    $trasaksi = number_format(($rc['tot']/$rs['tot'])*100,2);


    $data[$j] = array(
                     $d['nama_menu'],
               $d['harga'],
               $d['type_makanan'],
               $d['kalori'],
               $trasaksi,
               $d['gambar']
              );

    $kep1[$j]  = $d['harga'];  
    $kep2[$j]  = $d['type_makanan'];  
    $kep3[$j]  = $d['kalori'];  
    $kep4[$j]  = $trasaksi;

    $j++;  
  
  }


  # Mendapatkan Nilai Pembagi
  $kep1_pembagi = min($kep1);
  $kep2_pembagi = max($kep2);
  $kep3_pembagi = max($kep3);
  $kep4_pembagi = max($kep4);

  


  # Tahap Normalisasi  
  $k = 0;
  foreach ($data as $dd) {
    
    $normalisasi[$k] = array(
                         $dd[0],
                         $dd[1],
                         $dd[2],
                         $dd[3],
                         $dd[4],
                         $dd[5],
                   $kep1_pembagi/$dd[1],
                   $dd[2]/$kep2_pembagi,
                   $dd[3]/$kep3_pembagi,
                   $dd[4]/$kep4_pembagi
                );
    $k++;
  
  }



  # Get Hasil
  $x = 0;
  foreach ($normalisasi as $nn) {
    
    $hasil[$x] = array(
                       $nn[0],
                       $nn[1],
                       $nn[2],
                       $nn[3],
                       $nn[4],
                       $nn[5],
                       ($nn[1]*$val_kepentingan[0])+
                       ($nn[2]*$val_kepentingan[1])+
                       ($nn[3]*$val_kepentingan[2])+
                       ($nn[4]*$val_kepentingan[3])
              ); 

    $x++;

  }
  
  $keys = array_column($hasil, 6);
  array_multisort($keys, SORT_DESC, $hasil);

  # Deklarasi Header Tabel
  $Hdata        = array("Nama Menu","Harga","Type Makanan","Kalori","Total Transaksi","Gambar");
  $Hnormalisasi = array("Nama Menu","Harga","Type Makanan","Kalori","Total Transaksi","Gambar","Normalisasi Harga","Normalisasi Type Makanan","Normalisasi Kalori", "Normalisasi Trasaksi");
  $Hhasil       = array("Nama Menu","Harga","Type Makanan","Kalori","Total Transaksi","Gambar","Hasil Akhir");



 

  // function displayDataMultidimentions($var,$title,$header)
  // {
  
  // $tab  = "<h2>".$title."</h2>";
  // $tab .= "<table border=1 style='border-collapse:collapse;width:50%'>";
  
  // $tab .= "<tr>";
  // foreach ($header as $hh) {
  //   $tab .= "<th>$hh</th>";
  // }
  // $tab .= "</tr>";

  // foreach ($var as $gg) {
  //    $tab .= "<tr>";
  //    foreach ($gg as $g) {
  //    $tab .= "<td><center>".$g."</td>"; 
  //    }    
  //    $tab .= "</tr>";
  // }   
  
  // $tab .= "</table><br><br>";

  // echo $tab;

  // }

  // displayDataMultidimentions($hasil,'Hasil Akhir',$Hhasil);
    
?>


 <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h4 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">Menu Rekomendasi Untuk Anda</h4>

<center>


<?php
$no=1;
foreach ($hasil as $df) { 
  if($no < 5){  
?>
  
<?php if($no==1){ echo '<div class="card-deck">'; }?>
  

    <div class="card">
      <img src="admin/gambar/<?php echo $df[5]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><b><?php echo $df[0]; ?></b></h5>
        
            <p class="card-text">Rp. <?php echo number_format($df[1]); ?></p> 
            <p class="card-text">Kalori: <?php echo number_format($df[3]); ?> kkal</p> 
            <p class="card-text">
              <a href="pesanan-get.php?menu=<?php echo $df[0]; ?>||<?php echo $df[1]; ?>&loadto=menu_rekomendasi.php" onclick="return confirm('Apakah Anda Yakin Memilih Menu Ini?');" class="btn btn-success"> Pesan </a>
            </p>
      </div>
    </div>


  <?php if($no==4){ echo "</div>"; } ?>
  
  <?php $no++; ?>


<?php } } ?>



                        </div>
                    </div>
                </div>
            </div>
          </div>
    </section>



<?php include "template/bottom.php"; ?>