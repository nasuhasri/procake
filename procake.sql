-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table procake.books
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isbn` int(11) DEFAULT NULL,
  `book_title` varchar(255) DEFAULT NULL,
  `book_type` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `date_purchased` datetime DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table procake.books: ~2 rows (approximately)
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` (`id`, `isbn`, `book_title`, `book_type`, `author_name`, `quantity`, `date_purchased`, `price`, `publisher`, `created`, `modified`) VALUES
	(2, 1, 'Buku satu', 'Novel', 'Nasuha', 10, '2023-03-16 09:21:48', 29, 'Karya Seni', '2023-03-16 01:22:00', '2023-03-16 02:32:03'),
	(3, 123, 'Buku 234', 'Seram', 'Amirah', 12, '2023-03-17 10:07:59', 34, 'Fixi', '2023-03-17 02:08:05', '2023-03-17 02:19:59');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;

-- Dumping structure for table procake.issued
CREATE TABLE IF NOT EXISTS `issued` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_issue` datetime DEFAULT NULL,
  `date_return` datetime DEFAULT NULL,
  `status` varchar(255) DEFAULT 'issued',
  `due_date` datetime DEFAULT NULL,
  `fine` int(11) DEFAULT NULL,
  `fine_status` varchar(255) DEFAULT 'unpaid',
  `item_category` varchar(255) DEFAULT NULL,
  `item_condition` varchar(255) DEFAULT NULL,
  `item_comment` varchar(255) DEFAULT NULL,
  `item_number` int(11) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_issued_newspapers` (`item_number`),
  KEY `FK_issued_members` (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table procake.issued: ~9 rows (approximately)
/*!40000 ALTER TABLE `issued` DISABLE KEYS */;
INSERT INTO `issued` (`id`, `date_issue`, `date_return`, `status`, `due_date`, `fine`, `fine_status`, `item_category`, `item_condition`, `item_comment`, `item_number`, `member_id`, `created`, `modified`) VALUES
	(1, '2023-03-19 23:15:39', '2023-03-20 14:49:32', 'issued', '2023-03-26 23:15:42', 0, 'unpaid', 'books', '0', NULL, 2, 1, '2023-03-19 15:15:55', '2023-03-19 15:15:55'),
	(6, '2023-03-20 09:57:48', '2023-03-22 09:39:31', 'completed', '2023-03-27 09:57:51', 0, 'paid', 'magazines', 'good', 'Everything is good', 1, 2, '2023-03-20 01:58:02', '2023-03-22 01:40:59'),
	(7, '2023-03-22 09:43:56', '2023-03-22 09:44:28', 'completed', '2023-03-22 09:43:58', 0, 'paid', 'newspapers', 'bad', 'Everything is naise', 1, 3, '2023-03-22 01:44:09', '2023-03-22 01:44:58'),
	(10, '2023-03-24 16:07:10', NULL, 'issued', '2023-03-31 16:07:14', NULL, 'unpaid', 'newspapers', NULL, NULL, 2, NULL, '2023-03-24 08:07:25', '2023-03-24 08:07:25'),
	(11, '2023-03-27 09:10:12', NULL, 'issued', '2023-04-03 09:10:15', NULL, 'unpaid', 'newspapers', NULL, NULL, 2, 5, '2023-03-27 01:19:28', '2023-03-27 01:19:28'),
	(13, '2023-03-27 10:22:01', NULL, 'issued', '2023-04-03 10:22:04', NULL, 'unpaid', 'books', NULL, NULL, 3, 7, '2023-03-27 02:22:16', '2023-03-27 02:22:16'),
	(14, NULL, NULL, 'issued', NULL, NULL, 'unpaid', 'books', NULL, NULL, NULL, 13, '2023-03-27 04:11:19', '2023-03-27 04:11:19'),
	(15, '1997-06-06 00:00:00', NULL, 'issued', '2002-02-01 00:00:00', NULL, 'unpaid', 'magazines', NULL, NULL, 2, 14, '2023-03-27 05:33:36', '2023-03-27 05:33:36'),
	(16, '1995-03-26 00:00:00', NULL, 'issued', '1989-10-23 00:00:00', NULL, 'unpaid', 'newspapers', NULL, NULL, 2, 14, '2023-03-27 05:33:36', '2023-03-27 05:33:36');
/*!40000 ALTER TABLE `issued` ENABLE KEYS */;

-- Dumping structure for table procake.magazines
CREATE TABLE IF NOT EXISTS `magazines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mag_name` varchar(255) DEFAULT NULL,
  `mag_type` varchar(255) DEFAULT NULL,
  `date_receipt` datetime DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table procake.magazines: ~2 rows (approximately)
/*!40000 ALTER TABLE `magazines` DISABLE KEYS */;
INSERT INTO `magazines` (`id`, `mag_name`, `mag_type`, `date_receipt`, `pages`, `price`, `publisher`, `created`, `modified`) VALUES
	(1, 'Sukan dan permainan dan bola', 'Sukan & Awak', '2023-03-16 14:06:30', 12, 29, 'Sports Arena', '2023-03-16 06:06:49', '2023-03-17 02:49:42'),
	(2, 'Kelab Bahasa Melayu', 'Komedi', '2023-03-17 10:49:10', 3, 4, 'Sports Arena', '2023-03-17 02:49:22', '2023-03-17 02:49:22');
/*!40000 ALTER TABLE `magazines` ENABLE KEYS */;

-- Dumping structure for table procake.members
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) DEFAULT NULL,
  `ic_number` int(11) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table procake.members: ~7 rows (approximately)
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` (`id`, `member_name`, `ic_number`, `phone_number`, `username`, `password`) VALUES
	(1, 'Nur', 222112342, 987, 'nur1', NULL),
	(2, 'Nur Kasih', 222112342, 987, 'nur2', NULL),
	(3, 'Bunga', 1234, 4321, 'bunga1', NULL),
	(4, 'Jelita', 5432, 3232, 'jelita1', NULL),
	(5, 'ali', 3333, 3211, NULL, NULL),
	(7, 'ali2', 1234, 1234, NULL, NULL),
	(14, 'Jordan Coffey', 462, 783, NULL, NULL);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;

-- Dumping structure for table procake.newspapers
CREATE TABLE IF NOT EXISTS `newspapers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `news_name` varchar(255) DEFAULT NULL,
  `news_lang` varchar(255) DEFAULT NULL,
  `date_receipt` datetime DEFAULT NULL,
  `date_published` datetime DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table procake.newspapers: ~2 rows (approximately)
