<?php 
    session_start();    
    ini_set('display_errors', 1); 
    ini_set('display_startup_errors', 1); 
    error_reporting(E_ALL);      
    include('admin/config/connect-db.php'); 

    $id   = $_GET['key'];
    $dat = explode('||', $_SESSION['cetak'][$id]);
    $dat_id = explode('[]', $_SESSION['cetak_id'][$id]);
    $i = cek_id($dat[0], $mysqli);

    $cek = mysqli_query($mysqli, "SELECT COUNT(*) tot FROM table_transaksi 
                                    WHERE id_menu = $i 
                                    AND nomor_meja = '$dat_id[0]' 
                                    AND session_meja = '$dat_id[1]'
                                    AND sts_jadi = 0
                                    LIMIT 1");

    $data = mysqli_fetch_array($cek);

    if($data["tot"] > 0){


        $result = mysqli_query($mysqli, "DELETE FROM table_transaksi 
                                        WHERE id_menu = $i 
                                        AND nomor_meja = '$dat_id[0]' 
                                        AND session_meja = '$dat_id[1]'
                                        LIMIT 1") or die(mysqli_error($mysqli));
        
        if($result){
          unset($_SESSION['cetak'][$_GET['key']]);
          unset($_SESSION['cetak_id'][$_GET['key']]);

            echo '<script type="text/javascript">

                    document.addEventListener("DOMContentLoaded", function(event) { 
                      window.location.href = "checkout.php";
                    });

                </script>';
        }   
    
    }else{

        echo '<script type="text/javascript">

                document.addEventListener("DOMContentLoaded", function(event) { 
                  alert("Maaf, Makanan Sudah Jadi!");
                  window.location.href = "checkout.php";
                });

            </script>';
    
    }

    function cek_id($val, $mysqli)
    {
      $res = mysqli_query($mysqli, "SELECT * FROM table_menu where nama_menu = '$val'");
      $data = mysqli_fetch_array($res);
      return $data[0];
    }

?>