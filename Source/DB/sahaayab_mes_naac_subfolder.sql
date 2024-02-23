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
-- Table structure for table `naac_subfolder`
--

DROP TABLE IF EXISTS `naac_subfolder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `naac_subfolder` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parentid` int DEFAULT NULL,
  `subfoldertitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=152 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naac_subfolder`
--

LOCK TABLES `naac_subfolder` WRITE;
/*!40000 ALTER TABLE `naac_subfolder` DISABLE KEYS */;
INSERT INTO `naac_subfolder` VALUES (1,1,'1.1.1 Effective Curriculum Planning and delivery (QLM)'),(2,1,'1.1.2 Academic Calendar and CIE'),(3,1,'1.1.3 Teacher participation in curriculum development'),(4,2,'1.2.2 Number of Add on, Certificate, Value added programs'),(5,2,'1.2.3 Number of students enrolled in Certificate, Add-on course'),(6,2,'1.2.1 - Number of Programmes in CBCS, elective course'),(7,3,'1.3.2 Experiential learning through project, workfield'),(8,3,'1.3.3 No of students undertaking project, internship, Fieldwork'),(9,3,'1.3.1 Cross cutting Issues 3'),(10,4,'1.4.2 - Classification of Feedback process'),(11,4,'1.4.1 Feedback on academic performance and ambience'),(12,5,'2.1.2 Percentage of filled seat against reserved category'),(13,5,'2.1.1 Total Enrolment Percentage'),(14,6,'2.2.1 Programmes for advanced learners and slow learners'),(15,6,'2.2.2 Student full-time teacher ratio'),(16,7,'2.3.3 Ratio of mentor to students'),(17,7,'2.3.2 Teachers use ICT enabled tools'),(18,7,'2.3.1 Student centric method such as experiential learning (QLM)'),(19,8,'2.4.3 No of years of teaching experience of full-time teachers in the institution'),(20,8,'2.4.2 Full-time teachers with NET & PhD'),(21,8,'2.4.1 Full-time teachers against sanctioned post'),(22,9,'2.5.2 Mechanism to deal with internal exam related grievances'),(23,9,'2.5.1 Mechanism of internal assessment (QLM)'),(24,10,'2.6.3 Pass percentage of students'),(25,10,'2.6.2 Attainment of PO and CO are evaluated (QLM)'),(26,10,'2.6.1 PO and CO statement and Website display (QLM)'),(27,12,'3.1.3 - Number of departments having Research projects funded by government'),(28,12,'3.1.3 - Number of departments having Research projects funded by government'),(29,12,'3.1.3 - Number of departments having Research projects funded by government'),(30,13,'3.2.2 Workshop, Seminar, Conference on RM, IPR & ED'),(31,13,'3.2.1 Innovation ecosystem & transfer of knowledge (QLM)'),(32,14,'3.3.1 - No of Ph.Ds registered per eligible teacher during the year'),(33,14,'3.3.2 No of research papers in UGC Journal per teacher'),(34,14,'3.3.3 No of Edited books and chapters with ISBN per teacher'),(35,15,'3.4.4 - Number of students participating in extension activities'),(36,15,'3.4.3 Programme by NSS, NCC - Swachh Bharat, AIDS awareness, Gender issues'),(37,15,'3.4.2 Award or Recognition for extension activities (QLM)'),(38,15,'3.4.1 Extension activities in the neighborhood community (QLM)'),(39,16,'3.5.2 - Number of functional MoUs with institutions'),(40,16,'3.5.1 No of collaborative activities faculty and student exchange'),(41,17,'4.1.4 Expenditure for infrastructure augmentation'),(42,17,'4.1.2 - Facilities for cultural activities, sports, games,yoga'),(43,17,'4.1.3 - Classrooms and seminar halls with ICT-enabled facilities'),(44,17,'4.1.1 Classroom, Lab, etc'),(45,18,'4.2.4 - Number per day usage of library by teachers and students'),(46,18,'4.2.4 - Number per day usage of library by teachers and students'),(47,18,'4.2.2 - Subscription of e-resources'),(48,18,'4.2.1 ILMS'),(49,19,'4.3.2 - Number of Computers'),(50,19,'4.3.3 - Bandwidth of internet connection'),(51,19,'4.3.1 Update IT facility including WiFi'),(52,20,'4.4.1 Expenditure for maintenance of infrastructure'),(53,20,'4.4.1 Expenditure for maintenance of infrastructure'),(54,21,'5.1.4 Students benefited for competitive exam'),(55,21,'5.1.2 - No of students benefitted by scholarships, by institution'),(56,21,'5.1.1. Students benefited by scholarship, Freeships'),(57,21,'5.1.5 Students grievances handling system'),(58,21,'5.1.3 Capacity building and skills enhancement initiatives'),(59,22,'5.2.3 Students qualifying competitive exams JAM, GATE, GMAT'),(60,22,'5.2.2 - Number of students progressing to higher education during the year'),(61,22,'5.2.1 - Number of placement of outgoing students during the year'),(62,23,'5.3.2 Students’ Participation in Co-curricular aspects'),(63,23,'5.3.1 Awards for sports, cultural activities'),(64,23,'5.3.3 Sports and cultural programs organised'),(65,24,'5.4.2 Alumni contribution in Lakhs'),(66,24,'5.4.1 Alumni contribution to the development of institution (QLM)'),(67,25,'6.1.2 - The effective leadership in various institutional practices'),(68,25,'6.1.1. The governance and leadership in accordance with vision and mission (QLM)'),(69,26,'6.2.1 - The institutional Strategic, perspective plan'),(70,26,'6.2.3 Implementation of e-governance'),(71,26,'6.2.2 The functioning of the institutional bodies (QLM)'),(72,27,'6.3.1 - Effective welfare measures for teaching and non-teaching staff'),(73,27,'6.3.5 Performance appraisal system for TS & NTS (QLM)'),(74,27,'6.3.2 Teachers provided with financial support'),(75,27,'6.3.3 TS & TNS participation in Admin training'),(76,27,'6.3.4 - No of teachers undergoing online, face-to-face FDP'),(77,28,'6.4.2 - Funds received from non-government bodies, individuals'),(78,28,'6.4.1 - Internal and external financial audits'),(79,28,'6.4.3 Strategies for mobilization and optimal utilization of Fund (QLM)'),(80,29,'6.5.2 - Review of teaching learning process, structures etc'),(81,29,'6.5.3 Quality assurance initiative of the institution'),(82,29,'6.5.1 IQAC Quality Enhancement strategies (QLM)'),(83,30,'7.1.6 - Quality audits on environment and energy'),(84,30,'7.1.5 Green campus initiatives'),(85,30,'7.1.7 Build disabled-friendly, barrier-free environment'),(86,30,'7.1.9 Constitutional obligations, values, rights, duties'),(87,30,'7.1.10 Code of conduct for students, teachers, etc'),(88,30,'7.1.11 National and international commemorative day'),(89,30,'7.1.4 - Water conservation'),(90,30,'7.1.3 Biomedical waste management, E-waste management'),(91,30,'7.1.8 Cultural, regional, linguistic, communal socioeconomic'),(92,30,'7.1.2 Alternative source of energy'),(93,30,'7.1.1 Promotion of gender equity, day celebrations'),(94,33,'1.1.1 Effective Curriculum Planning and delivery (QLM)'),(95,34,'1.2.2 Percentage of students enrolled in Certificate, Add-on course'),(96,34,'1.2.1 Number of Add on, Certificate, Value added programs'),(97,35,'1.3.2 Percentage of students undertaking project, internship, Fieldwork'),(98,35,'1.3.1 Cross cutting Issues'),(99,36,'1.4.1 Feedback on academic performance and ambience'),(100,37,'2.1.2 Percentage of filled seat against reserved category'),(101,37,'2.1.1 Total Enrolment Percentage'),(102,38,'2.2.1 Student full-time teacher ratio'),(103,39,'2.3.1 student centric method such as experiential learning (QLM)'),(104,40,'2.4.2 Full time teachers with NET & Phd'),(105,40,'2.4.1 Full-time teachers against sanctioned post'),(106,41,'2.5.1 Mechanism of internal & external assessment (QLM)'),(107,42,'2.6.3 Pass percentage of students'),(108,42,'2.6.2 Attainment of PO and CO are evaluated (QLM)'),(109,42,'2.6.1 PO and CO statement and Website display (QLM)'),(110,43,'2.7.1 online student satisfaction survey'),(111,44,'3.1.1 Grants received from govt, NGA for research work'),(112,45,'3.2.2 Workshop, Seminar, Conference on RM, IPR & ED'),(113,45,'3.2.1 Innovation ecosystem & transfer of knowledge (QLM)'),(114,46,'3.3.2 No of Edited books and chapters with ISBN per teacher'),(115,46,'3.3.1 No of research papers in UGC Journal per teacher'),(116,47,'3.4.3 Programme by NSS, NCC - Swachh Bharat, AIDS awareness, Gender issues'),(117,47,'3.4.2 Award or Recognition for extension activities (QLM)'),(118,47,'3.4.1 Extension activities in the neighborhood community (QLM)'),(119,48,'3.5.1 MoUs for faculty and student exchange'),(120,49,'4.1.2 Expenditure for infrastructure augmentation'),(121,49,'4.1.1 Classroom, Lab, ICT infrastructure etc. (QLM)'),(122,50,'4.2.1 ILMS, E Resources Amount spend (QLM)'),(123,51,'4.3.2 Student-computer ratio'),(124,51,'4.3.1 Update IT facility and bandwidth for internet connection (QLM)'),(125,52,'4.4.1 Expenditure for maintenance of infrastructure'),(126,53,'5.1.4 Students grievances handling system'),(127,53,'5.1.3 Students benefited for competitive exam'),(128,53,'5.1.2 Capacity building and skills enhancement initiatives'),(129,53,'5.1.1 Students benefited by scholarship, Freeships'),(130,54,'5.2.2 Students qualifying competitive exams JAM, GATE, GMAT'),(131,54,'5.2.1 Progression to higher education & Employment'),(132,55,'5.3.2 Sports and cultural programs organised'),(133,55,'5.3.1 Awards for sports, cultural activities'),(134,56,'5.4.1 Alumni contribution to the development of institution (QLM)'),(135,57,'6.1.1 The governance and leadership in accordance with vision and mission (QLM)'),(136,58,'6.2.2 Implementation of e-governance'),(137,58,'6.2.1 The functioning of the institutional bodies (QLM)'),(140,59,'6.3.3 TS & TNS participation in FDP, Admin training'),(141,59,'6.3.2 Teachers provided with financial support'),(142,59,'6.3.1 Performance appraisal system for TS & NTS (QLM)'),(143,60,'6.4.1 Strategies for mobilization and optimal utilization of Fund (QLM)'),(144,61,'6.5.2 Quality assurance initiative of the institution'),(145,61,'6.5.1 IQAC Quality Enhancement strategies (QLM)'),(146,62,'7.1.4 Inclusion, Situatedness, Human values & Professional ethics (QLM)'),(147,62,'7.1.3 Green audit, energy audit'),(148,62,'7.1.2 Energy conservation, green campus initiative'),(149,62,'7.1.1 Promotion of gender equity, day celebrations'),(150,63,'7.2.1 Best practices any two (QLM)'),(151,64,'7.3.1 Institutional distinctiveness (QLM)');
/*!40000 ALTER TABLE `naac_subfolder` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:24:19
