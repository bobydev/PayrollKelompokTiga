-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for payroll
CREATE DATABASE IF NOT EXISTS `payroll` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `payroll`;

-- Dumping structure for table payroll.absensi
CREATE TABLE IF NOT EXISTS `absensi` (
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_hadir` datetime NOT NULL,
  `shift` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.absensi: ~0 rows (approximately)
/*!40000 ALTER TABLE `absensi` DISABLE KEYS */;
REPLACE INTO `absensi` (`nik`, `tgl_hadir`, `shift`, `created_at`, `updated_at`) VALUES
	('0479', '2021-07-03 15:07:59', 'SHIFT 2', '2021-07-03 08:08:44', '2021-07-03 08:28:19'),
	('0466', '2021-07-03 17:11:33', 'SHIFT 1', '2021-07-03 10:11:41', '2021-07-03 10:11:41');
/*!40000 ALTER TABLE `absensi` ENABLE KEYS */;

-- Dumping structure for table payroll.cuti
CREATE TABLE IF NOT EXISTS `cuti` (
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_cuti` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_cuti` date NOT NULL,
  PRIMARY KEY (`jml_cuti`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.cuti: ~0 rows (approximately)
/*!40000 ALTER TABLE `cuti` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuti` ENABLE KEYS */;

-- Dumping structure for table payroll.divisi
CREATE TABLE IF NOT EXISTS `divisi` (
  `kd_divisi` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_divisi` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kd_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.divisi: ~0 rows (approximately)
/*!40000 ALTER TABLE `divisi` DISABLE KEYS */;
/*!40000 ALTER TABLE `divisi` ENABLE KEYS */;

-- Dumping structure for table payroll.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table payroll.jabatan
CREATE TABLE IF NOT EXISTS `jabatan` (
  `kd_jabatan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_jabatan` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`kd_jabatan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.jabatan: ~0 rows (approximately)
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;

-- Dumping structure for table payroll.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_karyawan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmpt_lahir` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_masuk` date NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gapok` int(11) NOT NULL,
  `jabatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_divisi` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.karyawan: ~5 rows (approximately)
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
REPLACE INTO `karyawan` (`nik`, `nm_karyawan`, `tmpt_lahir`, `tgl_lahir`, `jns_kelamin`, `alamat`, `tgl_masuk`, `no_rekening`, `gapok`, `jabatan`, `pendidikan`, `kd_jabatan`, `kd_divisi`) VALUES
	('0466', 'Ujang Kasep', 'Jakarta', '1998-01-03', 'L', 'Jl. Underground Lacasa De Pepel', '2019-07-03', '54350359', 9000000, 'Multi Jabatan', 'S3', NULL, NULL),
	('0479', 'Boby Aprespa', 'Karawang', '1996-04-28', 'L', 'Cikampek', '2020-10-11', '1232882822', 3500000, 'Supervisor', 'D3', NULL, NULL),
	('0480', 'Hasti Fitria Utami', 'Purwakarta', '1998-02-12', 'P', 'Kosambi', '2021-04-02', '345262522', 3580000, 'Staff', 'S1', NULL, NULL),
	('0481', 'Farroh Maulida Zahro', 'Karawang', '1999-01-02', 'P', 'Sukaseuri', '2021-03-28', '657787687236', 3292000, 'Staff', 'SMA', NULL, NULL),
	('0482', 'Annisa Adelia', 'Bandung', '2000-02-18', 'P', 'Kopo', '2021-02-11', '93920302', 3628500, 'Staff', 'D3', NULL, NULL),
	('0483', 'Vera Nuraeni', 'Karawang', '1999-03-07', 'P', 'Cikopo', '2021-04-07', '56738382', 3125000, 'Staff', 'D3', NULL, NULL);
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;

-- Dumping structure for table payroll.lembur
CREATE TABLE IF NOT EXISTS `lembur` (
  `nik` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_lembur` int(11) NOT NULL,
  `uang_lembur` int(11) NOT NULL,
  `tgl_lembur` datetime NOT NULL,
  `total_gaji` int(11) NOT NULL,
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.lembur: ~3 rows (approximately)
/*!40000 ALTER TABLE `lembur` DISABLE KEYS */;
REPLACE INTO `lembur` (`nik`, `jam_lembur`, `uang_lembur`, `tgl_lembur`, `total_gaji`) VALUES
	('0466', 3, 90000, '2021-07-04 00:11:00', 9090000),
	('0479', 1, 90000, '2021-07-03 17:43:00', 3590000),
	('0481', 3, 90000, '2021-07-03 17:16:00', 3472000),
	('0483', 2, 60000, '2021-04-12 20:15:00', 3185000);
/*!40000 ALTER TABLE `lembur` ENABLE KEYS */;

-- Dumping structure for table payroll.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.migrations: ~11 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_03_15_142846_karyawan', 1),
	(5, '2021_03_15_142915_lembur', 1),
	(6, '2021_03_15_142929_divisi', 1),
	(7, '2021_03_15_142944_cuti', 1),
	(8, '2021_03_15_143000_akun', 1),
	(9, '2021_03_15_143017_gaji', 1),
	(10, '2021_03_15_143029_jabatan', 1),
	(11, '2021_03_29_000321_create_permission_tables', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table payroll.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.model_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;

-- Dumping structure for table payroll.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.model_has_roles: ~8 rows (approximately)
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
REPLACE INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\User', 1),
	(1, 'App\\User', 2),
	(1, 'App\\User', 3),
	(1, 'App\\User', 4),
	(1, 'App\\User', 5),
	(2, 'App\\User', 6),
	(2, 'App\\User', 7),
	(1, 'App\\User', 8),
	(2, 'App\\User', 9);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;

-- Dumping structure for table payroll.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table payroll.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Dumping structure for table payroll.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.roles: ~2 rows (approximately)
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
REPLACE INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'web', '2021-03-28 18:26:14', '2021-03-28 18:26:14'),
	(2, 'user', 'web', '2021-03-28 18:26:14', '2021-03-28 18:26:14');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;

-- Dumping structure for table payroll.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.role_has_permissions: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;

-- Dumping structure for table payroll.shift
CREATE TABLE IF NOT EXISTS `shift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(50) DEFAULT NULL,
  `jam_masuk` time DEFAULT NULL,
  `jam_keluar` time DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table payroll.shift: ~2 rows (approximately)
/*!40000 ALTER TABLE `shift` DISABLE KEYS */;
REPLACE INTO `shift` (`id`, `kategori`, `jam_masuk`, `jam_keluar`, `created_at`, `updated_at`) VALUES
	(1, 'SHIFT 1', '07:00:12', '16:45:28', '2021-07-03 21:35:46', '2021-07-03 21:35:47'),
	(2, 'SHIFT 2', '19:00:54', '04:25:04', '2021-07-03 21:36:20', '2021-07-03 21:36:20');
/*!40000 ALTER TABLE `shift` ENABLE KEYS */;

-- Dumping structure for table payroll.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table payroll.users: ~7 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Annisa_11190531', '11190531@bsi.ac.id', NULL, '$2y$10$Xd9Wb3iIx2quiN/q3BaNyehVvTz9zeXsENEjQx4HSfCt0Kf.Rsl4S', NULL, '2021-03-28 18:26:15', '2021-03-28 18:26:15'),
	(2, 'Boby_11190071', '11190071@bsi.ac.id', NULL, '$2y$10$oTNd2zXpIYh/hauGpK1q9eAGyZ32wul6KUCdhUgyvJFb8qW41sqJW', NULL, '2021-03-28 18:26:15', '2021-03-28 18:26:15'),
	(3, 'Farroh_11190372', '11190372@bsi.ac.id', NULL, '$2y$10$o7Vlxoeo98PNpj37iDJp5.nuGn5D7G3IPjkkv4PJ8wfhtVAHQvlHO', NULL, '2021-03-28 18:26:16', '2021-03-28 18:26:16'),
	(4, 'Hasti_11190919', '11190919@bsi.ac.id', NULL, '$2y$10$e7s2Lt3fDsMYWJUPOhABjObNMH.iDH7aPvnUKEuQsb8aIDf5FWztG', NULL, '2021-03-28 18:26:16', '2021-03-28 18:26:16'),
	(5, 'Vera_11191154', '11191154@bsi.ac.id', NULL, '$2y$10$3gMN9RcETzsoaFZzEzWtYOWtn1RuxSHT59h5vx6N/vQUIzTYj1hkq', NULL, '2021-03-28 18:26:17', '2021-03-28 18:26:17'),
	(6, 'KelompokDua', 'kelompok2@bsi.ac.id', NULL, '$2y$10$G/mEhECrzKRRtCNszPsSUu.79c0FrGtcFEMKeV2Awwvjqnk73Bp2a', NULL, '2021-03-28 18:26:17', '2021-03-28 18:26:17'),
	(8, 'Dedy', 'dedysupanto99@gmail.com', NULL, '$2y$10$6wgfZ77HrK3V1n214DjwYOnP4qis75qiNNCVmP8fyWvD47ZmugpvC', NULL, '2021-06-28 05:11:37', '2021-06-28 05:11:37'),
	(9, 'Ujang Kasep', 'ujangkasep@mail.com', NULL, '$2y$10$0Q611nD8o6vPmrQ5B487pOYLpGjlDzod4JbogdauZAJ84k/OgHCXi', NULL, '2021-07-03 09:53:53', '2021-07-03 09:53:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
