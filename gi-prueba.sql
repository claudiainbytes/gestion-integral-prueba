# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.22-MariaDB)
# Base de datos: gi-prueba
# Tiempo de Generación: 2018-02-05 05:18:48 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Volcado de tabla ciudades
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ciudades`;

CREATE TABLE `ciudades` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;

INSERT INTO `ciudades` (`id`, `nombre`, `created_at`, `updated_at`)
VALUES
	(1,'Bogotá','2018-02-04 20:39:18','2018-02-05 02:53:23'),
	(2,'Medellín','2018-02-04 20:39:18','2018-02-04 20:39:18'),
	(3,'Cali','2018-02-04 20:39:18','2018-02-05 02:50:19'),
	(4,'Barranquilla','2018-02-04 20:39:18','2018-02-04 20:39:18'),
	(5,'Cartagena','2018-02-04 20:39:18','2018-02-04 20:39:18'),
	(7,'Bucaramanga','2018-02-05 02:43:13','2018-02-05 02:43:13'),
	(8,'Valledupar','2018-02-05 02:43:23','2018-02-05 02:43:23'),
	(9,'Cúcuta','2018-02-05 02:53:31','2018-02-05 02:53:31'),
	(10,'Ibagué','2018-02-05 02:57:06','2018-02-05 02:57:06'),
	(11,'Pasto','2018-02-05 02:57:15','2018-02-05 02:57:15'),
	(12,'Popayán','2018-02-05 02:57:43','2018-02-05 02:57:43'),
	(13,'Santa Marta','2018-02-05 02:57:50','2018-02-05 02:57:50'),
	(14,'Quibdó','2018-02-05 02:57:58','2018-02-05 02:57:58'),
	(15,'Neiva','2018-02-05 02:58:20','2018-02-05 02:58:20');

/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla clientes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cedula` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ciudad_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `clientes_ciudad_id_index` (`ciudad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;

INSERT INTO `clientes` (`id`, `nombres`, `apellidos`, `cedula`, `email`, `telefono`, `ciudad_id`, `created_at`, `updated_at`)
VALUES
	(7,'Juan Pablo','Martinez','88888881','jmdigital@gmail.com','3001234001',1,'2018-02-05 05:02:10','2018-02-05 05:02:10'),
	(8,'Lucía','Agudelo','34900123','lucyagudelo2@gmail.com','3002001234',2,'2018-02-05 05:03:01','2018-02-05 05:03:01'),
	(9,'Vanessa','Taborda','33299123','vanetab@gmail.com','1234567890',4,'2018-02-05 05:03:48','2018-02-05 05:03:48'),
	(10,'Roberto','García','78900123','rbgarcia@gmail.com','1234567890',3,'2018-02-05 05:04:40','2018-02-05 05:04:40'),
	(11,'Juan Carlos','Cohen','88907000','jpcohe@gmail.com','1122233334',3,'2018-02-05 05:05:36','2018-02-05 05:06:54'),
	(12,'Ana María','Mesa','99000778','marimesa@gmail.com','3002891667',7,'2018-02-05 05:06:31','2018-02-05 05:06:31'),
	(13,'Luis Mario','Arciniegas','990008888','luismar@gmail.com','3290088881',1,'2018-02-05 05:07:59','2018-02-05 05:07:59'),
	(14,'Benjamin','Rodriguez','771234567','brod@gmail.com','3002991234',1,'2018-02-05 05:10:25','2018-02-05 05:10:25'),
	(15,'Camilo','Suarez','880001222','cmsuar@gmail.com','2109001234',10,'2018-02-05 05:11:07','2018-02-05 05:11:07'),
	(16,'Carolina','Castillo','120001234','carocast@gmail.com','8899977798',7,'2018-02-05 05:12:05','2018-02-05 05:12:05'),
	(17,'Andres','García','190008888','agarc@gmail.com','3001223000',11,'2018-02-05 05:12:53','2018-02-05 05:13:12');

/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2018_02_04_203052_create_ciudads_table',1),
	(5,'2018_02_04_205714_create_clientes_table',2);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



# Volcado de tabla users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
