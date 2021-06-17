/*
SQLyog Enterprise - MySQL GUI v8.05 
MySQL - 5.5.5-10.4.18-MariaDB : Database - db_mhs
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_mhs` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_mhs`;

/*Table structure for table `tb_mahasiswa` */

DROP TABLE IF EXISTS `tb_mahasiswa`;

CREATE TABLE `tb_mahasiswa` (
  `nim` int(16) NOT NULL AUTO_INCREMENT,
  `nama` varchar(64) NOT NULL,
  `tmp_lahir` varchar(64) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `fakultas` varchar(64) NOT NULL,
  `angkatan` int(16) NOT NULL,
  `umur` int(16) NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB AUTO_INCREMENT=42030081 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tb_mahasiswa` */

insert  into `tb_mahasiswa`(`nim`,`nama`,`tmp_lahir`,`tgl_lahir`,`jurusan`,`fakultas`,`angkatan`,`umur`) values (41930020,'Angela Juliana Chandra','Biak','2001-07-07','Teknologi Informasi','Teknik dan Informatika',2019,19),(41930023,'Mario Filomeno Hale Seran','Atambua','2001-08-28','Teknologi Informasi','Teknik dan Informatika',2019,20),(41930026,'I Nyoman Gde Artadana Mahaputra W','Denpasar','1997-03-18','Teknologi Informasi','Teknik dan Informatika',2019,23),(41930034,'Maria A Karlin','Loi','2001-01-28','Teknologi Informasi','Teknik dan Informatika',2019,20),(41930037,'I Gusti Ayu Cintya Wardani','Gianyar','2000-12-29','Teknologi Informasi','Teknik dan Informatika',2019,20),(41930039,'Ketut Wisnu Triskananda Sidartha','Denpasar','2001-06-14','Teknologi Informasi','Teknik dan Informatika',2019,19),(42030048,'Gerry Geraldy Latupeirissa','Atambua','1999-09-28','Teknologi Informasi','Teknik dan Informatika',2020,21),(42030053,'Ni Kadek Sekar Ayu Natalia','Denpasar','2001-12-25','Teknologi Informasi','Teknik dan Informatika',2020,19),(42030056,'Amelia Dianti','Sikur','2002-05-08','Teknologi Informasi','Teknik dan Informatika',2020,19),(42030060,'Kavita Kharisna Murthy','Banjarbaru','2001-11-14','Teknologi Informasi','Teknik dan Informatika ',2020,19),(42030061,'Rogério Che Guevara Martins Lopes','Ainaro','1998-11-27','Teknologi Informasi','Teknik dan Informatika',2020,23),(42030064,'Bagus Nararya Nanda Raditya','Denpasar','2002-10-13','Teknologi Informasi','Teknik dan Informatika',2020,19),(42030065,'Christopher Jordania Tjandra Dao','Timika','2002-10-02','Teknologi Informasi','Teknik dan Informatika',2020,18),(42030066,'Dede Juniawan','Long-loreh','2002-06-30','Teknologi Informasi','Teknik dan Informatika',2020,19),(42030071,'I Komang Basudewa Suputra','Badung','2001-09-19','Teknologi Informasi','Teknik dan Informatika',2020,19),(42030072,'Salwa Alif Iwafani','Singaraja','2002-03-16','Teknologi Informasi','Teknik dan Informatika ',2020,19),(42030074,'Gusti Ayu Made Indrayani Dewi','Negara','2002-04-29','Teknologi Informasi','Teknik dan Informatika',2020,19),(42030076,'Gusti Ayu Tantyana Wira Devi ','Denpasar','2002-05-19','Teknologi Informasi','Teknik dan Informatika',2020,19),(42030078,'Christian Ricky Sintyadi','Denpasar','2002-03-23','Teknologi Informasi','Teknik dan Informatika',2020,19),(42030080,'Ni Putu Ayu Eka Devina Parwati','Denpasar','2002-10-08','Teknologi Informasi','Teknik dan Informatika',2020,18);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
