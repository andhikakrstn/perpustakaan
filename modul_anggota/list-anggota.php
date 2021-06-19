<?php

// ... ambil data dari database
include 'proses-list-anggota.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Kategori</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container clearfix">

        <?php include '../sidebars.php' ?>

        <div class="content">
            <h1>Daftar Anggota</h1>
            <div class="btn-tambah-div">
                <a href="tambah-anggota.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_anggota)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>
                    <th>Fakultas</th>
                    <th>Angkatan</th>
                    <th>Umur</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_anggota as $tb_mahasiswa) : ?>
                <tr>
                    <td><?php echo $tb_mahasiswa['nim'] ?></td>
                    <td><?php echo $tb_mahasiswa['nama'] ?></td>
                    <td><?php echo $tb_mahasiswa['tmp_lahir'] ?></td>
                    <td><?php echo $tb_mahasiswa['tgl_lahir'] ?></td>
                    <td><?php echo $tb_mahasiswa['jurusan'] ?></td>
                    <td><?php echo $tb_mahasiswa['fakultas'] ?></td>
                    <td><?php echo $tb_mahasiswa['angkatan'] ?></td>
                    <td><?php echo $tb_mahasiswa['umur'] ?></td>
                    <td>
                        <a href="edit-anggota.php?id_anggota=<?php echo $tb_mahasiswa['nim']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete-anggota.php?id_anggota=<?php echo $tb_mahasiswa['nim']; ?>" class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php  endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>
