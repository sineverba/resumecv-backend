-- Adminer 4.8.1 MySQL 8.0.31 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `databases`;
CREATE TABLE `databases` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `database_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_order` int NOT NULL,
  `use_percentage` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `databases` (`id`, `database_name`, `view_order`, `use_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1,	'Mongo DB',	1,	10,	'2023-01-29 19:23:54',	'2023-01-29 19:23:54',	NULL),
(2,	'MySql',	2,	30,	'2023-01-29 19:24:09',	'2023-01-29 19:24:09',	NULL),
(3,	'Maria DB',	3,	20,	'2023-01-29 19:24:21',	'2023-01-29 19:24:21',	NULL),
(4,	'PostgreSql',	4,	20,	'2023-01-29 19:24:40',	'2023-01-29 19:24:40',	NULL),
(5,	'Oracle',	5,	20,	'2023-01-29 19:24:56',	'2023-01-29 19:24:56',	NULL);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2023_01_26_091300_create_databases_table',	1);

-- 2023-01-29 19:25:12
