<?php include "template/top.php"; ?>

 <section class="mbr-section mbr-section-hero mbr-section-full mbr-after-navbar" id="header1-1">
        <div class="mbr-table-cell">
            <div class="container-fluid">
                <div class="row">
                    <div class="mbr-section-full col-md-12 col-lg-11">
                        <h3 class="mbr-section-title display-2" id="judul" style="padding-top: 120px;">Menu Pemesanan</h3>

<center>

<?php 

  include 'admin/config/connect-db.php';

  $result = mysqli_query($mysqli, "SELECT * FROM table_menu");
  $no = 1;
  while($d = mysqli_fetch_array($result)) { 

?>

  <?php if($no==1){ echo '<div class="card-deck">'; }?>                    

  
    <div class="card">
      <img src="admin/gambar/<?php echo $d["gambar"]; ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><b><?php echo $d["nama_menu"]; ?></b></h5>
        
            <p class="card-text">Rp. <?php echo number_format($d["harga"]); ?></p> 
            <p class="card-text">Kalori: <?php echo number_format($d["kalori"]); ?> kkal</p> 
            <p class="card-text">
              <a href="pesanan-get.php?menu=<?php echo $d["nama_menu"]; ?>||<?php echo $d["harga"]; ?>&loadto=index.php" onclick="return confirm('Apakah Anda Yakin Memilih Menu Ini?');" class="btn btn-success"> Pesan </a>
            </p>
      </div>
    </div>

  <?php if($no==4){ echo "</div><br>"; $no=0; } ?>
  
  <?php $no++; ?>

<?php } ?>




                        </div>
                    </div>
                </div>
            </div>
          </div>
    </section>



<?php include "template/bottom.php"; ?>