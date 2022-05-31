<?php
// Create database connection using config file
include_once("controller/connection.php");
$nama_sarana = $_POST['nama-sarana'];
$jumlah = $_POST['jumlah'];
$tahun = $_POST['tahun'];
$jenis_sarana = $_POST['jenis-sarana'];
$keterangan = $_POST['keterangan'];
$nama_gambar = $_FILES['gambar-sarana']['name'];
$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
$x = explode('.', $nama_gambar);
$ekstensi = strtolower(end($x));
$ukuran    = $_FILES['gambar-sarana']['size'];
$file_tmp = $_FILES['gambar-sarana']['tmp_name'];

// echo $nama_gambar;


if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
    if ($ukuran < 20440700) {
        move_uploaded_file($file_tmp, 'assets/img/sarana/' . $nama_gambar);
        $query = mysqli_query($mysqli, "INSERT INTO sarana_prasarana(
            nama_sarana,
            jumlah,
            tahun,
            jenis_sarana,
            keterangan,
            image)
            VALUES(
            '$nama_sarana','$jumlah','$tahun','$jenis_sarana','$keterangan','$nama_gambar'
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
} else {
    echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
}

// Fetch all users data from database
header("location:manajemen.php");
?>