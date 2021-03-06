<?php
// Create database connection using config file
include_once("controller/connection.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM sumberdaya_ikan ORDER BY id DESC");
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
    <link rel="stylesheet" type="text/css" href="css/colors.min.css">
        
        
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light text-center">SISKAN </div>
            <div class="navbar-brand" href="#">
                <img style="margin-left: 38%;margin-top: 10%;" src="/siskan/assets/img/logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
                
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
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="/siskan/">Home</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container container-content">
                    <h1 class="mt-4">Sumber Daya Ikan</h1>
                 

          <div class="row mt-5 mr-4">
          <?php  
            while($data = mysqli_fetch_array($result)) {  ?>
            <div class="col-md-4 text-center">
              <div class="card card-list mb-4 box-shadow rounded-3">
                
                  <img class="card-img-top rounded mx-auto d-block" src="/siskan/assets/img/ikan/<?php echo $data['image'];?>" style="width: 50%; display: block;">
              
                
                <div class="card-body mt-3 border-top">
                <h4 class="card-title"><?php echo $data['nama_indonesia']?></h4>
                  <p class="card-text"><i><?php echo $data['nama_ilmiah']?></i></p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                    </div>
                    <a href="/siskan/detail_sumberdaya_ikan.php?id=<?php echo $data['ID']?>" class="btn btn-sm btn-outline-secondary stretched-link">View</a>
                  </div>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
        

                  
    <table width='100%' border=1>
 <?php  
 while($data = mysqli_fetch_array($result)) {         
     echo "<tr>";
     echo "<td>".$data['nama_indonesia']."</td>";
     echo "<td>".$data['nama_ilmiah']."</td>";
     echo "<td>".$data['kategori']."</td>";
     echo "<td>".$data['produksi']."</td>";
     echo "<td>".$data['satuan_produksi']."</td>";
     echo "<td>".$data['nilai']."</td>";
     echo "<td>".$data['tahun']."</td>";
     echo "<td>".$data['musim_ikan']."</td>";
     echo "<td>".$data['tingkah_laku']."</td>";
     echo "<td>".$data['image']."</td>";
     echo "<tr>";
    
 }
 ?>
 </table>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
