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
-- Table structure for table `industry_marks`
--

DROP TABLE IF EXISTS `industry_marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `industry_marks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `program` varchar(200) DEFAULT NULL,
  `batch` varchar(200) DEFAULT NULL,
  `stname` varchar(200) DEFAULT NULL,
  `stid` varchar(200) DEFAULT NULL,
  `Semester` varchar(200) DEFAULT NULL,
  `title_industry` varchar(1000) DEFAULT NULL,
  `supervising_teacher` varchar(200) DEFAULT NULL,
  `no_of_days` varchar(200) DEFAULT NULL,
  `name_of_industry_visited` varchar(200) DEFAULT NULL,
  `period` varchar(200) DEFAULT NULL,
  `course_related` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `industry_marks`
--

LOCK TABLES `industry_marks` WRITE;
/*!40000 ALTER TABLE `industry_marks` DISABLE KEYS */;
INSERT INTO `industry_marks` VALUES (1,'B.Sc. Aquaculture','2019-2022','SAWFA.O.A','6493','Semester 6','Visit to K M Fishereis Azhikode','Dr. Kesavan K','K M Fisheries, Seafood Preocessing Plant','1','10/3/2022','Fish Processing Technology and Quality Control'),(2,'B.Sc. Aquaculture','2019-2022','FAMITHA RASHEED','6495','Semester 6','Procedures ina Seafod Processing Plant','Dr. Kesavan K','K M Fisheries, Seafood Processing Plant','1','10/3/2022','Fish Processing Technology and Quality Control'),(5,'B.Sc. Aquaculture','2019-2022','EDNA EDISON','6550','Semester 6','Study of Fish Processing Plant Procedures','Dr. Kesavan K','K M Fisheries Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(6,'B.Sc. Aquaculture','2019-2022','ASNITHA.M','6556','Semester 6','Procedures in a fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(7,'B.Sc. Aquaculture','2019-2022','ARUSHI.T.P','6559','Semester 6','Procedures in a Fish and Shrimp Hatchery','Dr. Kesavan K','Regional Shrimp Hatchery, Azhikode','1','12/3/2022','Hatchery Technology of Aquatic Organisms'),(8,'M. Sc. Botany','2019-2021','ADILA K.','6643','Semester 1','ALGAL COLLECTION','Dr.NASEER','KOLLAM','1','2019 NOVEMBER 15','PHYCOLOGY ,BRYOLOGY,PTERIDOLOGY AND GYMNOSPERMS'),(9,'B.Sc. Aquaculture','2019-2022','APARNA.K.A','6561','Semester 6','Procedures in Fish Processing Plants','Dr. Kesavan K','KM Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(10,'B.Sc. Aquaculture','2019-2022','ABHISHA.K','6565','Semester 6','Procedures in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(11,'B.Sc. Aquaculture','2019-2022','AAGNA','6567','Semester 6','Activities in Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Techonogy and Quality Control'),(12,'B.Sc. Aquaculture','2019-2022','SHAMEEM AYYAPPAN KANDATHIL','6569','Semester 6','Activities in Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(13,'B.Sc. Aquaculture','2019-2022','ANSHIN PAUL','6591','Semester 6','Procedures in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and quality Control'),(14,'B.Sc. Aquaculture','2019-2022','AYSHA RISHANA. A. K','6593','Semester 6','Procedures in A Fish Processing Plant','Dr. Kesavan K','K M Fisheries Azhikode','1','10/3/2022','Fish Processing and Quality Control'),(15,'B.Sc. Aquaculture','2019-2022','IRFANA. C S','6594','Semester 6','Procedures in A Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/22','Fish Processing Technology and Quality Control'),(16,'B.Sc. Aquaculture','2019-2022','KRIDHU PRASAD','6595','Semester 6','Processes in Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(17,'B.Sc. Aquaculture','2019-2022','MOHAMMED NASEEH','6607','Semester 6','Activities in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(18,'B.Sc. Aquaculture','2019-2022','HENNA. V. K','6608','Semester 6','Activities in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(19,'B.Sc. Aquaculture','2019-2022','AYSHA. A. F','6609','Semester 6','Procedures in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(20,'B.Sc. Aquaculture','2019-2022','SARA JOHNY','6611','Semester 6','Processes in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(21,'B.Sc. Aquaculture','2019-2022','NEJMA V A','6615','Semester 6','Actvities in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(22,'B.Sc. Aquaculture','2019-2022','SAHADANATH','6612','Semester 6','Actvities in a Fish Processing Plant','DSr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(23,'B.Sc. Aquaculture','2019-2022','NIVED JOSHY','6616','Semester 6','Activites in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(24,'B.Sc. Aquaculture','2019-2022','SHINSIYA T A','6618','Semester 6','Procedures in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(25,'B.Sc. Aquaculture','2019-2022','SISIRA V','6619','Semester 6','Activities in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(26,'B.Sc. Aquaculture','2019-2022','SUNISHA K S','6620','Semester 6','Procedures in a Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(27,'B.Sc. Aquaculture','2019-2022','SWETHA SASIKUMAR','6714','Semester 6','Activities ina Fish Processing Plant','Dr. Kesavan K','K M Fisheries, Azhikode','1','10/3/2022','Fish Processing Technology and Quality Control'),(29,'M. Sc. Botany','2021-2023','AFITHA T.H','5084','Semester 1','BRYOPHYTES,PTERIDOPHYTES, GYMNOSPERM  COLLECTION','Dr.K.H.AMITHA BACHAN','MUNNAR,IDUKKI','3','2022 APRIL 23,24,25','PHYCOLOGY, BRYOLOGY,PTERIDOLOGY AND GYMNOSPERM.'),(30,'M. Sc. Botany','2021-2023','AFITHA T.H','5084','Semester 2','ECOLOGICAL SENSITIVE AREA VISIT','Dr.K.H.AMITHA BACHAN','3','MUNNAR,IDUKKI','2022 APRIL 23,24,25','PLANT ECOLOGY, CONSERVATION BIOLOGY,PHYTOGEOGRAPHY AND FOREST BOTANY'),(31,'M. Sc. Botany','2021-2023','AFITHA T.H','5084','Semester 1','ALGAL COLLECTION','Dr,GIRIJA T.P.,Dr.JISHA  K.C.','THIKKODI BEACH ,KOZHIKODE','3','SEPTEMBER 28,2022','PHYCOLOGY, BRYOLOGY,PTERIDOLOGY AND GYMNOSPERM.'),(32,'M. Sc. Botany','2021-2023','APARNA PUSHPAN','5085','Semester 1','ALGAL COLLECTION','Dr,GIRIJA T.P.,Dr.JISHA  K.C.','THIKKODI BEACH ,KOZHIKODE','1','SEPTEMBER 28,2022','PHYCOLOGY, BRYOLOGY,PTERIDOLOGY AND GYMNOSPERM.'),(33,'M. Sc. Botany','2021-2023','APARNA PUSHPAN','5085','Semester 1','PHYCOLOGY, BRYOLOGY,PTERIDOLOGY AND GYMNOSPERM.','Dr.K.H.AMITHA BACHAN','3','MUNNAR,IDUKKI','2022 APRIL 23,24,25','PHYCOLOGY, BRYOLOGY,PTERIDOLOGY AND GYMNOSPERM.'),(34,'M. Sc. Botany','2021-2023','APARNA PUSHPAN','5085','Semester 2','ECOLOGICAL SENSITIVE AREA VISIT','Dr.K.H.AMITHA BACHAN','3','MUNNAR,IDUKKI','2022 APRIL 23,24,25','PLANT ECOLOGY, CONSERVATION BIOLOGY,PHYTOGEOGRAPHY AND FOREST BOTANY'),(35,'M. Sc. Botany','2021-2023','ARYA SATHYAN','5087','Semester 1','ALGAL COLLECTION','Dr,GIRIJA T.P.,Dr.JISHA  K.C.','THIKKODI BEACH ,KOZHIKODE','1','SEPTEMBER 28,2022','PHYCOLOGY, BRYOLOGY,PTERIDOLOGY AND GYMNOSPERM.'),(36,'M. Sc. Botany','2021-2023','ARYA SATHYAN','5087','Semester 1','BRYOPHYTES,PTERIDOPHYTES, GYMNOSPERM  COLLECTION','Dr.K.H.AMITHA BACHAN','3','MUNNAR,IDUKKI','2022 APRIL 23,24,25','PHYCOLOGY, BRYOLOGY,PTERIDOLOGY AND GYMNOSPERM.'),(37,'M. Sc. Botany','2021-2023','ARYA SATHYAN','5087','Semester 2','ECOLOGICAL SENSITIVE AREA VISIT','Dr.K.H.AMITHA BACHAN','3','MUNNAR,IDUKKI','2022 APRIL 23,24,25','PLANT ECOLOGY, CONSERVATION BIOLOGY,PHYTOGEOGRAPHY AND FOREST BOTANY'),(38,'M. Sc. Botany','2021-2023','ARYA DEVADAS M','5086','Semester 1','ALGAL COLLECTION','Dr,GIRIJA T.P.,Dr.JISHA  K.C.','THIKKODI BEACH ,KOZHIKODE','1','SEPTEMBER 28,2022','PHYCOLOGY, BRYOLOGY,PTERIDOLOGY AND GYMNOSPERM'),(39,'B.A. English Language & Literature','2020-2023','FARHANA NAZRIN P A','5473','Semester 6','Celebrity Culture in Priyanka Chopra\'s Unfinished and Michelle Obama\'s Becoming','Dr. Amitha P Mani',NULL,NULL,NULL,NULL),(40,'B.Voc. Tourism & Hospitality Management','2021-2024','ADHIL K S','4686','Semester 1','Destination Visit and Report– I; Field Study','Aneesh K','AGRA – GWALIOR – JHANSI – ORCHHA – PANNA – RANEH – KHAJURAHO','9',NULL,'Destination Visit and Report– I; Field Study');
/*!40000 ALTER TABLE `industry_marks` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:21:22
