-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.34 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for eps_db
CREATE DATABASE IF NOT EXISTS `eps_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `eps_db`;


-- Dumping structure for table eps_db.drugs
CREATE TABLE IF NOT EXISTS `drugs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table eps_db.drugs: ~3 rows (approximately)
DELETE FROM `drugs`;
/*!40000 ALTER TABLE `drugs` DISABLE KEYS */;
INSERT INTO `drugs` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Paracetamol', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Biogesic', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Medicol', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `drugs` ENABLE KEYS */;


-- Dumping structure for table eps_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table eps_db.migrations: ~5 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_03_04_181106_create_users_table', 1),
	('2014_03_04_181908_create_pharmacy_table', 1),
	('2014_03_04_182329_create_patient_table', 1),
	('2014_03_04_185657_create_drugs_table', 2),
	('2014_03_05_211836_create_prescriptions_table', 3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table eps_db.patients
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table eps_db.patients: ~3 rows (approximately)
DELETE FROM `patients`;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` (`id`, `firstname`, `middlename`, `lastname`, `age`, `gender`, `created_at`, `updated_at`) VALUES
	(1, 'Asshurim Joy', 'Ortado', 'Larita', '12', 'Male', '2014-03-06 08:55:29', '2014-03-06 08:55:29'),
	(2, 'Asshurim Joy', 'Ortado', 'Larita', '12', 'Male', '2014-03-06 08:56:58', '2014-03-06 08:56:58'),
	(3, 'Asshurim Joy', 'Ortado', 'Larita', '12', 'Male', '2014-03-06 08:59:59', '2014-03-06 08:59:59'),
	(4, 'Asshurim Joy', 'Ortado', 'Larita', '12', 'Male', '2014-03-06 09:00:20', '2014-03-06 09:00:20'),
	(5, 'Asshurim Joy', 'Ortado', 'Larita', '12', 'Male', '2014-03-06 09:02:18', '2014-03-06 09:02:18');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;


-- Dumping structure for table eps_db.pharmacies
CREATE TABLE IF NOT EXISTS `pharmacies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table eps_db.pharmacies: ~4 rows (approximately)
DELETE FROM `pharmacies`;
/*!40000 ALTER TABLE `pharmacies` DISABLE KEYS */;
INSERT INTO `pharmacies` (`id`, `user_id`, `name`, `location`, `created_at`, `updated_at`) VALUES
	(1, 0, 'Rose Pharmacy', 'Downtown Area', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 0, 'Botica Real', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 0, 'Dumaguete Pharmacy', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 0, 'Generics Pharmacy', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pharmacies` ENABLE KEYS */;


-- Dumping structure for table eps_db.prescriptions
CREATE TABLE IF NOT EXISTS `prescriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `drug_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `pharmacy_id` int(11) NOT NULL,
  `dosage` double NOT NULL,
  `measure` enum('ml','l','mg','g') COLLATE utf8_unicode_ci NOT NULL,
  `form` enum('tablet','syrup','capsule') COLLATE utf8_unicode_ci NOT NULL,
  `frequency` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table eps_db.prescriptions: ~0 rows (approximately)
DELETE FROM `prescriptions`;
/*!40000 ALTER TABLE `prescriptions` DISABLE KEYS */;
INSERT INTO `prescriptions` (`id`, `drug_id`, `patient_id`, `pharmacy_id`, `dosage`, `measure`, `form`, `frequency`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
	(1, 2, 4, 4, 0, 'ml', 'tablet', '3 times a day', '2014-03-27', '2014-03-31', '2014-03-06 09:00:20', '2014-03-06 09:00:20'),
	(4, 2, 5, 4, 0, 'ml', 'tablet', '3 times a day', '2014-03-27', '2014-03-31', '2014-03-06 09:02:18', '2014-03-06 09:02:18'),
	(5, 2, 5, 4, 0, 'ml', 'tablet', '3 times a day', '2014-03-27', '2014-04-02', '2014-03-06 09:02:18', '2014-03-06 09:02:18'),
	(6, 2, 5, 4, 3, 'ml', 'tablet', '3 times a day', '2014-03-27', '2014-04-02', '2014-03-06 09:02:18', '2014-03-06 09:02:18');
/*!40000 ALTER TABLE `prescriptions` ENABLE KEYS */;


-- Dumping structure for table eps_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` enum('Male','Female') COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table eps_db.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `firstname`, `middlename`, `lastname`, `address`, `title`, `gender`, `birthdate`, `created_at`, `updated_at`) VALUES
	(1, 'doc', '$2y$10$e1htJzJxGg.QM28sbAvjz.TV6elm6msD9rFMzaMha9Hm15BKDVtnC', 'Asshurim', '', 'Larita', '', 'MBA', 'Male', '', '2014-03-05 17:26:00', '2014-03-05 17:26:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
