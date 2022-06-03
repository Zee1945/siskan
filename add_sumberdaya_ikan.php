<?php
// Create database connection using config file
include_once("controller/connection.php");


    $nama_indonesia = $_POST['nama-indonesia'];
    $nama_ilmiah = $_POST['nama-ilmiah'];
    $kategori = $_POST['kategori'];
    $produksi = $_POST['produksi'];
    $satuan_produksi = $_POST['satuan-produksi'];
    $nilai = $_POST['nilai'];
    $tahun = $_POST['tahun'];
    $musim_ikan = $_POST['musim-ikan'];
    $tingkah_laku = $_POST['tingkah-laku'];

    $nama_gambar = $_FILES['gambar-ikan']['name'];
 
    $ukuran    = $_FILES['gambar-ikan']['size'];
    $file_tmp = $_FILES['gambar-ikan']['tmp_name'];

   


        if ($ukuran < 20440700) {
            move_uploaded_file($file_tmp, 'assets/img/ikan/' . $nama_gambar);
            $query = mysqli_query($mysqli, "INSERT INTO sumberdaya_ikan(
                nama_indonesia,
                nama_ilmiah,
                kategori,
                produksi,
                satuan_produksi,
                nilai,tahun,musim_ikan,
                tingkah_laku,
                image)
                VALUES(
                '$nama_indonesia','$nama_ilmiah','$kategori','$produksi','$satuan_produksi','$nilai','$tahun','$musim_ikan','$tingkah_laku','$nama_gambar'
                )");
            if ($query) {
                echo 'FILE BERHASIL DI UPLOAD';
                echo '<script>alert("DATA BERHASIL DI UPLOAD")</script>';
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    
// Fetch all users data from database

header("location:manajemen.php");

?>