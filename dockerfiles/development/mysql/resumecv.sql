-- Adminer 4.8.1 MySQL 8.0.32 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `resumecv` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `resumecv`;

DROP TABLE IF EXISTS `databases`;
CREATE TABLE `databases` (
                             `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                             `database_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                             `view_order` int NOT NULL,
                             `use_percentage` int NOT NULL,
                             `created_at` timestamp NULL DEFAULT NULL,
                             `updated_at` timestamp NULL DEFAULT NULL,
                             `deleted_at` timestamp NULL DEFAULT NULL,
                             PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `frameworks`;
CREATE TABLE `frameworks` (
                              `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                              `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `view_order` int NOT NULL,
                              `knowledge_percentage` int NOT NULL,
                              `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `created_at` timestamp NULL DEFAULT NULL,
                              `updated_at` timestamp NULL DEFAULT NULL,
                              `deleted_at` timestamp NULL DEFAULT NULL,
                              PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `frameworks` (`id`, `name`, `view_order`, `knowledge_percentage`, `color`, `created_at`, `updated_at`, `deleted_at`) VALUES
                                                                                                                                     (1,	'Laravel',	1,	80,	'#FF9655',	'2023-01-31 11:11:38',	'2023-01-31 11:11:38',	NULL),
                                                                                                                                     (2,	'CodeIgniter',	2,	20,	'#058DC7',	'2023-01-31 11:12:05',	'2023-01-31 11:12:05',	NULL),
                                                                                                                                     (3,	'F3',	3,	75,	'#50B432',	'2023-01-31 11:12:24',	'2023-01-31 11:12:24',	NULL),
                                                                                                                                     (4,	'Spring',	4,	80,	'#ED561B',	'2023-01-31 11:12:47',	'2023-01-31 11:12:47',	NULL),
                                                                                                                                     (5,	'Serverless',	5,	70,	'#DDDF00',	'2023-01-31 11:13:17',	'2023-01-31 11:13:17',	NULL),
                                                                                                                                     (6,	'React + Redux + Enzyme/Jest/Nock',	6,	95,	'#24CBE5',	'2023-01-31 11:13:39',	'2023-01-31 11:13:39',	NULL),
                                                                                                                                     (7,	'Nuxt + Vuex + Cypress',	7,	80,	'#FFF263',	'2023-01-31 11:14:01',	'2023-01-31 11:14:01',	NULL),
                                                                                                                                     (8,	'Bootstrap CSS',	8,	95,	'#6AF9C4',	'2023-01-31 11:14:23',	'2023-01-31 11:14:23',	NULL);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
                              `id` int unsigned NOT NULL AUTO_INCREMENT,
                              `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
                              `batch` int NOT NULL,
                              PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2023-01-31 11:15:36
