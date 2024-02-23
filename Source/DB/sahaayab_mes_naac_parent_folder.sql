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
-- Table structure for table `naac_parent_folder`
--

DROP TABLE IF EXISTS `naac_parent_folder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `naac_parent_folder` (
  `id` int NOT NULL AUTO_INCREMENT,
  `cell_id` int DEFAULT NULL,
  `parentfoldertitle` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naac_parent_folder`
--

LOCK TABLES `naac_parent_folder` WRITE;
/*!40000 ALTER TABLE `naac_parent_folder` DISABLE KEYS */;
INSERT INTO `naac_parent_folder` VALUES (1,607,'1.1 Curricular Planning and Implementation','AQAR'),(2,607,'1.2 Academic Flexibility','AQAR'),(3,607,'1.3 Curriculum Enrichment','AQAR'),(4,607,'1.4 Feedback System','AQAR'),(5,608,'2.1 Student Enrolment and Profile','AQAR'),(6,608,'2.2 Catering to Student Diversity','AQAR'),(7,608,'2.3 Teaching- Learning Process','AQAR'),(8,608,'2.4 Teacher Profile and Quality','AQAR'),(9,608,'2.5 Evaluation Process and Reforms','AQAR'),(10,608,'2.6 Student Performance and Learning Outcome','AQAR'),(11,608,'2.7 Student Satisfaction Survey','AQAR'),(12,609,'3.1 Resource Mobilization for Research','AQAR'),(13,609,'3.2 Innovation Ecosystem','AQAR'),(14,609,'3.3 Research Publication and Awards','AQAR'),(15,609,'3.4 Extension Activities','AQAR'),(16,609,'3.5 Collaboration','AQAR'),(17,610,'4.1 Physical Facilities','AQAR'),(18,610,'4.2 Library as a Learning Resource','AQAR'),(19,610,'4.3 IT Infrastructure','AQAR'),(20,610,'4.4 Maintenance of Campus Infrastructure','AQAR'),(21,611,'5.1 Student Support','AQAR'),(22,611,'5.2 Student Progression','AQAR'),(23,611,'5.3 Student Participation and Activities','AQAR'),(24,611,'5.4 Alumni Engagement','AQAR'),(25,612,'6.1 Institutional Vision and Leadership','AQAR'),(26,612,'6.2 Strategy Development and Deployment','AQAR'),(27,612,'6.3 Faculty Empowerment Strategies','AQAR'),(28,612,'6.4 Financial Management and Resource Mobilization','AQAR'),(29,612,'6.5 Internal Quality Assurance System','AQAR'),(30,613,'7.1 Institutional Values and Social Responsibilities','AQAR'),(31,613,'7.2 Best Practices','AQAR'),(32,613,'7.3 Institutional Distinctiveness','AQAR'),(33,607,'1.1 Curricular Planning and Implementation','SSR'),(34,607,'1.2 Academic Flexibility','SSR'),(35,607,'1.3 Curriculum Enrichment','SSR'),(36,607,'1.4 Feedback System','SSR'),(37,608,'2.1 Student Enrolment and Profile','SSR'),(38,608,'2.2 Student Teacher Ratio','SSR'),(39,608,'2.3 Teaching- Learning Process','SSR'),(40,608,'2.4 Teacher Profile and Quality','SSR'),(41,608,'2.5 Evaluation Process and Reforms','SSR'),(42,608,'2.6 Student Performance and Learning Outcome','SSR'),(43,608,'2.7 Student Satisfaction Survey','SSR'),(44,609,'3.1 Resource Mobilization for Research','SSR'),(45,609,'3.2 Innovation Ecosystem','SSR'),(46,609,'3.3 Research Publication and Awards','SSR'),(47,609,'3.4 Extension Activities','SSR'),(48,609,'3.5 Collaboration','SSR'),(49,610,'4.1 Physical Facilities','SSR'),(50,610,'4.2 Library as a Learning Resource','SSR'),(51,610,'4.3 IT Infrastructure','SSR'),(52,610,'4.4 Maintenance of Campus Infrastructure','SSR'),(53,611,'5.1 Student Support','SSR'),(54,611,'5.2 Student Progression','SSR'),(55,611,'5.3 Student Participation and Activities','SSR'),(56,611,'5.4 Alumni Engagement','SSR'),(57,612,'6.1 Institutional Vision and Leadership','SSR'),(58,612,'6.2 Strategy Development and Deployment','SSR'),(59,612,'6.3 Faculty Empowerment Strategies','SSR'),(60,612,'6.4 Financial Management and Resource Mobilization','SSR'),(61,612,'6.5 Internal Quality Assurance System','SSR'),(62,613,'7.1 Institutional Values and Social Responsibilities','SSR'),(63,613,'7.2 Best Practices','SSR'),(64,613,'7.3 Institutional Distinctiveness','SSR');
/*!40000 ALTER TABLE `naac_parent_folder` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:22:00
