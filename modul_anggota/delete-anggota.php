<?php

include '../connection.php';

$nim = $_GET['nim'];

$query = "DELETE FROM tb_mahasiswa WHERE nim = $nim";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('location: list-anggota.php');
} else {
    header('location: tambah-anggota.php');
}
