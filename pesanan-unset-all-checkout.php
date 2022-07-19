<?php 
    session_start();    
    include('admin/config/connect-db.php'); 
    
    $result = mysqli_query($mysqli, "DELETE FROM table_transaksi WHERE nomor_meja = '$_SESSION[meja]' AND session_meja = '$_SESSION[ses_cetak]'") or die(mysqli_error($mysqli));
    
    if($result){
      unset($_SESSION['cetak']);
    }


    
        echo '<script type="text/javascript">

                document.addEventListener("DOMContentLoaded", function(event) { 
                    alert("Berhasil Membatalkan Semua Pesanan!");
                  window.location.href = "checkout.php";
                });

            </script>';
    
?>