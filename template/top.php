<?php session_start(); date_default_timezone_set('Asia/Makassar'); ?>
<!DOCTYPE html>
    <html lang="en" class="desktop mbr-site-loaded"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Malebbi Resto</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/gambar/<?php echo $d1['nama_logo']; ?>" type="image/x-icon">
    <meta name="description" content="">
    <link href="assets/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/material.css">
    <link rel="stylesheet" href="assets/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="assets/socicon.min.css">
    <link rel="stylesheet" href="assets/style(1).css">
    <link rel="stylesheet" href="assets/style(2).css">
    <link href="assets/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet"> 
    <style type="text/css">.garis_inovasi{margin-top: 0.5em;margin-bottom: 0.5em;margin-left: auto;margin-right: auto;border-style: inset;border-width: 5px;}</style>
    <link rel="stylesheet" href="assets/mbr-additional.css" type="text/css"><style>.cke{visibility:hidden;}</style></head>
    <body style=""><section id="top-1" class="engine"><a href="https://mobirise.info/">Mobirise</a> Mobirise v4.5.4</section><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <link rel="stylesheet" href="assets/flipclock.css" type="text/css">
    <link href="assets/centerblue.css" rel="stylesheet">
    <link href="assets/main.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/jquery-ui.css">
    <script src="assets/jquery.js.download"></script>
    <script src="assets/jquery-ui.js.download"></script>
    <script src="assets/pace.min.js.download"></script>
    
    <div role="log" ariax-live="assertive" aria-relevant="additions" class="ui-helper-hidden-accessible"><div>Butuh bantuan kami?</div></div>
    <link rel="stylesheet" type="text/css" href="assets/css/gigo-responsive.css">

    <style type="text/css">
        :root {
          --body-bg-color: #f9e5cf;
          --nmain-color: #fff;
          --nmain-bg-color: #ff914d;
          --nmain-bg-color-hover: #3e2723;
          --ncont-bg-color: #d7ccc8;
          --nhover-nav-color: #dce1ed;
        }

        body{
          background-color: var(--body-bg-color);
        }

        #menu-2 .link{ font-size: 14px; }
        /*atur warna navbar*/
        #menu-2 .navbar,
        #menu-2 .nav-dropdown-sm,
        #menu-2 .nav-dropdown-sm .link[aria-expanded="true"],
        #menu-2 .nav-dropdown-sm .dropdown-menu {
          background: var(--nmain-bg-color);
        }

        /*atur hover menu*/
        #menu-2 .link:hover,
        #menu-2 .dropdown-item:hover,
        #menu-2 .link:focus,
        #menu-2 .dropdown-item:focus {
          color: var(--nhover-nav-color);
          background-color: var(--nhover-bg-color); 
        }

        .gigo-responsive th {
          background-color: var(--nmain-bg-color);
          color: var(--nmain-color);
        }

        .gigo-responsive tr {
          background-color: var(--ncont-bg-color);
          border: 1px solid var(--nmain-bg-color);
        }

        .gigo-responsive tr {
          border-bottom: 3px solid var(--nmain-bg-color);
        }
      
        .gigo-responsive td {
          border-bottom: 1px solid var(--nmain-bg-color);
        }
        
        .btn-warning {
          background-color: var(--nmain-bg-color);
          border-color: var(--nmain-bg-color);
          color: var(--nmain-color);
        }

       .btn-warning:hover,
       .btn-warning:focus,
       .btn-warning.focus,
       .btn-warning:active,
       .btn-warning.active {
          color: var(--nmain-color);
          background-color: var(--nmain-bg-color-hover);
          border-color: var(--nmain-bg-color-hover);
       }

       .button {
          color: var(--nmain-color);
          background-color: var(--nmain-bg-color-hover);
          border-color: var(--nmain-bg-color-hover);
          padding: 5px 10px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          font-size: 12px;
        }

    </style>
    <section id="menu-2">
        <nav class="navbar navbar-dropdown bg-color navbar-fixed-top navbar-short">
            <div class="container">
                <div class="mbr-table">
                    <div class="mbr-table-cell">
                        <div class="navbar-brand">
                            <a href="#" class="navbar-logo">
                                <img src="../img/logo2.png" alt="" title=""></a>
                            <a class="navbar-caption" href="#" style="font-size: 25px;font-weight: bold;"><b style="color:#fff;">Meja: <?php if(isset($_SESSION['meja'])){ echo $_SESSION['meja'];}else{echo '<script>alert("Nomor Meja Belum Ada")</script>';} ?></b></a>
                        </div>
                    </div>
                    <div class="mbr-table-cell">
                        <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                            <div class="hamburger-icon"></div>
                        </button>
                        <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar">
                                      

                            <li class="nav-item"><a class="nav-link link" href="index.php">Menu Pemesanan</a></li>
                            <li class="nav-item"><a class="nav-link link" href="menu_rekomendasi.php">Menu Rekomendasi</a></li>
                            <li class="nav-item"><a class="nav-link link" href="pesanan.php">Pesanan</a></li>
                            <li class="nav-item"><a class="nav-link link" href="checkout.php">Checkout</a></li>
                            <!-- <li class="nav-item"><a class="nav-link link" href="login.php" style="cursor: pointer;">Login</a></li> -->
 

                        </ul>
                        
                        <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                            <div class="close-icon"></div>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </section>
   <script src="assets/sweetalert/dist/sweetalert2.all.min.js"></script>

   <script type="text/javascript">
      $('.confirmation-logout').on('click', function(e) {
        Swal.fire({
          title: 'Anda Yakin?',
          text: "Ingin Logout!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Yakin!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "config/logout.php";
          }
        })
      });

   </script>
