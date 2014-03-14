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

-- Dumping structure for table silliman_db.medications
CREATE TABLE IF NOT EXISTS `medications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table silliman_db.medications: ~4 rows (approximately)
DELETE FROM `medications`;
/*!40000 ALTER TABLE `medications` DISABLE KEYS */;
INSERT INTO `medications` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Crestor 20mg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Lipitor 10mg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Lipitor 40mg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(4, 'Crestor 50mg', '2014-03-14 04:24:43', '2014-03-14 04:24:43');
/*!40000 ALTER TABLE `medications` ENABLE KEYS */;


-- Dumping structure for table silliman_db.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table silliman_db.migrations: ~5 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_03_13_172919_create_patients_table', 1),
	('2014_03_13_174141_create_medications_table', 2),
	('2014_03_13_174554_create_pharmacies_table', 2),
	('2014_03_13_200821_create_users_table', 3),
	('2014_03_14_030912_create_prescriptions_table', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table silliman_db.patients
CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` double NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table silliman_db.patients: ~6 rows (approximately)
DELETE FROM `patients`;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` (`id`, `fname`, `lname`, `gender`, `phone`, `weight`, `dob`, `created_at`, `updated_at`) VALUES
	(1, 'Briggs', 'Toylo', 'Male', '40213013 ', 100, '2014-03-14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Toylo', 'Horcerada', 'Female', '40213013 ', 100, '2014-03-14', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'Reyna', 'Meraveles', 'Female', '12039128309', 899, '2014-03-20', '2014-03-14 04:26:01', '2014-03-14 04:26:01'),
	(4, 'Jieil', 'Talangsalangit', 'Female', '123123', 12, '2014-03-19', '2014-03-14 04:26:53', '2014-03-14 04:26:53'),
	(5, 'Charity', 'Sanlangits', 'Female', '189128', 1, '2014-03-29', '2014-03-14 04:30:18', '2014-03-14 04:30:18'),
	(6, 'Lea', 'Erat', 'Male', '090009999', 56, '2014-03-04', '2014-03-14 04:45:42', '2014-03-14 04:45:42');
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;


-- Dumping structure for table silliman_db.pharmacies
CREATE TABLE IF NOT EXISTS `pharmacies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table silliman_db.pharmacies: ~3 rows (approximately)
DELETE FROM `pharmacies`;
/*!40000 ALTER TABLE `pharmacies` DISABLE KEYS */;
INSERT INTO `pharmacies` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Mercury Drugs', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(2, 'Rose Pharmacy', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
	(3, 'City Pharma', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `pharmacies` ENABLE KEYS */;


-- Dumping structure for table silliman_db.prescriptions
CREATE TABLE IF NOT EXISTS `prescriptions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `pharmacy_id` int(11) NOT NULL,
  `medication_id` int(11) NOT NULL,
  `qty_per_unit` int(11) NOT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qty_per_time_format` int(11) NOT NULL,
  `time_format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `other_instructions` text COLLATE utf8_unicode_ci NOT NULL,
  `duration_qty` int(11) NOT NULL,
  `duration_time_format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table silliman_db.prescriptions: ~14 rows (approximately)
DELETE FROM `prescriptions`;
/*!40000 ALTER TABLE `prescriptions` DISABLE KEYS */;
INSERT INTO `prescriptions` (`id`, `patient_id`, `pharmacy_id`, `medication_id`, `qty_per_unit`, `unit`, `qty_per_time_format`, `time_format`, `other_instructions`, `duration_qty`, `duration_time_format`, `created_at`, `updated_at`) VALUES
	(6, 1, 3, 3, 1, 'Capsule(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:13:14', '2014-03-14 04:13:14'),
	(7, 1, 2, 2, 5, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:13:14', '2014-03-14 04:13:14'),
	(8, 1, 1, 3, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:39:43', '2014-03-14 04:39:43'),
	(9, 1, 1, 4, 8, 'Tablet(s)', 4, 'Day', '', 1, 'Day(s)', '2014-03-14 04:39:43', '2014-03-14 04:39:43'),
	(10, 1, 1, 2, 5, 'Tablet(s)', 2, 'Day', '', 1, 'Day(s)', '2014-03-14 04:39:43', '2014-03-14 04:39:43'),
	(11, 1, 1, 1, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:39:43', '2014-03-14 04:39:43'),
	(12, 1, 1, 1, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:48:50', '2014-03-14 04:48:50'),
	(13, 1, 1, 4, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:48:51', '2014-03-14 04:48:51'),
	(14, 1, 1, 3, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:48:51', '2014-03-14 04:48:51'),
	(15, 1, 1, 2, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:54:02', '2014-03-14 04:54:02'),
	(16, 1, 1, 4, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:54:02', '2014-03-14 04:54:02'),
	(17, 1, 1, 1, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 04:54:02', '2014-03-14 04:54:02'),
	(18, 1, 1, 1, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 05:08:16', '2014-03-14 05:08:16'),
	(19, 1, 1, 4, 1, 'Tablet(s)', 1, 'Day', '', 1, 'Day(s)', '2014-03-14 05:08:16', '2014-03-14 05:08:16');
/*!40000 ALTER TABLE `prescriptions` ENABLE KEYS */;


-- Dumping structure for table silliman_db.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prefix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` enum('doc','pharm') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table silliman_db.users: ~1 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `prefix`, `type`, `created_at`, `updated_at`) VALUES
	(2, 'doc@silliman.com', '$2y$10$KhsGboetM0xpvFvvhdRuxuLc/eJz.qqOBcmAs7LqHz2.MkhDoLOoO', 'Asshurim', 'Larita', 'MD', 'doc', '2014-03-13 20:20:07', '2014-03-13 20:20:07');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
