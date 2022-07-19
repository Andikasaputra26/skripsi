<?php 

  include('config/connect-db.php'); 
  include('config/base-url.php'); 
  include('template/atas.php'); 

?>

<?php
  
  $r1 = mysqli_query($mysqli, "SELECT * FROM table_setting_saw where id = 1");
  $r2 = mysqli_query($mysqli, "SELECT * FROM table_setting_saw where id = 2");
  $r3 = mysqli_query($mysqli, "SELECT * FROM table_setting_saw where id = 3");
  $r4 = mysqli_query($mysqli, "SELECT * FROM table_setting_saw where id = 4");

  $d1 = mysqli_fetch_array($r1); 
  $d2 = mysqli_fetch_array($r2); 
  $d3 = mysqli_fetch_array($r3); 
  $d4 = mysqli_fetch_array($r4); 

?>
    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:75px">
    <h1 class="w3-xxxlarge judul-content"><b>Setting SAW</b></h1>
    <hr class="w3-round garis-judul-content">

    <form action="" method="post">
      
      <div class="w3-section">
        <label>Nilai Kepentingan Harga</label>
        <input class="w3-input w3-border" type="input" name="kepentingan_1" value="<?php echo $d1['nilai_kepentingan']; ?>">
      </div>
            
      <div class="w3-section">
        <label>Nilai Kepentingan Type Makanan</label>
        <input class="w3-input w3-border" type="input" name="kepentingan_2" value="<?php echo $d2['nilai_kepentingan']; ?>">
      </div>
      
      <div class="w3-section">
        <label>Nilai Kepentingan Kalori</label>
        <input class="w3-input w3-border" type="input" name="kepentingan_3" value="<?php echo $d3['nilai_kepentingan']; ?>">
      </div>

      <div class="w3-section">
        <label>Nilai Kepentingan Sering Dipesan</label>
        <input class="w3-input w3-border" type="input" name="kepentingan_4" value="<?php echo $d4['nilai_kepentingan']; ?>">
      </div>     

      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="Update">Setting</button>
    </form>  
  </div>


  
  
<!-- End page content -->
</div>

<br><br><br><br>


<?php 

include('template/bawah.php'); 

// Keadeaan Ketika Di Submit atau mengirim data
if(isset($_POST['Update'])) {

  // Memasukkan Data Inputan ke Varibael
  $kep1 = $_POST['kepentingan_1'];
  $kep2 = $_POST['kepentingan_2'];
  $kep3 = $_POST['kepentingan_3'];
  $kep4 = $_POST['kepentingan_4'];

  if(($kep1+$kep2+$kep3+$kep4)==1){

    // Memasukkan data kedatabase berdasarakan variabel tadi
    $update1=mysqli_query($mysqli, "UPDATE table_setting_saw SET nilai_kepentingan='$kep1' WHERE id=1");
    $update2=mysqli_query($mysqli, "UPDATE table_setting_saw SET nilai_kepentingan='$kep2' WHERE id=2");
    $update3=mysqli_query($mysqli, "UPDATE table_setting_saw SET nilai_kepentingan='$kep3' WHERE id=3");
    $update4=mysqli_query($mysqli, "UPDATE table_setting_saw SET nilai_kepentingan='$kep4' WHERE id=4");
    
    // Cek jika proses simpan ke database sukses atau tidak   
    if($update4){ 
         // Jika Sukses, redirect halaman menggunakan javascript
      echo '<script language="javascript"> alert("Berhasil Setting Nilai Kepentingan SAW!"); window.location.href = "'.$base_url_back.'/view_setting_saw.php" </script>';
    }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
    }
  
  }elseif(($kep1+$kep2+$kep3+$kep4)>1){
    
    echo '<script language="javascript"> alert("Nilai Kepentingan Tidak Boleh Lebih Dari 1!"); </script>';
  
  }elseif(($kep1+$kep2+$kep3+$kep4)<1){
     
     echo '<script language="javascript"> alert("Nilai Kepentingan Tidak Boleh Kurang Dari 1!"); </script>';

  }else{

    echo '<script language="javascript"> alert("Terjadi Kesalahan Pada Inputan!"); </script>';

  }

}

?>