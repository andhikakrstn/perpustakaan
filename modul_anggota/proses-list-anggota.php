<?php
if (session_status()!=PHP_SESSION_ACTIVE) {
	session_start();
}

// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}


include '../connection.php';

$query = "SELECT * FROM tb_mahasiswa";

$hasil = mysqli_query($db, $query);

$data_anggota = array();

while ($row = mysqli_fetch_assoc($hasil)) {
    $data_anggota[] = $row;
}