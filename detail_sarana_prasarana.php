<?php
// Create database connection using config file
include_once("controller/connection.php");
 $id = $_GET['id'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM sarana_prasarana where id = $id ORDER BY id DESC");

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
            <div class="container">
                <h1 class="mt-4">Sarana dan Prasarana</h1>


                <div class="row mt-5 mr-4">

                    <div class="col-md-6">
                        <div class="card shadow">

                            <div class="card-body mt-3">
                                <?php  
                                 while($data = mysqli_fetch_array($result)) {  ?>
                                <div class="row">
                                    <div class="col">
                                        <img class="card-img-top"
                                            src="/siskan/assets/img/sarana/<?php echo $data['image'];?>"
                                            style="height: 60; width: 70%; display: block; margin-left:12%">

                                    </div>
                                </div>




                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="card shadow">
                            <div class="card-header d-flex justify-content text-center">
                                <h4><?php echo $data['nama_sarana']?></h4>&nbsp;<p>
                                    
                            </div>
                            <div class="card-body mt-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-6">Jumlah</div>
                                            <div class="col-md-6">Tahun</div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6" style="padding-left: 20px;">
                                                <h4><?php echo $data['jumlah']?></h4>
                                            </div>
                                            <div class="col-md-6 text-center d-flex" style="padding-left: 20px;">
                                                <h4><?php echo $data['tahun'] ?> </h4>
                                                
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">Jenis Sarana</div>
                                          
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-6" style="padding-left: 20px;">
                                                <h4><?php echo $data['jenis_sarana']?></h4>
                                            </div>
                                            <div class="col-md-6" style="padding-left: 20px;">
                                                <h4><?php echo $data['tahun']?></h4>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="row">
                                            <div class="col-md-12 text-center card-header rounded">
                                                <div class="card">
                                                    <div class="card-header">
                                                        Keterangan
                                                    </div>
                                                    <div class="card-body">

                                                        <p class="card-text"><?php echo $data['keterangan']?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                            </div>

                                        </div>
                                    </div>

                                </div>

                                <?php } ?>
                            </div>


                        </div>


                    </div>
                    <div class="row mt-4    ">
                        <div class="col-md-12 text-center">
                            <a href="sarana_prasarana.php">Back to menu</a>
                        </div>
                    </div>



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