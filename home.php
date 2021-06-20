<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Side Menu Bar</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <label>
    <i class="fas fa-bars" id="btn"></i>
    </label>
    <div class="sidebar">
    <header>My perpus</header>
    <ul>

        <li><a href="#"><i class="fas fa-book"></i>Home</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Data Buku</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Peminjaman</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Pengembalian</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Buku Tamu</a></li>

        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>

        <li><a href="home.php"><i class="fas fa-book"></i>Home</a></li>
        <li><a href="Modul_kategori/list_kategori.php"><i class="fas fa-book"></i>kategori</a></li>
        <li><a href="Modul_buku/List_buku.php"><i class="fas fa-book"></i>Data Buku</a></li>
        <li><a href="Modul_peminjaman/pinjam_data.php"><i class="fas fa-book"></i>Peminjaman</a></li>
        <li><a href="Modul_pengembalian/list_pengembalian.php"><i class="fas fa-book"></i>Pengembalian</a></li>
        <li><a href="modul_anggota/list-anggota.php"><i class="fas fa-book"></i>Buku Tamu</a></li>
        <li><a href="logout.php" onclick="return confirm('anda yakin akan keluar?')"><i class="fas fa-sign-out-alt"></i>Logout</a></li>

    </ul>
    </div>
    <h2>Selamat Datang</h2>
<form action="home.php" method="post">
            <legend>Pendataan</legend><br> 
            <input type="radio" name="pengunjung" value="Dosen">Dosen &nbsp &nbsp &nbsp
            <input type="radio" name="pengunjung" value="Mahasiswa">Mahasiswa &nbsp &nbsp &nbsp  
            <input type="radio" name="pengunjung" value="Umum">Umum &nbsp &nbsp &nbsp <br><br>
            <label>Nim / nip :</label>
            <input type="text" name="Nim / nip"><br><br>
            <tr>
				<td colspan="2" align="right">
					<input type="submit" name="kirim" id="kirim" value="kirim" class="btn btn-kirim">
				</td>
			</tr>
    </form>
</body>
</html>
