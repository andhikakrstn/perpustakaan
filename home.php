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
        <li><a href="Karya_ilmiah/list_buku.php"><i class="fas fa-book"></i>Karya Ilmiah</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Novel</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Majalah</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Jurnal</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Laporan</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Buku Tamu</a></li>
        <li><a href="#"><i class="fas fa-book"></i>Elibrary</a></li>
        <li><a href="logout.php"><i class="fas fa-book"></i>Logout</a></li>
    </ul>
    </div>
    <h2>Selamat Datang</h2>
<form action="home.php" method="post">
            <legend>Pendataan</legend>
            Nama : <input type="text" name="nama"><br><br>
            Asal : <input type="text" name="asal"><br><br>
            Umur : <input type="text" name="umur"><br><br>
            Jenis Kelamin : 
            <input type="radio" name="jk" value="Laki-Laki">Laki-laki
            <input type="radio" name="jk" value="Perempuan">Perempuan <br><br>
            Status : 
            <select name="status">
                <option>Pelajar</option>
                <option>Belum Menikah</option>
                <option>Sudah Menikah</option>
            </select><br> <br>
            Hobi : <input type="text" name="hobi"><br><br>
            Alamat : <textarea name="alamat"></textarea><br><br>
            Pendidikan Terakhir : 
            <select name="pt">
                <option>SD</option>
                <option>SMP</option>
                <option>SMA/K</option>
                <option>Kuliah</option>
                <option>Tidak Sekolah</option>
            </select> <br> <br>
            Agama : 
            <select name="agama">
                <option>Kristen</option>
                <option>Katolik</option>
                <option>Islam</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Kong hu Chu</option>
            </select><br><br>
            Makanan Kesukaan : <input type="text" name="makes"><br><br>
            <button type="submit">Kirim</button>
    </form>
</body>
</html>
