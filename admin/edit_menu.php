<?php 

  include('config/connect-db.php'); 
  include('config/base-url.php'); 
  include('template/atas.php'); 

?>

<?php
  
  $id = $_GET['id'];

  $result = mysqli_query($mysqli, "SELECT * FROM table_menu where id = $id");
  $data = mysqli_fetch_array($result);

?>
    
  <!-- Login -->
  <div class="w3-container" id="login" style="margin-top:75px">
    <h1 class="w3-xxxlarge judul-content"><b>Edit Menu</b></h1>
    <hr class="w3-round garis-judul-content">

    <form action="" method="post" enctype="multipart/form-data">
      
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

      <div class="w3-section">
        <label>Nama Menu</label>
        <input class="w3-input w3-border" type="input" name="nama_menu" value="<?php echo $data['nama_menu']; ?>">
      </div>

      <div class="w3-section">
        <label>Makanan/Minuman?</label>
        <select class="w3-input w3-border" name="makanan_or_minuman">
          <option value="">- Pilih -</option>
          <option value="MAKANAN" <?php if($data['makanan_or_minuman']=="MAKANAN"){echo 'selected';} ?>>MAKANAN</option>
          <option value="MINUMAN" <?php if($data['makanan_or_minuman']=="MINUMAN"){echo 'selected';} ?>>MINUMAN</option>
        </select>
      </div>
            
      <div class="w3-section">
        <label>Harga</label>
        <input class="w3-input w3-border" type="number" name="harga" value="<?php echo $data['harga']; ?>">
      </div>

      <div class="w3-section">
        <label>Type Makanan</label>
        <input class="w3-input w3-border" type="number" name="type_makanan" value="<?php echo $data['type_makanan']; ?>">
      </div>

      <div class="w3-section">
        <label>Kalori</label>
        <input class="w3-input w3-border" type="number" name="kalori" value="<?php echo $data['kalori']; ?>">
      </div>

      <div class="w3-section">
        <label>Gambar</label>
        <img src="<?php echo $data['gambar']; ?>" width="250"><br>
        <input type="hidden" name="gambar_old" value="<?php echo $data['gambar']; ?>">
        <input class="w3-input w3-border" type="file" name="gambar">
      </div>

                 

      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" name="Update">EDIT</button>
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
  $id                 = $_POST['id'];
  $nama_menu          = $_POST['nama_menu'];
  $makanan_or_minuman = $_POST['makanan_or_minuman'];
  $harga              = $_POST['harga'];
  $type_makanan       = $_POST['type_makanan'];
  $kalori             = $_POST['kalori'];
  
  if($_FILES['gambar']<>"")
  {
    
    unlink($_POST['gambar_old']);

    $berkas1      = $_FILES['gambar']['name'];
    $tmp_berkas1  = $_FILES['gambar']['tmp_name'];
    $gambar       = "gambar/".$berkas1;
    
    if (move_uploaded_file($tmp_berkas1, $gambar)) {
      $gambar = $gambar;
    } else {
      $gambar = null;
    }

  }else{
  
      $gambar = $_POST['gambar_old'];
  
  }
  
  // Memasukkan data kedatabase berdasarakan variabel tadi
  $result = mysqli_query($mysqli, "UPDATE table_menu SET 
                                   nama_menu='$nama_menu',
                                   makanan_or_minuman='$makanan_or_minuman',
                                   harga='$harga',
                                   type_makanan='$type_makanan',
                                   kalori='$kalori',
                                   gambar='$gambar'
                                   WHERE id=$id");
  
  // Cek jika proses simpan ke database sukses atau tidak   
  if($result){ 
       // Jika Sukses, redirect halaman menggunakan javascript
    echo '<script language="javascript"> alert("Berhasil Edit Menu!"); window.location.href = "'.$base_url_back.'/view_kelola_menu.php" </script>';
  }else{
      // Jika Gagal, Lakukan :
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      //echo "<br><a href='tambah_tok.php'>Kembali Ke Form</a>";
  }


}

?>