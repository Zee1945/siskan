<?php
// Create database connection using config file
include_once("controller/connection.php");
$id = $_POST['id'];
$nama_indonesia = $_POST['nama-indonesia'];
$nama_ilmiah = $_POST['nama-ilmiah'];
$kategori = $_POST['kategori'];
$produksi = $_POST['produksi'];
$satuan_produksi = $_POST['satuan-produksi'];
$nilai = $_POST['nilai'];
$tahun = $_POST['tahun'];
$musim_ikan = $_POST['musim-ikan'];
$tingkah_laku = $_POST['tingkah-laku'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "UPDATE sumberdaya_ikan SET nama_indonesia = '$nama_indonesia',nama_ilmiah='$nama_ilmiah',kategori='$kategori',produksi='$produksi',satuan_produksi='$satuan_produksi',nilai='$nilai',tahun='$tahun',musim_ikan='$musim_ikan',tingkah_laku='$tingkah_laku' WHERE id = '$id'");
header("location:manajemen.php");
?>