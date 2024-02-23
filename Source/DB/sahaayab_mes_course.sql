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
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `course` (
  `id` int NOT NULL AUTO_INCREMENT,
  `course_type` varchar(256) NOT NULL,
  `sub_division` varchar(256) NOT NULL,
  `course_name` varchar(256) NOT NULL,
  `course_code` varchar(256) NOT NULL,
  `date_of_intro` varchar(256) DEFAULT NULL,
  `course_credit` varchar(256) DEFAULT NULL,
  `faculties` varchar(20000) NOT NULL,
  `tutor` varchar(2000) DEFAULT NULL,
  `tenure` varchar(30) DEFAULT NULL,
  `maxintake` int DEFAULT NULL,
  `syllabus` varchar(500) DEFAULT NULL,
  `departments` int DEFAULT NULL,
  `updated_by` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=223 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `course`
--

LOCK TABLES `course` WRITE;
/*!40000 ALTER TABLE `course` DISABLE KEYS */;
INSERT INTO `course` VALUES (2,'UG','NA','B.Sc. Botany','BOT','1978-06-01','55','Dr. K.H. Amitha Bachan,Shaheedha T.M,Dr. Jisha K.C,Shemi C B,NAZEEMA M. K,Dr. Girija T. P','','6 Semester',36,'1703780711.pdf',8,821),(3,'UG','NA','B.Sc. Physics','PHY','2010-06-01','120','Dr. Sheena P. A.','','6 Semester',36,'1694617131.pdf',25,825),(4,'UG','NA','B.A. Economics','','','','','','3 Years',50,'BA_ECONOMICS_20192.pdf',10,0),(5,'UG','NA','B.A. English Language & Literature','','','','','','3 Years',39,'BA_ENGLISH_20192.pdf',15,0),(6,'UG','NA','B.Com. Co-operation','BCM','1977-06-01','120','Dr. Sefiya K.M.','','6 Semester',60,'1683295739.pdf',41,834),(7,'UG','NA','B.Sc. Aquaculture','AQC','1995-06-01','120','Dr. Kesavan K.,Shibu A. Nair,Dr. Dhanya P. R,Smt. Sreelakshmi T P','Dr. Kesavan K.','6 Semester',36,'1695353216.pdf',11,819),(8,'PG','NA','M.Sc. Physics','PHY','2021-02-08','80','Nisha P K','','4 Semester',10,'1694617024.pdf',25,825),(9,'UG','NA','B.Com. Computer Application','BCCA','2005-01-06','120','Josbeena Johnson,V M George,Salma Thasneem B.M,Ramisha K.C.,DALIYA K M','','6 Semester',60,'1683301326.pdf',45,1117),(10,'UG','NA','B.Com. Finance','BCFN','2013-01-06','120','Dr. K.P. Sumedhan,Shiji T.S,Dhanya A. C.,Dhini.K.V,Krishnapriya M,Reshma K R','','6 Semester',60,'1683301383.pdf',45,1117),(11,'UG','NA','B.B.A','BBAM','2013-01-06','120','Reshma A R,Asif zuhail P.S.,Shahija V A,Raseena P M','','6 Semester',60,'1683301591.pdf',45,1117),(12,'UG','NA','B.C.A','BCA',NULL,'120','Nasiya P M,Anu S.,JABIN T H','','6 Semester',55,'BCA_20192.pdf',20,835),(13,'UG','NA','B.A. Mass Communication','','','','','','3 Years',24,'BA_MASS_COMMUNICATION20192.pdf',21,0),(14,'UG','NA','B.Voc. Logistics Management','LMT','2018-11-14','120','Abdul Yafiz K.M','',NULL,60,'1683729438.pdf',32,828),(15,'UG','NA','B.Voc. Digital Film Production','','','','','','3 Years',45,'BVOC_DIGITAL_FILM_PRODUCTION2.pdf',31,0),(16,'UG','NA','B. Voc. FIsh Processing Technology','FHT',NULL,'180','Sugaina Sulaiman M.S.,Ujjwala Navas,Dr. Sayana K . A.,Vaishna P.U.','',NULL,45,'1683027726.pdf',30,1004),(17,'UG','NA','B.Voc. Tourism & Hospitality Management','B. Voc THM',NULL,'180','Rasmin Mohd Ismail,Shafna A S','',NULL,45,'1682945298.pdf',33,900),(18,'PG','NA','M. Com. Financial Management','MCM','1984-06-05','88','Dr. Shafeer .P.S.','','4 Semester',20,'1683296007.pdf',41,834),(19,'PG','NA','M.A. English Language and Literature','','','','','','2 Years',15,'MA_ENGLISH_20192.pdf',15,0),(20,'PG','NA','M. Sc. Botany','BOT','2015-06-01','80','Dr. K.H. Amitha Bachan,Shaheedha T.M,Dr. Jisha K.C,Shemi C B,NAZEEMA M. K,Dr. Girija T. P','','4 Semester',12,'1703779987.pdf',8,821),(21,'PG','NA','M. A. Economics','','','','','','2 Years',15,'MA_ECONOMICS20192.pdf',10,0),(22,'PG','NA','M. Com. Marketing','MCMM','2014-01-06','88','Dr. K.P. Sumedhan,V M George,REEBA O B,Sruthi P.S.','','4 Semester',20,'MCOM_MARKETING_20192.pdf',45,1117),(32,'UG','NA','B.Sc. Mathematics','11','2022-05-30','23','Nasreen A','Nasreen A','3 Years',36,'BSC_MATHEMATICS2.pdf',24,0),(33,'UG','NA','B.Sc. Psychology','11','2022-06-09','23','Lathif Penath','Lathif Penath','2 Years',24,'BSC_PSYCHOLOGY_20191.pdf',26,0),(34,'PhD','NA','Ph.D Botany','34','2013-01-29','44','Dr. K.H. Amitha Bachan,Dr. Jisha K.C,Dr. Girija T. P',NULL,NULL,24,'1703782082.pdf',8,821),(35,'PhD','NA','Ph.D English','23','2022-05-17','44','Dr. Amitha P. Mani',NULL,NULL,8,'1694871963.pdf',15,820),(36,'PhD','NA','Ph.D Commerce','23','2022-06-03','23','Dr. Reena Mohamed P.M.',NULL,'3 Years',24,'MSC_BOTANY4.pdf',41,0),(37,'Complimentary','NA','Malayalam','11','2022-06-03','44','Dr.Jaisy David',NULL,'3 Years',36,'MALAYALAM_2019_merged1.pdf',12,0),(38,'UG','NA','Hindi','11','2022-06-12','38','Dr. Ranjith M',NULL,NULL,24,'1695225182.pdf',16,833),(39,'Complimentary','NA','Arabic','23','2022-06-11','23','Sakkeena M.K.',NULL,'3 Years',36,'Arabic_2020.pdf',9,0),(40,'Complimentary','NA','History','23','2022-06-05','44','Balasubrahmanian Uruniankuth',NULL,'3 Years',36,'HISTORY.pdf',17,0),(41,'Complimentary','NA','Political Science','11','2022-06-04','23','Dr.Sanand C. Sadanandakumar',NULL,'3 Years',36,'POLITICAL_SCIENCE1.pdf',27,0),(42,'Complimentary','NA','Statistics','23','2022-06-05','44','Shemi C B',NULL,'3 Years',24,'STATISTICS_2019_merged.pdf',28,0),(43,'Complimentary','NA','Chemistry','','2022-05-30','11','Shaheedha T.M','','3 Years',36,'CHEMISTRY_merged.pdf',13,0),(44,'Complimentary','NA','Biochemistry','','2022-05-31','11',' Mohammed Areej E. M.	','','3 Years',36,'BIOCHEMISTRY.pdf',18,0),(45,'Complimentary','NA','Zoology','11','2022-06-03','11','Sabitha M.M.','','3 Years',24,'Zoology2.pdf',29,0),(181,'Certificate','NA','Nursery and Landscaping','ASCEP15','2021-07-14','2','Dr. Girija T. P',NULL,'3 Months',25,'1703841791.pdf',8,821),(182,'Certificate','NA','Geoinformatics and Mapping','ASCEP16','2021-07-14','2','Dr. K.H. Amitha Bachan',NULL,'3 Months',20,NULL,8,98),(183,'Certificate','Certificate','Certificate Course in English for PSC  Examinations','ASCEP01','2021-07-14','2','Dr. Amitha P. Mani',NULL,'3 Months',40,'1674635210.docx',15,NULL),(184,'Certificate','Certificate','Environmental Studies','ASCEP02','2018-07-14','2','Jameelathu K.A.',NULL,NULL,NULL,'',15,NULL),(185,'Certificate','NA','English Grammar and Basic Writing','ASCEP03','2021-07-14','2','Sabitha M.M.',NULL,'3 Months',40,NULL,15,98),(186,'Certificate','Certificate','Nutritional and Clinical Biochemistry','ASCEP04','2019-07-14',NULL,'Mohammed Areej E. M.',NULL,'3 Months',30,'',18,NULL),(187,'Certificate','Certificate','How  to Approach  Civil Service Examination','ASCEP05','2021-07-14','2','Dr.Sanand C. Sadananda Kumar',NULL,NULL,25,'',27,NULL),(188,'Certificate','Certificate','Communicative English','ASCEP06','2021-07-14','2','Veenalekshmi U.R.',NULL,'3 Months',40,'',15,NULL),(189,'Certificate','Certificate','Intellectual Property Rights','ASCEP07','2021-07-14','2','Dr. Jisha K.C',NULL,'3 Months',30,'',8,NULL),(190,'Certificate','Certificate','History for Competitive Examinations','ASCEP08','2021-07-14','2','Balasubrahmanian Uruniankuth',NULL,'3 Months',25,'',17,NULL),(191,'Certificate','NA','Preparation and Execution of the Project','ASCEP09','2021-07-14','2','Dr. Dhanya Kandarattil',NULL,'3 Months',30,NULL,10,98),(192,'Certificate','Certificate','Basic Mathematics for Competitive Examinations','ASCEP10','2021-07-14',NULL,'Keerthana S. V',NULL,'3 Months',25,'',24,NULL),(193,'Certificate','Certificate','Internet and MS Office for Beginners','ASCEP11',NULL,NULL,'Najula K M',NULL,'3 Months',25,'',20,NULL),(194,'Certificate','Certificate','Entrepreneurship Development in Fisheries','ASCEP12','2021-07-14','2','Sugaina Sulaiman M.S.,Ujjwala Navas',NULL,'3 Months',30,'',30,NULL),(195,'Certificate','Certificate','Basic Programming Using Python','ASCEP13','2021-07-14',NULL,'Anisha P. M',NULL,'3 Months',30,'',25,NULL),(196,'Certificate','Certificate','Warehouse Management','ASCEP14','2021-07-14','2','Abdul Yafiz K.M',NULL,'3 Months',30,'',32,NULL),(197,'Certificate','Certificate','Mushroom Cultivation','ASCEP17','2021-07-14','2','Naseema K M',NULL,'3 Months',20,'',8,NULL),(198,'Certificate','Certificate','Platform Skills','ASCEP18','2021-07-14','2','Lathif Penath',NULL,'3 Months',25,'',26,NULL),(199,'Certificate','NA','Introduction to SPSS','ASCEP19','2021-07-14','2','Shahija V A',NULL,'3 Months',40,NULL,45,98),(200,'Certificate','Certificate','Bridal Makeup','ASCEP20','2021-07-14','2','Reshma K R',NULL,'3 Months',40,'',45,NULL),(201,'Certificate','Certificate','Information Literature Survey and Reference Management','ASCEP21','2021-07-14','2','SALIHA. P I',NULL,'3 Months',25,'',47,NULL),(202,'Certificate','Certificate','Gender Equality: Major Perspectives','ASCEP22','2021-07-14','2','Lathif Penath',NULL,'3 Months',40,'',26,NULL),(203,'Certificate','Certificate','Professional Skill Development in Hindi','ASCEP23','2021-07-14',NULL,'Dr. Sanjeev Kumar K.',NULL,'3 Months',30,'',16,NULL),(204,'AddOn','NA','Introduction to Literary Theory','ASCEP24','2021-07-14','2','Dr. Reshmi S',NULL,'3 Months',25,'',15,NULL),(205,'AddOn','NA','Formatting and organizing Research papers','ASCEP25','2021-07-14','2','Mona V. M.',NULL,'3 Months',25,'',15,NULL),(206,'AddOn','NA','Fitness Training and Sports Injury Management','ASCEP26','2021-07-14','2','Lt. M.B.Bindil',NULL,'3 Months',25,'',22,NULL),(207,'AddOn','NA','Climate Smart Aquaculture','ASCEP27','2021-07-14','2','Dr. Sakkeena M.K.',NULL,'3 Months',60,'1695352889.pdf',11,819),(208,'AddOn','NA','Marine Pollution and Toxicology','ASCEP28','2021-07-14','2','Dr. Dhanya P. R',NULL,'3 Months',60,'1695352964.pdf',11,819),(209,'AddOn','NA','Diploma in GST and Tally','ASCEP29','2021-07-14','2','Dr. Sefiya K.M.',NULL,'3 Months',30,'',41,NULL),(210,'AddOn','NA','Certification in Financial Services','ASCEP30',NULL,'2','Deepa K A',NULL,'3 Months',40,'',41,NULL),(211,'AddOn','NA','Certificate Course in Zumba','ASCEP31','2021-07-14',NULL,'Sumayya K I',NULL,'3 Months',40,'',21,NULL),(212,'AddOn','NA','Basic Understanding on short film Production','ASCEP32','2021-07-14','2','Mynag Suresh',NULL,'3 Months',30,'',31,NULL),(213,'AddOn','NA','Student Psychology: Major Developmental, Cognitive and Behaviour factors','ASCEP33','2021-07-14','2','Lathif Penath',NULL,'3 Months',40,'',26,NULL),(214,'UG','BA','Physical Education','11','1992-02-01','4','Lt. M.B.Bindil',NULL,'6 Semester',100,'',22,NULL),(215,'UG','BA','Common Course In English','Common01','1985-01-21',NULL,'Sabitha M.M.,Mona V. M.,Jameelathu K.A.,Dr. Amitha P. Mani,Veenalekshmi U.R.,Raiba P B,Dr. Reshmi S,Sinsy Siddiq,Henna P.H.,Neena Kannan,Shiji Ibrahim U.,Reshma T M',NULL,'6 Semester',NULL,'',15,NULL),(216,'Certificate','Certificate','Climate Change and Sustainability','MESCP01a','2019-12-01','6','Dr. K.H. Amitha Bachan',NULL,'3 Months',20,'',8,NULL),(217,'Certificate','Certificate','Indigenous Rights and FRA 2006','ASCP00b','2019-02-16','6','',NULL,'3 Months',20,'',8,NULL);
/*!40000 ALTER TABLE `course` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:24:22
