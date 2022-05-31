<?php
// Create database connection using config file
include_once("controller/connection.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM sosial_ekonomi ORDER BY id DESC");
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
                <div class="container-fluid">
                    <h1 class="mt-4">Sosial Ekonomi</h1>
                    <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
                    <p>
                        Make sure to keep all page content within the
                        <code>#page-content-wrapper</code>
                        . The top navbar is optional, and just for demonstration. Just create an element with the
                        <code>#sidebarToggle</code>
                        ID which will toggle the menu when clicked.
                    </p>
                    <div class="card shadow">
                        <div class="card-header">
                            <h3>Nelayan Berdasarkan Jenis</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th><b>No.</b></th>
                                            <th><b>Tahun</b></th>
                                            <th><b>Jenis Nelayan</b></th>
                                            <th><b>Jumlah</b></th>
                                            
                                            <th><b>Keterangan</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                
                                    <?php  
                                    $no = 1;
                                    while($data = mysqli_fetch_array($result)) {  ?>
                                        <tr>
                                            <td class="text-center"><b><?php echo $no++ ?></b></td>
                                            <td class="text-center"><?php echo $data['tahun']?></td>
                                            <td class="text-center"><?php echo $data['jenis_nelayan']?></td>
                                            <td class="text-center"><?php echo $data['jumlah_nelayan']?></td>
                                            <td><?php echo $data['keterangan']?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <?php  
 while($data = mysqli_fetch_array($result)) {         
     echo "<tr>";
     echo "<td>".$data['nama_sarana']."</td>";
     echo "<td>".$data['jumlah']."</td>";
     echo "<td>".$data['tahun']."</td>";
     echo "<td>".$data['jenis_sarana']."</td>";
     echo "<td>".$data['keterangan']."</td>";
     echo "<td>".$data['image']."</td>";
     echo "<tr>";
    
 }
 ?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
