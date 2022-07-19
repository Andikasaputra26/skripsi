<?php


  include('config/connect-db.php');
  include('config/base-url.php');  

	 
	  $id = $_GET['id'];

    $ubah = mysqli_query($mysqli, "UPDATE table_transaksi SET sts_jadi = 1 WHERE id = $id ");

	if($ubah){		 
     echo '<script language="javascript"> alert("Berhasil Ubah Status!"); window.location.href = "'.$base_url_back.'/view_kelola_transaksi.php" </script>';
    }else{
    	echo mysqli_error($mysqli);
    }

	

?>
