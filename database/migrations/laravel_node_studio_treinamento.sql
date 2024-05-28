-- Adminer 4.8.1 MySQL 8.0.34-0ubuntu0.22.04.1 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `laravel_node_studio_treinamento`;
CREATE DATABASE `laravel_node_studio_treinamento` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `laravel_node_studio_treinamento`;

DROP TABLE IF EXISTS `categoryes`;
CREATE TABLE `categoryes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categoryes` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1,	'eligendi',	'Ducimus dicta omnis quod molestias quasi voluptatem. Non rerum voluptates cupiditate saepe voluptate. Deleniti voluptatem porro aliquam ea. Ad nostrum quia placeat aut eaque ut et.',	'2024-05-19 17:37:40',	'2024-05-19 17:37:40'),
(3,	'sapiente',	'Rerum rerum eos omnis nesciunt necessitatibus a. Veritatis laudantium iste minima voluptatem dolore esse tempora. Aut provident quidem fugiat fugiat assumenda aut qui corrupti.',	'2024-05-19 17:37:40',	'2024-05-19 17:37:40'),
(6,	'molestiae',	'Nulla quasi minima deserunt consequuntur. Mollitia exercitationem earum perspiciatis placeat ad quia. Blanditiis debitis nam non qui.',	'2024-05-19 18:34:23',	'2024-05-19 18:34:23'),
(8,	'debitis',	'Necessitatibus esse corrupti sint voluptatem nulla. Et numquam amet ipsam dolorem ex. Facere quia ut quasi qui. Dolore molestias quo tempora.',	'2024-05-19 18:34:23',	'2024-05-19 18:34:23');

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contacts_id_user_foreign` (`id_user`),
  CONSTRAINT `contacts_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2024_05_19_034352_create_categoryes_table',	1),
(6,	'2024_05_19_043053_create_produtos_table',	1),
(7,	'2024_05_19_154139_rules',	2),
(8,	'2024_05_19_154157_contacts',	2);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(10,2) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` bigint unsigned NOT NULL,
  `id_category` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produtos_id_user_foreign` (`id_user`),
  KEY `produtos_id_category_foreign` (`id_category`),
  CONSTRAINT `produtos_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `categoryes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `produtos_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `produtos` (`id`, `name`, `description`, `price`, `slug`, `image`, `id_user`, `id_category`, `created_at`, `updated_at`) VALUES
(38,	'Windows',	'Teste',	1212.00,	'windows',	'produtos/JFR9c1jXMiGXr5kjhnUjoSYUQdPKgxAODLiPtFRA.jpg',	4,	3,	'2024-05-28 02:57:55',	'2024-05-28 02:57:55'),
(39,	'Linux',	'Linux Mint',	1000.00,	'linux',	'produtos/unKbFa0DIJq2IcSZUHG4KVroPAdV46oWbTpWiZAe.jpg',	4,	8,	'2024-05-28 03:04:09',	'2024-05-28 03:04:09');

DROP TABLE IF EXISTS `rule_user`;
CREATE TABLE `rule_user` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint unsigned NOT NULL,
  `id_rule` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `rule_user_id_user_foreign` (`id_user`),
  KEY `rule_user_id_rule_foreign` (`id_rule`),
  CONSTRAINT `rule_user_id_rule_foreign` FOREIGN KEY (`id_rule`) REFERENCES `rules` (`id`),
  CONSTRAINT `rule_user_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `rules`;
CREATE TABLE `rules` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4,	'Clerison',	'Oliveira',	'cosclerison@gmail.com',	NULL,	'$2y$10$Oe3WKEfCXIjOpk1qEIkJHuUFS4uEynQEpjbtlvplaC01kw.SnfnD2',	'PkoBwwAG72LfNqV4qqC7MI3c8iaagYtmJkkLc7Ca5rlJrVPt3HxlEJiaQT4Y',	'2024-05-26 23:22:54',	'2024-05-26 23:22:54'),
(6,	'teste',	'teste',	'teste@gmail.com',	NULL,	'$2y$10$Um2AvpXEAEB49tqk3QDm2eKGQQSlQRzoZefVd4.sODuk1H6M4eHK2',	'gRx6wdeTjufHbI76rGpp4Dgd5SjkILq9aA3HfUg8OVTOqxIDg7unB6VaEOeh',	'2022-05-27 16:52:21',	'2022-05-27 16:52:21'),
(7,	'juliana',	'Dias',	'juliana@gmail.com',	NULL,	'$2y$10$zPQFXAPQ3qu6xVo0dNzLbOGDWNmEKPGx3HP92NmJEPfNFWu16Njm2',	NULL,	'2022-05-27 20:14:49',	'2022-05-27 20:14:49'),
(8,	'bianca',	'Dias',	'bianca@gmail.com',	NULL,	'$2y$10$Zl9hLuk2/w01AQP5vxQbAOojReTLWX3XPEO9OWBaeUrUY4kewJG66',	NULL,	'2021-05-27 20:15:13',	'2021-05-27 20:15:13');

-- 2024-05-28 00:08:07
