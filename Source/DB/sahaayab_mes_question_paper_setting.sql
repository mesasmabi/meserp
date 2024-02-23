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
-- Table structure for table `question_paper_setting`
--

DROP TABLE IF EXISTS `question_paper_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `question_paper_setting` (
  `id` int NOT NULL AUTO_INCREMENT,
  `faculty_id` int DEFAULT NULL,
  `name_of_paper` varchar(200) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `question_paper_setting`
--

LOCK TABLES `question_paper_setting` WRITE;
/*!40000 ALTER TABLE `question_paper_setting` DISABLE KEYS */;
INSERT INTO `question_paper_setting` VALUES (2,3,'test','test','1234','Semester 1','UG','test','University of Calicut','2023-02-09','2023-02-09','Member','National','1','2023-02-22 07:31:35',''),(3,16,'A11: BIODIVERSITY -SCOPE AND RELEVANCE','B.Sc. AQUACULTURE','2022','Semester 3','UG','UNIVERSITY OF CALICUT','University of Calicut','2022-05-17','2022-05-17','Member','University','1','2023-02-22 13:31:56','1677072716.pdf'),(4,16,'AQC5B12-  BREEDING AND REARING OF AQUARIUM FISHES','B.Sc. AQUACULTURE','2022','Semester 5','UG','UNIVERSITY OF CALICUT','University of Calicut','2022-05-17','2022-05-17','Member','University','1','2023-02-22 13:35:39','1677072798.pdf'),(5,16,'AQC4B07 - BRACKISH WATER AQUACULTURE AND MARICULTURE','B.Sc. AQUACULTURE','2022','Semester 4','UG','UNIVERSITY OF CALICUT','University of Calicut','2022-05-18','2022-05-18','Member','University','1','2023-02-22 13:34:58','1677072898.pdf'),(6,16,'AQC6B24 (E01) - FISH BIOCHEMISTRY AND NUTRITION','B.Sc. AQUACULTURE','2022','Semester 6','UG','UNIVERSITY OF CALICUT','University of Calicut','2022-05-18','2022-05-18','Member','University','1','2023-02-22 13:37:17','1677073037.pdf'),(7,16,'AQC6B17 - FISH GENETICS, BIOTECHNOLOGY AND BIOINFORMATICS','B.Sc. AQUACULTURE','2022','Semester 6','UG','UNIVERSITY OF CALICUT','University of Calicut','2022-05-19','2022-05-19','Member','University','1','2023-02-22 13:38:36','1677073116.pdf'),(8,16,'AQC5B09 - HATCHERY TECHNOLOGY OF AQUATIC ORGANISMS','B.Sc. AQUACULTURE','2022','Semester 5','UG','UNIVERSITY OF CALICUT','University of Calicut','2022-05-22','2022-05-22','Member','University','1','2023-02-22 13:39:51','1677073191.pdf'),(9,187,'ABOT4B04T-PHYCOLOGY, BRYOLOGY,     PTERIDOLOGY','B.Sc Botany','March 2019','Semester 4','UG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2019-01-17','2019-01-17','Member','University','1','2023-02-26 16:02:22','1677427342.pdf'),(11,187,'ABOT3C03T-MORPHOLOGY, SYSEMATIC BOTANY, PLANT BREEDING & HORTICULTURE','B.Sc Botany','November 2019','Semester 3','UG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2019-09-28','2019-09-28','Member','University','1','2023-02-26 16:07:48','1677427668.pdf'),(12,187,'ABOT3C03T-MORPHOLOGY, SYSEMATIC    BOTANY, PLANT BREEDING & HORTICULTURE','B.Sc Botany','October 2018','Semester 3','UG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2018-09-07','2018-09-07','Member','University','1','2023-02-26 16:11:21','1677427881.pdf'),(13,187,'ABOT6B10T-GENETICS AND PLANT BREEDING','B.Sc Botany','April 2020','Semester 6','UG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2020-01-06','2020-01-06','Member','University','1','2023-02-26 16:14:52','1677428092.pdf'),(14,187,'RESEARCH METHODOLOGY AND MICRO      TECHNIQUE- (ABOT2B02T)','B.Sc Botany','May 2018','Semester 2','UG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2018-04-06','2018-04-06','Member','University','1','2023-02-26 16:32:25','1677429145.pdf'),(15,187,'FBOT1C03-ANGIOSPERM ANATOMY, ANGIOSPERM EMBRYOLOGY, PALYNOLOGY AND LAB TECHNIQUES','M.Sc Botany','November 2020','Semester 1','PG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2021-02-04','2021-02-04','Member','University','1','2023-02-26 16:36:12','1677429372.pdf'),(16,187,'CC19PBOT3C13 - Biotechnology and Bioinformatics','M.Sc Botany','November 2021','Semester 3','PG','Christ College, Irinjalakkuda','University of Calicut','2021-11-01','2021-11-01','Member','University','1','2023-02-26 16:39:37','1677429577.pdf'),(17,187,'CC15PBO2C06 - Cytogenetics,  Genetics, Biostatistics, Plant Breeding and Evolution','M.Sc Botany','May 2018','Semester 2','PG','Christ College, Irinjalakkuda','University of Calicut','2018-04-20','2018-04-20','Member','International','1','2023-02-26 16:43:20','1677429800.pdf'),(18,187,'GBOT6B12T-PLANT BIOCHEMISTRY','B.Sc Botany','April 2022','Semester 6','UG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2022-02-11','2022-02-11','Member','University','1','2023-02-26 16:46:49','1677430009.pdf'),(19,187,'4C04BOT/PLS – Angiosperm Anatomy and Physiology','B.Sc Botany','December 2019','Semester 4','UG','Kannur University','Other within State','2019-12-22','2019-12-22','Member','University','1','2023-02-26 16:56:39','1677430599.pdf'),(20,187,'GBOT5B07T - ANGIOSPERM MORPHOLOGY & SYSTEMATICS','B.Sc Botany','November 2022','Semester 5',NULL,'St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2022-09-03','2022-09-03','Member','University','1','2023-02-26 17:18:05','1677431885.pdf'),(21,187,'GBOT5B07T - ANGIOSPERM MORPHOLOGY & SYSTEMATICS','B.Sc Botany','November 2022','Semester 5',NULL,'St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2022-09-03','2022-09-03','Member','University','1','2023-02-26 17:18:26','1677431906.pdf'),(22,187,'GBOT5D02T - APPLIED BOTANY','B.Sc Botany','November 2022','Semester 5','UG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2022-09-03','2022-09-03','Member','University','1','2023-02-26 17:21:32','1677432092.pdf'),(23,187,'FBOT1C01-PHYCOLOGY, BRYOLOGY, PTERIDOLOGY AND GYMNOSPERMS','M.Sc Botany','November 2022','Semester 1','PG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2022-10-28','2022-10-28','Member','University','1','2023-02-26 17:24:29','1677432269.pdf'),(24,187,'FBOT1C01-PHYCOLOGY, BRYOLOGY, PTERIDOLOGY AND GYMNOSPERMS','M.Sc Botany','November 2022','Semester 1','PG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2022-10-28','2022-10-28','Member','University','1','2023-02-26 17:24:40','1677432280.pdf'),(25,187,'ABOT6B11T-PLANT PHYSIOLOGY AND METABOLISM','B.Sc Botany','April 2023','Semester 6','UG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2023-01-31','2023-01-31','Member','University','1','2023-02-26 17:27:11','1677432431.pdf'),(26,188,'Literary Criticism and Theory','MA English Degree','2020','Semester 3','PG','Christ College, Irinjalakuda','Other within State','2020-12-24','2020-12-24','Member','District','1','2023-02-27 16:48:28','1677516508.pdf'),(27,188,'European Fiction in Translation','Third Semester MA Degree English','2021','Semester 3','PG','Christ College, Irinjalakuda','Other within State','2021-11-01','2021-11-01','Member','State','1','2023-02-27 17:03:19','1677517399.pdf'),(28,188,'Malayalam Literature in English Translation','MA English','2021','Semester 4','PG','Christ College, Irinjalakuda','Other within State','2021-03-25','2021-03-25','Member','','1','2023-02-27 17:05:41','1677517541.pdf'),(29,188,'Malayalam Literature in English Translation','MA English Degree','2022','Semester 4','PG','Christ College, Irinjalakuda','Other within State','2022-03-08','2022-03-08','Member','District','1','2023-02-27 17:08:09','1677517689.pdf'),(32,91,'Python Programming','BCA','2022','Semester 3','UG','University of Calicut','University of Calicut','2022-05-10','2022-05-10','Member','University','1','2023-03-22 05:12:49',''),(33,77,'Computer oriented numerical and statistical methods','BCA','2022','Semester 3','UG','University of Calicut','University of Calicut','2022-05-10','2022-05-10','Member','University','1','2023-03-22 05:31:24',''),(34,31,'Indian Poetics: Theories and Texts','MA English IV semester  August 2022','2022','Semester 4','PG','Mar Athanasius College, Kothamangalam','Other within State',NULL,NULL,NULL,'State','1','2023-03-25 05:30:41',''),(35,31,'Post Colonial Poetry','MA English IV semester  August 2022','2022','Semester 4','PG','Mar Athanasius College, Kothamangalam','Other within State',NULL,NULL,NULL,'','1','2023-03-25 05:31:42',''),(36,31,'Signatures:Expressing the Self','BA English III Semester','2022','Semester 3','UG','Christ College, Iringalakuda','University of Calicut',NULL,NULL,NULL,'','1','2023-03-25 05:35:14',''),(37,31,'Writing for Media, Kannur University','MA English','2022','Semester 2','PG','Kannur University','Other within State',NULL,NULL,NULL,'','1','2023-03-25 05:37:31',''),(38,6,'BOT1B01T Angiosperm Anatomy, Reproductive  Botany & Palynology','BSC BOTANY','2022','Semester 1','UG','Carmel College (Autonomous), Mala','University of Calicut','2022-12-21','2022-12-21','Member','University','1','2023-03-26 11:53:10',''),(39,160,'Culture of Crustaceans, sea weeds and fisheries technology','MSc Aquaculture and Fish Processing','2022-2023','Semester 3','UG','Sacred Heart College, Thevara, Kochi','Other within State','2022-11-22','2022-11-22','Member','National','1','2023-03-29 09:04:31',''),(40,187,'FBOT2C05- GENETICS BIOSTATISTICS PLANT BREEDING AND EVOLUTION','M.Sc Botany','April 2023','Semester 2','PG','St. Joseph\'s College, Devagiri, Calicut','University of Calicut','2023-04-04','2023-04-19','Member','University','1','2023-04-18 06:32:57','1681799577.pdf'),(41,229,'Tourism Resources & Tour Guiding','B. Voc Tourism & Hospitality Management','2022','Semester 2','UG','Calicut University','University of Calicut',NULL,NULL,NULL,'University','1','2023-04-21 15:40:38','1682091638.pdf'),(42,229,'Introduction to Tourism & Hospitality Business','B. Voc Tourism & Hospitality Management','2022','Semester 1','UG','Calicut University','University of Calicut',NULL,NULL,NULL,'University','1','2023-04-29 06:33:08','1682749988.pdf'),(43,229,'Airport & Cargo Management','B. Voc Tourism & Hospitality Management','2022','Semester 3','UG','Calicut University','University of Calicut',NULL,NULL,NULL,'University','1','2023-04-29 06:41:39','1682750499.pdf'),(44,229,'Professional Business Skills','B. Voc Tourism & Hospitality Management','2022','Semester 3','UG','Calicut University','University of Calicut',NULL,NULL,NULL,'University','1','2023-04-29 06:44:49','1682750689.pdf'),(45,8,'Elective','MSc Botany','2019','Semester 4','PG','St Joseph\'s College, Devagiri','University of Calicut','2019-01-15','2019-01-15','Member','State','1','2023-04-30 14:36:18',''),(46,8,'Mycology and Plant Pathology','MSc Botany','2022','Semester 1','PG','Maharajas College, Ernakulam','Other within State','2022-08-31','2022-08-31','Member','State','1','2023-04-30 14:38:22',''),(47,8,'Elective','BSc Botany','2018','Semester 6','UG','Maharajas College, Ernakulam','Other within State','2018-12-18','2018-12-18','Member','State','1','2023-04-30 14:40:42',''),(48,8,'Mycology and Plant Pathology','MSc Botany','2019','Semester 1','PG','St. Joseph\'s College, Irinjalakkuda','University of Calicut','2019-09-23','2019-09-23','Member','State','1','2023-04-30 14:42:24',''),(49,8,'EMBRYOLOGY, PALYNOLOGY, ECONOMIC BOTANY, ETHANOBOTANY & HORTICULTURE','BSc Botany','2018','Semester 5','UG','St. Joseph\'s College, Irinjalakkuda','University of Calicut','2018-06-29','2018-06-29','Member','State','1','2023-04-30 14:44:44',''),(50,8,'Cell Biology, Molecular Biology, Biophysics','MSc Botany','2023','Semester 2','PG','St Joseph\'s College, Devagiri','University of Calicut','2023-04-04','2023-04-04','Member','State','1','2023-04-30 14:46:15',''),(51,196,'SDC3TH11 HOTEL INDUSTRY MANAGEMENT','B.Voc TOURISM & HOSPITALITY  MANAGEMENT','2022','Semester 3','UG','CALICUT UNIVERSITY','University of Calicut',NULL,NULL,NULL,'','1','2023-05-05 07:34:51','1683272091.pdf'),(52,196,'SDC3TH12 FRONT OFFICE MANAGEMENT THEORY','B.Voc TOURISM & HOSPITALITY  MANAGEMENT','2023','Semester 3','UG','CALICUT UNIVERSITY','University of Calicut',NULL,NULL,NULL,'','1','2023-05-05 07:54:36','1683273276.pdf'),(53,196,'A11 PROFESSIONAL BUSINESS SKILLS','B.Voc TOURISM & HOSPITALITY  MANAGEMENT','2023','Semester 3','UG','CALICUT UNIVERSITY','University of Calicut',NULL,NULL,NULL,'','1','2023-05-05 09:54:44','1683280484.pdf'),(54,20,'KUFOS _ MSc. Food and Nutrition','KUFOS _ MSc. Food and Nutrition','2023','Semester 4','PG','KUFOS','Other within State','2023-06-10','2023-06-10','Member','State','1','2023-09-24 16:39:23','');
/*!40000 ALTER TABLE `question_paper_setting` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:25:03
