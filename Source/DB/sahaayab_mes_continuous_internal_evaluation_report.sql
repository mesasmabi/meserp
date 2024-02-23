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
-- Table structure for table `continuous_internal_evaluation_report`
--

DROP TABLE IF EXISTS `continuous_internal_evaluation_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `continuous_internal_evaluation_report` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `program` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `fromDate` date DEFAULT NULL,
  `toDate` date DEFAULT NULL,
  `numShortageAttendance` int DEFAULT NULL,
  `numAssignment` int DEFAULT NULL,
  `numSeminar` int DEFAULT NULL,
  `numInternalExamination` int DEFAULT NULL,
  `numProjects` int DEFAULT NULL,
  `failedNoExternalEvaluation` int DEFAULT NULL,
  `numGrievanceReceived` int DEFAULT NULL,
  `numStudentRedressed` int DEFAULT NULL,
  `facultyid` int DEFAULT NULL,
  `batch` varchar(255) DEFAULT NULL,
  `paper` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `continuous_internal_evaluation_report`
--

LOCK TABLES `continuous_internal_evaluation_report` WRITE;
/*!40000 ALTER TABLE `continuous_internal_evaluation_report` DISABLE KEYS */;
INSERT INTO `continuous_internal_evaluation_report` VALUES (5,'2','Semester 3','2023-08-01','2023-08-29',5,5,5,5,5,5,5,5,3,'2022-2025','159'),(6,'2','Semester 6','2023-07-05','2023-07-31',5,5,5,5,5,5,5,5,3,'2021-2024','318'),(7,'2','Semester 4','2023-06-01','2023-06-30',5,5,5,5,5,5,5,5,3,'2021-2024','315');
/*!40000 ALTER TABLE `continuous_internal_evaluation_report` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:20:31
