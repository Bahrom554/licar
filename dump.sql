-- MySQL dump 10.13  Distrib 8.0.27, for Linux (x86_64)
--
-- Host: localhost    Database: drivers_db
-- ------------------------------------------------------
-- Server version	8.0.27-0ubuntu0.20.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `deleted_drivers`
--

DROP TABLE IF EXISTS `deleted_drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `deleted_drivers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_o` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_start` date NOT NULL,
  `c_end` date NOT NULL,
  `l_cost` int unsigned NOT NULL,
  `expire_date` date NOT NULL,
  `inn_o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inps_o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` tinyint(1) NOT NULL DEFAULT '1',
  `l_start` date NOT NULL,
  `l_end` date NOT NULL,
  `total_cost` int unsigned NOT NULL,
  `paid_cost` int NOT NULL,
  `status` int DEFAULT NULL,
  `debt` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deleted_drivers`
--

LOCK TABLES `deleted_drivers` WRITE;
/*!40000 ALTER TABLE `deleted_drivers` DISABLE KEYS */;
INSERT INTO `deleted_drivers` VALUES (2,'Nozim','nOZIM','998560552','54585751','Matiz','60p788ka','anjan','7878','2121212121','2022-01-31','2022-05-22',256000,'2022-01-01','878','45454545',1,'2022-01-31','2022-06-25',300000,-300000,NULL,NULL,'2022-01-30 19:00:00','2022-02-01 12:19:45');
/*!40000 ALTER TABLE `deleted_drivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `drivers` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `driver` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel_o` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `car_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_start` date NOT NULL,
  `c_end` date NOT NULL,
  `l_cost` int unsigned NOT NULL,
  `expire_date` date NOT NULL,
  `inn_o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inps_o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `index` tinyint(1) NOT NULL DEFAULT '1',
  `l_start` date NOT NULL,
  `l_end` date NOT NULL,
  `total_cost` int unsigned NOT NULL,
  `paid_cost` int NOT NULL,
  `status` int DEFAULT NULL,
  `debt` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drivers`
--

LOCK TABLES `drivers` WRITE;
/*!40000 ALTER TABLE `drivers` DISABLE KEYS */;
INSERT INTO `drivers` VALUES (1,'akmal','nodir','998560552','98989898','Matiz','60 A 455 ba','asa','4545','4545','2022-01-22','2022-05-22',256000,'2022-02-03','6363','6363',1,'2022-01-22','2022-02-25',300000,100000,NULL,0,'2022-01-23 19:00:00','2022-02-03 08:46:09'),(3,'Nozim','nOZIM','998560552','54585751','Matiz','60p788ka','anjan','7878','2121212121','2022-01-31','2022-05-22',256000,'2022-02-02','878','45454545',1,'2022-01-31','2022-06-25',300000,20000,NULL,-10000,'2022-01-30 19:00:00','2022-02-03 08:46:09'),(4,'akmal','nodir','998560552','54585751','Matiz','60p788ka','asas','7878','2121212121','2022-01-21','2022-01-20',256000,'2022-01-26','878','88778',1,'2022-01-21','2022-04-22',300000,50000,NULL,-80000,'2022-01-20 19:00:00','2022-02-03 08:46:09'),(5,'sdf','dfdfdfd','dfdfg','sdfsdf','Matiz','565656','GGGG','5656','5665','2022-01-02','2022-01-02',256000,'2022-01-02','566556','6556',1,'2022-01-01','2022-01-02',300000,-300000,NULL,-320000,'2022-01-31 19:00:00','2022-02-03 08:46:09'),(6,'SDSD','DSDSD','SDSDSD','SDSD','Matiz','666DDD','SDDD','899898','898989','2022-01-02','2022-01-02',256000,'2021-12-03','666','666',1,'2022-01-02','2022-01-02',300000,-300000,NULL,-620000,'2022-01-01 19:00:00','2022-02-03 08:46:09'),(7,'rrr','lll','rrr','4444','Matiz','6565656','ddfdf','555','666','2022-01-03','2022-01-03',256000,'2022-01-03','7878','7878',0,'2022-01-03','2022-05-03',300000,-300000,NULL,-310000,'2022-01-02 19:00:00','2022-02-03 08:46:09');
/*!40000 ALTER TABLE `drivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2022_01_04_061332_create_drivers_table',1),(4,'2022_01_04_061620_create_payments_table',1),(5,'2022_01_05_093625_create_deleted_drivers_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `driver_id` int unsigned NOT NULL,
  `payment` int unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `payments_driver_id_foreign` (`driver_id`),
  CONSTRAINT `payments_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `drivers` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,1,100000,'2022-01-23 19:00:00','2022-01-24 11:23:25'),(2,3,200000,'2022-01-30 19:00:00','2022-01-31 18:03:30'),(3,4,50000,'2022-01-20 19:00:00','2022-01-31 18:08:37'),(4,3,100000,'2022-01-30 19:00:00','2022-01-31 18:52:02'),(5,3,10000,'2022-01-30 19:00:00','2022-01-31 18:54:46'),(6,3,10000,'2022-01-31 19:00:00','2022-02-01 12:02:28');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','Litsenziyaol@gmail.com',NULL,'$2y$10$o29N1N1HCi97VFGz6YtPl..lLu/jQrA3tw1sBh.F4RbJFPbb6PpRG',NULL,'2022-01-21 22:39:56','2022-01-21 22:39:57');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-03 15:35:56
