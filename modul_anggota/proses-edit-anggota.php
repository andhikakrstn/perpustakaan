<?php
include '../connection.php';

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jurusan = $_POST['jurusan'];
$fakultas = $_POST['fakultas'];
$angkatan = $_POST['angkatan'];
$umur = $_POST['umur'];

$query = "UPDATE tb_mahasiswa 
    SET nim = '$nim',
    nama = '$nama',
    tmp_lahir = '$tmp_lahir',
    tgl_lahir = '$tgl_lahir',
    jurusan = '$jurusan',
    fakultas = '$fakultas',
    angkatan = '$angkatan,'
    umur ='$umur'
    WHERE nim = $nim";

$hasil = mysqli_query($db, $query);
// var_dump(mysqli_error($db));
if ($hasil == true) {
    header('Location: list-anggota.php');
} else {
    header('Location: tambah-anggota.php');
}
