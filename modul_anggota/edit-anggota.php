<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: ../login.php');
    exit();
}

include '../connection.php';

$nim = $_GET['nim'];
$query = "SELECT * FROM tb_mahasiswa WHERE id = $id";
$hasil = mysqli_query($db, $query);
$data_anggota = mysqli_fetch_assoc($hasil);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Kategori</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container clearfix">

        <?php include '../sidebars.php' ?>

        <div class="content">
            <h3>Edit Data Anggota</h3>
            <form method="post" action="proses-edit-anggota.php">
                <input type="hidden" name="nim" value="<?php echo $data_anggota['nim']; ?>">
                <p>Nama</p>
                <p><input type="text" name="nama" value="<?php echo $data_anggota['nama']; ?>"></p>
                <p>Tempat Lahir</p>
                <p><input type="text" name="tmp_lahir" value="<?php echo $data_anggota['tmp_lahir']; ?>"></p>
                <p>Tanggal Lahir</p>
                <p><input type="text" name="tgl_lahir" value="<?php echo $data_anggota['tgl_lahir']; ?>"></p>
                <p>Jurusan</p>
                <p><input type="text" name="jurusan" value="<?php echo $data_anggota['jurusan']; ?>"></p>
                <p>Fakultas</p>
                <p><input type="text" name="fakultas" value="<?php echo $data_anggota['fakultas']; ?>"></p>
                <p>angkatan</p>
                <p><input type="text" name="angkatan" value="<?php echo $data_anggota['angkatan']; ?>"></p>
                <p>Umur</p>
                <p><input type="text" name="umur" value="<?php echo $data_anggota['umur']; ?>"></p>
                
                    <input type="submit" class="btn btn-submit" value="Simpan">
                    <input type="reset" class="btn btn-submit" value="Batal" onclick="self.history.back();">
                </p>
            </form>
        </div>

    </div>
</body>
</html>
