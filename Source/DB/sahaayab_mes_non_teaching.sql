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
-- Table structure for table `non_teaching`
--

DROP TABLE IF EXISTS `non_teaching`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `non_teaching` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `designation` varchar(200) DEFAULT NULL,
  `name_of_section` varchar(200) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `email_id` varchar(200) DEFAULT NULL,
  `aided_temp` varchar(200) DEFAULT NULL,
  `phone_no` varchar(200) DEFAULT NULL,
  `resume` varchar(200) DEFAULT NULL,
  `profile_picture` varchar(200) DEFAULT NULL,
  `appointment_order` varchar(200) DEFAULT NULL,
  `joining_memo` varchar(200) DEFAULT NULL,
  `promotion_details` varchar(200) DEFAULT NULL,
  `dob` varchar(200) DEFAULT NULL,
  `date_of_join` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `phone_number` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `non_teaching`
--

LOCK TABLES `non_teaching` WRITE;
/*!40000 ALTER TABLE `non_teaching` DISABLE KEYS */;
INSERT INTO `non_teaching` VALUES (3,'foumida',NULL,NULL,NULL,'foumidadd@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'123456@123'),(4,'xxxxx',NULL,NULL,NULL,'errrr@gmail.com',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'qwer'),(5,'xxxxx',NULL,NULL,NULL,'ddd@gmail.com',NULL,NULL,'1682064710.pdf','1682061776.jpg',NULL,NULL,NULL,NULL,NULL,NULL,NULL,'sdgsfg'),(6,'administartor',NULL,NULL,NULL,'administrator@gmail.com',NULL,NULL,'','','','','',NULL,NULL,NULL,NULL,'administrator@123'),(7,'Jeseer CM','System Administrator',NULL,'IT','jeseerkhancm@gmail.com','Temporary',NULL,NULL,'1687884690.jpg',NULL,NULL,NULL,'1985-05-17','2020-01-05','Male','9036363232','jeseer@123');
/*!40000 ALTER TABLE `non_teaching` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:24:25
