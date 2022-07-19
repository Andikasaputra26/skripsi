<?php 
    session_start();    
    
    unset($_SESSION['pesanan']);

    
        echo '<script type="text/javascript">

                document.addEventListener("DOMContentLoaded", function(event) { 
                    alert("Berhasil Hapus Semua!");
                  window.location.href = "pesanan.php";
                });

            </script>';
    
?>