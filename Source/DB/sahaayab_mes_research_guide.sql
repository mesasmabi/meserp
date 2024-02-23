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
-- Table structure for table `research_guide`
--

DROP TABLE IF EXISTS `research_guide`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `research_guide` (
  `id` int NOT NULL AUTO_INCREMENT,
  `research_centre_id` int DEFAULT NULL,
  `type` varchar(200) DEFAULT NULL,
  `supervisor_name` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `parentinstitute` varchar(200) DEFAULT NULL,
  `domain` varchar(200) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `created_date` varchar(200) DEFAULT NULL,
  `resume` varchar(200) DEFAULT NULL,
  `guide_shiporder` varchar(200) DEFAULT NULL,
  `picture` varchar(200) DEFAULT NULL,
  `is_belongs_to_faculty` varchar(20) DEFAULT NULL,
  `phone_number` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `research_guide`
--

LOCK TABLES `research_guide` WRITE;
/*!40000 ALTER TABLE `research_guide` DISABLE KEYS */;
INSERT INTO `research_guide` VALUES (17,4,'Research Centers Aided','Dr. Amitha Bachan K.H.','Other','MES Asmabi College','Botany','Taxonomy, Ecology, Conservation and Ethnoecology',NULL,'2023-04-18 04:59:48',NULL,NULL,'854785670.jpg','Yes','9497627870'),(18,4,'Research Centers Aided','Dr. Jisha KC','Other','MES Asmabi College','Botany','Plant Stress Physiology, Phytochemistry','jishakc123@gmail.com','2023-01-26 15:36:08',NULL,NULL,NULL,'Yes','9846514038'),(19,4,'Research Centers Aided','Dr. Girija TP','Other','MES Asmabi College','Botany','Anatomy, Phytochemistry','girijamanu@yahoo.in','2023-01-26 16:06:40',NULL,NULL,NULL,'Yes','9526570267'),(20,5,'Research Centers Aided','Dr Amitha P Mani','Other','MES Asmabi College','English Language and Literature','Gender Studies, English Language Teaching & Narratology','amitha.pm@gmail.com','2023-01-26 16:13:54',NULL,NULL,NULL,'Yes','9249724776'),(21,6,'Research Centers Aided','Dr. Princy Francis','Assi. Professor','MES Asmabi College','Commerce','E-commerce, Social entrepreneurship, Marketing, HRM','eprincyfrancis@gmail.com','2023-09-13 15:44:10',NULL,NULL,NULL,'Yes','9746568091'),(22,6,'Research Centers Aided','Dr. Sefiya K.M','Other','MES Asmabi College','Commerce','Finance, Women empowerment, Marketing, HRM','sefiyaakbar@gmail.com','2023-01-26 16:25:07',NULL,NULL,NULL,'Yes','9495667609'),(23,6,'Research Centers Aided','Dr. Shafeer P. S','Other','MES Asmabi College','Commerce','Total Quality Management, Marketing, Organisational Behaviour, HRM','shafeerkappil@gmail.com','2023-01-26 16:26:59',NULL,NULL,NULL,'Yes','9847250464'),(24,4,'Research Centers Aided','Prof. (Dr.) Tessy Paul P.','Other','Christ College (Autonomous), Irinjalakuda','Botany','Phycology, Biodiversity, Environmental Science','tessyjohnt@gmail.com','2023-04-21 14:44:11',NULL,'1682088251001.pdf','1682088251.png','No','9446233104'),(25,4,'Research Centers Aided','Dr. Sreeranjini K.','Other','Little Flower College, Guruvayur','Botany','Biotechnology, Phytochemistry,Cytology','ranjini12000@gmail.com','2023-01-26 16:41:36',NULL,NULL,NULL,'No',NULL),(26,4,'Research Centers Aided','Dr. Usman A.','Other','KAHM Unity Women\'s College, Manjeri','Botany','Plant pathology','usmaanarerath@gmail.com','2023-01-26 16:50:52',NULL,NULL,NULL,'No',NULL),(28,4,'Research Centers Aided','Dr. Mohamed Nasser K.M.','Associate Professor','MES Asmabi College','Botany','Phycology','nasermes@yahoo.com','2023-01-27 09:49:24',NULL,NULL,NULL,'No',NULL),(30,4,'Research Centers Aided','Dr. Sereena K.','Assi. Professor','MES Kalladi College, Mannarkkad','Phytochemistry','Botany','sereenamajeed@gmail.com','2023-02-24 11:20:11',NULL,'1676441294001.pdf',NULL,'No','235245');
/*!40000 ALTER TABLE `research_guide` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:24:08
