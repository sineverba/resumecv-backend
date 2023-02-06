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
                              `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                              `batch` int NOT NULL,
                              PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
                                                          (1,	'2023_01_26_091300_create_databases_table',	1),
                                                          (2,	'2023_01_31_105800_create_frameworks_table',	1),
                                                          (3,	'2023_02_02_193800_create_programming_languages_table',	1),
                                                          (4,	'2023_02_03_142000_create_tools_table',	2);

DROP TABLE IF EXISTS `programming_languages`;
CREATE TABLE `programming_languages` (
                                         `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                                         `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                                         `view_order` int NOT NULL,
                                         `knowledge_percentage` int NOT NULL,
                                         `created_at` timestamp NULL DEFAULT NULL,
                                         `updated_at` timestamp NULL DEFAULT NULL,
                                         `deleted_at` timestamp NULL DEFAULT NULL,
                                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `programming_languages` (`id`, `name`, `view_order`, `knowledge_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
                                                                                                                                       (1,	'PHP',	1,	95,	'2023-02-02 20:06:03',	'2023-02-02 20:06:03',	NULL),
                                                                                                                                       (2,	'Java',	2,	75,	'2023-02-02 20:06:14',	'2023-02-02 20:06:14',	NULL),
                                                                                                                                       (3,	'Javascript',	3,	85,	'2023-02-02 20:06:26',	'2023-02-02 20:06:26',	NULL),
                                                                                                                                       (4,	'Python',	4,	60,	'2023-02-02 20:06:38',	'2023-02-02 20:06:38',	NULL);

DROP TABLE IF EXISTS `tools`;
CREATE TABLE `tools` (
                         `id` bigint unsigned NOT NULL AUTO_INCREMENT,
                         `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                         `view_order` int NOT NULL,
                         `use_percentage` int NOT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL,
                         `deleted_at` timestamp NULL DEFAULT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tools` (`id`, `name`, `view_order`, `use_percentage`, `created_at`, `updated_at`, `deleted_at`) VALUES
                                                                                                                 (1,	'Docker',	1,	90,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (2,	'docker-compose',	2,	90,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (3,	'Virtual Machines',	3,	20,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (4,	'Composer',	4,	20,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (5,	'Packagist',	5,	20,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (6,	'NPM',	6,	90,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (7,	'git',	7,	100,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (8,	'API writing',	8,	50,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (9,	'API consuming',	9,	100,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (10,	'Ansible',	10,	70,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (11,	'AWS',	11,	40,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL),
                                                                                                                 (12,	'Postman',	12,	100,	'2023-02-03 14:31:21',	'2023-02-03 14:31:21',	NULL);

-- 2023-02-03 14:37:01
