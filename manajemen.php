<?php
// Create database connection using config file
include_once("controller/connection.php");

// Fetch all users data from database
$sumberdaya_ikan = mysqli_query($mysqli, "SELECT * FROM sumberdaya_ikan ORDER BY id DESC");
$sarana_prasarana = mysqli_query($mysqli, "SELECT * FROM sarana_prasarana ORDER BY id DESC");
$sosial_ekonomi = mysqli_query($mysqli, "SELECT * FROM sosial_ekonomi ORDER BY id DESC");
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
            <div class="container text-center">
                <h1 class="mt-4">Manajemen Data</h1>
                
            </div>
            <div class="container">
                <div class="row">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3>Sumber Daya Ikan</h3>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#inputsdi">Input Data</button>





                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No.</th>
                                            <th>Gambar Ikan</th>
                                            <th>Nama Indonesia</b></th>
                                            <th>Nama Ilmiah</th>
                                            <th>Kategori</th>
                                            <th>Produksi</th>
                                            <th>Satuan Produksi</b></th>
                                            <th>Nilai</th>
                                            <th>Tahun</th>
                                            <th>Musim Ikan</th>
                                            <th>Tingkah Laku</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($sumberdaya_ikan)) {  ?>
                                        <tr>
                                            <td class="text-center"><b><?php echo $no++ ?></b></td>
                                            <td> <img class="card-img-top rounded"
                                                    style="margin-top: 9px;" width="290" height="130"
                                                    src="/siskan/assets/img/ikan/<?php echo $data['image']; ?>"
                                                    ></td>
                                            <td class="text-center"><?php echo $data['nama_indonesia'] ?></td>
                                            <td class="text-center"><?php echo $data['nama_ilmiah'] ?></td>
                                            <td class="text-center"><?php echo $data['kategori'] ?></td>
                                            <td class="text-center"><?php echo $data['produksi'] ?></td>
                                            <td class="text-center"><?php echo $data['satuan_produksi'] ?></td>
                                            <td class="text-center">Rp. <?php echo $data['nilai'] ?></td>
                                            <td class="text-center"><?php echo $data['tahun'] ?></td>
                                            <td class="text-center"><?php echo $data['musim_ikan'] ?></td>
                                            <td style="text-align : justify"><?php echo $data['tingkah_laku'] ?></td>

                                            <td class="text-center"><a
                                                    href="/siskan/edit_sumberdaya_ikan.php?id=<?php echo $data['ID']; ?>"
                                                    class="btn btn-success">Edit</a> <a
                                                    href="/siskan/hapus_sumberdaya_ikan.php?id=<?php echo $data['ID']; ?>"
                                                    class="btn btn-danger">Hapus</a></td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3>Sarana dan Prasarana</h3>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#inputsarana">Input Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No.</th>
                                            <th>Gambar Sarana</th>
                                            <th>Nama Sarana</th>
                                            <th>Jumlah</b></th>
                                            <th>Tahun</th>
                                            <th>Jenis Sarana</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($sarana_prasarana)) {  ?>
                                        <tr>
                                            <td class="text-center"><b><?php echo $no++ ?></b></td>
                                            <td class="text-center"> <img class="rounded"
                                                    style="margin-top: 9px;"
                                                    src="/siskan/assets/img/ikan/<?php echo $data['image']; ?>"
                                                     width="230" height="180"></td>
                                            <td class="text-center"><?php echo $data['nama_sarana'] ?></td>
                                            <td class="text-center"><?php echo $data['jumlah'] ?></td>
                                            <td class="text-center"><?php echo $data['tahun'] ?></td>
                                            <td class="text-center"><?php echo $data['jenis_sarana'] ?></td>
                                            <td class="text-justify"><?php echo $data['keterangan'] ?></td>

                                            <td class="text-center"><a
                                                    href="/siskan/edit_sarana_prasarana.php?id=<?php echo $data['ID'] ?>"
                                                    class="btn btn-success">Edit</a> <a
                                                    href="/siskan/hapus_sarana_prasarana.php?id=<?php echo $data['ID'] ?>"
                                                    class="btn btn-danger">Hapus</a></td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="card shadow">
                        <div class="card-header">
                            <h3>Sosial Ekonomi</h3>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#inputsosek">Input Data</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-sm">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No.</th>
                                            <th>Jenis Nelayan</th>
                                            <th>Jumlah Nelayan</th>
                                            <th>Tahun</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $no = 1;
                                        while ($data = mysqli_fetch_array($sosial_ekonomi)) {  ?>
                                        <tr>
                                            <td class="text-center"><b><?php echo $no++ ?></b></td>
                                            <td class="text-center"><?php echo $data['jenis_nelayan'] ?></td>
                                            <td class="text-center"><?php echo $data['jumlah_nelayan'] ?></td>
                                            <td class="text-center"><?php echo $data['tahun'] ?></td>

                                            <td class="text-justify"><?php echo $data['keterangan'] ?></td>

                                            <td class="text-center"><a
                                                    href="/siskan/edit_sosial_ekonomi.php?id=<?php echo $data['ID']; ?>"
                                                    class="btn btn-success">Edit</a> <a
                                                    href="/siskan/hapus_sosial_ekonomi.php?id=<?php echo $data['ID']; ?>"
                                                    class="btn btn-danger">Hapus</a></td>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br>
            </div>


        </div>
    </div>


    <!-- Modal  -->
    <!-- Sumberdaya Ikan  -->
    <div class="modal fade" id="inputsdi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Sumber Daya Ikan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add_sumberdaya_ikan.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row mb-4">
                                    <div class="col-md-3">Nama Indonesia :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="text" class="form-control" name="nama-indonesia">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Nama Ilmiah : </div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="text" class="form-control" name="nama-ilmiah">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Kategori :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="text" class="form-control" name="kategori">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Produksi :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="number" class="form-control" name="produksi">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Satuan Produksi :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="text" class="form-control" name="satuan-produksi">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Nilai :</div>
                                    <div class="col-md-9 ms-auto">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text">Rp.</span>
                                            <input type="number" class="form-control" aria-label="Rupiah amount" name="nilai">

                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Tahun :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="number" class="form-control" name="tahun">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Musim Ikan :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="text" class="form-control" name="musim-ikan">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Tingkah Laku :</div>
                                    <div class="col-md-9 ms-auto">
                                        <textarea class="form-control" name="tingkah-laku"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Gambar Ikan :</div>
                                    <div class="col-md-9 ms-auto">

                                        <input class="form-control" type="file" id="gambar-ikan" name="gambar-ikan">

                                    </div>
                                </div>

                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sumberdaya Ikan  -->
    <!-- Sarana Prasarana  -->
    <div class="modal fade" id="inputsarana" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Sarana dan Prasarana</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add_sarana_prasarana.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row mb-4">
                                    <div class="col-md-3">Nama sarana :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="text" class="form-control" name="nama-sarana">
                                    </div>
                                </div>
                                
                                
                                <div class="row mb-4">
                                    <div class="col-md-3">Jumlah :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="number" class="form-control" name="jumlah">
                                    </div>
                                </div>
                                
                                <div class="row mb-4">
                                    <div class="col-md-3">Tahun :</div>
                                    <div class="col-md-9 ms-auto">
                                        <div class="input-group mb-3">
                                            <input type="number" class="form-control" aria-label="Rupiah amount" name="tahun">

                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Jenis Sarana :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="text" class="form-control" name="jenis-sarana">
                                    </div>
                                </div>
                               
                                <div class="row mb-4">
                                    <div class="col-md-3">Keterangan :</div>
                                    <div class="col-md-9 ms-auto">
                                        <textarea class="form-control" name="keterangan"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Gambar Sarana :</div>
                                    <div class="col-md-9 ms-auto">

                                        <input class="form-control" type="file" id="formFile" name="gambar-sarana">

                                    </div>
                                </div>

                            </div>
                        </div>
                  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sarana Prasarana  -->
    <!-- sosial ekonomi  -->
    <div class="modal fade" id="inputsosek" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Input Data Sosial Ekonomi</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="add_sosial_ekonomi.php" method="POST" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row mb-4">
                                    <div class="col-md-3">Jenis Nelayan :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="text" class="form-control" name="jenis-nelayan">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">Jumlah Nelayan : </div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="number" class="form-control" name="jumlah-nelayan">
                                    </div>
                                </div>
                               
                                <div class="row mb-4">
                                    <div class="col-md-3">Tahun :</div>
                                    <div class="col-md-9 ms-auto">
                                        <input type="number" class="form-control" name="tahun">
                                    </div>
                                </div>
                               
                                <div class="row mb-4">
                                    <div class="col-md-3">Keterangan :</div>
                                    <div class="col-md-9 ms-auto">
                                        <textarea class="form-control" name="keterangan"></textarea>
                                    </div>
                                </div>
                              

                            </div>
                        </div>
                   
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- sosial ekonomi  -->
    <!-- end Modal  -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>