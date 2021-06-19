<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Anggota</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container clearfix">

        <?php include '../sidebars.php' ?>

        <div class="content">
            <h3>Tambah Data Anggota</h3>
            <form method="post" action="proses-tambah-anggota.php">
                <p>NIM</p>
                <p><input type="text" name="nim"></p>
                <p>Nama</p>
                <p><input type="text" name="nama"></p>
                <p>Tempat Lahir</p>
                <p><input type="text" name="tmp_lahir"></p>
                <p>Tanggal Lahir</p>
                <p><input type="date" name="tgl_lahir"></p>
                <p>Jurusan</p>
                <p><input type="text" name="jurusan"></p>
                <p>Fakultas</p>
                <p><input type="text" name="fakultas"></p>
                <p>Angkatan</p>
                <p><input type="text" name="angkatan"></p>
                <p>umur</p>
                <p><input type="text" name="umur"></p>

                <p>
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
