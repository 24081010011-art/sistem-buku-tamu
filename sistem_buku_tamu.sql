-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.44 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sistem_buku_tamu
CREATE DATABASE IF NOT EXISTS `sistem_buku_tamu` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sistem_buku_tamu`;

-- Dumping structure for table sistem_buku_tamu.tamu
CREATE TABLE IF NOT EXISTS `tamu` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `instansi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tujuan` text COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `user_id` int DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Menunggu',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `tamu_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sistem_buku_tamu.tamu: ~3 rows (approximately)
INSERT INTO `tamu` (`id`, `nama`, `instansi`, `tujuan`, `tanggal`, `user_id`, `status`) VALUES
	(1, 'Fitriani Nafisa Wailegi', 'UPN VETERAN JATIM', 'KONSULTASI buku', '2026-06-08', 1, 'Selesai'),
	(4, 'Sarirotun Nimah', 'UPN "Veteran" Jawa Timur', 'Konsultasi Papper', '2026-06-09', 1, 'Menunggu'),
	(5, 'Jovita Lupiz', 'ITS', 'PKM', '2026-06-13', 1, 'Menunggu');

-- Dumping structure for table sistem_buku_tamu.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Aktif','Nonaktif') COLLATE utf8mb4_general_ci DEFAULT 'Aktif',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table sistem_buku_tamu.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`, `status`) VALUES
	(1, 'Administrator', 'admin', '$2y$10$Tl.hdrfo3na08pQ8LZUZQetIry3sXROrzXHnVLwiR28Gad4f4tisu', 'admin', 'Aktif'),
	(2, 'User ', 'user', '$2y$10$Tl.hdrfo3na08pQ8LZUZQetIry3sXROrzXHnVLwiR28Gad4f4tisu', 'user', 'Aktif');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
