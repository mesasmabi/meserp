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
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `documents` (
  `did` int NOT NULL AUTO_INCREMENT,
  `eid` varchar(256) NOT NULL,
  `fid` int NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `documents` blob NOT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documents`
--

LOCK TABLES `documents` WRITE;
/*!40000 ALTER TABLE `documents` DISABLE KEYS */;
INSERT INTO `documents` VALUES (1,'6',2,NULL,_binary 'event_documents/03-Meidian-Submission_Declaration_form_21.docx'),(2,'1',2,NULL,_binary 'event_documents/2516306.pdf'),(3,'2ex',2,NULL,_binary 'event_documents/card.pdf'),(4,'8ex',3,NULL,_binary 'event_documents/adobe.pdf'),(5,'9ex',3,NULL,_binary 'event_documents/adobe1.pdf'),(6,'10ex',3,NULL,_binary 'event_documents/adobe2.pdf'),(7,'11ex',3,NULL,_binary 'event_documents/adobe3.pdf'),(8,'12ex',3,NULL,_binary 'event_documents/adobe4.pdf'),(9,'13ex',3,NULL,_binary 'event_documents/adobe5.pdf'),(10,'14ex',3,'faculty',_binary 'event_documents/adobe6.pdf'),(11,'15ex',3,'faculty',_binary 'event_documents/adobe7.pdf'),(12,'5ex',3,NULL,_binary 'event_documents/dummy.pdf'),(13,'6ex',3,'faculty',_binary 'event_documents/dummy1.pdf'),(14,'17ex',45,'faculty',_binary 'event_documents/MES_WS_Physics_(1).pdf'),(15,'21ex',3,NULL,_binary 'event_documents/YTbanner.jpg'),(16,'22ex',3,'faculty',_binary 'event_documents/ACFrOgCGNDpHxhdHmo8q5CsNPFzJ5ZudAECB4z348xymbm75uuPL1TEOP16wnvfLiW8ANGyVL9cc1GJlZO9UR_jWvuL39-w59W9wpa5GcqL6r6BBwEzziYspkwexQTDkZmldTzoaewN6jyTSir3S.pdf'),(17,'32ex',16,NULL,_binary 'event_documents/Swaraj_quiz_BROCHURE.pdf'),(18,'33ex',16,NULL,_binary 'event_documents/Erudite_Talk_Participants_list.pdf'),(19,'33ex',16,NULL,_binary 'event_documents/ERUDITE_TALK_REPORT.pdf'),(20,'34ex',16,NULL,_binary 'event_documents/NIFPHATT_Certificates_.pdf'),(21,'35ex',16,NULL,_binary 'event_documents/report_ideafest_aquaculture.pdf'),(22,'38ex',31,'faculty',_binary 'event_documents/Report_of_the_National_Seminar.pdf'),(23,'44ex',3,NULL,_binary 'event_documents/2022_08_08_10_21_19_(1).pdf'),(24,'63ex',155,'faculty',_binary 'event_documents/career_seminar_report_(1).docx'),(25,'64ex',155,'faculty',_binary 'event_documents/Workshop_report.docx'),(26,'67ex',156,'faculty',_binary 'event_documents/career_seminar_report.docx'),(27,'70ex',188,'faculty',_binary 'event_documents/SINGAPORE_CERTIFICATE.pdf'),(28,'35ex',16,NULL,_binary 'event_documents/report_ideafest_aquaculture1.pdf'),(29,'65cell',131,'cell',_binary 'event_documents/5th_Sem_UG_Commencement_Notfication.pdf');
/*!40000 ALTER TABLE `documents` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:23:30
