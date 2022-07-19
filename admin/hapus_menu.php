<?php


  include('config/connect-db.php');
  include('config/base-url.php');  

	 
	  $id = $_GET['id'];

    $delete = mysqli_query($mysqli, "DELETE FROM table_menu WHERE id = '$id' ");

	if($delete){		 
     echo '<script language="javascript"> alert("Berhasil Hapus Menu!"); window.location.href = "'.$base_url_back.'/view_kelola_menu.php" </script>';
    }else{
    	echo mysqli_error($mysqli);
    }

	

?>
