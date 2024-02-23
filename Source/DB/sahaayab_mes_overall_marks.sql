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
-- Table structure for table `overall_marks`
--

DROP TABLE IF EXISTS `overall_marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `overall_marks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `program` varchar(200) DEFAULT NULL,
  `batch` varchar(200) DEFAULT NULL,
  `stname` varchar(200) DEFAULT NULL,
  `stid` varchar(200) DEFAULT NULL,
  `Semester` varchar(200) DEFAULT NULL,
  `sgpa` varchar(200) DEFAULT NULL,
  `grade` varchar(200) DEFAULT NULL,
  `cgpa` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=470 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `overall_marks`
--

LOCK TABLES `overall_marks` WRITE;
/*!40000 ALTER TABLE `overall_marks` DISABLE KEYS */;
INSERT INTO `overall_marks` VALUES (6,'B.Sc. Botany','2020-2023','THASNEEMA','5792','Semester 4','4.5','A','4.3'),(7,'B.A. Mass Communication','2020-2023','ADHUNA T R','5308','Semester 3','5.2','C','passed'),(8,NULL,NULL,NULL,'5308','Semester 4','6.2','B','passed'),(11,'M.A. English Language and Literature','2021-2023','ABNA P K','5047','Semester 1','2.93','B+','2.93'),(12,'B.Sc. Aquaculture','2019-2022','SAWFA.O.A','6493','Semester 5','7.789','A','NA'),(13,NULL,NULL,NULL,'6493','Semester 6','9.217','A+','7.242'),(14,'B.A. Mass Communication','2020-2023','NISAMOL M I','5336','Semester 3','-','E','failed'),(15,NULL,NULL,NULL,'5336','Semester 4','6.6','B+','passed'),(17,'B.Sc. Aquaculture','2019-2022','FAMITHA RASHEED','6495','Semester 5','8.579','A+','NA'),(18,NULL,NULL,NULL,'6495','Semester 6','9.696','O','8.367'),(19,'B.Sc. Aquaculture','2019-2022','EDNA EDISON','6550','Semester 5','9.246','A+','NA'),(20,NULL,NULL,NULL,'6550','Semester 6','10.00','O','9.11'),(21,'B.Sc. Aquaculture','2019-2022','ASNITHA.M','6556','Semester 5','7.842','A','NA'),(22,NULL,NULL,NULL,'6556','Semester 6','9.304','A+','7.858'),(23,'B.Sc. Aquaculture','2019-2022','ARUSHI.T.P','6559','Semester 5','9.105','A+','NA'),(24,NULL,NULL,NULL,'6559','Semester 6','9.609','O','8.458'),(25,'M. Sc. Botany','2019-2021','ADILA K.','6643','Semester 1','3.17','B+','3.17'),(27,'M. Sc. Botany','2019-2021','ADILA K.','6643','Semester 2','3.94','A+','3.94'),(28,'M. Sc. Botany','2019-2021','ADILA K.','6643','Semester 3','4.26','O','4.26'),(29,'M. Sc. Botany','2019-2021','ADILA K.','6643','Semester 4','4.22','A+','4.22'),(30,'B.Sc. Aquaculture','2019-2022','APARNA.K.A','6561','Semester 5','8.000','A','NA'),(31,NULL,NULL,NULL,'6561','Semester 6','9.478','A','8.200'),(32,'B.A. Mass Communication','2020-2023','AKHIL K S','5309','Semester 3','fail','FAILED','fail'),(33,NULL,NULL,NULL,'5309','Semester 4','6.2','B','pass'),(34,'B.Sc. Aquaculture','2019-2022','ABHISHA.K','6565','Semester 5','8.895','A+','NA'),(35,NULL,NULL,NULL,'6565','Semester 6','9.522','O','8.367'),(36,'B.Sc. Aquaculture','2019-2022','AAGNA','6567','Semester 5','5.421','C','NA'),(37,NULL,NULL,NULL,'6567','Semester 6','7.565','A','6.333'),(38,'B.A. English Language & Literature','2020-2023','AYSHA T N','5464','Semester 4','6.2','B','0'),(40,NULL,NULL,NULL,'6569','Semester 5','8.000','A','NA'),(41,NULL,NULL,NULL,'6569','Semester 6','9.348','A+','7.158'),(42,'B.Sc. Aquaculture','2019-2022','ANSHIN PAUL','6591','Semester 5','8.368','A','NA'),(43,NULL,NULL,NULL,'6591','Semester 6','8.739','A+','7.758'),(45,NULL,NULL,NULL,'6593','Semester 5','8.895','A+','NA'),(46,NULL,NULL,NULL,'6593','Semester 6','9.696','O','8.725'),(47,'B.Sc. Aquaculture','2019-2022','IRFANA. C S','6594','Semester 5','8.684','A+','NA'),(48,NULL,NULL,NULL,'6594','Semester 6','9.304','A+','8.358'),(49,'B.Sc. Aquaculture','2019-2022','KRIDHU PRASAD','6595','Semester 5','7.053','B+','NA'),(50,NULL,NULL,NULL,'6595','Semester 6','9.304','A+','7.500'),(51,'B.A. Mass Communication','2020-2023','FATHIMATH ZUHARA K S','5310','Semester 3','-','FAILED','-'),(52,NULL,NULL,NULL,'5310','Semester 4','5.2','C','passed'),(53,'B.Sc. Aquaculture','2019-2022','MOHAMMED NASEEH','6607','Semester 5','8.316','A','NA'),(54,NULL,NULL,NULL,'6607','Semester 6','9.913','O','7.567'),(55,'B.Sc. Aquaculture','2019-2022','HENNA. V. K','6608','Semester 5','9.053','A+','NA'),(56,NULL,NULL,NULL,'6608','Semester 6','9.826','O','8.558'),(57,'B.A. Mass Communication','2020-2023','MOHAMED NASHID','5311','Semester 3','5.2','C','passed'),(58,NULL,NULL,NULL,'5311','Semester 4','6.8','B+','passed'),(59,'B.A. English Language & Literature','2020-2023','FARHANA FATHIMA R M','5465','Semester 4','7.4','B+','0'),(60,'B.Sc. Aquaculture','2019-2022','AYSHA. A. F','6609','Semester 5','6.842','B+','NA'),(61,NULL,NULL,NULL,'6609','Semester 6','8.6966','O','7.192'),(62,'B.Sc. Aquaculture','2019-2022','SARA JOHNY','6611','Semester 5','9.421','A+','NA'),(63,NULL,NULL,NULL,'6611','Semester 6','10.000','O','9.117'),(64,'B.A. English Language & Literature','2020-2023','KAULATH SULTHANA PS','5466','Semester 4','7.6','A','0'),(65,'B.Sc. Aquaculture','2019-2022','NEJMA V A','6615','Semester 5','6.842','B+','NA'),(66,NULL,NULL,NULL,'6615','Semester 6','9.130','A+','7.667'),(67,'B.A. English Language & Literature','2020-2023','NAJA T A','5467','Semester 4','5.8','B','0'),(68,'B.A. English Language & Literature','2020-2023','SANA MOL M I','5468','Semester 4','7.2','B+','0'),(69,'B.A. English Language & Literature','2020-2023','SHABANA K S','5469','Semester 4','0','FAILED','0'),(70,'B.A. English Language & Literature','2020-2023','SHAHANAZ K S','5470','Semester 4','8','A','0'),(71,'B.Sc. Aquaculture','2019-2022','SAHADANATH','6612','Semester 5','8.000','A','NA'),(72,NULL,NULL,NULL,'6612','Semester 6','9.217','A+','7.933'),(73,'B.Sc. Aquaculture','2019-2022','NIVED JOSHY','6616','Semester 5','9.211','A+','NA'),(74,NULL,NULL,NULL,'6616','Semester 6','9.609','O','8.325'),(75,'B.Sc. Aquaculture','2019-2022','SHINSIYA T A','6618','Semester 5','8.000','A','NA'),(76,'B.Sc. Aquaculture','2019-2022','SISIRA V','6619','Semester 5','8.947','A+','NA'),(77,NULL,NULL,NULL,'6619','Semester 6','9.565','O','8.683'),(78,'B.A. English Language & Literature','2020-2023','AAKHIL C AMEER','5484','Semester 4','4.4','PASSED','0'),(79,'B.Sc. Aquaculture','2019-2022','SUNISHA K S','6620','Semester 5','6.316','B','NA'),(80,NULL,NULL,NULL,'6620','Semester 6','8.000','A','6.558'),(81,'B.A. English Language & Literature','2020-2023','ADHARSH KS','5485','Semester 4','6','B','0'),(82,'B.A. English Language & Literature','2020-2023','AHLA K I','5486','Semester 4','8.2','A','0'),(83,'B.Sc. Aquaculture','2019-2022','SWETHA SASIKUMAR','6714','Semester 5','7.895','A','NA'),(84,NULL,NULL,NULL,'6714','Semester 6','9.522','O','7.908'),(85,'B.A. English Language & Literature','2020-2023','ANNA GRACE','5487','Semester 4','6.6','B+','0'),(86,'B.A. English Language & Literature','2020-2023','ANSILA U N','5488','Semester 4','0','FAILED','0'),(87,'B.A. English Language & Literature','2020-2023','ANUSREE M J','5489','Semester 4','6.6','B+','0'),(88,'B.A. English Language & Literature','2020-2023','APSANA K B','5490','Semester 4','0','FAILED','0'),(89,'B.A. English Language & Literature','2020-2023','BAHJA T B','5491','Semester 4','7.4','B+','0'),(90,'B.A. English Language & Literature','2020-2023','GOUTHAVU PRASANNAN V','5492','Semester 4','5.8','B','0'),(91,'B.A. English Language & Literature','2020-2023','HANNA IBRAHIM','5493','Semester 4','8.2','A','0'),(92,'B.A. English Language & Literature','2020-2023','HASHIDHA HABEEB','5494','Semester 4','6.4','B','0'),(94,'B.A. English Language & Literature','2020-2023','KAMALIYA K B','5496','Semester 4','7.4','B+','0'),(96,'B. Voc. FIsh Processing Technology','2019-2022','AFEEFA IBRAHIM.P.I','6628','Semester 5','6.00','A+',NULL),(97,'M. Sc. Botany','2021-2023','AFITHA T.H','5084','Semester 1','4.04','A+','4.04'),(98,'M. Sc. Botany','2021-2023','APARNA PUSHPAN','5085','Semester 1','4.18','A+','4.18'),(99,'M. Sc. Botany','2021-2023','ARYA SATHYAN','5087','Semester 1','2.92','B+','2.92'),(100,'B.A. English Language & Literature','2019-2022','SANJAY.V','6032','Semester 1','4.42','PASSED',NULL),(101,NULL,NULL,NULL,'6032','Semester 2','0','FAILED',NULL),(102,NULL,NULL,NULL,'6032','Semester 3','5.60','PASSED',NULL),(103,NULL,NULL,NULL,'6032','Semester 4','6.00','PASSED',NULL),(104,NULL,NULL,NULL,'6032','Semester 5','5.00','PASSED',NULL),(105,NULL,NULL,NULL,'6032','Semester 6','7.24','PASSED','0'),(106,'B.A. English Language & Literature','2019-2022','GOPIKA.A.J','6033','Semester 1','6.74','B+',NULL),(107,NULL,NULL,NULL,'6033','Semester 2','6.76','B+',NULL),(108,NULL,NULL,NULL,'6033','Semester 3','8.40','A',NULL),(109,NULL,NULL,NULL,'6033','Semester 4','8.60','A+',NULL),(110,NULL,NULL,NULL,'6033','Semester 5','6.89','B+',NULL),(111,NULL,NULL,NULL,'6033','Semester 6','9.38','A+','7.817'),(114,NULL,NULL,NULL,'6035','Semester 1','6.68','B+',NULL),(115,NULL,NULL,NULL,'6035','Semester 2','7.19','B+',NULL),(116,NULL,NULL,NULL,'6035','Semester 3','7.00','B+',NULL),(117,NULL,NULL,NULL,'6035','Semester 4','6.20','B',NULL),(118,NULL,NULL,NULL,'6035','Semester 5','5.42','C',NULL),(119,NULL,NULL,NULL,'6035','Semester 6','7.38','B+','6.742'),(120,'B.A. English Language & Literature','2020-2023','AFRA JASIRA','5471','Semester 4','8.4','A','0'),(121,'B.A. English Language & Literature','2020-2023','ASMI V H','5472','Semester 4','6','B','0'),(122,'B.A. English Language & Literature','2020-2023','FARHANA NAZRIN P A','5473','Semester 4','8.8','A+','0'),(123,'B.A. English Language & Literature','2020-2023','FARZANA SIRAJ','5474','Semester 4','6.8','B+','0'),(124,'B.A. English Language & Literature','2020-2023','JUBAIRIYA A A','5475','Semester 4','5','C','0'),(125,'M. Sc. Botany','2021-2023','HADIYA E A','5089','Semester 1','2.86','B+','2.86'),(126,'M. Sc. Botany','2021-2023','LEKHA K R','5090','Semester 1','3.42','A','3.42'),(127,'B.A. English Language & Literature','2020-2023','MEGHA P K','5476','Semester 4','5.6','B','0'),(128,'B.A. English Language & Literature','2020-2023','MIDHUNA P S','5477','Semester 4','6.2','B','0'),(129,'B.A. English Language & Literature','2020-2023','PARVATHY P','5478','Semester 4','7.2','B+','0'),(130,'B.A. English Language & Literature','2020-2023','SARATH KRISHNA V S','5479','Semester 4','5.2','C','0'),(131,'B.A. English Language & Literature','2020-2023','SOPNALI M N','5480','Semester 4','8.4','A','0'),(132,'B.A. English Language & Literature','2020-2023','SUMAYYA C A','5481','Semester 4','5','C','0'),(133,'B.A. English Language & Literature','2020-2023','ANJANA RAJESH','5482','Semester 4','6.6','B+','0'),(134,'B.A. English Language & Literature','2020-2023','MOHAMMED IRFAN TP','5483','Semester 4','0','FAILED','0'),(135,'M. Sc. Botany','2021-2023','RANIYA K P','5094','Semester 1','4.26','O','4.26'),(137,'M. Sc. Botany','2021-2023','RESHMA.P','5095','Semester 1','4.23','A+','4.23'),(138,'M. Sc. Botany','2021-2023','SHAHINA A S','5096','Semester 1','4.19','A+','4.19'),(139,'M. Sc. Botany','2021-2023','SHERIN SHANA T','5097','Semester 1','4.37','O','4.37'),(140,'M. Sc. Botany','2021-2023','ZULFA MINNA T','5098','Semester 1','3.34','A','3.34'),(141,'M. Sc. Botany','2019-2021','ABNA V.A.','6636','Semester 1','2.87','B+','2.87'),(142,'M. Sc. Botany','2019-2021','ABNA V.A.','6636','Semester 3','2.67','B','2.67'),(143,'M. Sc. Botany','2019-2021','ABNA V.A.','6636','Semester 4','4.12','A+','4.12'),(144,'M. Sc. Botany','2019-2021','ALIYA N.K.','6647','Semester 1','3.43','A','3.43'),(145,'M. Sc. Botany','2019-2021','ALIYA N.K.','6647','Semester 2','3.69','A','3.69'),(146,'M. Sc. Botany','2019-2021','ALIYA N.K.','6647','Semester 3','4.27','O','4.27'),(147,'M. Sc. Botany','2019-2021','ALIYA N.K.','6647','Semester 4','4.12','A+','4.12'),(148,'B.A. English Language & Literature','2019-2022','HAMEEM ABDUL AZEEZ','6036','Semester 1','4.89','PASSED',NULL),(149,NULL,NULL,NULL,'6036','Semester 2','0',NULL,NULL),(150,NULL,NULL,NULL,'6036','Semester 3','5.20','PASSED',NULL),(151,NULL,NULL,NULL,'6036','Semester 4','0','FAILED',NULL),(152,NULL,NULL,NULL,'6036','Semester 5','0','FAILED',NULL),(153,NULL,NULL,NULL,'6036','Semester 6','6.24','PASSED','0'),(154,'M. Sc. Botany','2019-2021','ANILA K.T.','6651','Semester 1','3.55','A','3.55'),(155,'M. Sc. Botany','2019-2021','ANILA K.T.','6651','Semester 2','3.94','A+','3.94'),(156,'M. Sc. Botany','2019-2021','ANILA K.T.','6651','Semester 3','4.33','O','4.33'),(157,'M. Sc. Botany','2019-2021','ANILA K.T.','6651','Semester 4','4.48','O','4.48'),(158,'B.A. English Language & Literature','2019-2022','FARSANA SHAHIN.M.A','6038','Semester 1','6.579','B+',NULL),(159,NULL,NULL,NULL,'6038','Semester 2','5.905','B',NULL),(160,NULL,NULL,NULL,'6038','Semester 3','7.200','B+',NULL),(161,NULL,NULL,NULL,'6038','Semester 4','7.600','A',NULL),(162,NULL,NULL,NULL,'6038','Semester 5','6.52','B+',NULL),(163,NULL,NULL,NULL,'6038','Semester 6','9.143','A+','7.175'),(164,'B.A. English Language & Literature','2019-2022','ARYA.P.A','6039','Semester 1','6.684','B+',NULL),(165,NULL,NULL,NULL,'6039','Semester 2','7.571','A',NULL),(166,NULL,NULL,NULL,'6039','Semester 3','8.000','A',NULL),(167,NULL,NULL,NULL,'6039','Semester 4','8.400','A',NULL),(168,NULL,NULL,NULL,'6039','Semester 5','7.158','B+',NULL),(169,NULL,NULL,NULL,'6039','Semester 6','9.095','A+','7.842'),(170,'B.A. English Language & Literature','2019-2022','NIJIYA.P.A','6040','Semester 1','6.579','B+',NULL),(171,NULL,NULL,NULL,'6040','Semester 2','6.571','B+',NULL),(172,NULL,NULL,NULL,'6040','Semester 3','7.400','B+',NULL),(173,NULL,NULL,NULL,'6040','Semester 4','7.600','A',NULL),(174,NULL,NULL,NULL,'6040','Semester 5','7.526','A',NULL),(175,NULL,NULL,NULL,'6040','Semester 6','8.095','A','7.300'),(176,'B.A. English Language & Literature','2019-2022','ASNA.M.S','6042','Semester 1','6.000','B',NULL),(177,NULL,NULL,NULL,'6042','Semester 2','6.762','B+',NULL),(178,NULL,NULL,NULL,'6042','Semester 3','6.400','B',NULL),(179,NULL,NULL,NULL,'6042','Semester 4','7.000','B+',NULL),(180,NULL,NULL,NULL,'6042','Semester 5','6.000','B',NULL),(181,NULL,NULL,NULL,'6042','Semester 6','8.429','A','6.792'),(182,'M. Sc. Botany','2019-2021','DEEPIKA V.','6655','Semester 1','3.44','A','3.44'),(183,'M. Sc. Botany','2019-2021','DEEPIKA V.','6655','Semester 2','3.91','A+','3.91'),(184,'M. Sc. Botany','2019-2021','DEEPIKA V.','6655','Semester 3','4.34','O','4.34'),(185,'M. Sc. Botany','2019-2021','DEEPIKA V.','6655','Semester 4','4.24','O','4.24'),(187,'M. Sc. Botany','2019-2021','DEVIKA M.ANILKUMAR','6659','Semester 2','3.97','A+','3.97'),(188,'M. Sc. Botany','2019-2021','DEVIKA M.ANILKUMAR','6659','Semester 3','4.30','O','4.30'),(189,'M. Sc. Botany','2019-2021','DEVIKA M.ANILKUMAR','6659','Semester 4','4.40','O','4.40'),(190,'M. Sc. Botany','2019-2021','FIDHA P.','6663','Semester 1','3.40','A','3.40'),(191,'M. Sc. Botany','2019-2021','FIDHA P.','6663','Semester 2','3.59','A','3.59'),(192,'M. Sc. Botany','2019-2021','FIDHA P.','6663','Semester 3','4.64','O','4.64'),(193,'M. Sc. Botany','2019-2021','FIDHA P.','6663','Semester 4','3.88','A+','3.88'),(194,'M. Sc. Botany','2019-2021','GREESHMA M.','6666','Semester 1','3.49','A','3.49'),(195,'M. Sc. Botany','2019-2021','GREESHMA M.','6666','Semester 2','3.81','A+','3.81'),(196,'M. Sc. Botany','2019-2021','GREESHMA M.','6666','Semester 3','4.29','O','4.29'),(197,'M. Sc. Botany','2019-2021','GREESHMA M.','6666','Semester 4','4.28','O','4.28'),(198,'M. Sc. Botany','2019-2021','KAVITHA JOHNY','6670','Semester 2','3.60','A','3.60'),(199,'M. Sc. Botany','2019-2021','KAVITHA JOHNY','6670','Semester 3','4.13','A+','4.13'),(200,'M. Sc. Botany','2019-2021','KAVITHA JOHNY','6670','Semester 4','4.06','A+','4.06'),(201,'M. Sc. Botany','2019-2021','MUFEEDHA K.M.','6671','Semester 1','3.13','B+','3.13'),(202,'M. Sc. Botany','2019-2021','MUFEEDHA K.M.','6671','Semester 2','3.64','A','3.64'),(203,'M. Sc. Botany','2019-2021','MUFEEDHA K.M.','6671','Semester 3','3.93','A+','3.93'),(204,'M. Sc. Botany','2019-2021','MUFEEDHA K.M.','6671','Semester 4','3.90','A+','3.90'),(205,'M. Sc. Botany','2019-2021','MUHSINA P.K.','6674','Semester 1','3.68','A','3.68'),(206,'M. Sc. Botany','2019-2021','MUHSINA P.K.','6674','Semester 2','3.98','A+','3.98'),(207,'M. Sc. Botany','2019-2021','MUHSINA P.K.','6674','Semester 3','4.36','O','4.36'),(208,'M. Sc. Botany','2019-2021','MUHSINA P.K.','6674','Semester 4','4.21','A+','4.21'),(209,'M. Sc. Botany','2019-2021','SHINI C.','6676','Semester 1','3.62','A','3.62'),(211,'M. Sc. Botany','2019-2021','SHINI C.','6676','Semester 2','3.95','A+','3.95'),(212,'M. Sc. Botany','2019-2021','SHINI C.','6676','Semester 3','4','A+','4'),(213,'M. Sc. Botany','2019-2021','SHINI C.','6676','Semester 4','4.44','O','4.44'),(214,'M. Sc. Botany','2019-2021','SIDHARDH  A.S.KUMAR','6677','Semester 2','3.40','A','3.40'),(215,'M. Sc. Botany','2019-2021','SIDHARDH  A.S.KUMAR','6677','Semester 4','3.84','A+','3.84'),(216,'B.A. English Language & Literature','2020-2023','VISHNUPRIYA M R','5510','Semester 4','7.4','B+','0'),(217,'M. Sc. Botany','2019-2021','SUNEERA M.N.','6678','Semester 1','3.43','A','3.43'),(218,'M. Sc. Botany','2019-2021','SUNEERA M.N.','6678','Semester 2','4.09','A+','4.09'),(219,'M. Sc. Botany','2019-2021','SUNEERA M.N.','6678','Semester 3','3.72','A','3.72'),(220,'B.A. English Language & Literature','2020-2023','THANHA V S','5509','Semester 4','8.2','A','0'),(221,'M. Sc. Botany','2019-2021','SUNEERA M.N.','6678','Semester 4','4.24','A+','4.24'),(222,'B.A. English Language & Literature','2020-2023','TESSA JOSE','5508','Semester 4','7.4','B+','0'),(223,'B.A. English Language & Literature','2020-2023','SREEHARI K U','5507','Semester 4','5.4','C','0'),(224,'B.A. English Language & Literature','2020-2023','SHABEELA E H','5505','Semester 4','6.4','B','0'),(225,'M. Sc. Botany','2019-2021','THASNEEMA M.','6679','Semester 1','3.91','A+','3.91'),(226,'M. Sc. Botany','2019-2021','THASNEEMA M.','6679','Semester 2','4.07','A+','4.07'),(227,'M. Sc. Botany','2019-2021','THASNEEMA M.','6679','Semester 3','4.59','O','4.59'),(228,'B.A. English Language & Literature','2020-2023','SMRITHI K S','5506','Semester 4','6.2','B','0'),(229,'B.A. English Language & Literature','2020-2023','SANA','5504','Semester 4','7.4','B+','0'),(230,'B.A. English Language & Literature','2020-2023','SALMA BEEVI K N','5503','Semester 4','6.4','B','0'),(231,'M. Sc. Botany','2019-2021','THASNEEMA M.','6679','Semester 4','4.44','O','4.44'),(232,'B.A. English Language & Literature','2020-2023','SAFA P F','5502','Semester 4','0','FAILED','0'),(233,'B.A. English Language & Literature','2020-2023','RAISA BASHEER','5501','Semester 4','6','B','0'),(234,'B.A. English Language & Literature','2020-2023','MOHAMED ASLAM O N','5500','Semester 4','0','FAILED','0'),(235,'M. Sc. Botany','2019-2021','KAVITHA JOHNY','6670','Semester 1','3.17','B+','3.17'),(236,'B.A. English Language & Literature','2020-2023','MANJIMADAS T M','5499','Semester 4','0','FAILED','0'),(237,'B.A. English Language & Literature','2020-2023','LATHEEDHA NASRIN K M','5498','Semester 4','7.6','A','0'),(238,'B.A. English Language & Literature','2020-2023','KAVYA T T','5497','Semester 4','0','FAILED','0'),(239,'B.A. English Language & Literature','2020-2023','FARHANA NAZRIN P A','5473','Semester 3','8.2','A','0'),(240,'B.A. English Language & Literature','2020-2023','ASMI V H','5472','Semester 4','5.8','B','0'),(241,'B.A. English Language & Literature','2020-2023','AFRA JASIRA','5471','Semester 3','8.2','A','0'),(242,'B.A. English Language & Literature','2020-2023','SHAHANAZ K S','5470','Semester 3','8','A+','0'),(244,'B.A. English Language & Literature','2020-2023','SHABANA K S','5469','Semester 3','5.4','C','0'),(245,'B.A. English Language & Literature','2020-2023','KAULATH SULTHANA PS','5466','Semester 2','7.4','B+','0'),(246,'B.A. English Language & Literature','2020-2023','AYSHA T N','5464','Semester 3','6.8','B+','0'),(247,'B.A. English Language & Literature','2020-2023','NAJA T A','5467','Semester 3','6','B','0'),(248,'B.A. English Language & Literature','2020-2023','SANA MOL M I','5468','Semester 3','6.8','B+','0'),(249,'B.A. English Language & Literature','2020-2023','FARHANA FATHIMA R M','5465','Semester 3','7.2','B+','0'),(250,'B.A. English Language & Literature','2020-2023','FARZANA SIRAJ','5474','Semester 3','6.2','B','0'),(251,'B.A. English Language & Literature','2020-2023','JUBAIRIYA A A','5475','Semester 3','5','C','0'),(252,'B.A. English Language & Literature','2020-2023','MEGHA P K','5476','Semester 3','5','C','0'),(253,'B.A. English Language & Literature','2020-2023','MIDHUNA P S','5477','Semester 3','5.8','B','0'),(254,'B.A. English Language & Literature','2020-2023','PARVATHY P','5478','Semester 3','4.6','C','0'),(255,'B.A. English Language & Literature','2020-2023','SARATH KRISHNA V S','5479','Semester 3','0','PASSED','0'),(256,'B.A. English Language & Literature','2020-2023','SOPNALI M N','5480','Semester 3','7.2','B+','0'),(257,'B.A. English Language & Literature','2020-2023','ANJANA RAJESH','5482','Semester 3','6.8','B+','0'),(258,'B.A. English Language & Literature','2020-2023','MOHAMMED IRFAN TP','5483','Semester 3','0','FAILED','0'),(259,'B.A. English Language & Literature','2019-2022','SANAL KRISHNA.P.S','6043','Semester 1','6.105','B','6.325'),(260,NULL,NULL,NULL,'6043','Semester 2','4.571','C','6.325'),(261,NULL,NULL,NULL,'6043','Semester 3','6.400','B','6.325'),(262,NULL,NULL,NULL,'6043','Semester 4','6.800','B+','6.325'),(263,NULL,NULL,NULL,'6043','Semester 5','6.316','B','6.325'),(264,NULL,NULL,NULL,'6043','Semester 6','7.762','A','6.325'),(265,'B.A. English Language & Literature','2019-2022','FAHAD.P.A','6044','Semester 1','0','FAILED','0'),(266,NULL,NULL,NULL,'6044','Semester 2','0','FAILED','0'),(267,NULL,NULL,NULL,'6044','Semester 3','0','FAILED','0'),(268,NULL,NULL,NULL,'6044','Semester 4','0','FAILED','0'),(269,NULL,NULL,NULL,'6044','Semester 5','0','FAILED','0'),(270,NULL,NULL,NULL,'6044','Semester 6','0','FAILED','0'),(271,'B.A. English Language & Literature','2019-2022','THASNI.P.J','6046','Semester 1','8.421`','A','8.000'),(272,NULL,NULL,NULL,'6046','Semester 2','7.524','A','8.000'),(273,NULL,NULL,NULL,'6046','Semester 3','8.000','A','8.000'),(274,NULL,NULL,NULL,'6046','Semester 4','8.400','A','8.000'),(275,NULL,NULL,NULL,'6046','Semester 5','7.526','A','8.000'),(276,NULL,NULL,NULL,'6046','Semester 6','8.143','A','8.000'),(277,'B.A. English Language & Literature','2019-2022','AKHILA.O.S','6047','Semester 1','7.053','B+','6.975'),(278,NULL,NULL,NULL,'6047','Semester 2','5.190','C','6.975'),(279,NULL,NULL,NULL,'6047','Semester 3','8.000','A','6.975'),(280,NULL,NULL,NULL,'6047','Semester 4','7.200','B+','6.975'),(281,NULL,NULL,NULL,'6047','Semester 5','6.526','B+','6.975'),(282,NULL,NULL,NULL,'6047','Semester 6','7.905','A','6.975'),(283,'B.A. English Language & Literature','2019-2022','SRIYA.T','6048','Semester 1','6.316','B','6.942'),(284,NULL,NULL,NULL,'6048','Semester 2','6.571','B+','6.942'),(285,NULL,NULL,NULL,'6048','Semester 3','6.600','B+','6.942'),(286,NULL,NULL,NULL,'6048','Semester 4','7.400','B+','6.942'),(287,NULL,NULL,NULL,'6048','Semester 5','6.526','B+','6.942'),(288,NULL,NULL,NULL,'6048','Semester 6','8.143','A','6.942'),(289,'B.A. English Language & Literature','2019-2022','DEVADEVAN.A.D','6049','Semester 1','4.95','PASSED','0'),(290,NULL,NULL,NULL,'6049','Semester 2','0','PASSED','0'),(291,NULL,NULL,NULL,'6049','Semester 3','7.20','PASSED','0'),(292,NULL,NULL,NULL,'6049','Semester 4','7.00','PASSED','0'),(293,NULL,NULL,NULL,'6049','Semester 5','6.58','PASSED','0'),(294,NULL,NULL,NULL,'6049','Semester 6','7.33','PASSED','0'),(295,'B.A. English Language & Literature','2019-2022','FAMEELA.M.K','6050','Semester 1','7.421','B+','7.917'),(296,'B.A. English Language & Literature','2019-2022','FAMEELA.M.K','6050','Semester 2','7.048','B+','7.917'),(297,NULL,NULL,NULL,'6050','Semester 3','8.200','A','7.917'),(298,NULL,NULL,NULL,'6050','Semester 4','8.600','A+','7.917'),(299,NULL,NULL,NULL,'6050','Semester 5','7.579','A','7.917'),(300,NULL,NULL,NULL,'6050','Semester 6','8.619','A+','7.917'),(301,'B.A. English Language & Literature','2020-2023','ADHARSH KS','5485','Semester 3','6.2','B','0'),(302,'B.A. English Language & Literature','2020-2023','SUMAYYA C A','5481','Semester 3','4.6','C','0'),(303,'B.A. English Language & Literature','2020-2023','AHLA K I','5486','Semester 3','8','A','0'),(304,'B.A. English Language & Literature','2020-2023','ANNA GRACE','5487','Semester 3','7','B+','0'),(305,'B.A. English Language & Literature','2020-2023','ANSILA U N','5488','Semester 3','5.4','C','0'),(306,'B.A. English Language & Literature','2020-2023','ANUSREE M J','5489','Semester 3','6.4','B','0'),(307,'B.A. English Language & Literature','2020-2023','BAHJA T B','5491','Semester 3','6.6','B+','0'),(308,'B.A. English Language & Literature','2020-2023','GOUTHAVU PRASANNAN V','5492','Semester 3','6.6','B+','0'),(309,'B.A. English Language & Literature','2020-2023','HANNA IBRAHIM','5493','Semester 3','7.2','B+','0'),(310,'B.A. English Language & Literature','2020-2023','APSANA K B','5490','Semester 3','0','FAILED','0'),(311,'B.A. English Language & Literature','2020-2023','AAKHIL C AMEER','5484','Semester 3','0','FAILED','0'),(312,'B.A. English Language & Literature','2020-2023','HASHIDHA HABEEB','5494','Semester 3','5.6','B','0'),(313,'B.A. English Language & Literature','2020-2023','HUDHA PARVEEN N M','5495','Semester 4','6.6','B+','0'),(314,'B.A. English Language & Literature','2020-2023','HUDHA PARVEEN N M','5495','Semester 3','5.4','C','0'),(315,'B.A. English Language & Literature','2020-2023','KAMALIYA K B','5496','Semester 3','6.4','B','0'),(316,'B.A. English Language & Literature','2020-2023','KAVYA T T','5497','Semester 3','5.8','B','0'),(317,'B.A. English Language & Literature','2020-2023','LATHEEDHA NASRIN K M','5498','Semester 3','7','B+','0'),(318,'B.A. English Language & Literature','2020-2023','MANJIMADAS T M','5499','Semester 3','4.8','C','0'),(319,'B.A. English Language & Literature','2020-2023','MOHAMED ASLAM O N','5500','Semester 3','4.6','C','0'),(320,'B.A. English Language & Literature','2020-2023','RAISA BASHEER','5501','Semester 3','6.6','B+','0'),(321,'B.A. English Language & Literature','2020-2023','SAFA P F','5502','Semester 3','5','C','0'),(322,'B.A. English Language & Literature','2020-2023','SALMA BEEVI K N','5503','Semester 3','6.2','B','0'),(323,'B.A. English Language & Literature','2020-2023','SANA','5504','Semester 3','7.8','A','0'),(324,'B.A. English Language & Literature','2020-2023','SHABEELA E H','5505','Semester 3','6.4','B','0'),(325,'B.A. English Language & Literature','2020-2023','SMRITHI K S','5506','Semester 3','5.6','B','0'),(326,'B.A. English Language & Literature','2020-2023','SREEHARI K U','5507','Semester 3','6','B','0'),(327,'B.A. English Language & Literature','2020-2023','TESSA JOSE','5508','Semester 3','7.6','A','0'),(328,'B.A. English Language & Literature','2020-2023','THANHA V S','5509','Semester 3','7.6','A','0'),(329,'B.A. English Language & Literature','2020-2023','VISHNUPRIYA M R','5510','Semester 3','7.4','B+','0'),(330,'B.Sc. Psychology','2019-2022','NOOR MUHAMMED','6245','Semester 5','7.76','A','10'),(331,'B.A. English Language & Literature','2019-2022','MURSHIDA.P','6052','Semester 1','6.105','B','7.067'),(332,NULL,NULL,NULL,'6052','Semester 2','6.381','B','7.067'),(333,NULL,NULL,NULL,'6052','Semester 3','7.000','B+','7.067'),(334,NULL,NULL,NULL,'6052','Semester 4','7.600','A','7.067'),(335,NULL,NULL,NULL,'6052','Semester 5','6.789','B+','7.067'),(336,NULL,NULL,NULL,'6052','Semester 6','8.429','A','7.067'),(337,'B.A. English Language & Literature','2019-2022','SAFREENA.P.M','6055','Semester 1','6.000','B','5.817'),(338,NULL,NULL,NULL,'6055','Semester 2','4.762','C','5.817'),(339,NULL,NULL,NULL,'6055','Semester 3','5.600','B','5.817'),(340,NULL,NULL,NULL,'6055','Semester 4','6.000','B','5.817'),(341,NULL,NULL,NULL,'6055','Semester 5','4.842','C','5.817'),(342,NULL,NULL,NULL,'6055','Semester 6','7.619','A','5.817'),(343,'B.A. English Language & Literature','2019-2022','SAMAH MOHAMED','6056','Semester 1','8.053','A','8.183'),(344,NULL,NULL,NULL,'6056','Semester 2','7.619','A','8.183'),(345,NULL,NULL,NULL,'6056','Semester 3','8.400','A','8.183'),(346,NULL,NULL,NULL,'6056','Semester 4','8.400','A','8.183'),(347,NULL,NULL,NULL,'6056','Semester 5','7.789','A','8.183'),(348,NULL,NULL,NULL,'6056','Semester 6','8.810','A+','8.183'),(349,'B.A. English Language & Literature','2019-2022','SWALIHA.K.A','6058','Semester 1','7.158','B+','7.808'),(350,NULL,NULL,NULL,'6058','Semester 2','7.000','B+','7.808'),(351,NULL,NULL,NULL,'6058','Semester 3','8.000','A','7.808'),(352,NULL,NULL,NULL,'6058','Semester 4','8.200','A','7.808'),(353,NULL,NULL,NULL,'6058','Semester 5','7.737','A','7.808'),(354,NULL,NULL,NULL,'6058','Semester 6','8.714','A+','7.808'),(355,'B.A. English Language & Literature','2019-2022','P.CHITHRALEKHA','6059','Semester 1','6.000','B','7.058'),(356,NULL,NULL,NULL,'6059','Semester 2','6.952','B+','7.058'),(357,NULL,NULL,NULL,'6059','Semester 3','7.600','A','7.058'),(358,NULL,NULL,NULL,'6059','Semester 4','7.200','B+','7.058'),(359,NULL,NULL,NULL,'6059','Semester 5','6.000','B','7.058'),(360,NULL,NULL,NULL,'6059','Semester 6','8.429','A','7.058'),(361,'B.A. English Language & Literature','2019-2022','ADEEB ABDUL RASHEED','6063','Semester 1','5.11','PASSED','NIL'),(362,NULL,NULL,NULL,'6063','Semester 2','4.81','PASSED','NIL'),(363,NULL,NULL,NULL,'6063','Semester 3','5.20','PASSED','NIL'),(364,NULL,NULL,NULL,'6063','Semester 4','NIL','FAILED','NIL'),(365,NULL,NULL,NULL,'6063','Semester 5','NIL','FAILED','NIL'),(366,NULL,NULL,NULL,'6063','Semester 6','6.48','PASSED','NIL'),(367,'B.A. English Language & Literature','2019-2022','AISWARYA.T.J','6064','Semester 1','6.474','B','7.258'),(368,NULL,NULL,NULL,'6064','Semester 2','7.190','B+','7.258'),(369,NULL,NULL,NULL,'6064','Semester 3','8.200','A','7.258'),(370,NULL,NULL,NULL,'6064','Semester 4','7.200','B+','7.258'),(371,NULL,NULL,NULL,'6064','Semester 5','6.526','B+','7.258'),(372,NULL,NULL,NULL,'6064','Semester 6','7.857','A','7.258'),(373,'B.A. English Language & Literature','2019-2022','ANAGHA.C.M','6066','Semester 1','6.26','PASSED','NIL'),(374,NULL,NULL,NULL,'6066','Semester 2','NIL','FAILED','NIL'),(375,NULL,NULL,NULL,'6066','Semester 3','6.80','PASSED','NIL'),(376,NULL,NULL,NULL,'6066','Semester 4','6.80','PASSED','NIL'),(377,NULL,NULL,NULL,'6066','Semester 5','6.16','PASSED','NIL'),(378,NULL,NULL,NULL,'6066','Semester 6','8.00','PASSED','NIL'),(379,'B.A. English Language & Literature','2019-2022','ANJALA ANVAR','6069','Semester 1','8.105','A','8.125'),(380,NULL,NULL,NULL,'6069','Semester 2','8.190','A','8.125'),(381,NULL,NULL,NULL,'6069','Semester 3','8.400','A','8.125'),(382,NULL,NULL,NULL,'6069','Semester 4','8.000','A','8.125'),(383,NULL,NULL,NULL,'6069','Semester 5','7.105','B+','8.125'),(384,NULL,NULL,NULL,'6069','Semester 6','8.857','A+','8.125'),(385,'B.A. English Language & Literature','2019-2022','ANJALI.K.S','6085','Semester 1','8.000','A','8.183'),(386,NULL,NULL,NULL,'6085','Semester 2','8.190','A','8.183'),(387,NULL,NULL,NULL,'6085','Semester 3','8.400','A','8.183'),(388,NULL,NULL,NULL,'6085','Semester 4','8.000','A','8.183'),(389,NULL,NULL,NULL,'6085','Semester 5','7.579','A','8.183'),(390,NULL,NULL,NULL,'6085','Semester 6','8.857','A+','8.183'),(391,'B.A. English Language & Literature','2019-2022','ASNA.T.A','6088','Semester 1','8.211','A','8.958'),(392,NULL,NULL,NULL,'6088','Semester 2','8.571','A+','8.958'),(393,NULL,NULL,NULL,'6088','Semester 3','9.600','O','8.958'),(394,NULL,NULL,NULL,'6088','Semester 4','8.800','A+','8.958'),(395,NULL,NULL,NULL,'6088','Semester 5','9.000','A+','8.958'),(396,NULL,NULL,NULL,'6088','Semester 6','9.524','O','8.958'),(397,'B.A. English Language & Literature','2019-2022','AVYA ANAND DEV','6089','Semester 1','6.895','B+','6.733'),(398,NULL,NULL,NULL,'6089','Semester 2','6.190','B','6.733'),(399,NULL,NULL,NULL,'6089','Semester 3','7.200','B+','6.733'),(400,NULL,NULL,NULL,'6089','Semester 4','6.800','B+','6.733'),(401,NULL,NULL,NULL,'6089','Semester 5','6.368','B','6.733'),(402,NULL,NULL,NULL,'6089','Semester 6','6.952','B+','6.733'),(406,NULL,NULL,NULL,'6061','Semester 1','4.737','C','5.723'),(407,NULL,NULL,NULL,'6061','Semester 2','5.000','C','5.723'),(408,NULL,NULL,NULL,'6061','Semester 3','5.800','B','5.723'),(409,NULL,NULL,NULL,'6061','Semester 4','6.200','B','5.723'),(410,NULL,NULL,NULL,'6061','Semester 5','4.789','C','5.723'),(411,NULL,NULL,NULL,'6061','Semester 6','6.619','B+','5.723'),(412,'B.A. English Language & Literature','2019-2022','ANJALI.T.D','6086','Semester 1','0','FAILED','0'),(413,NULL,NULL,NULL,'6086','Semester 2','0','FAILED','0'),(414,NULL,NULL,NULL,'6086','Semester 3','0','FAILED','0'),(415,NULL,NULL,NULL,'6086','Semester 4','0','FAILED','0'),(416,NULL,NULL,NULL,'6086','Semester 5','0','FAILED','0'),(417,NULL,NULL,NULL,'6086','Semester 6','0','FAILED','0'),(418,'B.A. English Language & Literature','2019-2022','AYSHA SAHLA.V.N','6090','Semester 1','0','FAILED','0'),(419,NULL,NULL,NULL,'6090','Semester 2','5.19','PASSED','0'),(420,NULL,NULL,NULL,'6090','Semester 3','0','FAILED','0'),(421,NULL,NULL,NULL,'6090','Semester 4','5.80','PASSED','0'),(422,NULL,NULL,NULL,'6090','Semester 5','0','FAILED','0'),(423,NULL,NULL,NULL,'6090','Semester 6','0','FAILED','0'),(424,'B.A. English Language & Literature','2019-2022','CHITHRA.K.S','6091','Semester 1','6.316','B','6.658'),(425,NULL,NULL,NULL,'6091','Semester 2','6.381','B','6.658'),(426,NULL,NULL,NULL,'6091','Semester 3','6.600','B+','6.658'),(427,NULL,NULL,NULL,'6091','Semester 4','7.200','B+','6.658'),(428,NULL,NULL,NULL,'6091','Semester 5','5.526','B','6.658'),(429,NULL,NULL,NULL,'6091','Semester 6','7.810','A','6.658'),(430,'B.A. English Language & Literature','2019-2022','FARHANA.P.S','6092','Semester 1','5.737','B','6.925'),(431,NULL,NULL,NULL,'6092','Semester 2','6.190','B','6.925'),(432,NULL,NULL,NULL,'6092','Semester 3','7.800','A','6.925'),(433,NULL,NULL,NULL,'6092','Semester 4','7.000','B+','6.925'),(434,NULL,NULL,NULL,'6092','Semester 5','6.053','B','6.925'),(435,NULL,NULL,NULL,'6092','Semester 6','8.619','A+','6.925'),(436,'B.A. English Language & Literature','2019-2022','FAYAS RAHMAN.K.A','6093','Semester 1','4.53','PASSED','-'),(437,NULL,NULL,NULL,'6093','Semester 2','4.38','PASSED','-'),(438,NULL,NULL,NULL,'6093','Semester 3','4.00','PASSED','-'),(439,NULL,NULL,NULL,'6093','Semester 4','-','FAILED','-'),(440,NULL,NULL,NULL,'6093','Semester 5','-','FAILED','-'),(441,NULL,NULL,NULL,'6093','Semester 6','5.62','PASSED','-'),(442,'B.A. English Language & Literature','2019-2022','MAYA UNNIKRISHNAN.N.U','6110','Semester 1','7.684','A','8.800'),(443,NULL,NULL,NULL,'6110','Semester 2','8.571','A+','8.800'),(444,NULL,NULL,NULL,'6110','Semester 3','9.400','A+','8.800'),(445,NULL,NULL,NULL,'6110','Semester 4','9.200','A+','8.800'),(446,NULL,NULL,NULL,'6110','Semester 5','8.526','A+','8.800'),(447,NULL,NULL,NULL,'6110','Semester 6','9.333','A+','8.800'),(448,'B.A. English Language & Literature','2019-2022','MARY JISNA PERIERA','6108','Semester 1','6.316','B','7.075'),(449,NULL,NULL,NULL,'6108','Semester 2','6.762','B+','7.075'),(450,NULL,NULL,NULL,'6108','Semester 3','7.200','B+','7.075'),(451,NULL,NULL,NULL,'6108','Semester 4','8.000','A','7.075'),(452,NULL,NULL,NULL,'6108','Semester 5','6.000','B','7.075'),(453,NULL,NULL,NULL,'6108','Semester 6','8.048','A','7.075'),(454,'B.A. English Language & Literature','2019-2022','NAFIA MANAF','6111','Semester 1','6.368','B','6.575'),(455,NULL,NULL,NULL,'6111','Semester 2','6.333','B','6.575'),(456,NULL,NULL,NULL,'6111','Semester 3','7.200','B+','6.575'),(457,NULL,NULL,NULL,'6111','Semester 4','6.400','B','6.575'),(458,NULL,NULL,NULL,'6111','Semester 5','5.632','B','6.575'),(459,NULL,NULL,NULL,'6111','Semester 6','7.429','B+','6.575'),(460,'B.A. English Language & Literature','2019-2022','NAJIYA.R.A','6115','Semester 1','6.105','B','6.858'),(461,NULL,NULL,NULL,'6115','Semester 2','6.381','B','6.858'),(462,NULL,NULL,NULL,'6115','Semester 3','7.400','B+','6.858'),(463,NULL,NULL,NULL,'6115','Semester 4','7.200','B+','6.858'),(464,NULL,NULL,NULL,'6115','Semester 5','5.789','B','6.858'),(465,NULL,NULL,NULL,'6115','Semester 6','8.143','A','6.858');
/*!40000 ALTER TABLE `overall_marks` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:22:07
