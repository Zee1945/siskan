<?php
// Create database connection using config file
include_once("controller/connection.php");
$jenis_nelayan = $_POST['jenis-nelayan'];
$jumlah_nelayan = $_POST['jumlah-nelayan'];
$tahun = $_POST['tahun'];
$keterangan = $_POST['keterangan'];
        $query = mysqli_query($mysqli, "INSERT INTO sosial_ekonomi(
            jenis_nelayan,
            jumlah_nelayan,
            tahun,
            keterangan
            )
            VALUES(
            '$jenis_nelayan','$jumlah_nelayan','$tahun','$keterangan'
            )");
        if ($query) {
            echo 'DATA BERHASIL DI INPUT';
            echo '<script>alert("DATA BERHASIL DI UPLOAD")</script>';
        } else {
            echo 'GAGAL MENGINPUT DATA';
        }
// Fetch all users data from database
header("location:manajemen.php");
?>