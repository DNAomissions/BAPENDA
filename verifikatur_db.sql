/*
SQLyog Enterprise v12.09 (64 bit)
MySQL - 10.1.28-MariaDB : Database - verifikatur_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`verifikatur_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `verifikatur_db`;

/*Table structure for table `bpp` */

DROP TABLE IF EXISTS `bpp`;

CREATE TABLE `bpp` (
  `id_bpp` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bpp` varchar(255) NOT NULL,
  `unit_kerja` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  PRIMARY KEY (`id_bpp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `bpp` */

/*Table structure for table `gu` */

DROP TABLE IF EXISTS `gu`;

CREATE TABLE `gu` (
  `id_gu` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kegiatan` varchar(20) NOT NULL,
  `id_bpp` int(11) NOT NULL,
  `surat_permohonan` varchar(255) DEFAULT NULL,
  `buku_kas_umum` varchar(255) DEFAULT NULL,
  `laporan_pertanggungjawaban` varchar(255) DEFAULT NULL,
  `sptbl` varchar(255) DEFAULT NULL,
  `rekap_pajak_sipkd` varchar(255) DEFAULT NULL,
  `kwitansi` varchar(255) DEFAULT NULL,
  `spp_n_faktur_pajak` varchar(255) DEFAULT NULL,
  `dokumentasi` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `create_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_gu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `gu` */

/*Table structure for table `kegiatan` */

DROP TABLE IF EXISTS `kegiatan`;

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kegiatan` varchar(20) NOT NULL,
  `program_kegiatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `kegiatan` */

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `level` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `level` */

insert  into `level`(`id`,`level`) values (1,'admin'),(2,'verifikator'),(3,'bpp');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_bpp` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_EMAIL` (`email`),
  UNIQUE KEY `UNIQUE_USERNAME` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`id_bpp`,`name`,`username`,`email`,`password`,`remember_token`,`level`,`created_at`,`updated_at`) values (1,NULL,'Daniel D Fortuna','dna2ln48','danieldwifortuna48@gmail.com','$2y$10$e.DuqREIGyGYf9xF/kkzseSYWv9.rYJaABGMuy5JorkaQTKzCu62W','18hASDx7Yfl3cTQ8F7ZzmHCYGjhNEX1924sMMlMPg5txppsYXERWBrDrSAWj',1,'2017-12-11 17:11:49','2017-12-11 17:11:49'),(2,NULL,'Ini Verifikator','verifikator','verifikator@verifikator.com','$2y$10$iVlppdy.ZSVlb6Xz2y3PC.Ur7e9xdweZbBUjhU5iXW8U1sFZSvnHS','l8M3367iwOqO3cbR8SQ3TuEekQilvMHPvemtHLUIMM0xKhi7Kaxnt3G1TRlb',2,'2017-12-11 17:48:36','2017-12-11 17:48:36'),(3,NULL,'Ini BPP','bpp','bpp@bpp.com','$2y$10$XkDFlczrIj9VyNoksNX/UuuOERWdLCm3ySwHlSjCHEhHuJR1mpNGS','72987d3fl65xgCWacXlLLjPDgZycSzoEk3u42vGOyOIcmHGKPnhQ9NNyglbA',3,'2017-12-11 17:52:35','2017-12-11 17:52:35'),(4,NULL,'admin','admin','admin@admin.com','$2y$10$6fftZbXaVsUWlMIu9vvzseKROV9YTHyBF5TrmSnXJHSu4ATcy1awq','FNjEOgkftDSeLCXr5ZvLVKZ1qin1kHEWQuJin7b1JvaPfDGa7ZqA8L4SsXcU',1,'2017-12-12 02:53:41','2017-12-12 02:53:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
