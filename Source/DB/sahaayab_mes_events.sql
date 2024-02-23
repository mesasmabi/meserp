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
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `events` (
  `eid` int NOT NULL AUTO_INCREMENT,
  `faculity_id` varchar(256) NOT NULL,
  `category` varchar(256) NOT NULL,
  `title` varchar(256) NOT NULL,
  `from_date` varchar(256) NOT NULL,
  `to_date` varchar(256) NOT NULL,
  `venue` varchar(256) NOT NULL,
  `agenda` varchar(5000) NOT NULL,
  `description` text,
  `no_boys` varchar(256) NOT NULL,
  `no_girls` varchar(256) NOT NULL,
  `total_stu` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `course` varchar(256) NOT NULL,
  `class` varchar(256) NOT NULL,
  `semester` varchar(256) NOT NULL,
  `nature` varchar(256) NOT NULL,
  `no_of_deligates` varchar(50) NOT NULL,
  `research_scolors` varchar(50) NOT NULL,
  `no_teachers` varchar(50) NOT NULL,
  `resource_person` varchar(50) NOT NULL,
  `paper_presented` varchar(50) NOT NULL,
  `coordinator` varchar(256) NOT NULL,
  `supporting_coordinator` varchar(256) NOT NULL,
  `chief_name` varchar(256) NOT NULL,
  `chief_designation` varchar(256) NOT NULL,
  `post_date` varchar(256) NOT NULL,
  `links` varchar(256) NOT NULL,
  `action` int DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` VALUES (11,'1','Study_tour','Second Test','12/20/2018','12/25/2018','Trissur','Testing12','new test','','','','','','','','','','','','','','','','','','','',1);
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:21:53
