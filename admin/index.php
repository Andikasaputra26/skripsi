<?php 

  include('template/atas.php'); 
  include('config/connect-db.php'); 


   // $result = mysqli_query($mysqli, "SELECT a.*, b.nama_skpd, b.nip_pimpinan, 
   //                                  b.nama_pimpinan, b.jabatan_pimpinan, c.nama_jabatan, 
   //                                  d.alias AS kategori, e.jenjang,
   //                                  f.golru2 as golongan, f.pangkat 
   //                                  FROM tb_pegawai a 
   //                              LEFT JOIN ref_skpd b ON a.id_skpd = b.id
   //                              LEFT JOIN ref_jabfung c ON a.id_jabatan = c.id
   //                              LEFT JOIN ref_jabfung_kategori d ON a.id_kategori = d.id
   //                              LEFT JOIN ref_jabfung_jenjang e ON a.id_jenjang = e.id
   //                              LEFT JOIN ref_golru f ON a.id_golru = f.id_golru
   //                              WHERE a.nip = '$_SESSION[nip]'");

   // $peg = mysqli_fetch_array($result);


?>
  
   

  <!-- Services -->
  <div class="w3-container" id="tentang" style="margin-top:45px;font-weight: bold;font-size: 20px;">
    <center><BR><br><br>
    	<h1>SELAMAT DATANG</h1> 
      </center>
  </div>
  
  <!-- The Team -->
  
  
<!-- End page content -->
</div>

<?php 
  include('template/bawah.php'); 
?>