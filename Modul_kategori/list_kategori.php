<?php

// ... ambil data dari database
include 'proses_list_kategori.php';

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
            <h1>Daftar Kategori</h1>
            <div class="btn-tambah-div">
                <a href="tambah_kategori.php"><button class="btn btn-tambah">Tambah Data</button></a>
            </div>
            <?php if (empty($data_kategori)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Kategori</th>
                    <th width="20%">Pilihan</th>
                </tr>
                <?php foreach ($data_kategori as $kategori) : ?>
                <tr>
                    <td><?php echo $kategori['kategori_nama'] ?></td>
                    <td>
                        <a href="edit_kategori.php?id_kategori=<?php echo $kategori['kategori_id']; ?>" class="btn btn-edit">Edit</a>
                        <a href="delete_kategori.php?id_kategori=<?php echo $kategori['kategori_id']; ?>" class="btn btn-hapus" onclick="return confirm('anda yakin akan menghapus data?');">Hapus</a>
                    </td>
                </tr>
                <?php  endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>
