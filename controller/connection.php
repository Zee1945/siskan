<?php
/**
 * using mysqli_connect for database connection
 */
 
$databaseHost = 'localhost';
$databaseName = 'kelola_perikanan';
$databaseUsername = 'root';
$databasePassword = '';
 
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 

?>