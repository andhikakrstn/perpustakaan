-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 08:17 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpus`
--
CREATE DATABASE IF NOT EXISTS `db_perpus` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_perpus`;

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `anggota_id` int(10) UNSIGNED NOT NULL,
  `anggota_nama` varchar(50) NOT NULL,
  `anggota_alamat` text NOT NULL,
  `anggota_jk` enum('L','P') NOT NULL,
  `anggota_telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`anggota_id`, `anggota_nama`, `anggota_alamat`, `anggota_jk`, `anggota_telp`) VALUES
(1, 'Fajar', 'Glagah', 'P', '09876788999333'),
(2, 'Eko', 'Romawi', 'L', '4343562555674');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` int(10) UNSIGNED NOT NULL,
  `buku_judul` varchar(50) NOT NULL,
  `kategori_id` int(11) UNSIGNED NOT NULL,
  `buku_deskripsi` text DEFAULT NULL,
  `buku_jumlah` int(11) UNSIGNED NOT NULL,
  `buku_cover` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `buku_judul`, `kategori_id`, `buku_deskripsi`, `buku_jumlah`, `buku_cover`) VALUES
(1, 'fdgfhfdfhd', 2, 'dsfsujjyugfbfhfthfbnhgnh', 56, NULL),
(3, 'HTML', 2, 'information. Installation. In order to install Laravel 5 Entrust, just add ... You can also publish the configuration for this package to further customize table names', 49, NULL),
(4, 'PHP', 2, 'information. Installation. In order to install Laravel 5 Entrust, just add ... You can also publish the configuration for this package to further customize table names', 51, NULL),
(5, 'Buku baru', 10, 'Ini buku baru', 10, 'poto.jpg'),
(7, 'preketek', 10, 'pro', 1, '15996662264_4088cd1e53_o.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(10) UNSIGNED NOT NULL,
  `kategori_nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_nama`) VALUES
(2, 'Sci & Fic'),
(10, 'PEMROGRAMAN');

-- --------------------------------------------------------

--
-- Table structure for table `kembali`
--

CREATE TABLE `kembali` (
  `kembali_id` int(11) UNSIGNED NOT NULL,
  `pinjam_id` int(11) UNSIGNED NOT NULL,
  `tgl_kembali` date NOT NULL,
  `denda` double UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kembali`
--

INSERT INTO `kembali` (`kembali_id`, `pinjam_id`, `tgl_kembali`, `denda`) VALUES
(1, 5, '2016-03-31', 0),
(4, 12, '2016-03-20', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `petugas_id` int(10) UNSIGNED NOT NULL,
  `petugas_nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`petugas_id`, `petugas_nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `pinjam_id` int(10) UNSIGNED NOT NULL,
  `buku_id` int(11) UNSIGNED NOT NULL,
  `anggota_id` int(11) UNSIGNED NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_jatuh_tempo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pinjam`
--

INSERT INTO `pinjam` (`pinjam_id`, `buku_id`, `anggota_id`, `tgl_pinjam`, `tgl_jatuh_tempo`) VALUES
(5, 3, 1, '2016-03-11', '2016-03-19'),
(10, 3, 2, '2016-03-20', '2016-03-20'),
(11, 4, 2, '2016-03-20', '2016-03-24'),
(12, 3, 1, '2016-03-01', '2016-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--
          
CREATE TABLE `tb_mahasiswa` (
  `nim` int(16) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tmp_lahir` varchar(64) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `fakultas` varchar(64) NOT NULL,
  `angkatan` int(16) NOT NULL,
  `umur` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama`, `tmp_lahir`, `tgl_lahir`, `jurusan`, `fakultas`, `angkatan`, `umur`) VALUES
(41930020, 'Angela Juliana Chandra', 'Biak', '2001-07-07', 'Teknologi Informasi', 'Teknik dan Informatika', 2019, 19),
(41930023, 'Mario Filomeno Hale Seran', 'Atambua', '2001-08-28', 'Teknologi Informasi', 'Teknik dan Informatika', 2019, 20),
(41930026, 'I Nyoman Gde Artadana Mahaputra W', 'Denpasar', '1997-03-18', 'Teknologi Informasi', 'Teknik dan Informatika', 2019, 23),
(41930034, 'Maria A Karlin', 'Loi', '2001-01-28', 'Teknologi Informasi', 'Teknik dan Informatika', 2019, 20),
(41930037, 'I Gusti Ayu Cintya Wardani', 'Gianyar', '2000-12-29', 'Teknologi Informasi', 'Teknik dan Informatika', 2019, 20),
(41930039, 'Ketut Wisnu Triskananda Sidartha', 'Denpasar', '2001-06-14', 'Teknologi Informasi', 'Teknik dan Informatika', 2019, 19),
(42030048, 'Gerry Geraldy Latupeirissa', 'Atambua', '1999-09-28', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 21),
(42030053, 'Ni Kadek Sekar Ayu Natalia', 'Denpasar', '2001-12-25', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 19),
(42030056, 'Amelia Dianti', 'Sikur', '2002-05-08', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 19),
(42030060, 'Kavita Kharisna Murthy', 'Banjarbaru', '2001-11-14', 'Teknologi Informasi', 'Teknik dan Informatika ', 2020, 19),
(42030061, 'Rogério Che Guevara Martins Lopes', 'Ainaro', '1998-11-27', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 23),
(42030064, 'Bagus Nararya Nanda Raditya', 'Denpasar', '2002-10-13', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 19),
(42030065, 'Christopher Jordania Tjandra Dao', 'Timika', '2002-10-02', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 18),
(42030066, 'Dede Juniawan', 'Long-loreh', '2002-06-30', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 19),
(42030071, 'I Komang Basudewa Suputra', 'Badung', '2001-09-19', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 19),
(42030072, 'Salwa Alif Iwafani', 'Singaraja', '2002-03-16', 'Teknologi Informasi', 'Teknik dan Informatika ', 2020, 19),
(42030074, 'Gusti Ayu Made Indrayani Dewi', 'Negara', '2002-04-29', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 19),
(42030076, 'Gusti Ayu Tantyana Wira Devi ', 'Denpasar', '2002-05-19', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 19),
(42030078, 'Christian Ricky Sintyadi', 'Denpasar', '2002-03-23', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 19),
(42030080, 'Ni Putu Ayu Eka Devina Parwati', 'Denpasar', '2002-10-08', 'Teknologi Informasi', 'Teknik dan Informatika', 2020, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`anggota_id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`),
  ADD KEY `kategori_id` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kembali`
--
ALTER TABLE `kembali`
  ADD PRIMARY KEY (`kembali_id`),
  ADD KEY `pinjam_id` (`pinjam_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`petugas_id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`pinjam_id`),
  ADD KEY `anggota_id` (`anggota_id`),
  ADD KEY `buku_id` (`buku_id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `anggota_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kembali`
--
ALTER TABLE `kembali`
  MODIFY `kembali_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `petugas_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `pinjam_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `nim` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42030081;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`);

--
-- Constraints for table `kembali`
--
ALTER TABLE `kembali`
  ADD CONSTRAINT `kembali_ibfk_1` FOREIGN KEY (`pinjam_id`) REFERENCES `pinjam` (`pinjam_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`anggota_id`) REFERENCES `anggota` (`anggota_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
