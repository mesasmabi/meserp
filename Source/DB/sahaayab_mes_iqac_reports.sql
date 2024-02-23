-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: dbyesterday1.cn2s3sbkzmf4.ap-northeast-1.rds.amazonaws.com    Database: sahaayab_mes
-- ------------------------------------------------------
-- Server version	8.0.33

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
SET @MYSQLDUMP_TEMP_LOG_BIN = @@SESSION.SQL_LOG_BIN;
SET @@SESSION.SQL_LOG_BIN= 0;

--
-- GTID state at the beginning of the backup 
--

SET @@GLOBAL.GTID_PURGED=/*!80000 '+'*/ '';

--
-- Table structure for table `iqac_reports`
--

DROP TABLE IF EXISTS `iqac_reports`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `iqac_reports` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `period` varchar(255) DEFAULT NULL,
  `cycle` varchar(255) DEFAULT NULL,
  `feedback_category` varchar(255) DEFAULT NULL,
  `audit_practices` varchar(255) DEFAULT NULL,
  `pdf_path` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `quality_ranking` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iqac_reports`
--

LOCK TABLES `iqac_reports` WRITE;
/*!40000 ALTER TABLE `iqac_reports` DISABLE KEYS */;
INSERT INTO `iqac_reports` VALUES (77,'AQAR','2019-2020',NULL,NULL,NULL,'1696071864.pdf','2023-09-30 11:04:24','2023-09-30 11:04:24',NULL),(78,'AQAR','2020-2021',NULL,NULL,NULL,'1696090465.pdf','2023-09-30 16:14:25','2023-09-30 16:14:25',NULL),(79,'AQAR','2021-2022',NULL,NULL,NULL,'1696309633.pdf','2023-10-03 05:07:13','2023-10-03 05:07:13',NULL),(80,'AQAR','2018-2019',NULL,NULL,NULL,'1696309668.pdf','2023-10-03 05:07:48','2023-10-03 05:07:48',NULL),(82,'Forms',NULL,NULL,NULL,NULL,'1704732161.pdf','2024-01-08 16:42:41','2024-01-08 16:42:41',NULL);
/*!40000 ALTER TABLE `iqac_reports` ENABLE KEYS */;
UNLOCK TABLES;
SET @@SESSION.SQL_LOG_BIN = @MYSQLDUMP_TEMP_LOG_BIN;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-14 12:22:13
