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
-- Table structure for table `fuculty_improvement`
--

DROP TABLE IF EXISTS `fuculty_improvement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fuculty_improvement` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fid` int NOT NULL,
  `title` varchar(256) NOT NULL,
  `from_date` varchar(256) NOT NULL,
  `to_date` varchar(256) NOT NULL,
  `venue` varchar(256) NOT NULL,
  `agenda` varchar(256) NOT NULL,
  `description` varchar(256) NOT NULL,
  `no_teachers` varchar(11) NOT NULL,
  `no_students` varchar(11) NOT NULL,
  `community_name` varchar(256) NOT NULL,
  `community_details` varchar(256) NOT NULL,
  `panchayath` varchar(256) NOT NULL,
  `ward` varchar(256) NOT NULL,
  `no_male` varchar(256) DEFAULT NULL,
  `no_female` varchar(11) DEFAULT NULL,
  `category` varchar(11) NOT NULL,
  `main_criteria` varchar(256) NOT NULL,
  `sub_criteria` varchar(256) NOT NULL,
  `post_date` varchar(256) NOT NULL,
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
  `action` int NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuculty_improvement`
--

LOCK TABLES `fuculty_improvement` WRITE;
/*!40000 ALTER TABLE `fuculty_improvement` DISABLE KEYS */;
INSERT INTO `fuculty_improvement` VALUES (12,3,'111111111111','09-12-2021','09-12-2021','palakakd','<p>4444444444444444444</p>','<p>44444444444</p>','4','','4','','','',NULL,NULL,'Grammika','','','27-06-2022',4,4,4,4,4,4,4,4,NULL,4,'4','Central',0,0),(13,4,'4444444444444','09-12-2021','09-12-2021','palakakd','4444444444444444444','44444444444','4','4','4','4','4','4','4','4','Grammika','4','4','14-12-2021',4,4,4,4,4,4,4,4,NULL,4,'4','Central',1,0),(14,3,'4444444444444','09-12-2021','09-12-2021','palakakd','4444444444444444444','44444444444','4','4','4','4','4','4','4','4','Grammika','4','4','14-12-2021',4,4,4,4,4,4,4,4,NULL,4,'4','Central',1,0),(15,3,'4444444444444','09-12-2021','09-12-2021','palakakd','4444444444444444444','44444444444','4','4','4','4','4','4','4','4','Grammika','4','4','14-12-2021',4,4,4,4,4,4,4,4,NULL,4,'4','Central',1,0),(16,4,'misfer','08-01-2022','08-01-2022','palakkad','<p><span style=\"color: #ffffff; font-family: Roboto, Arial, Tahoma, sans-serif; font-size: 12px; font-weight: bold; white-space: nowrap; background-color: #f44336;\">Welcome</span></p>','<p><span style=\"color: #ffffff; font-family: Roboto, Arial, Tahoma, sans-serif; font-size: 12px; font-weight: bold; white-space: nowrap; background-color: #f44336;\">Welcome</span></p>','1','1','1','1','1','1','','','Grammika','1','1','06-01-2022',1,1,1,1,1,1,1,1,NULL,1,'3','',1,0),(17,0,'DEMO','13-01-2022','13-01-2022','palakkad','<p>DEMO</p>','<p>DEMO</p>','100','100','1','1','1','1',NULL,NULL,'Grammika','1','1','20-01-2022',100,100,100,100,100,100,100,100,20,100,'1,2','Central',1,0),(18,0,'DEMO','13-01-2022','13-01-2022','palakkad','<p>DEMO</p>','<p>DEMO</p>','100','100','1','1','1','1',NULL,NULL,'Grammika','1','1','20-01-2022',100,100,100,100,100,100,100,100,20,100,'1,2','Central',1,0),(19,3,'Demo Title','07-01-2022','07-01-2022','palakkad','<p>Demo Title</p>','<p>Demo Title</p>','100','100','1','1','1','1',NULL,NULL,'Grammika','1','1','20-01-2022',100,100,100,100,100,100,100,100,NULL,100,'2','Central',1,0),(20,0,'new titlte','14-05-2022','14-05-2022','palakkad','<p>daas</p>','<p>ssssss</p>','1','1','1','1','1','1',NULL,NULL,'Grammika','1','1','20-05-2022',1,1,1,1,1,1,1,1,NULL,1,'2','Central',1,1),(21,0,'new titlte','14-05-2022','14-05-2022','palakkad','<p>daas</p>','<p>ssssss</p>','1','1','1','1','1','1',NULL,NULL,'Grammika','1','1','20-05-2022',1,1,1,1,1,1,1,1,NULL,1,'2','Central',1,1),(22,3,'44444444444444444ssssss','13-05-2022','28-05-2022','eeeeeeeeeeeeee','<p>eeeeeeeeeeeeeeeee</p>','<p>eeeeeeeeeeeeeeeeeeee</p>','1','','100','','','',NULL,NULL,'Grammika','1','','22-05-2022',1,1,1,1,1,1,1,1,NULL,100,'1','Central',0,1),(23,3,'Demo Title','07-01-2022','07-01-2022','palakkad','<p>Demo Title</p>','<p>Demo Title</p>','100','','100','','','',NULL,NULL,'Grammika','1','','22-05-2022',100,100,100,100,100,100,100,100,NULL,100,'2','Central',1,0),(24,3,'Demo Title','07-01-2022','07-01-2022','palakkad','<p>Demo Title</p>','<p>Demo Title</p>','100','','100','','','',NULL,NULL,'Grammika','1','','22-05-2022',100,100,100,100,100,100,100,100,NULL,100,'2','Central',1,0),(25,3,'Demo Title','07-01-2022','07-01-2022','palakkad','<p>Demo Title</p>','<p>Demo Title</p>','100','','100','','','',NULL,NULL,'Grammika','1','','22-05-2022',100,100,100,100,100,100,100,100,NULL,100,'2','Central',1,0),(26,3,'eeeeeeee','13-05-2022','28-05-2022','','<p>eeeeeeeeeeeeeeeee</p>','<p>eeeeeeeeeeeeeeeeeeee</p>','1','','100','','','',NULL,NULL,'Grammika','1','','22-05-2022',1,1,1,1,1,1,1,1,NULL,100,'1','Central',1,1),(27,3,'ssssssssssss','13-05-2022','28-05-2022','','<p>eeeeeeeeeeeeeeeee</p>','<p>eeeeeeeeeeeeeeeeeeee</p>','1','','100','','','',NULL,NULL,'Grammika','1','','22-05-2022',1,1,1,1,1,1,1,1,NULL,100,'1','Central',1,1),(28,3,'In autem eum maiores','02-01-1977','18-03-1989','Omnis vitae perspici','<p>r</p>','<p>r</p>','Ea aliquam ','Ipsum rem r','Sasha Michael','Quis quae ipsam haru','Quisquam nulla itaqu','Amet similique quas',NULL,NULL,'Grammika','2','','12-07-2022',0,0,0,0,0,0,0,0,NULL,0,'1,2,4','State',1,1);
/*!40000 ALTER TABLE `fuculty_improvement` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:21:39
