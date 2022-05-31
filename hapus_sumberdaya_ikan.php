<?php
// Create database connection using config file
include_once("controller/connection.php");
$id = $_GET['id'];


// Fetch all users data from database
$result = mysqli_query($mysqli, "DELETE FROM sumberdaya_ikan WHERE id = $id");
header("location:manajemen.php");
?>