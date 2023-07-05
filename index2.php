<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MaxindoLED | Dashboard</title>

    <link rel="stylesheet" href="dist/css/style.css">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/logomax.PNG" alt="AdminLTELogo">
        </div>

        <!-- Navbar -->
        <nav style="padding-right: 10px; background: #263238;" class="main-header navbar navbar-expand">
        <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a style="color: #FFFFFF;" class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item" style="margin-top: 8px;">
                    <div class="jam-digital">
                        <div class="kotak">
                            <p id="jam"></p>
                        </div>
                        <div class="kotak">
                            <p id="menit"></p>
                        </div>
                    </div>
                </li>

                &nbsp;&nbsp;&nbsp;
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown" style="margin-top: 15px; margin-right: 15px;">
                    <p style=" font-size: 12px; color: #FFFFFF;"><span id="tanggalwaktu"></span></p>
                </li>

                <li class="nav-item dropdown" style=" margin-top: 8px;">

                    <div class="btn-group dropstart">
                        <a style=" border-radius: 50%; height: 30px; width: 30px;" href="" class="btn btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                        <!-- <i class="fa-solid fa-user"></i> -->
                            <img src="dist/img/avatar.png" class="img-fluid" style="width: auto; height: auto;"></img>
                        </a>
                        
                        <!-- <button style="border-radius: 50%; font-size: x-small;" type="button" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"></button> -->
                        <ul style="font-size: small;" class="dropdown-menu">
                            <!-- Dropdown menu links -->
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>&nbsp; Admin</a></li>
                            <hr>
                            <li><a style="color: #1976D2;" class="dropdown-item" href="coba.php"><i class="fa-solid fa-pen-to-square"></i>&nbsp; Edit Profile</a></li>
                            <li><a style="color: #D32F2F;" class="dropdown-item" href="#"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Log Out</a></li>
                        </ul>
                    </div>
                
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar bg-light elevation-4">
            <!-- Brand Logo -->
            <a href="index.html" class="brand-link" style="background: #263238; text-align: center;">
                <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
                <img class="img-fluid" src="dist/img/logo.png" alt="" style="width: 140px;">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item menu-open">
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a style="color: #121212;" href="./index.html" class="nav-link">
                                        <i class="fa-solid fa-desktop"></i> &nbsp;
                                        <p>Monitoring 1</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: #121212;" href="./monitor2.html" class="nav-link">
                                        <i class="fa-solid fa-table-columns"></i> &nbsp;
                                        <p>Monitoring 2</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: #121212;" href="./monitor3.html" class="nav-link">
                                        <i class="fa-solid fa-chart-line"></i> &nbsp;
                                        <p>Monitoring 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a style="color: #121212;" href="./monitor4.html" class="nav-link">
                                        <i class="fa-solid fa-table-list"></i> &nbsp;
                                        <p>Monitoring 4</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper iframe-mode" data-widget="iframe" data-auto-dark-mode="true" data-loading-screen="750">
            <div class="nav navbar navbar-expand-lg border-bottom p-0">
                <a class="nav-link bg-dark" href="#" data-widget="iframe-fullscreen"><i class="fas fa-expand"></i></a>
            </div>
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h5 class="m-0">Dashboard Monitoring</h5>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li>
                                <button style="font-size: x-small;" type="button" class="btn btn-dark btn-sm"><i class="fa-solid fa-arrows-rotate"></i>&nbsp; Refresh</button> 
                                </li> -->
                                <li style="margin-left: 10px;">
                                    <a href="index.php">
                                        <button style="font-size: x-small;" type="button" class="btn btn-dark btn-sm"><i class="fa-solid fa-arrows-rotate"></i>&nbsp; Refresh</button> 
                                    </a>
                                </li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="card bg-light" style="margin-left: 10px; margin-right: 10px;">
                <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                    
                        <li class="nav-item">
                            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                                <i class="fas fa-search"></i>
                            </a>
                            <div class="navbar-search-block">
                                <form class="form-inline">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-navbar" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                            <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="nav-item">
                            <button style="font-size: x-small; height: 30px; color: #FFFFFF; margin-top: 5px;" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Filter 
                            </button>
                            <ul style="font-size: small;" class="dropdown-menu" aria-labelledby="defaultDropdown">
                                <li><a style="color: #388E3C;" class="dropdown-item" href="#"><i class="fa-solid fa-circle-check"></i> Deal</a></li>
                                <li><a style="color: #1976D2;" class="dropdown-item" href="#"><i class="fa-solid fa-spinner"></i> Load</a></li>
                                <li><a style="color: #D32F2F;" class="dropdown-item" href="#"><i class="fa-solid fa-circle-xmark"></i> Cancel</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <table class="table table-light table-hover">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tgl/Jam Setup</th>
                                <th scope="col">Tgl/Jam Bongkar</th>
                                <th scope="col">Lokasi Acara</th>
                                <th scope="col">Inventory</th>
                                <th scope="col">Operator</th>
                                <th scope="col">Leader</th>
                                <th scope="col">Crew</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td>17/06/2023 22.00</td>
                                <td>18/06/2023 22.00</td>
                                <td>Pulo gadung</td>
                                <td>Led Screen P2.9, 22 m</td>
                                <td>Irwansyah</td>
                                <td>Dodo</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td>19/06/2023 22.00</td>
                                <td>20/06/2023 22.00</td>
                                <td>Mahkamah agung</td>
                                <td>Led Screen P2.9, 100 m</td>
                                <td>Dodit</td>
                                <td>Jefri</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td>20/06/2023 22.00</td>
                                <td>21/06/2023 22.00</td>
                                <td>KPK</td>
                                <td>Led Screen P3.9, 50 m</td>
                                <td>Roni</td>
                                <td>Oji</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">4</td>
                                <td>21/06/2023 22.00</td>
                                <td>22/06/2023 22.00</td>
                                <td>Senayan</td>
                                <td>Led Screen P1.9, 55 m</td>
                                <td>Dion</td>
                                <td>Dodo</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">5</td>
                                <td>22/06/2023 22.00</td>
                                <td>24/06/2023 22.00</td>
                                <td>Alam sutera</td>
                                <td>Led Screen P3.9, 80 m</td>
                                <td>Ryan diatmo</td>
                                <td>Deri</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">6</td>
                                <td>22/06/2023 22.00</td>
                                <td>23/06/2023 22.00</td>
                                <td>Balai kartini</td>
                                <td>Led Screen P2.9, 35 m</td>
                                <td>Rohimansyah</td>
                                <td>Suryadi</td>
                                <td>Dkk</td>
                                <td style="color: #1976D2;"><i class="fa-solid fa-spinner"></i> Load</td>
                            </tr>
                            <tr>
                                <td scope="row">7</td>
                                <td>23/06/2023 22.00</td>
                                <td>24/06/2023 22.00</td>
                                <td>Gedung B</td>
                                <td>Led Screen P2.9, 60 m</td>
                                <td>Irawan toni</td>
                                <td>Parmin</td>
                                <td>Dkk</td>
                                <td style="color: #D32F2F;"><i class="fa-solid fa-circle-xmark"></i> Cancel</td>
                            </tr>
                            <tr>
                                <td scope="row">8</td>
                                <td>24/06/2023 22.00</td>
                                <td>26/06/2023 22.00</td>
                                <td>Sport centre alam sutera</td>
                                <td>Led Screen P3.9, 90 m</td>
                                <td>Andriansyah</td>
                                <td>Oji</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">9</td>
                                <td>26/06/2023 22.00</td>
                                <td>27/06/2023 22.00</td>
                                <td>Auditorium kejaksaan agung</td>
                                <td>Led Screen P1.9, 45 m</td>
                                <td>Irwansyah</td>
                                <td>jefri</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">10</td>
                                <td>27/06/2023 22.00</td>
                                <td>28/06/2023 22.00</td>
                                <td>GBK</td>
                                <td>Led Screen P3.9, 150 m</td>
                                <td>Ryan agung</td>
                                <td>Dodo</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">11</td>
                                <td>28/06/2023 22.00</td>
                                <td>30/06/2023 22.00</td>
                                <td>Basket hall</td>
                                <td>Led Screen P1.9, 250 m</td>
                                <td>Supriono</td>
                                <td>Parmin</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">12</td>
                                <td>28/06/2023 22.00</td>
                                <td>29/06/2023 22.00</td>
                                <td>Cyber 2 kuningan</td>
                                <td>Led Screen P2.9, 21 m</td>
                                <td>Atmoyo</td>
                                <td>Suryadi</td>
                                <td>Dkk</td>
                                <td style="color: #1976D2;"><i class="fa-solid fa-spinner"></i> Load</td>
                            </tr>
                            <tr>
                                <td scope="row">13</td>
                                <td>28/06/2023 22.00</td>
                                <td>29/06/2023 22.00</td>
                                <td>Ragunan</td>
                                <td>Led Screen P3.9, 120 m</td>
                                <td>Irwansyah</td>
                                <td>Oji</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                            <tr>
                                <td scope="row">14</td>
                                <td>28/06/2023 22.00</td>
                                <td>30/06/2023 22.00</td>
                                <td>Cibiz Fatmawati</td>
                                <td>Led Screen P2.9, 100 m</td>
                                <td>Sigit purnawan</td>
                                <td>Jefri</td>
                                <td>Dkk</td>
                                <td style="color: #D32F2F;"><i class="fa-solid fa-circle-xmark"></i> Cancel</td>
                            </tr>
                            <tr>
                                <td scope="row">15</td>
                                <td>29/06/2023 22.00</td>
                                <td>30/06/2023 22.00</td>
                                <td>Danareksa</td>
                                <td>Led Screen P1.9, 20 m</td>
                                <td>Zidan ahmad</td>
                                <td>Dodo</td>
                                <td>Dkk</td>
                                <td style="color: #388E3C;"><i class="fa-solid fa-circle-check"></i> Deal</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
        <strong>2023 &trade; <a style="color: #757575;" href="https://adminlte.io">MaxindoLED</a>.</strong>
        All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

  <script>
    window.setTimeout("waktu()", 1000);
 
    function waktu() {
        var waktu = new Date();
        setTimeout("waktu()", 1000);
        document.getElementById("jam").innerHTML = waktu.getHours();
        document.getElementById("menit").innerHTML = waktu.getMinutes();
        document.getElementById("detik").innerHTML = waktu.getSeconds();
    }

    var tw = new Date();
    if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))
    else (a=tw.getTime());
    tw.setTime(a);
    var tahun= tw.getFullYear ();
    var hari= tw.getDay ();
    var bulan= tw.getMonth ();
    var tanggal= tw.getDate ();
    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");
    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");
    // document.getElementById("harik").innerHTML = hariarray[hari];
    document.getElementById("tanggalwaktu").innerHTML =hariarray[hari] +" "+ tanggal+" "+bulanarray[bulan]+" "+tahun;

</script>

<style>
    .jam-digital {
        overflow: hidden;
        /* width: 110px; */
        /* margin: auto; */
        /* margin-left: 380px;
        margin-right: 360px; */
        /* border: 5px solid #f28000; */
    }
    .kotak{
        float: left;
        width: 30px;
        height: 40px;
    }
    .jam-digital p {
        font-weight: bold;
        color: #FFFFFF;
        font-size: 20px;
        text-align: center;
    }
</style>

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  </body>
  </html>
