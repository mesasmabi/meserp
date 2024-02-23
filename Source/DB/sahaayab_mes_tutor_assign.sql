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
-- Table structure for table `tutor_assign`
--

DROP TABLE IF EXISTS `tutor_assign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tutor_assign` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_id` varchar(10) DEFAULT NULL,
  `course_name` varchar(200) DEFAULT NULL,
  `tutor` varchar(200) DEFAULT NULL,
  `batch` varchar(200) DEFAULT NULL,
  `semester` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tutor_assign`
--

LOCK TABLES `tutor_assign` WRITE;
/*!40000 ALTER TABLE `tutor_assign` DISABLE KEYS */;
INSERT INTO `tutor_assign` VALUES (1,'14','B.Voc. Logistics Management','Sruthi Dinesh','2020-2023','Semester 6'),(4,'2','B.Sc. Botany','Dr. Jisha K.C','2022-2025','Semester 2'),(7,NULL,NULL,'Dr. M.P. Nisar','2022-2023','Semester 6'),(8,'8','M.Sc. Physics','Athira Anilan','2022-2024','Semester 1'),(10,'12','B.C.A','Naseema K M','2022-2025','Semester 1'),(14,NULL,NULL,'Dr. M.P. Nisar','2020-2023','Semester 3'),(15,NULL,NULL,'Dr. M.P. Nisar','2020-2023','Semester 4'),(17,'5','B.A. English Language & Literature','Sabitha M.M.','2020-2023','Semester 6'),(18,'18','M. Com. Financial Management','Shiney C.N.','2022-2024','Semester 2'),(20,NULL,NULL,'JABIN T H','2020-2023','Semester 1'),(21,'13','B.A. Mass Communication','Najma Nazeer','2020-2023','Semester 6'),(30,'6','B.Com. Co-operation','Chithra P','2020-2023','Semester 6'),(48,'11','B.B.A','Raseena P M','2021-2024','Semester 1'),(50,'3','B.Sc. Physics','Dr. Sheena P. A.','2022-2025','Semester 2'),(57,'10','B.Com. Finance','Krishnapriya M','2021-2024','Semester 4'),(58,'33','B.Sc. Psychology','Lathif Penath','2020-2023','Semester 3'),(60,NULL,NULL,'SACHIN C S','2021-2024','Semester 4'),(61,'15','B.Voc. Digital Film Production','Amarjith P.B.','2020-2023','Semester 6'),(77,NULL,NULL,'Reshma K R','2020-2023','Semester 6'),(78,NULL,NULL,'Krishnapriya M','2021-2024','Semester 4'),(79,NULL,NULL,'Dhini.K.V','2022-2025','Semester 2'),(83,'9','B.Com. Computer Application','Salma Thasneem B.M','2022-2025','Semester 2'),(87,'199','Introduction to SPSS','Shahija V A','2020-2022','Semester 4'),(97,'20','M. Sc. Botany','Dr. K.H. Amitha Bachan','2021-2023','Semester 4'),(100,'16','B. Voc. FIsh Processing Technology','Sugaina Sulaiman M.S.','2022-2025','Semester 2'),(105,'19','M.A. English Language and Literature','Dr. Amitha P. Mani','2021-2023','Semester 4'),(107,NULL,NULL,'Keerthana S. V','2021-24','Semester 4'),(108,'32','B.Sc. Mathematics','Sabeena P A','2022-2025','Semester 2'),(114,'17','B.Voc. Tourism & Hospitality Management','Shafna A S','2021-2024','Semester 4'),(157,'32','B.Sc. Mathematics','Sabeena P A','2022-2025','Semester 1'),(158,'32','B.Sc. Mathematics','Fahadali P H','2021-2024','Semester 5'),(159,'17','B.Voc. Tourism & Hospitality Management','MARY CHRISTY M F','2023-2026','Semester 1'),(161,'17','B.Voc. Tourism & Hospitality Management','Susheesh K Suresh','2022-2025','Semester 3'),(162,'17','B.Voc. Tourism & Hospitality Management','Shafna A S','2021-2024','Semester 5');
/*!40000 ALTER TABLE `tutor_assign` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:23:35
