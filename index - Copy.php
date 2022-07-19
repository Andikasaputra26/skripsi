<?php include "template/top.php"; ?>

<h2 style="color:black;margin-top: 70px;margin-left: 70px;">Menu Pemesanan</h2>



<table style="width: 100%;">
<?php 

  include 'admin/config/connect-db.php';

  $result = mysqli_query($mysqli, "SELECT * FROM table_menu");
  $no = 1;
  while($d = mysqli_fetch_array($result)) { 

?>

  <?php if($no==1){ echo "<tr>"; }?>
  
    <td>
      <a href="pesanan-get.php?menu=<?php echo $d["nama_menu"]; ?>||<?php echo $d["harga"]; ?>&loadto=index.php" onclick="return confirm('Apakah Anda Yakin Memilih Menu Ini?');">
      <div class="card">
        <img src="admin/gambar/<?php echo $d["gambar"]; ?>" alt="Avatar" style="width:100%">
        <div class="container">
          <h4><b><?php echo $d["nama_menu"]; ?></b></h4> 
          <p>Rp. <?php echo number_format($d["harga"]); ?></p> 
          <p>Kalori: <?php echo number_format($d["kalori"]); ?> kkal</p> 
        </div>
      </div>
      </a>
    </td>

  <?php if($no==3){ echo "</tr>"; $no=0; } ?>
  
  <?php $no++; ?>

<?php } ?>

</table>



<script type="text/javascript">
  
</script>

</body>
</html>