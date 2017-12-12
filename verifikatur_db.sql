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

insert  into `users`(`id`,`name`,`username`,`email`,`password`,`remember_token`,`level`,`created_at`,`updated_at`) values (1,'Daniel D Fortuna','dna2ln48','danieldwifortuna48@gmail.com','$2y$10$e.DuqREIGyGYf9xF/kkzseSYWv9.rYJaABGMuy5JorkaQTKzCu62W','18hASDx7Yfl3cTQ8F7ZzmHCYGjhNEX1924sMMlMPg5txppsYXERWBrDrSAWj',1,'2017-12-11 17:11:49','2017-12-11 17:11:49'),(2,'Ini Verifikator','verifikator','verifikator@verifikator.com','$2y$10$iVlppdy.ZSVlb6Xz2y3PC.Ur7e9xdweZbBUjhU5iXW8U1sFZSvnHS','SZwMyOXsnGDm3PskPWAb9nPDmvjnc67K1QTFCiHNkyDVdwGOWT3q0UZznRvg',2,'2017-12-11 17:48:36','2017-12-11 17:48:36'),(3,'Ini BPP','bpp','bpp@bpp.com','$2y$10$XkDFlczrIj9VyNoksNX/UuuOERWdLCm3ySwHlSjCHEhHuJR1mpNGS','XJlh90pY3JFbmFRNSyfEaGlQ5yqTvkoWIF90Yr0b2OD0FwkSkkr4DwgxwoSG',3,'2017-12-11 17:52:35','2017-12-11 17:52:35'),(4,'admin','admin','admin@admin.com','$2y$10$6fftZbXaVsUWlMIu9vvzseKROV9YTHyBF5TrmSnXJHSu4ATcy1awq','yNhyt7ypZR0V14NKcHPtWXNJ1R7YfrMOoYOhUevmECQxjfK6GM4KH9PeGg2u',1,'2017-12-12 02:53:41','2017-12-12 02:53:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
