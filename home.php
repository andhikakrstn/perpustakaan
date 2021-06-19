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
        <li><a href="../modul-buku/List_buku.php"><i class="fas fa-book"></i>Data Buku</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Peminjaman</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Pengembalian</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Buku Tamu</a></li>
        <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
    </ul>
    </div>
    <h2>Selamat Datang</h2>
    <form action="home.php" method="post">
            <legend>Pendataan</legend><br> 
            <input type="radio" name="pengunjung" value="Dosen">Dosen 
            <input type="radio" name="pengunjung" value="Mahasiswa">Mahasiswa 
            <input type="radio" name="pengunjung" value="Umum">Umum  <br><br>

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
