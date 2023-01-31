-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour aadminli_qrc7fr
CREATE DATABASE IF NOT EXISTS `aadminli_qrc7fr` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `aadminli_qrc7fr`;

-- Listage de la structure de la table aadminli_qrc7fr. failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table aadminli_qrc7fr. gc7_friends
CREATE TABLE IF NOT EXISTS `gc7_friends` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gc7_friends_username_unique` (`username`),
  UNIQUE KEY `gc7_friends_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.gc7_friends : ~6 rows (environ)
/*!40000 ALTER TABLE `gc7_friends` DISABLE KEYS */;
INSERT INTO `gc7_friends` (`id`, `username`, `name`, `lastname`, `email`, `picture`, `country`, `location`, `created_at`, `updated_at`) VALUES
	(1, 'GrCOTE7', 'Lionel', 'CÔTE', 'GrCOTE7@cote7.fr', 'grcote7.png', 'fr', 'SSeB', '2023-01-30 13:38:14', '2023-01-30 13:38:14'),
	(2, 'JPB11', 'JP', 'B', 'JPB11@cote7.fr', 'jpb11.jpg', 'fr', 'Castel', '2023-01-30 13:38:14', '2023-01-30 13:38:14'),
	(3, 'Thr59', 'Thierry', 'ElRitalo', 'ThR59@cote7.fr', 'thr59.jpg', 'fr', 'Maubeuge', '2023-01-30 13:38:14', '2023-01-30 13:38:14'),
	(4, 'Momo', 'Mohamed', 'Th', 'Momo@cote7.fr', 'momo.png', 'ma', 'Marocco', '2023-01-30 13:38:14', '2023-01-30 13:38:14'),
	(5, 'Andy', 'Andrew', 'Hson', 'Andrew@cote7.fr', 'andy.png', 'fr', 'Vers Dijon', '2023-01-30 13:38:14', '2023-01-30 13:38:14'),
	(6, 'Gugu', 'Augustin', 'E.', 'Augustin@cote7.fr', 'gugu_malin.jpg', 'fr', 'À la ferme', '2023-01-30 13:38:14', '2023-01-30 13:38:14');
/*!40000 ALTER TABLE `gc7_friends` ENABLE KEYS */;

-- Listage de la structure de la table aadminli_qrc7fr. membres
CREATE TABLE IF NOT EXISTS `membres` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.membres : ~6 rows (environ)
/*!40000 ALTER TABLE `membres` DISABLE KEYS */;
INSERT INTO `membres` (`id`, `pseudo`, `prenom`, `nom`, `email`, `photo`, `pays`, `adresse`, `created_at`, `updated_at`) VALUES
	(1, 'GrCOTE7', 'Lionel', 'CÔTE', 'GrCOTE7@cote7.fr', 'grcote7.png', 'fr', 'SSeB', '2023-01-30 13:38:14', '2023-01-30 13:38:14'),
	(2, 'JPB11', 'JP', 'B', 'JPB11@cote7.fr', 'jpb11.jpg', 'fr', 'Castel', '2023-01-30 13:38:14', '2023-01-30 13:38:14'),
	(3, 'Thr59', 'Thierry', 'ElRitalo', 'ThR59@cote7.fr', 'thr59.jpg', 'fr', 'Maubeuge', '2023-01-30 13:38:15', '2023-01-30 13:38:15'),
	(4, 'Momo', 'Mohamed', 'Th', 'Momo@cote7.fr', 'momo.png', 'ma', 'Marocco', '2023-01-30 13:38:15', '2023-01-30 13:38:15'),
	(5, 'Andy', 'Andrew', 'Hson', 'Andrew@cote7.fr', 'andy.png', 'fr', 'Vers Dijon', '2023-01-30 13:38:15', '2023-01-30 13:38:15'),
	(6, 'Gugu', 'Augustin', 'E.', 'Augustin@cote7.fr', 'gugu_malin.jpg', 'fr', 'À la ferme', '2023-01-30 13:38:15', '2023-01-30 13:38:15');
/*!40000 ALTER TABLE `membres` ENABLE KEYS */;

-- Listage de la structure de la table aadminli_qrc7fr. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.migrations : ~6 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(37, '2014_10_12_000000_create_users_table', 1),
	(38, '2014_10_12_100000_create_password_resets_table', 1),
	(39, '2019_08_19_000000_create_failed_jobs_table', 1),
	(40, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(41, '2023_01_29_000000_create_gc7_friends_table', 1),
	(42, '2023_01_29_020504_create_membres_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table aadminli_qrc7fr. password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table aadminli_qrc7fr. personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table aadminli_qrc7fr. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$ZBP170qip2TUSTlAqoEK2ezPXqpUTHUwqE/hC7bInhy57SbS8MkHK',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Momo', 'Momo@example.com', NULL, '$2y$10$ZBP170qip2TUSTlAqoEK2ezPXqpUTHUwqE/hC7bInhy57SbS8MkHK', NULL, NULL, NULL),
	(2, 'GrCOTE7', 'Grcote7@gmail.com', NULL, '$2y$10$ZBP170qip2TUSTlAqoEK2ezPXqpUTHUwqE/hC7bInhy57SbS8MkHK', NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
