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
-- Table structure for table `patent`
--

DROP TABLE IF EXISTS `patent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `patent` (
  `id` int NOT NULL AUTO_INCREMENT,
  `publisherwhom` varchar(200) DEFAULT NULL COMMENT 'faculty : 1,Research Fellow:2,Research Guide:3,Student:4,Research Fellow & Faculty:5,Research Guide & Faculty:6',
  `publisherid` varchar(200) DEFAULT NULL,
  `typepublication` varchar(200) DEFAULT NULL,
  `author` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `title` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `datefilling` varchar(200) DEFAULT NULL,
  `dateaward` varchar(200) DEFAULT NULL,
  `collaborator` varchar(200) DEFAULT NULL,
  `url` varchar(1000) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `patentno` varchar(200) DEFAULT NULL,
  `document` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patent`
--

LOCK TABLES `patent` WRITE;
/*!40000 ALTER TABLE `patent` DISABLE KEYS */;
INSERT INTO `patent` VALUES (1,'1','151','Others','Ansar E.B, Sekharapillai Vijayan, Harikrishna Varma PR','Ceramic Moiety Modified Magnetic Nano Particle Biomedical Applications In Cell Separation And Hyperthermia Therapy','Indian patent','2014-08-04','2021-01-11','SREE CHITRA TIRUNAL INSTITUTE FOR MEDICAL SCIENCE AND TECHNOLOGY','https://ipindiaservices.gov.in/PatentSearch/PatentSearch/ViewApplicationStatus','3799/CHE/2014','1683267880.pdf');
/*!40000 ALTER TABLE `patent` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:23:53
