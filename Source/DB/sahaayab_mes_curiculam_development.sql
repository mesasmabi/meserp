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
-- Table structure for table `curiculam_development`
--

DROP TABLE IF EXISTS `curiculam_development`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curiculam_development` (
  `id` int NOT NULL AUTO_INCREMENT,
  `faculty_id` int DEFAULT NULL,
  `name_of_pgm` varchar(200) DEFAULT NULL,
  `year` varchar(200) DEFAULT NULL,
  `semester` varchar(200) DEFAULT NULL,
  `classification` varchar(200) DEFAULT NULL,
  `name_of_colluniversity` varchar(200) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `from_date` varchar(200) DEFAULT NULL,
  `to_date` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `recognition_category` varchar(200) DEFAULT NULL,
  `action` varchar(200) DEFAULT NULL,
  `post_date` varchar(200) DEFAULT NULL,
  `document` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curiculam_development`
--

LOCK TABLES `curiculam_development` WRITE;
/*!40000 ALTER TABLE `curiculam_development` DISABLE KEYS */;
INSERT INTO `curiculam_development` VALUES (2,3,'tet','test','Semester 2','PhD','erre','University of Calicut','2023-02-03','2023-02-03','Chairman','National','1','2023-02-22 07:33:03',''),(3,187,'M.Sc Botany','June 2019','Semester 4','PG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2019-06-26','2019-06-26','Member','University','1','2023-03-27 14:13:27',''),(4,187,'B.Sc Botany','March 2019','Semester 6','UG','KKTM Govt. College, Pullut','University of Calicut','2019-03-20','2019-03-20','Member','University','1','2023-03-27 15:27:13',''),(5,187,'B.Sc Botany','March 2020','Semester 6','UG','KKTM Govt. College, Pullut','University of Calicut','2020-03-20','2020-03-20','Member','University','1','2023-03-27 15:31:27',''),(6,187,'M.Sc Botany','September 2020','Semester 4','PG','Govt. Victoria College, Palakkad','University of Calicut','2020-09-08','2020-09-08','Member','University','1','2023-03-27 15:33:01',''),(7,187,'B.Sc Botany','January 2021','Semester 4','UG','SN College, Nattika','University of Calicut','2021-01-01','2021-01-01','Member','University','1','2023-03-27 15:34:17',''),(8,187,'M.Sc Botany','January 2021','Semester 2','PG','Govt. Victoria College, Palakkad','University of Calicut','2021-01-30','2021-01-30','Member','University','1','2023-03-27 15:35:17',''),(9,160,'BVOC Fish Processing Technology','2021 - 2022',NULL,'UG','University of Calicut','University of Calicut',NULL,NULL,NULL,'','1','2023-03-29 09:17:48',''),(10,16,'Certificate Course in  Marine Pollution and Toxicology','2021','Semester 4','Certificate','M E S Asmabi College','University of Calicut','2021-07-02','2021-07-02','Member','District','1','2023-09-22 07:15:28','1695366928.pdf'),(11,16,'Certificate Course in  Climate Smart Aquaculture','2021','Semester 4','Certificate','M E S Asmabi College','University of Calicut','2021-07-01','2021-07-01','Member','District','1','2023-09-22 07:16:46','1695367006.pdf'),(12,242,'B.A Hindi','2023','Semester 5','UG','Calicut University','University of Calicut','2023-12-11','2023-12-13','Executive Member','University','1','2023-12-18 04:40:06',NULL);
/*!40000 ALTER TABLE `curiculam_development` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:20:45
