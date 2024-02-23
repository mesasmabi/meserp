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
-- Table structure for table `fapi_academic_body`
--

DROP TABLE IF EXISTS `fapi_academic_body`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fapi_academic_body` (
  `id` int NOT NULL AUTO_INCREMENT,
  `faculty_id` int DEFAULT NULL,
  `name_academic_body` varchar(200) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `from_date` varchar(200) DEFAULT NULL,
  `to_date` varchar(200) DEFAULT NULL,
  `name_recognised_body` varchar(200) DEFAULT NULL,
  `collaborators` varchar(200) DEFAULT NULL,
  `dept` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `recognition_category` varchar(200) DEFAULT NULL,
  `action` varchar(200) DEFAULT NULL,
  `post_date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fapi_academic_body`
--

LOCK TABLES `fapi_academic_body` WRITE;
/*!40000 ALTER TABLE `fapi_academic_body` DISABLE KEYS */;
INSERT INTO `fapi_academic_body` VALUES (29,140,'Member of Intelligence Research Institute','Outside Country','2021-10-05',NULL,'Intelligence Research Institute, San Diego State University USA',NULL,'10','Member','International','1','2023-01-17 06:27:16'),(30,140,'Member of Board of Studies','University of Calicut','2022-06-15',NULL,'Board of Studies University of Calicut',NULL,'10','Member','University','1','2023-01-17 06:30:18'),(31,3,'Board of Studies - Environment Science Department','University of Calicut','2023-01-01','2023-01-01','Environment Science Department - Calicut University',NULL,NULL,'Member','University','1','2023-05-05 11:16:18'),(32,63,'ISTD KOCHI','Other within State','2022-07-01','2022-07-01','ISTD KOCHI','63','45','Member','District','1','2023-01-17 09:32:50'),(33,63,'ISTD','University of Calicut','2022-07-01','2022-07-01','ISTD KOCHI',NULL,NULL,'Member','District','1','2023-01-17 09:33:47'),(34,187,'Question paper setter','Other within State','2021-10-13','2021-10-13','Kannur University',NULL,'8','Member','University','1','2023-01-18 15:53:20'),(36,16,'ASSOCIATION OF FISHERIES GRADUATES','Other within State','2021-10-22','2030-10-22','ASSOCIATION OF FISHERIES GRADUATES',NULL,NULL,'Member','State','1','2023-01-21 17:11:05'),(37,16,'INTERNATIONAL PEER REVIEWER','Outside Country','2021-07-05','2021-07-05','SPRINGER JOURNAL REVIEWER PANEL','16','11','Member','International','1','2023-01-21 17:33:15'),(38,3,'Expert Committee on Ecorestoration and management of Disaster areas in Coastal Region','Other within State','2021-05-18','2021-08-17','Disaster management Committee, SN Puram Grama Panchayath',NULL,'8','Chairman','District','1','2023-01-23 18:04:56'),(39,3,'Expert Committee on Preparation of First Panchayath Level Biodiversity Strategy an dAction Plan of the State','Other within State','2021-11-18','2021-12-17','Kerala State Biodiversity Board, Govt. of Kerala',NULL,'8','Co-chairman','State','1','2023-01-23 18:10:02'),(40,60,'ISTD','Other within State','2022-06-30','2022-06-30','ISTD',NULL,NULL,'Member','National','1','2023-01-24 15:01:47'),(41,70,'MES Asmabi College, Kodungallur','University of Calicut','2021-12-10','2021-12-10','Sraddha Academy for Financial Education','70','45','Member','National','1','2023-01-25 05:19:47'),(42,70,'Sree Sankara Vidyapeetom College, Valayanchirangara, Perumbavoor, Kerala, India','Other within State','2020-07-07','2020-07-07','Department of Commerce, Sree Sankara Vidyapeetom College, Valayanchirangara, Perumbavoor,','70','45','Member','National','1','2023-01-25 05:27:24'),(43,10,'Board of Studies Member(UG -Arabic)','University of Calicut','2020-02-10','2020-02-10','Academic Block  conference hall University of Calicut',NULL,NULL,'Member','University','1','2023-01-25 18:07:14'),(44,10,'Board of Studies Member  (PG -Arabic)','University of Calicut','2017-02-10','2020-02-10','University of Calicut',NULL,NULL,'Member','University','1','2023-01-25 18:11:12'),(45,10,'PG(Arabic) Board of Studies Member','University of Calicut','2017-10-04','2017-10-04','AD Block University of Calicut',NULL,NULL,'Member','University','1','2023-01-28 09:52:22'),(46,18,'Board of Studies in Aquaculture (UG & PG)','University of Calicut','2020-02-11','2023-02-10','Board of Studies in Aquaculture (UG & PG)',NULL,NULL,'Member','University','1','2023-02-18 06:58:35'),(47,16,'ASSOCIATION OF FISHERIES GRADUATES','University of Calicut','2021-01-10','2030-01-10','ASSOCIATION OF FISHERIES GRADUATES','16',NULL,'Executive Member','State','1','2023-02-19 04:06:51'),(48,16,'CHAIRPERSON FOR III SEM Valuation Camp','University of Calicut','2020-10-14','2020-10-21','BOARD OF EXAMINERS - CV CAMP','16','11','Chairman','University','1','2023-02-19 04:10:31'),(49,16,'BOARD OFCHAIRPERSONS CV CAMP','University of Calicut','2021-01-10','2022-04-10','BOARD OFCHAIRPERSONS CV CAMP','16','11','Chairman','University','1','2023-02-19 04:13:53'),(50,16,'BOARD OFCHAIRPERSONS CV CAMP','University of Calicut','2022-08-16','2022-08-22','BOARD OFCHAIRPERSONS CV CAMP','16','11','Chairman','University','1','2023-02-19 04:15:59'),(51,16,'BOARD OFCHAIRPERSONS CV CAMP','University of Calicut','2021-07-12','2021-07-20','BOARD OFCHAIRPERSONS CV CAMP','16','11','Chairman','University','1','2023-02-19 04:17:44'),(53,188,'Edugroom India Foundation','Outside State','2021-01-27','2021-01-27','Edugroom India Foundation',NULL,NULL,'Member','National','1','2023-11-14 17:39:34'),(54,188,'Academic and Research Conclave','Outside State','2022-06-27','2022-06-27','Academic and Research Conclave',NULL,NULL,'Member','National','1','2023-02-27 16:39:16'),(55,188,'Welfare Forum for Research Scholar\'s and Professor\'s','Outside State','2022-02-27','2022-02-27','Welfare Forum for Research Scholar\'s and Professor\'s',NULL,NULL,'Member','National','1','2023-02-27 16:41:47'),(56,8,'Research Advisory Committee','Other within State','2022-07-07','2024-07-07','Research Advisory Committee, College of Forestry, Kerala Agricultural University',NULL,NULL,'Member','University','1','2023-03-25 16:27:39'),(57,3,'Tribal Expert Committee Meeting PVTG and Habitat Right','Outside State','2020-11-02','2020-11-04','Tribal Expert Committee Meeting PVTG and Habitat Right By Ministry of Tribal Affairs, Govt. Of India.',NULL,NULL,'Member','National','1','2023-04-02 15:38:55'),(58,16,'Board of CV Camp Chairmen','University of Calicut','0023-02-07','0023-02-07','Board of Examiners',NULL,NULL,'Chairman','University','1','2023-05-05 02:11:21'),(59,242,'U.G Board of studies','University of Calicut','2020-02-11','2023-04-11','U.G Board of studies',NULL,NULL,'Member','University','1','2023-06-15 15:48:36'),(60,242,'P.G.Board of Studies','University of Calicut','2023-04-11','2026-04-11','P.G.Board of Studies',NULL,NULL,'Member','University','1','2023-12-18 10:08:08'),(61,140,'Board of Studies','University of Calicut','2022-02-02','2022-02-02','university of calicut',NULL,NULL,'Member','University','1','2023-09-18 06:35:44'),(62,140,'Elected as coordinator for region for the Sustainability Initiative in the Marginal Seas of South and  East Asia, an international organization operated at University of Philippines, Dilman, Philippin','Outside Country','2016-09-26','2016-09-26','Elected as coordinator for region for the Sustainability Initiative in the Marginal Seas of South and  East Asia, an international organization operated at University of Philippines, Dilman, Philippin',NULL,NULL,'Member','University','1','2023-09-18 06:55:50'),(63,140,'Travel grant with full scholarship to attend and present a paper at the Scoping Workshop on the  Development of an Integrative Ocean Research Network”, during 4-5 December 2016, at the Cruise  Termina','Outside Country','2017-12-05','2017-12-05','Travel grant with full scholarship to attend and present a paper at the Scoping Workshop on the  Development of an Integrative Ocean Research Network”, during 4-5 December 2016, at the Cruise  Termina',NULL,NULL,'Member','International','1','2023-09-18 06:58:26'),(64,253,'world Congress of Sociology','Outside Country','2022-02-16','2023-09-20','ISA Auatralia',NULL,NULL,'Member','International','1','2023-09-20 08:42:34'),(65,253,'Social Science and Humanities Research Association.','Outside State','2023-08-09','2023-09-20','Social Science and Humanities Research Association.',NULL,NULL,'Member','National','1','2023-09-20 08:45:01'),(66,253,'Indian Sociological Society','Outside State','2023-07-12','2023-09-20','Indian Sociological Society',NULL,NULL,'Member','National','1','2023-09-20 08:46:30'),(67,253,'Indo Global Social Service Society (IGSSS), New Delhi,','Outside State','2019-08-22','2020-10-07','Indo Global Social Service Society (IGSSS), New Delhi,',NULL,NULL,'Executive Member','National','1','2023-09-20 08:48:14'),(68,23,'Board of Studies','University of Calicut','2023-04-11','2026-04-11','European Languages (Single)',NULL,NULL,'Member','University','1','2023-11-13 15:33:39');
/*!40000 ALTER TABLE `fapi_academic_body` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:21:15
