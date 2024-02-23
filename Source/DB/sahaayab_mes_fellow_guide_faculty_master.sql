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
-- Table structure for table `fellow_guide_faculty_master`
--

DROP TABLE IF EXISTS `fellow_guide_faculty_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fellow_guide_faculty_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `research_fellow_id` int DEFAULT NULL,
  `faculty_id` int DEFAULT NULL,
  `research_guide_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fellow_guide_faculty_master`
--

LOCK TABLES `fellow_guide_faculty_master` WRITE;
/*!40000 ALTER TABLE `fellow_guide_faculty_master` DISABLE KEYS */;
INSERT INTO `fellow_guide_faculty_master` VALUES (1,8,NULL,NULL),(2,9,NULL,NULL),(3,10,NULL,NULL),(4,11,NULL,NULL),(5,12,NULL,NULL),(6,13,NULL,NULL),(7,14,NULL,NULL),(8,18,NULL,NULL),(9,15,NULL,NULL),(10,19,NULL,NULL),(11,16,NULL,NULL),(12,20,NULL,NULL),(13,17,NULL,NULL),(14,21,NULL,NULL),(15,22,NULL,NULL),(16,23,NULL,NULL),(17,24,NULL,NULL),(18,25,NULL,NULL),(19,26,NULL,NULL),(20,27,NULL,NULL),(21,28,NULL,NULL),(22,29,NULL,NULL),(23,31,6,NULL),(24,32,52,NULL),(25,33,NULL,NULL),(26,34,NULL,NULL),(27,35,153,NULL),(28,NULL,3,17),(29,NULL,8,18),(30,NULL,187,19),(31,NULL,31,20),(32,NULL,33,21),(33,NULL,44,22),(34,NULL,43,23),(35,NULL,NULL,24),(36,NULL,NULL,25),(37,NULL,NULL,26),(38,NULL,NULL,28),(39,NULL,NULL,30),(40,40,NULL,NULL),(41,41,NULL,NULL);
/*!40000 ALTER TABLE `fellow_guide_faculty_master` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:20:55
