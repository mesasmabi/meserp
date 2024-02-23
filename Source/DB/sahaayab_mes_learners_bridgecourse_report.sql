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
-- Table structure for table `learners_bridgecourse_report`
--

DROP TABLE IF EXISTS `learners_bridgecourse_report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `learners_bridgecourse_report` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `program` varchar(255) DEFAULT NULL,
  `semester` varchar(255) DEFAULT NULL,
  `fromDate` date DEFAULT NULL,
  `toDate` date DEFAULT NULL,
  `numStudentsAttended` int DEFAULT NULL,
  `numStudentsBenefitted` int DEFAULT NULL,
  `outcome` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `facultyid` int DEFAULT NULL,
  `total_no_of_classes` int DEFAULT NULL,
  `batch` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `learners_bridgecourse_report`
--

LOCK TABLES `learners_bridgecourse_report` WRITE;
/*!40000 ALTER TABLE `learners_bridgecourse_report` DISABLE KEYS */;
INSERT INTO `learners_bridgecourse_report` VALUES (4,'2','Semester 5','2023-07-01','2023-07-31',5,5,'xxxxxx','Slowlearner',3,5,'2021-2024'),(5,'2','Semester 2','2023-06-01','2023-06-30',5,5,'dddd','Advancedlearner',3,5,'2021-2024'),(6,'2','Semester 2','2023-07-01','2023-07-31',5,5,'xxxxxx','Bridgecourse',3,5,'2021-2024'),(7,'20','Semester 4','2023-07-01','2023-07-31',5,5,'5','Remedialclass',3,5,'2022-2024');
/*!40000 ALTER TABLE `learners_bridgecourse_report` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:21:02