/*!40000 ALTER TABLE `newspapers` DISABLE KEYS */;
INSERT INTO `newspapers` (`id`, `news_name`, `news_lang`, `date_receipt`, `date_published`, `pages`, `price`, `type`, `publisher`, `created`, `modified`) VALUES
	(1, 'Berita Harian', 'Malay', '2023-03-17 11:27:54', '2023-03-17 11:27:59', 24, 2, 'General', 'Berita Harian', '2023-03-17 03:05:23', '2023-03-17 03:28:38'),
	(2, 'Berita Harian 2', 'English', '2023-03-22 09:48:10', '2023-03-15 09:48:13', 3, 1, 'General', 'Berita Harian', '2023-03-17 03:05:24', '2023-03-22 01:48:31');
/*!40000 ALTER TABLE `newspapers` ENABLE KEYS */;

-- Dumping structure for table procake.phinxlog
CREATE TABLE IF NOT EXISTS `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table procake.phinxlog: ~1 rows (approximately)
/*!40000 ALTER TABLE `phinxlog` DISABLE KEYS */;
INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
	(20230316062825, 'UserAddAdmin', '2023-03-16 07:08:04', '2023-03-16 07:08:04', 0);
/*!40000 ALTER TABLE `phinxlog` ENABLE KEYS */;

-- Dumping structure for table procake.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table procake.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
	(1, 'admin cool', 'admin', '$2y$10$lvK5lztxjC14TDplbkMiP.P0hLOF7PyzMK7jVG5Mf5reafrHZbg72'),
	(2, 'admin 1', 'admin1', '$2y$10$coOU9tjtuUEFCUKFDMcOMehB3UINQllX1EIo/1RKJpZeB5TFGFfrW');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
