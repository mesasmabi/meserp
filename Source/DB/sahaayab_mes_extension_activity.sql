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
-- Table structure for table `extension_activity`
--

DROP TABLE IF EXISTS `extension_activity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `extension_activity` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fid` int DEFAULT NULL,
  `title` varchar(256) DEFAULT NULL,
  `from_date` varchar(256) DEFAULT NULL,
  `to_date` varchar(256) DEFAULT NULL,
  `venue` varchar(256) DEFAULT NULL,
  `agenda` varchar(256) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `no_teachers` varchar(11) DEFAULT NULL,
  `no_students` varchar(11) DEFAULT NULL,
  `community_name` varchar(256) DEFAULT NULL,
  `community_details` varchar(256) DEFAULT NULL,
  `panchayath` varchar(256) DEFAULT NULL,
  `ward` varchar(256) DEFAULT NULL,
  `no_male` varchar(256) DEFAULT NULL,
  `no_female` varchar(11) DEFAULT NULL,
  `category` varchar(11) DEFAULT NULL,
  `main_criteria` varchar(256) DEFAULT NULL,
  `sub_criteria` varchar(256) DEFAULT NULL,
  `post_date` varchar(256) DEFAULT NULL,
  `male_teacher` int DEFAULT NULL,
  `female_teacher` int DEFAULT NULL,
  `other_teacher` int DEFAULT NULL,
  `male_student` int DEFAULT NULL,
  `female_student` int DEFAULT NULL,
  `other_student` int DEFAULT NULL,
  `specially_abled` int DEFAULT NULL,
  `caste_sc` int DEFAULT NULL,
  `caste_st` int DEFAULT NULL,
  `caste_obc` int DEFAULT NULL,
  `collaborators` varchar(200) DEFAULT NULL,
  `promotors` varchar(255) DEFAULT NULL,
  `action` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extension_activity`
--

LOCK TABLES `extension_activity` WRITE;
/*!40000 ALTER TABLE `extension_activity` DISABLE KEYS */;
INSERT INTO `extension_activity` VALUES (2,2,'2.75 Agricultural  land for sale in Palakkad','12-01-2019','23-01-2019','Palakkad kotta maidanam town','<p>dcscs</p>','<p>svfdsfv</p>','5','2','cvc','fgfd','fdgdfg','ewrwrw','4','3','Grammika','sdfsdf','fdsv','14-01-2019',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0),(3,4,'ffff','01-12-2021','01-12-2021','palakakd','<p>palakakd</p>','<p>palakakd</p>','6','10','ggg','gtt','r','4','','','Grammika','4','4','06-12-2021',1,2,3,2,2,2,2,2,NULL,2,NULL,'Central',1),(4,4,'tgy','02-12-2021','02-12-2021','palakakd','<p>ffffffffffffffffffff</p>','<p>ffffffffffffffffff</p>','','','','','','','','','Best Practi','','','06-12-2021',0,0,0,0,0,0,0,0,NULL,0,'1,2',NULL,1),(5,4,'','01-01-1970','01-01-1970','','','','','','','','','','','','Best Practi','','','06-12-2021',0,0,0,0,0,0,0,0,NULL,0,'1,2,3','Central',1),(6,3,'','01-01-1970','01-01-1970','','','','','','','','','','','','Best Practi','','','06-12-2021',0,0,0,0,0,0,0,0,NULL,0,'1,2,3','Central',1),(10,3,'huuuuuuuuuuuuu','24-12-2021','24-12-2021','palakakd','uuuuuuuuuuuu','uuuuuuuuuuuuuuuu','4','4','4','4','4','4','','','Grammika','4','4','14-12-2021',1,3,4,4,4,4,4,4,NULL,4,'3,4','Central',1),(11,3,'new demo','04-08-2022','12-08-2022','Consectetur sequi q','','','','','','','','','','',NULL,'','','08-08-2022',0,0,0,0,0,0,0,0,NULL,0,NULL,'',NULL),(12,3,'new demo','04-08-2022','12-08-2022','Consectetur sequi q','','','','','','','','','','',NULL,'','','08-08-2022',0,0,0,0,0,0,0,0,NULL,0,NULL,'',NULL),(13,3,'new demo','04-08-2022','12-08-2022','Consectetur sequi q','','','','','','','','','','',NULL,'','','08-08-2022',0,0,0,0,0,0,0,0,NULL,0,NULL,'',NULL),(14,3,'new demo','04-08-2022','12-08-2022','Consectetur sequi q','','','','','','','','','','',NULL,'','','08-08-2022',0,0,0,0,0,0,0,0,NULL,0,NULL,'',NULL),(15,3,'new demo','04-08-2022','12-08-2022','Consectetur sequi q','','','','','','','','','','',NULL,'','','08-08-2022',0,0,0,0,0,0,0,0,NULL,0,NULL,'',NULL);
/*!40000 ALTER TABLE `extension_activity` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:22:37
