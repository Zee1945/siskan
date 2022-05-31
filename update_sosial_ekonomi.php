<?php
// Create database connection using config file
include_once("controller/connection.php");
$id = $_POST['id'];
$jenis_nelayan = $_POST['jenis-nelayan'];
$jumlah_nelayan = $_POST['jumlah-nelayan'];
$tahun = $_POST['tahun'];
$keterangan = $_POST['keterangan'];

// Fetch all users data from database
$result = mysqli_query($mysqli, "UPDATE sosial_ekonomi SET jenis_nelayan = '$jenis_nelayan', jumlah_nelayan='$jumlah_nelayan',tahun='$tahun',keterangan ='$keterangan' WHERE id = $id");
header("location:manajemen.php");
?>