<?php
// ... ambil data dari database
include 'proses_list_pinjam_data.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Peminjaman</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container clearfix">

        <?php include '../sidebars.php' ?>

        <div class="content">
            <h1>Daftar Peminjaman</h1>
            <?php  
            // Check message ada atau tidak
            if(!empty($_SESSION['messages'])) {
                echo $_SESSION['messages']; //menampilkan pesan 
                unset($_SESSION['messages']); //menghapus pesan setelah refresh
            }
            ?>
            <div class="btn-tambah-div">
                <a href="pinjam_form.php"><button class="btn btn-tambah">Transaksi Baru</button></a>
            </div>
            <?php if (empty($data_pinjam)) : ?>
            Tidak ada data.
            <?php else : ?>
            <table class="data">
                <tr>
                    <th>Buku</th>
                    <th>Nama</th>
                    <th>Tgl Pinjam</th>
                    <th>Tgl Jatuh Tempo</th>
                    <th>Tgl Kembali</th>
                    <th>Status</th>
                    <th width="30%">Pilihan</th>
                </tr>
                <?php foreach ($data_pinjam as $pinjam) : ?>
                <tr>
                    <td><?php echo $pinjam['buku_judul'] ?></td>
                    <td><?php echo $pinjam['anggota_nama'] ?></td>
                    <td><?php echo date('d-m-Y', strtotime($pinjam['tgl_pinjam'])) ?></td>
                    <td><?php echo date('d-m-Y', strtotime($pinjam['tgl_jatuh_tempo'])) ?></td>
                    <td>
                    <?php  
                        if (empty($pinjam['tgl_kembali'])) {
                            echo "-";
                        } 
                        else {
                            echo date('d-m-Y', strtotime($pinjam['tgl_kembali']));
                        }
                    ?>
                    </td>
                    <td>
                        <?php $status = '' ?>
                        <?php if (empty($pinjam['tgl_kembali'])): ?>
                            pinjam
                        <?php $status = 'pinjam' ?>
                        <?php else: ?>
                            kembali
                        <?php $status = 'kembali' ?>  
                        <?php endif ?>
                    </td>
                    <td>
                        
                        <?php if (empty($pinjam['tgl_kembali'])): ?>
                            <a href="../Modul_pengembalian/pengembalian.php?id_pinjam=<?php echo $pinjam['pinjam_id'] ?>" class="btn btn-tambah" title="klik untuk proses pengembalian">Kembali</a>
                            <a href="edit_pinjam.php?id_pinjam=<?php echo $pinjam['pinjam_id']; ?>&&status=<?php echo $status; ?>" class="btn btn-edit">Edit</a>
                        <?php endif ?>
                        <a href="proses_delete_pinjam.php?id_pinjam=<?php echo $pinjam['pinjam_id']; ?>&&status=<?php echo $status; ?>&&buku_id=<?php echo $pinjam['buku_id']; ?>"  onclick="return confirm('anda yakin akan menghapus data?')" class="btn btn-hapus">Hapus</a>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
            <?php endif ?>
        </div>

    </div>
</body>
</html>
