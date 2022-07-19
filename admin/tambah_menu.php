<?php 

  include('config/connect-db.php'); 
  include('config/base-url.php'); 
  include('template/atas.php'); 

?>


    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:75px">
    <h1 class="w3-xxxlarge judul-content"><b>Tambah Menu</b></h1>
    <hr class="w3-round garis-judul-content">

    <form action="" method="post" enctype="multipart/form-data">
      
      <div class="w3-section">
        <label>Nama Menu</label>
        <input class="w3-input w3-border" type="input" name="nama_menu">
      </div>

      <div class="w3-section">
        <label>Makanan/Minuman?</label>
        <select class="w3-input w3-border" name="makanan_or_minuman">
          <option value="">- Pilih -</option>
          <option value="MAKANAN">MAKANAN</option>
          <option value="MINUMAN">MINUMAN</option>
        </select>
      </div>
            
      <div class="w3-section">
        <label>Harga</label>
        <input class="w3-input w3-border" type="number" name="harga">
      </div>

      <div class="w3-section">
        <label>Type Makanan</label>
        <input class="w3-input w3-border" type="number" name="type_makanan">
      </div>

      <div class="w3-section">
        <label>Kalori</label>
        <input class="w3-input w3-border" type="number" name="kalori">
      </div>

      <div class="w3-section">
        <label>Gambar</label>
        <input class="w3-input w3-border" type="file" name="gambar">
      </div>

      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="Submit">SIMPAN</button>
    </form>  
  </div>


  
  
<!-- End page content -->
</div>


<br><br><br><br>

<?php 

include('template/bawah.php'); 

// Keadeaan Ketika Di Submit atau mengirim data
if(isset($_POST['Submit'])) {

  // Memasukkan Data Inputan ke Varibael
  $nama_menu          = $_POST['nama_menu'];
  $makanan_or_minuman = $_POST['makanan_or_minuman'];
  $harga              = $_POST['harga'];
  $type_makanan       = $_POST['type_makanan'];
  $kalori             = $_POST['kalori'];

  $berkas1            = $_FILES['gambar']['name'];
  $tmp_berkas1        = $_FILES['gambar']['tmp_name'];
  $gambar             = "gambar/".$berkas1;
  
  if (move_uploaded_file($tmp_berkas1, $gambar)) {
    $gambar = $gambar;
  } else {
    $gambar = null;
  }
  
  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "INSERT INTO table_menu (id, nama_menu, makanan_or_minuman, harga, type_makanan, kalori, gambar) 
                               VALUES(null, '$nama_menu', '$makanan_or_minuman', $harga, $type_makanan, $kalori, '$gambar')");
  
  // Cek jika proses simpan ke database sukses atau tidak   
  if($result){ 
       // Jika Sukses, redirect halaman menggunakan javascript
    echo '<script language="javascript"> alert("Berhasil Tambah Menu!"); window.location.href = "'.$base_url_back.'/view_kelola_menu.php" </script>';
  }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
  }

}

?>