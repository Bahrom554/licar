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
  `c_start` date NOT NULL,
  `c_end` date NOT NULL,
  `l_cost` int unsigned NOT NULL,
  `l_start` date NOT NULL,
  `l_end` date NOT NULL,
  `total_cost` int unsigned NOT NULL,
  `paid_cost` int unsigned NOT NULL,
  `status` int DEFAULT NULL,
  `debt` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `inn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` date NOT NULL,
  `inn_o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inps_o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deleted_drivers`
--

LOCK TABLES `deleted_drivers` WRITE;
/*!40000 ALTER TABLE `deleted_drivers` DISABLE KEYS */;
INSERT INTO `deleted_drivers` VALUES (2,'akmal','lola','998560552','9798','Matiz','65','anjn','2022-01-02','2022-08-22',256000,'2022-01-10','2022-02-20',300000,80000,NULL,NULL,'2022-01-09 19:00:00','2022-01-19 02:56:16','789456','456123','2022-01-18','2323','2323'),(3,'akmal','nodir','998560552','sdfsdf','Matiz','60p788ka','anjan shox bekat','2022-01-02','2022-08-02',256000,'2022-01-02','2022-01-25',300000,323000,NULL,NULL,'2022-01-01 19:00:00','2022-01-19 05:20:14','78787878','656565656','2022-02-03','2323','2323');
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
  `l_start` date NOT NULL,
  `l_end` date NOT NULL,
  `total_cost` int unsigned NOT NULL,
  `paid_cost` int unsigned NOT NULL,
  `status` int DEFAULT NULL,
  `debt` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expire_date` date NOT NULL,
  `inn_o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inps_o` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drivers`
--

LOCK TABLES `drivers` WRITE;
/*!40000 ALTER TABLE `drivers` DISABLE KEYS */;
INSERT INTO `drivers` VALUES (4,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-01-22','2323','2323'),(5,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-01-22','2323','2323'),(6,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-01-22','2323','2323'),(7,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-01-22','2323','2323'),(8,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-01-22','2323','2323'),(9,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-01-22','2323','2323'),(10,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-01-22','2323','2323'),(11,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-01-22','2323','2323'),(12,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,300000,1,0,'2022-01-01 19:00:00','2022-01-21 04:04:35','2022-02-01','2323','2323'),(13,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(14,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(15,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(16,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(17,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(18,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(19,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(20,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(21,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(22,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(23,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(24,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(25,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(26,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(27,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(28,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(29,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(30,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(31,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(32,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(33,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889 8898989899889','566655656 999090909090','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:06:08','2022-01-22','2323','2323'),(34,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(35,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(36,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(37,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(38,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(39,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(40,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(41,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(42,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(43,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(44,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(45,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(46,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(47,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(48,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(49,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(50,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(51,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(52,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(53,'kozim','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(54,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(55,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(56,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(57,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(58,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(59,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(60,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(61,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(62,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(63,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(64,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(65,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(66,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(67,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(68,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(69,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(70,'erwrwer','werwer','ewer','werwer','Matiz','werwer','sdfsdfsdf','889899889','566655656','2022-01-02','2022-01-21',256000,'2022-01-02','2022-01-21',300000,200000,1,2,'2022-01-01 19:00:00','2022-01-21 04:04:36','2022-01-22','2323','2323'),(71,'akmal','erererer','fsfsf','56565656','Matiz','45w4545qa','sdsdsd','123456','123456','2022-01-02','2022-01-02',125000,'2022-01-02','2022-01-02',300000,120000,1,0,'2022-01-20 19:00:00','2022-01-21 06:06:23','2022-02-02','45454545','45454545');
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
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (42,'2014_10_12_000000_create_users_table',1),(43,'2014_10_12_100000_create_password_resets_table',1),(44,'2022_01_04_061332_create_drivers_table',1),(45,'2022_01_04_061620_create_payments_table',1),(46,'2022_01_05_093625_create_deleted_drivers_table',1),(47,'2022_01_18_195735_add_inn_to_deleted_drivers_table',2),(48,'2022_01_18_201642_add_expire_date_to_drivers_table',3),(49,'2022_01_19_054320_add_expiire_date_to_deleted_drivers_table',3),(50,'2022_01_21_091009_add_inn_to_drivers_table',4),(51,'2022_01_21_091037_add_inn_to_deleted_drivers_table',4);
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (5,4,200000,'2022-01-01 19:00:00','2022-01-19 03:03:42'),(6,12,100000,'2022-01-18 19:00:00','2022-01-19 03:37:13'),(7,71,120000,'2022-01-20 19:00:00','2022-01-21 06:06:23');
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
INSERT INTO `users` VALUES (1,'Admin','Litsenziyaol@gmail.com',NULL,'$2y$10$o29N1N1HCi97VFGz6YtPl..lLu/jQrA3tw1sBh.F4RbJFPbb6PpRG','hy6JqvYh6bDk2NjQTtMH1PVb6pu9k0RgnLBeswkvmIoduTaAwKe50qS1xRmC','2022-01-18 18:27:27','2022-01-18 18:27:28');
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

-- Dump completed on 2022-01-21 17:40:15
