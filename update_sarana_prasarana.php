<?php
// Create database connection using config file
include_once("controller/connection.php");
$id = $_POST['ID'];
$nama_sarana = $_POST['nama-sarana'];
$jumlah = $_POST['jumlah'];
$tahun = $_POST['tahun'];
$jenis_sarana = $_POST['jenis-sarana'];
$keterangan = $_POST['keterangan'];


// Fetch all users data from database
$result = mysqli_query($mysqli, "UPDATE sarana_prasarana SET nama_sarana = '$nama_sarana',jumlah='$jumlah',tahun='$tahun',jenis_sarana='$jenis_sarana',keterangan='$keterangan' WHERE id = '$id'");
// header("location:manajemen.php");
?>