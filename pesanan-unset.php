<?php 
    session_start();    
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);      

    $id   = $_GET['key'];
    unset($_SESSION['pesanan'][$id]);

    
        echo '<script type="text/javascript">

                document.addEventListener("DOMContentLoaded", function(event) { 
                  window.location.href = "pesanan.php";
                });

            </script>';
    
?>