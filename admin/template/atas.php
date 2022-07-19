<?php 
  include("config/auth.php");
  include('config/connect-db.php');
   date_default_timezone_set('Asia/Makassar');
?>
<!DOCTYPE html>
<!-- saved from url=(0049)http://localhost/public_lasttask/gotaaruf/public/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Malebbie Resto</title>
<link rel="icon" href="assets/logo.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/w3.css">
<link rel="stylesheet" href="assets/css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

.judul-content{ color: #ff914d; }
.garis-judul-content{ width:70px;border:5px solid #ff914d; }
.w3-red{ background-color: #ff914d!important; }

.btn-edit{
  font-weight: bold;
  color: green;
}

.btn-hapus{
  font-weight: bold;
  color: red;
}

</style>

<!-- Fonts and icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

</head><body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Malebbie Resto</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Beranda</a> 

    <!-- <a href="view_pegawai.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kelola Pegawai</a> -->
    <a href="view_kelola_menu.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kelola Menu</a>
    <a href="view_analisis_rekomendasi.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Analisis Rekomendasi</a>
    <a href="view_kelola_transaksi.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kelola Transaksi</a>
    <a href="view_setting_saw.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Setting SAW</a>
    <a href="view_rekap.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rekap Penghasilan</a>
    <!-- <a href="view_rekap_bulan.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rekap Bulanan</a>
    <a href="view_rekap_semester.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rekap Semester</a>
    <a href="view_rekap_dupak.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rekap Dupak</a>
    <a href="view_rekap_pak.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rekap PAK</a> -->

    <!-- <a href="view_rekap.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Rekap Laporan</a>
 -->

    <a href="config/logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
  
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Malebbie Resto</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

