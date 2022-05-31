<?php
// Create database connection using config file
include_once("controller/connection.php");
 $id = $_GET['id'];
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM sosial_ekonomi WHERE id = '$id'");

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
                <h1 class="mt-4">Sosial Ekonomi</h1>
                <div class="row mt-5 mr-4">
                
                <div class="col-md-12">
                <div class="card shadow">
                        <div class="card-header">
                            <h3>Edit Sosial Ekonomi</h3>
                        </div>
                        <div class="card-body mt-3">
                                <div class="container-fluid">

                                    <?php  
                             while($data = mysqli_fetch_array($result)) {  ?>
                                    <form action="update_sosial_ekonomi.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $data['ID'] ?>">
                                        <div class="row mb-4">
                                            <div class="col-md-3">Jenis Nelayan :</div>
                                            <div class="col-md-7 me-auto">
                                                <input type="text" class="form-control" name="jenis-nelayan"
                                                    value="<?php echo $data['jenis_nelayan']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-3">Jumlah Nelayan : </div>
                                            <div class="col-md-7 me-auto">
                                                <input type="text" class="form-control" name="jumlah-nelayan"
                                                    value="<?php echo $data['jumlah_nelayan']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col-md-3">Tahun :</div>
                                            <div class="col-md-7 me-auto">
                                                <input type="text" class="form-control" name="tahun"
                                                    value="<?php echo $data['tahun']?>">
                                            </div>
                                        </div>
    
                                        <div class="row mb-4">
                                            <div class="col-md-3">Keterangan :</div>
                                            <div class="col-md-7 me-auto">
                                                <textarea class="form-control" rows="4" name="keterangan"
                                                    value=""><?php echo $data['keterangan']?></textarea>
                                            </div>
                                        </div>
                                   
                                        <div class="row mb-4 mt-4">
                                            <div class="col-md-3 ms-auto">
                                                <input class="btn btn-success btn-lg" type="submit" value="Simpan">
                                            </div>



                                        </div>

                                    </form>
                                    <?php } ?>
                                </div>

                                <!-- end card body  -->
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