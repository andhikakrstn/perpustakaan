<?php
//error_reporting(E_ALL); ini_set('display_errors', 1);
//mysqli_report(MYSQLI_REPORT_ERROR);

$host = "localhost";
$user = "root";
$pass = "";
$database = "db_perpus";

// Create connection

$db = mysqli_connect($host, $user, $pass, $database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$conn = new mysqli($host, $user, $pass, $database);
 
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
?>
