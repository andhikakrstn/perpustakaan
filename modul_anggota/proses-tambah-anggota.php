<?php
session_start();
// ... jika belum login, alihkan ke halaman login
if (! isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jurusan = $_POST['jurusan'];
$fakultas = $_POST['fakultas'];
$angkatan = $_POST['angkatan'];
$umur = $_POST['umur'];

$query = "INSERT INTO tb_mahasiswa (nim, nama, tmp_lahir, tgl_lahir, jurusan, fakultas, angkatan, umur) 
    VALUES ('$nim', '$nama', '$tmp_lahir', '$tgl_lahir', '$jurusan', '$fakultas', '$angkatan', '$umur')";
$hasil = mysqli_query($db, $query);

if ($hasil == true) {
    header('Location: list-anggota.php');
} else {
    header('Location: tambah-anggota.php');
}
