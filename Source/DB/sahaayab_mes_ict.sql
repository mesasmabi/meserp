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
-- Table structure for table `ict`
--

DROP TABLE IF EXISTS `ict`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ict` (
  `id` int NOT NULL AUTO_INCREMENT,
  `faculty_id` varchar(200) DEFAULT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `semester` varchar(200) DEFAULT NULL,
  `batch` varchar(200) DEFAULT NULL,
  `program` varchar(200) DEFAULT NULL,
  `category` varchar(200) DEFAULT NULL,
  `from_date` varchar(200) DEFAULT NULL,
  `to_date` varchar(200) DEFAULT NULL,
  `document` varchar(200) DEFAULT NULL,
  `recognition_category` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `post_date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ict`
--

LOCK TABLES `ict` WRITE;
/*!40000 ALTER TABLE `ict` DISABLE KEYS */;
INSERT INTO `ict` VALUES (1,'16','CARP BROODSTOCK MANAGEMENT','Semester 5','2019-22','B.Sc. Aquaculture','University of Calicut','2022-01-15','2022-01-18','','District','Member','2023-02-22 13:46:26'),(2,'25','Katha sahithyam','Semester 1','B.com','B.Com. Computer Application','University of Calicut','2022-01-05','2022-01-05','','University',NULL,'2023-03-21 09:33:52'),(3,'25','Novel sahithyam','Semester 1','B.voc','B.Voc. Digital Film Production','University of Calicut','2022-02-03','2022-02-03','','University',NULL,'2023-03-21 09:35:04'),(4,'25','Drama','Semester 3','Ba','B.A. Mass Communication','University of Calicut','2021-07-16','2021-07-16','','',NULL,'2023-03-21 09:36:15'),(5,'31','You tube videos','Semester 4','2021-23','M.A. English Language and Literature','University of Calicut',NULL,NULL,'','',NULL,'2023-03-25 05:45:33'),(6,'31','You tube videos','Semester 2','2022-24','M.A. English Language and Literature','University of Calicut',NULL,NULL,'','',NULL,'2023-03-25 05:46:14'),(7,'187','Mobile genetic elements','Semester 2','2021 - 2023','M. Sc. Botany','University of Calicut','2022-02-17','2022-02-17','1680012758.pdf','University','Member','2023-03-28 14:12:38'),(8,'229','You Tube Videos','Semester 1','2022','B.Voc. Tourism & Hospitality Management','University of Calicut',NULL,NULL,'','',NULL,'2023-04-29 06:53:37'),(9,'187','Pteridophytes','Semester 3','2021 - 2024','B.Sc. Botany','University of Calicut','2022-06-09','2022-06-09','','University','Member','2023-05-04 08:57:44'),(10,'174','Keyness theory of employment and income generation','Semester 3','second sem MAeconomics','M. A. Economics','University of Calicut','2023-09-05','2023-09-05','','',NULL,'2023-09-19 04:58:04'),(12,'229','Google Classroom','Semester 1','2022','B.Voc. Tourism & Hospitality Management','University of Calicut','2022-09-22','2022-12-20','','University',NULL,'2023-09-19 10:32:31'),(13,'174','Keyness theory of employment and income generation','Semester 1','First sem  MA  Economics','M. A. Economics','University of Calicut','2023-09-05','2023-09-05','','',NULL,'2023-09-20 07:33:13'),(14,'16','Gynogesis Androgenesis and Polyploidy','Semester 6','2019 -2022','B.Sc. Aquaculture','University of Calicut','2021-12-16','2021-12-16','1695366441.pdf','',NULL,'2023-09-22 07:07:21'),(15,'16','Bioinformatics - Summary','Semester 6','2021 Admission','B.Sc. Aquaculture','University of Calicut','2022-01-17','2022-01-17','1695366751.pdf','',NULL,'2023-09-22 07:12:31'),(16,'242','Youtube channel','Semester 3','2021-2024','Hindi','University of Calicut','2023-06-01','2023-12-30','','National','Member','2023-09-22 15:50:00'),(17,'188','Aristotle\'s Poetics Part 1','Semester 5','III BA ENGLISH','B.A. English Language & Literature','University of Calicut',NULL,NULL,'1700066501.pdf','',NULL,'2023-11-15 16:41:41'),(18,'188','EXAMPLES LITERARY CRITICISM','Semester 4','II BA ENGLISH','B.A. English Language & Literature','University of Calicut',NULL,NULL,'1700067736.pdf','',NULL,'2023-11-15 17:02:16'),(19,'188','ARISTOTLE\'S POETICS PART II','Semester 5','III BA ENGLISH','B.A. English Language & Literature','University of Calicut',NULL,NULL,'1700067832.pdf','',NULL,'2023-11-15 17:03:52'),(20,'188','LITERARY THEORY INTRODUCTION','Semester 1','I BA ENGLISH','B.A. English Language & Literature','University of Calicut',NULL,NULL,'1700068003.pdf','',NULL,'2023-11-15 17:06:43'),(21,'188','PLATO AND ARISTOTLE','Semester 6','III BA ENGLISH','B.A. English Language & Literature','University of Calicut',NULL,NULL,'1700068063.pdf','',NULL,'2023-11-15 17:07:43'),(22,'188','ROMAN CLASSICAL LITERARY CRITICISM','Semester 5','III BA ENGLISH','B.A. English Language & Literature','University of Calicut',NULL,NULL,'1700068142.pdf','',NULL,'2023-11-15 17:09:02'),(23,'188','EYES OF THE CAT- Ruskin Bond','Semester 1','I BA ENGLISH','B.A. English Language & Literature','University of Calicut',NULL,NULL,'1700070320.pdf','',NULL,'2023-11-15 17:45:20'),(24,'242','ICT HINDI','Semester 2','2020-2023','Hindi','University of Calicut','2020-06-01','2020-12-01','1702876394.pdf','University','Member','2023-12-18 05:15:16'),(25,'242','ICT HINDI','Semester 4','2018-2021','Hindi','University of Calicut','2018-06-01','2021-03-03','1702876613.pdf','University','Member','2023-12-18 05:16:53'),(26,'242','ICT HINDI','Semester 4','2023-2024','Hindi','University of Calicut','2023-12-01','2024-03-31','1702877852.pdf','University','Member','2023-12-18 05:37:32'),(27,'242','ICT HINDI','Semester 2','2023-2024','Hindi','University of Calicut','2023-06-01','2024-03-31','1702893877.pdf','University','Member','2023-12-18 10:04:37');
/*!40000 ALTER TABLE `ict` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:20:52
