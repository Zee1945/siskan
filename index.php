<?php
// Create database connection using config file
include_once("controller/connection.php");

// Fetch all users data from database

$sumberdaya_ikan = mysqli_query($mysqli, "SELECT COUNT(ID) as total_ikan FROM  sumberdaya_ikan");
$sarana_prasarana = mysqli_query($mysqli, "SELECT COUNT(ID) as total_sarana FROM  sarana_prasarana");
$sosial_ekonomi = mysqli_query($mysqli,"SELECT COUNT(ID) as total_sosek FROM sosial_ekonomi");
$data1 = mysqli_fetch_assoc($sumberdaya_ikan);
$data2 = mysqli_fetch_assoc($sarana_prasarana);
$data3 = mysqli_fetch_assoc($sosial_ekonomi);



// $sql="select count(*) as total from sosial_ekonomi";
// $result=mysqli_query($mysqli,$sql);
// $data=mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SISKAN</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/mycss.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="css/libstyle.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/colors.min.css"> -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome.css">

</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light text-center">SISKAN </div>
            <div class="navbar-brand" href="#">
                <img style="margin-left: 38%;margin-top: 10%;" src="/siskan/assets/img/logo.png" width="80" height="80"
                    class="d-inline-block align-top" alt="">

            </div>

            <div class="list-group list-group-flush mt-5">
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="/siskan/">Dashboard</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="/siskan/sumberdaya_ikan.php">Sumberdaya Ikan</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="/siskan/sarana_prasarana.php">Sarana dan Prasarana</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="/siskan/sosial_ekonomi.php">Sosial Ekonomi</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3"
                    href="/siskan/manajemen.php">Manajemen Data</a>

            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="/siskan/">Home</a></li>
                            
                         
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <div class="container-fluid container-content">
                <h1 class="mt-4">Selamat datang di Sistem Informasi Perikanan</h1>
               
            <br>
            <br>
            <br>
            <br>
                 <div class="row">
 
      <div class="col-xl-3 col-sm-6 col-12">
        <div class="card text-white" style="background-color:#764AF1 ;">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <span>Sumber Daya Ikan</span>
                </div>
                <div class="media-body ms-auto text-right" style="text-align:right;">
                <div class="d-flex">
                    <h3><?php echo $data1['total_ikan']; ?></h3> &nbsp; <p style="margin-top: 12px;">Data</p>
                
                    </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 text-white">
        <div class="card" style="background-color:#36AE7C ;">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <span>Sarana Prasarana</span>
                </div>
                <div class="media-body ms-auto text-right" style="text-align:right;">
                <div class="d-flex">
                    <h3><?php echo $data2['total_sarana']; ?></h3> &nbsp; <p style="margin-top: 12px;">Data</p>
                
                    </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 col-12 text-white">
        <div class="card" style="background-color: #68A7AD ;">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                <span>Sosial Ekonomi</span>
                </div>
                <div class="media-body ms-auto text-right" style="text-align:right;">
                <div class="d-flex">
                    <h3><?php echo $data3['total_sosek']; ?></h3> &nbsp; <p style="margin-top: 12px;">Data</p>
                
                    </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>