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
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$pRCNUen.vgUXWjAh74Rx2OLZYf.r/o88S43tTl3g7d14QBpBmAi5G',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gc7_friends_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.gc7_friends : ~6 rows (environ)
/*!40000 ALTER TABLE `gc7_friends` DISABLE KEYS */;
INSERT INTO `gc7_friends` (`id`, `username`, `name`, `lastname`, `email`, `picture`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'GrCOTE7', 'Lionel', 'CÔTE', 'GrCOTE7@cote7.fr', 'grcote7.png', '$2y$10$pRCNUen.vgUXWjAh74Rx2OLZYf.r/o88S43tTl3g7d14QBpBmAi5G', '2023-01-30 07:54:47', '2023-01-30 07:54:47'),
	(2, 'JPB11', 'JP', 'B', 'JPB11@cote7.fr', 'jpb11.jpg', '$2y$10$pRCNUen.vgUXWjAh74Rx2OLZYf.r/o88S43tTl3g7d14QBpBmAi5G', '2023-01-30 07:54:47', '2023-01-30 07:54:47'),
	(3, 'Thr59', 'Thierry', 'ElRitalo', 'ThR59@cote7.fr', 'thr59.jpg', '$2y$10$pRCNUen.vgUXWjAh74Rx2OLZYf.r/o88S43tTl3g7d14QBpBmAi5G', '2023-01-30 07:54:47', '2023-01-30 07:54:47'),
	(4, 'Momo', 'Mohamed', 'Th', 'Momo@cote7.fr', 'momo.png', '$2y$10$pRCNUen.vgUXWjAh74Rx2OLZYf.r/o88S43tTl3g7d14QBpBmAi5G', '2023-01-30 07:54:47', '2023-01-30 07:54:47'),
	(5, 'Andy', 'Andrew', 'Hson', 'Andrew@cote7.fr', 'andy.png', '$2y$10$pRCNUen.vgUXWjAh74Rx2OLZYf.r/o88S43tTl3g7d14QBpBmAi5G', '2023-01-30 07:54:47', '2023-01-30 07:54:47'),
	(6, 'Gugu', 'Augustin', 'E.', 'Augustin@cote7.fr', 'gugu_malin.jpg', '$2y$10$pRCNUen.vgUXWjAh74Rx2OLZYf.r/o88S43tTl3g7d14QBpBmAi5G', '2023-01-30 07:54:48', '2023-01-30 07:54:48');
/*!40000 ALTER TABLE `gc7_friends` ENABLE KEYS */;

-- Listage de la structure de la table aadminli_qrc7fr. migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.migrations : ~6 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(49, '2014_10_12_000000_create_users_table', 1),
	(50, '2014_10_12_100000_create_password_resets_table', 1),
	(51, '2019_08_19_000000_create_failed_jobs_table', 1),
	(52, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(53, '2023_01_29_000000_create_gc7_friends_table', 1),
	(54, '2023_01_29_020504_create_test_table', 1);
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

-- Listage de la structure de la table aadminli_qrc7fr. test
CREATE TABLE IF NOT EXISTS `test` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.test : ~0 rows (environ)
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
/*!40000 ALTER TABLE `test` ENABLE KEYS */;

-- Listage de la structure de la table aadminli_qrc7fr. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$2y$10$35gpVOqB9T8bD1ZxGfsiDOi0YWihQMzCA6j/41vxqxGeQ2sFtdbJu',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table aadminli_qrc7fr.users : ~2 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Momo', 'Momo@example.com', NULL, '$2y$10$35gpVOqB9T8bD1ZxGfsiDOi0YWihQMzCA6j/41vxqxGeQ2sFtdbJu', NULL, NULL, NULL),
	(2, 'GrCOTE7', 'Grcote7@gmail.com', NULL, '$2y$10$35gpVOqB9T8bD1ZxGfsiDOi0YWihQMzCA6j/41vxqxGeQ2sFtdbJu', NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
