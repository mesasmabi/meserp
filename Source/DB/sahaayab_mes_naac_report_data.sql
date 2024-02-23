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
-- Table structure for table `naac_report_data`
--

DROP TABLE IF EXISTS `naac_report_data`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `naac_report_data` (
  `id` int NOT NULL AUTO_INCREMENT,
  `parentfolderid` int DEFAULT NULL,
  `criteria_id` int DEFAULT NULL,
  `subfolderid` int DEFAULT NULL,
  `period` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_original_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=517 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `naac_report_data`
--

LOCK TABLES `naac_report_data` WRITE;
/*!40000 ALTER TABLE `naac_report_data` DISABLE KEYS */;
INSERT INTO `naac_report_data` VALUES (4,1,607,1,'2018-2019','AQAR','1691646714.pdf','2023-08-10 05:51:54','2023-08-10 05:51:54',NULL),(9,9,608,23,'2020-2021','AQAR','1694448596.pdf','2023-09-11 16:09:57','2023-09-11 16:09:57',NULL),(10,9,608,22,'2020-2021','AQAR','1694448837.pdf','2023-09-11 16:13:57','2023-09-11 16:13:57',NULL),(11,9,608,23,'2021-2022','AQAR','1694448970.pdf','2023-09-11 16:16:10','2023-09-11 16:16:10',NULL),(12,9,608,22,'2021-2022','AQAR','1694449013.pdf','2023-09-11 16:16:53','2023-09-11 16:16:53',NULL),(14,9,608,23,'2021-2022','AQAR','1695016500.pdf','2023-09-18 05:55:00','2023-09-18 05:55:00',NULL),(18,5,608,13,'2018-2019','AQAR','1695029238.pdf','2023-09-18 09:27:18','2023-09-18 09:27:18',NULL),(20,13,609,30,'2020-2021','AQAR','1695062155.pdf','2023-09-18 18:35:55','2023-09-18 18:35:55',NULL),(21,13,609,30,'2021-2022','AQAR','1695063001.pdf','2023-09-18 18:50:01','2023-09-18 18:50:01',NULL),(24,17,610,42,'2021-2022','AQAR','1695096621.pdf','2023-09-19 04:10:21','2023-09-19 04:10:21',NULL),(25,17,610,44,'2021-2022','AQAR','1695100215.pdf','2023-09-19 05:10:15','2023-09-19 05:10:15',NULL),(27,17,610,43,'2021-2022','AQAR','1695100694.pdf','2023-09-19 05:18:14','2023-09-19 05:18:14',NULL),(28,19,610,51,'2021-2022','AQAR','1695103735.pdf','2023-09-19 06:08:55','2023-09-19 06:08:55',NULL),(33,27,612,75,'2021-2022','AQAR','1695119033.pdf','2023-09-19 10:23:53','2023-09-19 10:23:53',NULL),(37,18,610,47,'2020-2021','AQAR','1695203716.pdf','2023-09-20 09:55:16','2023-09-20 09:55:16',NULL),(38,10,608,25,'2020-2021','AQAR','1695216650.pdf','2023-09-20 13:30:51','2023-09-20 13:30:51',NULL),(47,21,611,56,'2020-2021','AQAR','1695280082.pdf','2023-09-21 07:08:02','2023-09-21 07:08:02',NULL),(50,21,611,55,'2020-2021','AQAR','1695280452.pdf','2023-09-21 07:14:12','2023-09-21 07:14:12',NULL),(51,21,611,58,'2020-2021','AQAR','1695280638.pdf','2023-09-21 07:17:18','2023-09-21 07:17:18',NULL),(52,21,611,54,'2020-2021','AQAR','1695280678.pdf','2023-09-21 07:17:58','2023-09-21 07:17:58',NULL),(53,21,611,57,'2020-2021','AQAR','1695280717.pdf','2023-09-21 07:18:37','2023-09-21 07:18:37',NULL),(54,22,611,61,'2020-2021','AQAR','1695280807.pdf','2023-09-21 07:20:08','2023-09-21 07:20:08',NULL),(55,22,611,60,'2020-2021','AQAR','1695280859.pdf','2023-09-21 07:20:59','2023-09-21 07:20:59',NULL),(56,22,611,59,'2020-2021','AQAR','1695280891.pdf','2023-09-21 07:21:31','2023-09-21 07:21:31',NULL),(57,24,611,66,'2020-2021','AQAR','1695281018.pdf','2023-09-21 07:23:38','2023-09-21 07:23:38',NULL),(58,24,611,66,'2020-2021','AQAR','1695281092.pdf','2023-09-21 07:24:53','2023-09-21 07:24:53',NULL),(59,24,611,65,'2020-2021','AQAR','1695281131.pdf','2023-09-21 07:25:31','2023-09-21 07:25:31',NULL),(60,23,611,63,'2020-2021','AQAR','1695281165.pdf','2023-09-21 07:26:05','2023-09-21 07:26:05',NULL),(62,23,611,64,'2020-2021','AQAR','1695282735.pdf','2023-09-21 07:52:15','2023-09-21 07:52:15',NULL),(63,23,611,64,'2020-2021','AQAR','1695282775.pdf','2023-09-21 07:52:56','2023-09-21 07:52:56',NULL),(64,27,612,74,'2020-2021','AQAR','1695286881.pdf','2023-09-21 09:01:22','2023-09-21 09:01:22',NULL),(65,27,612,74,'2020-2021','AQAR','1695287205.pdf','2023-09-21 09:06:45','2023-09-21 09:06:45',NULL),(72,10,608,26,'2020-2021','AQAR','1695288962.pdf','2023-09-21 09:36:03','2023-09-21 09:36:03',NULL),(75,9,608,23,'2020-2021','AQAR','1695312020.pdf','2023-09-21 16:00:20','2023-09-21 16:00:20',NULL),(76,9,608,23,'2020-2021','AQAR','1695312104.pdf','2023-09-21 16:01:45','2023-09-21 16:01:45',NULL),(77,9,608,23,'2020-2021','AQAR','1695312137.pdf','2023-09-21 16:02:17','2023-09-21 16:02:17',NULL),(78,9,608,23,'2020-2021','AQAR','1695312170.pdf','2023-09-21 16:02:51','2023-09-21 16:02:51',NULL),(79,9,608,23,'2020-2021','AQAR','1695312200.pdf','2023-09-21 16:03:21','2023-09-21 16:03:21',NULL),(82,9,608,23,'2021-2022','AQAR','1695312527.pdf','2023-09-21 16:08:47','2023-09-21 16:08:47',NULL),(83,9,608,23,'2021-2022','AQAR','1695312561.pdf','2023-09-21 16:09:21','2023-09-21 16:09:21',NULL),(84,9,608,23,'2021-2022','AQAR','1695312593.pdf','2023-09-21 16:09:53','2023-09-21 16:09:53',NULL),(85,9,608,23,'2021-2022','AQAR','1695312620.pdf','2023-09-21 16:10:20','2023-09-21 16:10:20',NULL),(86,9,608,23,'2021-2022','AQAR','1695312656.pdf','2023-09-21 16:10:56','2023-09-21 16:10:56',NULL),(87,9,608,23,'2021-2022','AQAR','1695312680.pdf','2023-09-21 16:11:20','2023-09-21 16:11:20',NULL),(88,9,608,23,'2021-2022','AQAR','1695312718.pdf','2023-09-21 16:11:58','2023-09-21 16:11:58',NULL),(89,9,608,23,'2021-2022','AQAR','1695312772.pdf','2023-09-21 16:12:52','2023-09-21 16:12:52',NULL),(92,9,608,22,'2021-2022','AQAR','1695312847.pdf','2023-09-21 16:14:08','2023-09-21 16:14:08',NULL),(94,9,608,23,'2021-2022','AQAR','1695312894.pdf','2023-09-21 16:14:55','2023-09-21 16:14:55',NULL),(95,9,608,23,'2021-2022','AQAR','1695312922.pdf','2023-09-21 16:15:23','2023-09-21 16:15:23',NULL),(97,9,608,23,'2021-2022','AQAR','1695312950.pdf','2023-09-21 16:15:50','2023-09-21 16:15:50',NULL),(102,27,612,75,'2020-2021','AQAR','1695358515.pdf','2023-09-22 04:55:15','2023-09-22 04:55:15',NULL),(104,27,612,75,'2020-2021','AQAR','1695359010.pdf','2023-09-22 05:03:30','2023-09-22 05:03:30',NULL),(106,27,612,75,'2021-2022','AQAR','1695359229.pdf','2023-09-22 05:07:10','2023-09-22 05:07:10',NULL),(124,6,608,14,'2020-2021','AQAR','1695465790.pdf','2023-09-23 10:43:10','2023-09-23 10:43:10',NULL),(125,6,608,14,'2021-2022','AQAR','1695466588.pdf','2023-09-23 10:56:29','2023-09-23 10:56:29',NULL),(129,10,608,26,'2021-2022','AQAR','1695468080.pdf','2023-09-23 11:21:20','2023-09-23 11:21:20',NULL),(130,10,608,25,'2021-2022','AQAR','1695468545.pdf','2023-09-23 11:29:05','2023-09-23 11:29:05',NULL),(133,27,612,74,'2021-2022','AQAR','1695481223.pdf','2023-09-23 15:00:23','2023-09-23 15:00:23',NULL),(134,27,612,74,'2021-2022','AQAR','1695481255.pdf','2023-09-23 15:00:56','2023-09-23 15:00:56',NULL),(136,13,609,31,'2021-2022','AQAR','1695535069.pdf','2023-09-24 05:57:50','2023-09-24 05:57:50',NULL),(137,13,609,31,'2020-2021','AQAR','1695535164.pdf','2023-09-24 05:59:24','2023-09-24 05:59:24',NULL),(138,17,610,43,'2021-2022','AQAR','1695620384.pdf','2023-09-25 05:39:44','2023-09-25 05:39:44',NULL),(139,20,610,53,'2021-2022','AQAR','1695621963.pdf','2023-09-25 06:06:04','2023-09-25 06:06:04',NULL),(140,20,610,53,'2021-2022','AQAR','1695622082.pdf','2023-09-25 06:08:02','2023-09-25 06:08:02',NULL),(141,24,611,66,'2021-2022','AQAR','1695622844.pdf','2023-09-25 06:20:44','2023-09-25 06:20:44',NULL),(142,24,611,66,'2021-2022','AQAR','1695622926.pdf','2023-09-25 06:22:06','2023-09-25 06:22:06',NULL),(143,17,610,44,'2020-2021','AQAR','1695630176.pdf','2023-09-25 08:22:56','2023-09-25 08:22:56',NULL),(144,17,610,42,'2020-2021','AQAR','1695630278.pdf','2023-09-25 08:24:38','2023-09-25 08:24:38',NULL),(145,17,610,43,'2020-2021','AQAR','1695630447.pdf','2023-09-25 08:27:27','2023-09-25 08:27:27',NULL),(146,18,610,48,'2020-2021','AQAR','1695630593.pdf','2023-09-25 08:29:53','2023-09-25 08:29:53',NULL),(147,19,610,51,'2020-2021','AQAR','1695630989.pdf','2023-09-25 08:36:30','2023-09-25 08:36:30',NULL),(148,20,610,53,'2020-2021','AQAR','1695631390.pdf','2023-09-25 08:43:10','2023-09-25 08:43:10',NULL),(149,30,613,84,'2020-2021','AQAR','1695635159.pdf','2023-09-25 09:45:59','2023-09-25 09:45:59',NULL),(150,30,613,85,'2020-2021','AQAR','1695635573.pdf','2023-09-25 09:52:54','2023-09-25 09:52:54',NULL),(151,30,613,87,'2020-2021','AQAR','1695635727.pdf','2023-09-25 09:55:28','2023-09-25 09:55:28',NULL),(152,30,613,84,'2021-2022','AQAR','1695635963.pdf','2023-09-25 09:59:23','2023-09-25 09:59:23',NULL),(153,30,613,85,'2021-2022','AQAR','1695636022.pdf','2023-09-25 10:00:22','2023-09-25 10:00:22',NULL),(154,30,613,87,'2021-2022','AQAR','1695636086.pdf','2023-09-25 10:01:27','2023-09-25 10:01:27',NULL),(155,30,613,89,'2020-2021','AQAR','1695638523.pdf','2023-09-25 10:42:03','2023-09-25 10:42:03',NULL),(156,30,613,89,'2021-2022','AQAR','1695638570.pdf','2023-09-25 10:42:50','2023-09-25 10:42:50',NULL),(157,24,611,65,'2021-2022','AQAR','1695658515.pdf','2023-09-25 16:15:15','2023-09-25 16:15:15',NULL),(158,24,611,65,'2021-2022','AQAR','1695658583.pdf','2023-09-25 16:16:23','2023-09-25 16:16:23',NULL),(159,7,608,18,'2020-2021','AQAR','1695711109.pdf','2023-09-26 06:51:50','2023-09-26 06:51:50',NULL),(160,7,608,18,'2021-2022','AQAR','1695711173.pdf','2023-09-26 06:52:54','2023-09-26 06:52:54',NULL),(161,7,608,17,'2020-2021','AQAR','1695711883.pdf','2023-09-26 07:04:43','2023-09-26 07:04:43',NULL),(162,7,608,17,'2021-2022','AQAR','1695711984.pdf','2023-09-26 07:06:24','2023-09-26 07:06:24',NULL),(163,30,613,93,'2021-2022','AQAR','1695716745.pdf','2023-09-26 08:25:45','2023-09-26 08:25:45',NULL),(164,30,613,93,'2020-2021','AQAR','1695716779.pdf','2023-09-26 08:26:19','2023-09-26 08:26:19',NULL),(165,30,613,92,'2020-2021','AQAR','1695719341.pdf','2023-09-26 09:09:02','2023-09-26 09:09:02',NULL),(166,1,607,1,'2021-2022','AQAR','1695719665.pdf','2023-09-26 09:14:26','2023-09-26 09:14:26',NULL),(167,30,613,86,'2020-2021','AQAR','1695720263.pdf','2023-09-26 09:24:24','2023-09-26 09:24:24',NULL),(168,30,613,86,'2021-2022','AQAR','1695720549.pdf','2023-09-26 09:29:09','2023-09-26 09:29:09',NULL),(169,1,607,2,'2021-2022','AQAR','1695720653.pdf','2023-09-26 09:30:53','2023-09-26 09:30:53',NULL),(170,1,607,1,'2020-2021','AQAR','1695722164.pdf','2023-09-26 09:56:04','2023-09-26 09:56:04',NULL),(171,1,607,2,'2020-2021','AQAR','1695722589.pdf','2023-09-26 10:03:09','2023-09-26 10:03:09',NULL),(172,30,613,86,'2021-2022','AQAR','1695724527.pdf','2023-09-26 10:35:27','2023-09-26 10:35:27',NULL),(175,23,611,62,'2020-2021','AQAR','1695793016.pdf','2023-09-27 05:36:56','2023-09-27 05:36:56',NULL),(176,21,611,58,'2021-2022','AQAR','1695795031.pdf','2023-09-27 06:10:31','2023-09-27 06:10:31',NULL),(177,21,611,54,'2021-2022','AQAR','1695795541.pdf','2023-09-27 06:19:01','2023-09-27 06:19:01',NULL),(179,22,611,61,'2021-2022','AQAR','1695796458.pdf','2023-09-27 06:34:19','2023-09-27 06:34:19',NULL),(180,22,611,60,'2021-2022','AQAR','1695797291.pdf','2023-09-27 06:48:11','2023-09-27 06:48:11',NULL),(181,22,611,59,'2021-2022','AQAR','1695797853.pdf','2023-09-27 06:57:33','2023-09-27 06:57:33',NULL),(182,23,611,63,'2021-2022','AQAR','1695797960.pdf','2023-09-27 06:59:21','2023-09-27 06:59:21',NULL),(183,23,611,62,'2021-2022','AQAR','1695800554.pdf','2023-09-27 07:42:34','2023-09-27 07:42:34',NULL),(184,23,611,64,'2021-2022','AQAR','1695800785.pdf','2023-09-27 07:46:25','2023-09-27 07:46:25',NULL),(185,24,611,66,'2021-2022','AQAR','1695801173.pdf','2023-09-27 07:52:53','2023-09-27 07:52:53',NULL),(186,24,611,66,'2021-2022','AQAR','1695801229.pdf','2023-09-27 07:53:49','2023-09-27 07:53:49',NULL),(187,21,611,56,'2021-2022','AQAR','1695802058.pdf','2023-09-27 08:07:38','2023-09-27 08:07:38',NULL),(188,21,611,55,'2021-2022','AQAR','1695802572.pdf','2023-09-27 08:16:12','2023-09-27 08:16:12',NULL),(190,15,609,38,'2020-2021','AQAR','1695805855.pdf','2023-09-27 09:10:56','2023-09-27 09:10:56',NULL),(191,15,609,38,'2021-2022','AQAR','1695805908.pdf','2023-09-27 09:11:48','2023-09-27 09:11:48',NULL),(192,10,608,24,'2020-2021','AQAR','1695806119.pdf','2023-09-27 09:15:19','2023-09-27 09:15:19',NULL),(193,10,608,24,'2021-2022','AQAR','1695806203.pdf','2023-09-27 09:16:43','2023-09-27 09:16:43',NULL),(194,11,608,NULL,'2020-2021','AQAR','1695806801.pdf','2023-09-27 09:26:42','2023-09-27 09:26:42',NULL),(195,11,608,NULL,'2021-2022','AQAR','1695806983.pdf','2023-09-27 09:29:43','2023-09-27 09:29:43',NULL),(198,4,607,11,'2020-2021','AQAR','1695808353.pdf','2023-09-27 09:52:33','2023-09-27 09:52:33',NULL),(199,4,607,10,'2020-2021','AQAR','1695808396.pdf','2023-09-27 09:53:16','2023-09-27 09:53:16',NULL),(200,31,613,NULL,'2020-2021','AQAR','1695808471.pdf','2023-09-27 09:54:31','2023-09-27 09:54:31',NULL),(201,31,613,NULL,'2020-2021','AQAR','1695808606.pdf','2023-09-27 09:56:46','2023-09-27 09:56:46',NULL),(202,31,613,NULL,'2021-2022','AQAR','1695809254.pdf','2023-09-27 10:07:34','2023-09-27 10:07:34',NULL),(203,31,613,NULL,'2021-2022','AQAR','1695809404.pdf','2023-09-27 10:10:04','2023-09-27 10:10:04',NULL),(208,32,613,NULL,'2020-2021','AQAR','1695814157.pdf','2023-09-27 11:29:18','2023-09-27 11:29:18',NULL),(209,32,613,NULL,'2021-2022','AQAR','1695814505.pdf','2023-09-27 11:35:05','2023-09-27 11:35:05',NULL),(212,28,612,78,'2020-2021','AQAR','1695823418.pdf','2023-09-27 14:03:38','2023-09-27 14:03:38',NULL),(214,28,612,79,'2020-2021','AQAR','1695823707.pdf','2023-09-27 14:08:27','2023-09-27 14:08:27',NULL),(220,27,612,73,'2020-2021','AQAR','1695826153.pdf','2023-09-27 14:49:13','2023-09-27 14:49:13',NULL),(224,28,612,78,'2021-2022','AQAR','1695827945.pdf','2023-09-27 15:19:05','2023-09-27 15:19:05',NULL),(225,28,612,78,'2021-2022','AQAR','1695827968.pdf','2023-09-27 15:19:28','2023-09-27 15:19:28',NULL),(226,28,612,78,'2020-2021','AQAR','1695828172.pdf','2023-09-27 15:22:52','2023-09-27 15:22:52',NULL),(227,28,612,79,'2021-2022','AQAR','1695828338.pdf','2023-09-27 15:25:38','2023-09-27 15:25:38',NULL),(232,27,612,73,'2021-2022','AQAR','1695832138.pdf','2023-09-27 16:28:58','2023-09-27 16:28:58',NULL),(234,25,612,68,'2020-2021','AQAR','1695834921.pdf','2023-09-27 17:15:21','2023-09-27 17:15:21',NULL),(236,25,612,68,'2021-2022','AQAR','1695835091.pdf','2023-09-27 17:18:11','2023-09-27 17:18:11',NULL),(237,25,612,67,'2020-2021','AQAR','1695836984.pdf','2023-09-27 17:49:44','2023-09-27 17:49:44',NULL),(238,25,612,67,'2021-2022','AQAR','1695837029.pdf','2023-09-27 17:50:29','2023-09-27 17:50:29',NULL),(239,27,612,75,'2020-2021','AQAR','1695837438.pdf','2023-09-27 17:57:18','2023-09-27 17:57:18',NULL),(241,27,612,75,'2020-2021','AQAR','1695837850.pdf','2023-09-27 18:04:10','2023-09-27 18:04:10',NULL),(246,26,612,70,'2020-2021','AQAR','1695838821.pdf','2023-09-27 18:20:21','2023-09-27 18:20:21',NULL),(247,26,612,70,'2021-2022','AQAR','1695838879.pdf','2023-09-27 18:21:19','2023-09-27 18:21:19',NULL),(249,27,612,75,'2021-2022','AQAR','1695838981.pdf','2023-09-27 18:23:01','2023-09-27 18:23:01',NULL),(250,27,612,75,'2021-2022','AQAR','1695839026.pdf','2023-09-27 18:23:46','2023-09-27 18:23:46',NULL),(254,26,612,71,'2021-2022','AQAR','1695842701.pdf','2023-09-27 19:25:01','2023-09-27 19:25:01',NULL),(255,27,612,75,'2020-2021','AQAR','1695880052.pdf','2023-09-28 05:47:32','2023-09-28 05:47:32',NULL),(256,27,612,75,'2021-2022','AQAR','1695880089.pdf','2023-09-28 05:48:10','2023-09-28 05:48:10',NULL),(257,27,612,76,'2020-2021','AQAR','1695880134.pdf','2023-09-28 05:48:55','2023-09-28 05:48:55',NULL),(258,27,612,76,'2021-2022','AQAR','1695880165.pdf','2023-09-28 05:49:25','2023-09-28 05:49:25',NULL),(259,26,612,69,'2020-2021','AQAR','1695893507.pdf','2023-09-28 09:31:47','2023-09-28 09:31:47',NULL),(260,26,612,69,'2020-2021','AQAR','1695893538.pdf','2023-09-28 09:32:18','2023-09-28 09:32:18',NULL),(261,26,612,71,'2020-2021','AQAR','1695893568.pdf','2023-09-28 09:32:48','2023-09-28 09:32:48',NULL),(262,26,612,71,'2020-2021','AQAR','1695893604.pdf','2023-09-28 09:33:24','2023-09-28 09:33:24',NULL),(263,26,612,69,'2021-2022','AQAR','1695896658.pdf','2023-09-28 10:24:18','2023-09-28 10:24:18',NULL),(264,26,612,69,'2021-2022','AQAR','1695896685.pdf','2023-09-28 10:24:45','2023-09-28 10:24:45',NULL),(265,27,612,72,'2020-2021','AQAR','1695908590.pdf','2023-09-28 13:43:10','2023-09-28 13:43:10',NULL),(266,27,612,72,'2021-2022','AQAR','1695908648.pdf','2023-09-28 13:44:08','2023-09-28 13:44:08',NULL),(267,27,612,72,'2020-2021','AQAR','1695909096.pdf','2023-09-28 13:51:36','2023-09-28 13:51:36',NULL),(268,27,612,72,'2021-2022','AQAR','1695909143.pdf','2023-09-28 13:52:23','2023-09-28 13:52:23',NULL),(269,25,612,68,'2020-2021','AQAR','1695919290.pdf','2023-09-28 16:41:31','2023-09-28 16:41:31',NULL),(270,25,612,68,'2021-2022','AQAR','1695919325.pdf','2023-09-28 16:42:06','2023-09-28 16:42:06',NULL),(271,26,612,71,'2020-2021','AQAR','1695919862.pdf','2023-09-28 16:51:02','2023-09-28 16:51:02',NULL),(272,26,612,71,'2020-2021','AQAR','1695919892.pdf','2023-09-28 16:51:33','2023-09-28 16:51:33',NULL),(273,26,612,71,'2020-2021','AQAR','1695919917.pdf','2023-09-28 16:51:57','2023-09-28 16:51:57',NULL),(274,26,612,71,'2021-2022','AQAR','1695919939.pdf','2023-09-28 16:52:20','2023-09-28 16:52:20',NULL),(275,26,612,71,'2021-2022','AQAR','1695919960.pdf','2023-09-28 16:52:40','2023-09-28 16:52:40',NULL),(276,26,612,71,'2021-2022','AQAR','1695919983.pdf','2023-09-28 16:53:04','2023-09-28 16:53:04',NULL),(277,26,612,70,'2021-2022','AQAR','1695920435.pdf','2023-09-28 17:00:36','2023-09-28 17:00:36',NULL),(278,26,612,70,'2020-2021','AQAR','1695920739.pdf','2023-09-28 17:05:39','2023-09-28 17:05:39',NULL),(280,26,612,70,'2020-2021','AQAR','1695924956.pdf','2023-09-28 18:15:56','2023-09-28 18:15:56',NULL),(281,26,612,70,'2021-2022','AQAR','1695924999.pdf','2023-09-28 18:16:39','2023-09-28 18:16:39',NULL),(282,27,612,73,'2020-2021','AQAR','1695925614.pdf','2023-09-28 18:26:54','2023-09-28 18:26:54',NULL),(283,27,612,73,'2021-2022','AQAR','1695925655.pdf','2023-09-28 18:27:35','2023-09-28 18:27:35',NULL),(284,27,612,73,'2020-2021','AQAR','1695926840.pdf','2023-09-28 18:47:20','2023-09-28 18:47:20',NULL),(285,27,612,73,'2021-2022','AQAR','1695927545.pdf','2023-09-28 18:59:05','2023-09-28 18:59:05',NULL),(286,26,612,71,'2021-2022','AQAR','1695961850.pdf','2023-09-29 04:30:50','2023-09-29 04:30:50',NULL),(287,25,612,67,'2020-2021','AQAR','1695962855.pdf','2023-09-29 04:47:36','2023-09-29 04:47:36',NULL),(288,2,607,6,'2020-2021','AQAR','1695968105.pdf','2023-09-29 06:15:05','2023-09-29 06:15:05',NULL),(289,2,607,6,'2020-2021','AQAR','1695968311.pdf','2023-09-29 06:18:31','2023-09-29 06:18:31',NULL),(290,2,607,6,'2020-2021','AQAR','1695968487.pdf','2023-09-29 06:21:28','2023-09-29 06:21:28',NULL),(291,2,607,6,'2020-2021','AQAR','1695968610.pdf','2023-09-29 06:23:30','2023-09-29 06:23:30',NULL),(292,2,607,6,'2020-2021','AQAR','1695968753.pdf','2023-09-29 06:25:53','2023-09-29 06:25:53',NULL),(293,2,607,6,'2020-2021','AQAR','1695968825.pdf','2023-09-29 06:27:06','2023-09-29 06:27:06',NULL),(294,2,607,6,'2020-2021','AQAR','1695968920.pdf','2023-09-29 06:28:40','2023-09-29 06:28:40',NULL),(295,2,607,6,'2020-2021','AQAR','1695968992.pdf','2023-09-29 06:29:52','2023-09-29 06:29:52',NULL),(296,2,607,6,'2020-2021','AQAR','1695969068.pdf','2023-09-29 06:31:09','2023-09-29 06:31:09',NULL),(297,2,607,6,'2020-2021','AQAR','1695969183.pdf','2023-09-29 06:33:03','2023-09-29 06:33:03',NULL),(298,2,607,6,'2020-2021','AQAR','1695969261.pdf','2023-09-29 06:34:21','2023-09-29 06:34:21',NULL),(299,2,607,6,'2020-2021','AQAR','1695969359.pdf','2023-09-29 06:35:59','2023-09-29 06:35:59',NULL),(300,2,607,6,'2020-2021','AQAR','1695969428.pdf','2023-09-29 06:37:08','2023-09-29 06:37:08',NULL),(301,2,607,6,'2020-2021','AQAR','1695969501.pdf','2023-09-29 06:38:21','2023-09-29 06:38:21',NULL),(302,2,607,6,'2020-2021','AQAR','1695969590.pdf','2023-09-29 06:39:50','2023-09-29 06:39:50',NULL),(303,2,607,6,'2020-2021','AQAR','1695969660.pdf','2023-09-29 06:41:00','2023-09-29 06:41:00',NULL),(304,2,607,6,'2021-2022','AQAR','1695970037.pdf','2023-09-29 06:47:17','2023-09-29 06:47:17',NULL),(305,2,607,6,'2021-2022','AQAR','1695970140.pdf','2023-09-29 06:49:00','2023-09-29 06:49:00',NULL),(306,2,607,6,'2021-2022','AQAR','1695970307.pdf','2023-09-29 06:51:48','2023-09-29 06:51:48',NULL),(307,2,607,6,'2021-2022','AQAR','1695970354.pdf','2023-09-29 06:52:34','2023-09-29 06:52:34',NULL),(308,2,607,6,'2021-2022','AQAR','1695970407.pdf','2023-09-29 06:53:27','2023-09-29 06:53:27',NULL),(309,2,607,6,'2021-2022','AQAR','1695970459.pdf','2023-09-29 06:54:20','2023-09-29 06:54:20',NULL),(310,2,607,6,'2021-2022','AQAR','1695970499.pdf','2023-09-29 06:54:59','2023-09-29 06:54:59',NULL),(311,2,607,6,'2021-2022','AQAR','1695970543.pdf','2023-09-29 06:55:43','2023-09-29 06:55:43',NULL),(312,2,607,6,'2021-2022','AQAR','1695970581.pdf','2023-09-29 06:56:21','2023-09-29 06:56:21',NULL),(313,2,607,6,'2021-2022','AQAR','1695970677.pdf','2023-09-29 06:57:57','2023-09-29 06:57:57',NULL),(314,2,607,6,'2021-2022','AQAR','1695970731.pdf','2023-09-29 06:58:51','2023-09-29 06:58:51',NULL),(315,2,607,6,'2021-2022','AQAR','1695970784.pdf','2023-09-29 06:59:45','2023-09-29 06:59:45',NULL),(316,2,607,6,'2021-2022','AQAR','1695970828.pdf','2023-09-29 07:00:28','2023-09-29 07:00:28',NULL),(317,2,607,6,'2021-2022','AQAR','1695970898.pdf','2023-09-29 07:01:38','2023-09-29 07:01:38',NULL),(318,2,607,6,'2021-2022','AQAR','1695970936.pdf','2023-09-29 07:02:16','2023-09-29 07:02:16',NULL),(319,2,607,6,'2021-2022','AQAR','1695970978.pdf','2023-09-29 07:02:58','2023-09-29 07:02:58',NULL),(320,2,607,6,'2021-2022','AQAR','1695971016.pdf','2023-09-29 07:03:36','2023-09-29 07:03:36',NULL),(321,2,607,6,'2021-2022','AQAR','1695971073.pdf','2023-09-29 07:04:33','2023-09-29 07:04:33',NULL),(322,2,607,4,'2020-2021','AQAR','1695971799.pdf','2023-09-29 07:16:39','2023-09-29 07:16:39',NULL),(323,26,612,71,'2020-2021','AQAR','1695972982.pdf','2023-09-29 07:36:22','2023-09-29 07:36:22',NULL),(324,2,607,5,'2020-2021','AQAR','1695975501.pdf','2023-09-29 08:18:21','2023-09-29 08:18:21',NULL),(325,4,607,11,'2021-2022','AQAR','1695975595.pdf','2023-09-29 08:19:56','2023-09-29 08:19:56',NULL),(326,28,612,79,'2020-2021','AQAR','1695976117.pdf','2023-09-29 08:28:38','2023-09-29 08:28:38',NULL),(327,28,612,79,'2020-2021','AQAR','1695976172.pdf','2023-09-29 08:29:32','2023-09-29 08:29:32',NULL),(328,2,607,4,'2021-2022','AQAR','1695976178.pdf','2023-09-29 08:29:39','2023-09-29 08:29:39',NULL),(329,28,612,79,'2021-2022','AQAR','1695976255.pdf','2023-09-29 08:30:55','2023-09-29 08:30:55',NULL),(330,28,612,79,'2021-2022','AQAR','1695976290.pdf','2023-09-29 08:31:30','2023-09-29 08:31:30',NULL),(331,2,607,5,'2021-2022','AQAR','1695976826.pdf','2023-09-29 08:40:26','2023-09-29 08:40:26',NULL),(332,2,607,6,'2020-2021','AQAR','','2023-09-29 09:22:17','2023-09-29 09:22:17',NULL),(333,3,607,7,'2021-2022','AQAR','1695979583.pdf','2023-09-29 09:26:23','2023-09-29 09:26:23',NULL),(334,3,607,7,'2020-2021','AQAR','1695980685.pdf','2023-09-29 09:44:45','2023-09-29 09:44:45',NULL),(335,28,612,77,'2020-2021','AQAR','1695980926.pdf','2023-09-29 09:48:47','2023-09-29 09:48:47',NULL),(336,28,612,77,'2021-2022','AQAR','1695980958.pdf','2023-09-29 09:49:18','2023-09-29 09:49:18',NULL),(337,3,607,7,'2020-2021','AQAR','1695983132.pdf','2023-09-29 10:25:32','2023-09-29 10:25:32',NULL),(338,4,607,11,'2021-2022','AQAR','1695984441.pdf','2023-09-29 10:47:21','2023-09-29 10:47:21',NULL),(339,4,607,10,'2021-2022','AQAR','1695984543.pdf','2023-09-29 10:49:04','2023-09-29 10:49:04',NULL),(340,27,612,76,'2020-2021','AQAR','1696056805.pdf','2023-09-30 06:53:25','2023-09-30 06:53:25',NULL),(341,27,612,76,'2021-2022','AQAR','1696056854.pdf','2023-09-30 06:54:14','2023-09-30 06:54:14',NULL),(345,29,612,82,'2020-2021','AQAR','1696065968.docx','2023-09-30 09:26:08','2023-09-30 09:26:08',NULL),(346,29,612,82,'2020-2021','AQAR','1696066177.pdf','2023-09-30 09:29:37','2023-09-30 09:29:37',NULL),(347,29,612,80,'2020-2021','AQAR','1696068765.docx','2023-09-30 10:12:45','2023-09-30 10:12:45',NULL),(348,29,612,80,'2020-2021','AQAR','1696068980.docx','2023-09-30 10:16:20','2023-09-30 10:16:20',NULL),(349,26,612,70,'2021-2022','AQAR','1696069222.pdf','2023-09-30 10:20:22','2023-09-30 10:20:22',NULL),(350,26,612,70,'2021-2022','AQAR','1696069325.pdf','2023-09-30 10:22:05','2023-09-30 10:22:05',NULL),(351,27,612,75,'2021-2022','AQAR','1696069357.pdf','2023-09-30 10:22:37','2023-09-30 10:22:37',NULL),(352,28,612,77,'2021-2022','AQAR','1696070845.pdf','2023-09-30 10:47:26','2023-09-30 10:47:26',NULL),(353,21,611,56,'2022-2023','AQAR','1696070901.pdf','2023-09-30 10:48:22','2023-09-30 10:48:22',NULL),(354,3,607,7,'2020-2021','AQAR','1696072432.docx','2023-09-30 11:13:52','2023-09-30 11:13:52',NULL),(355,3,607,8,'2021-2022','AQAR','1696072643.docx','2023-09-30 11:17:23','2023-09-30 11:17:23',NULL),(356,3,607,8,'2020-2021','AQAR','1696072752.pdf','2023-09-30 11:19:12','2023-09-30 11:19:12',NULL),(357,29,612,81,'2020-2021','AQAR','1696077047.docx','2023-09-30 12:30:47','2023-09-30 12:30:47',NULL),(358,29,612,81,'2020-2021','AQAR','1696077158.docx','2023-09-30 12:32:38','2023-09-30 12:32:38',NULL),(359,29,612,81,'2018-2019','AQAR','1696078976.pdf','2023-09-30 13:02:56','2023-09-30 13:02:56',NULL),(360,25,612,68,'2019-2020','AQAR','','2023-09-30 13:12:15','2023-09-30 13:12:15',NULL),(361,26,612,69,'2019-2020','AQAR','1696080129.pdf','2023-09-30 13:22:09','2023-09-30 13:22:09',NULL),(362,26,612,71,'2019-2020','AQAR','1696080180.pdf','2023-09-30 13:23:00','2023-09-30 13:23:00',NULL),(363,27,612,72,'2019-2020','AQAR','1696080525.pdf','2023-09-30 13:28:45','2023-09-30 13:28:45',NULL),(364,1,607,3,'2020-2021','AQAR','1696080690.pdf','2023-09-30 13:31:30','2023-09-30 13:31:30',NULL),(365,2,607,6,'2020-2021','AQAR','1696080879.pdf','2023-09-30 13:34:39','2023-09-30 13:34:39',NULL),(366,30,613,90,'2020-2021','AQAR','1696085555.pdf','2023-09-30 14:52:35','2023-09-30 14:52:35',NULL),(367,21,611,57,'2021-2022','AQAR','1696085620.pdf','2023-09-30 14:53:40','2023-09-30 14:53:40',NULL),(368,21,611,57,'2021-2022','AQAR','1696085649.pdf','2023-09-30 14:54:09','2023-09-30 14:54:09',NULL),(369,21,611,57,'2021-2022','AQAR','1696085667.pdf','2023-09-30 14:54:28','2023-09-30 14:54:28',NULL),(370,29,612,82,'2021-2022','AQAR','1696087639.pdf','2023-09-30 15:27:19','2023-09-30 15:27:19',NULL),(371,30,613,86,'2021-2022','AQAR','1696089103.pdf','2023-09-30 15:51:43','2023-09-30 15:51:43',NULL),(373,5,608,13,'2021-2022','AQAR','1696092187.pdf','2023-09-30 16:43:07','2023-09-30 16:43:07',NULL),(374,5,608,12,'2021-2022','AQAR','1696092499.pdf','2023-09-30 16:48:19','2023-09-30 16:48:19',NULL),(375,29,612,81,'2021-2022','AQAR','1696094100.pdf','2023-09-30 17:15:00','2023-09-30 17:15:00',NULL),(378,30,613,87,'2021-2022','AQAR','1696098005.pdf','2023-09-30 18:20:05','2023-09-30 18:20:05',NULL),(379,11,608,NULL,'2022-2023','AQAR','1696756608.pdf','2023-10-08 09:16:49','2023-10-08 09:16:49',NULL),(380,10,608,26,'2022-2023','AQAR','1696763768.pdf','2023-10-08 11:16:09','2023-10-08 11:16:09',NULL),(383,9,608,23,'2022-2023','AQAR','1696779868.pdf','2023-10-08 15:44:29','2023-10-08 15:44:29',NULL),(384,9,608,23,'2022-2023','AQAR','1696779969.pdf','2023-10-08 15:46:09','2023-10-08 15:46:09',NULL),(385,9,608,23,'2022-2023','AQAR','1696780080.pdf','2023-10-08 15:48:00','2023-10-08 15:48:00',NULL),(386,9,608,23,'2022-2023','AQAR','1696780153.pdf','2023-10-08 15:49:14','2023-10-08 15:49:14',NULL),(387,9,608,23,'2023-2024','AQAR','1696780222.pdf','2023-10-08 15:50:22','2023-10-08 15:50:22',NULL),(388,9,608,23,'2022-2023','AQAR','1696780264.pdf','2023-10-08 15:51:04','2023-10-08 15:51:04',NULL),(389,9,608,23,'2022-2023','AQAR','1696780393.pdf','2023-10-08 15:53:14','2023-10-08 15:53:14',NULL),(390,9,608,23,'2022-2023','AQAR','1696780563.pdf','2023-10-08 15:56:03','2023-10-08 15:56:03',NULL),(391,9,608,22,'2022-2023','AQAR','1696780643.pdf','2023-10-08 15:57:23','2023-10-08 15:57:23',NULL),(392,10,608,25,'2022-2023','AQAR','1696951307.pdf','2023-10-10 15:21:47','2023-10-10 15:21:47',NULL),(393,7,608,18,'2023-2024','AQAR','1697049557.pdf','2023-10-11 18:39:17','2023-10-11 18:39:17',NULL),(394,7,608,17,'2022-2023','AQAR','1697049600.pdf','2023-10-11 18:40:01','2023-10-11 18:40:01',NULL),(396,7,608,18,'2022-2023','AQAR','1697090539.pdf','2023-10-12 06:02:19','2023-10-12 06:02:19',NULL),(397,2,607,5,'2022-2023','AQAR','1697181522.pdf','2023-10-13 07:18:42','2023-10-13 07:18:42',NULL),(398,2,607,6,'2022-2023','AQAR','1697188501.pdf','2023-10-13 09:15:01','2023-10-13 09:15:01',NULL),(399,2,607,6,'2022-2023','AQAR','1697188597.pdf','2023-10-13 09:16:38','2023-10-13 09:16:38',NULL),(400,2,607,6,'2022-2023','AQAR','1697188658.pdf','2023-10-13 09:17:38','2023-10-13 09:17:38',NULL),(401,2,607,6,'2022-2023','AQAR','1697188731.pdf','2023-10-13 09:18:52','2023-10-13 09:18:52',NULL),(402,2,607,6,'2022-2023','AQAR','1697188766.pdf','2023-10-13 09:19:26','2023-10-13 09:19:26',NULL),(403,2,607,6,'2022-2023','AQAR','1697188795.pdf','2023-10-13 09:19:55','2023-10-13 09:19:55',NULL),(404,2,607,6,'2022-2023','AQAR','1697188825.pdf','2023-10-13 09:20:25','2023-10-13 09:20:25',NULL),(405,2,607,6,'2022-2023','AQAR','1697188861.pdf','2023-10-13 09:21:01','2023-10-13 09:21:01',NULL),(406,2,607,6,'2022-2023','AQAR','1697188891.pdf','2023-10-13 09:21:31','2023-10-13 09:21:31',NULL),(407,2,607,6,'2022-2023','AQAR','1697188919.pdf','2023-10-13 09:21:59','2023-10-13 09:21:59',NULL),(408,2,607,6,'2022-2023','AQAR','1697188945.pdf','2023-10-13 09:22:25','2023-10-13 09:22:25',NULL),(409,2,607,6,'2022-2023','AQAR','1697188977.pdf','2023-10-13 09:22:57','2023-10-13 09:22:57',NULL),(410,2,607,6,'2022-2023','AQAR','1697189004.pdf','2023-10-13 09:23:25','2023-10-13 09:23:25',NULL),(411,2,607,6,'2022-2023','AQAR','1697189042.pdf','2023-10-13 09:24:02','2023-10-13 09:24:02',NULL),(412,2,607,6,'2022-2023','AQAR','1697189070.pdf','2023-10-13 09:24:30','2023-10-13 09:24:30',NULL),(413,2,607,6,'2022-2023','AQAR','1697189094.pdf','2023-10-13 09:24:54','2023-10-13 09:24:54',NULL),(414,2,607,6,'2022-2023','AQAR','1697189117.pdf','2023-10-13 09:25:17','2023-10-13 09:25:17',NULL),(415,2,607,4,'2022-2023','AQAR','1697189842.pdf','2023-10-13 09:37:23','2023-10-13 09:37:23',NULL),(416,2,607,5,'2022-2023','AQAR','1697190347.pdf','2023-10-13 09:45:47','2023-10-13 09:45:47',NULL),(417,2,607,4,'2022-2023','AQAR','1697192793.pdf','2023-10-13 10:26:33','2023-10-13 10:26:33',NULL),(418,10,608,24,'2022-2023','AQAR','1697295857.pdf','2023-10-14 15:04:17','2023-10-14 15:04:17',NULL),(419,17,610,44,'2022-2023','AQAR','1697524749.pdf','2023-10-17 06:39:09','2023-10-17 06:39:09',NULL),(420,17,610,42,'2022-2023','AQAR','1697525255.pdf','2023-10-17 06:47:35','2023-10-17 06:47:35',NULL),(421,17,610,43,'2022-2023','AQAR','1697525398.pdf','2023-10-17 06:49:58','2023-10-17 06:49:58',NULL),(422,6,608,14,'2022-2023','AQAR','1697562788.pdf','2023-10-17 17:13:08','2023-10-17 17:13:08',NULL),(423,3,607,7,'2022-2023','AQAR','1698225953.pdf','2023-10-25 09:25:53','2023-10-25 09:25:53',NULL),(424,27,612,75,'2022-2023','AQAR','1703752461.pdf','2023-12-28 08:34:21','2023-12-28 08:34:21',NULL),(425,27,612,75,'2022-2023','AQAR','1703752491.pdf','2023-12-28 08:34:52','2023-12-28 08:34:52',NULL),(427,27,612,75,'2022-2023','AQAR','1703752746.pdf','2023-12-28 08:39:07','2023-12-28 08:39:07',NULL),(428,27,612,75,'2022-2023','AQAR','1703752780.pdf','2023-12-28 08:39:41','2023-12-28 08:39:41',NULL),(429,27,612,75,'2022-2023','AQAR','1703753665.pdf','2023-12-28 08:54:25','2023-12-28 08:54:25',NULL),(430,27,612,75,'2022-2023','AQAR','1703753701.pdf','2023-12-28 08:55:01','2023-12-28 08:55:01',NULL),(431,27,612,76,'2022-2023','AQAR','1703754953.pdf','2023-12-28 09:15:54','2023-12-28 09:15:54',NULL),(432,27,612,76,'2022-2023','AQAR','1703760694.pdf','2023-12-28 10:51:34','2023-12-28 10:51:34',NULL),(438,28,612,78,'2022-2023','AQAR','1703915134.pdf','2023-12-30 05:45:34','2023-12-30 05:45:34',NULL),(442,28,612,79,'2022-2023','AQAR','1704634213.pdf','2024-01-07 13:30:13','2024-01-07 13:30:13',NULL),(443,28,612,79,'2022-2023','AQAR','1704634359.pdf','2024-01-07 13:32:39','2024-01-07 13:32:39',NULL),(445,28,612,78,'2022-2023','AQAR','1704634701.pdf','2024-01-07 13:38:21','2024-01-07 13:38:21',NULL),(446,1,607,1,'2022-2023','AQAR','1704644272.pdf','2024-01-07 16:17:52','2024-01-07 16:17:52',NULL),(447,1,607,2,'2022-2023','AQAR','1704691162.pdf','2024-01-08 05:19:22','2024-01-08 05:19:22',NULL),(448,26,612,70,'2022-2023','AQAR','1704704069.pdf','2024-01-08 08:54:30','2024-01-08 08:54:30',NULL),(449,26,612,70,'2022-2023','AQAR','1704705395.pdf','2024-01-08 09:16:35','2024-01-08 09:16:35',NULL),(450,26,612,70,'2022-2023','AQAR','1704707096.pdf','2024-01-08 09:44:57','2024-01-08 09:44:57',NULL),(451,28,612,79,'2022-2023','AQAR','1704711194.pdf','2024-01-08 10:53:15','2024-01-08 10:53:15',NULL),(452,26,612,69,'2022-2023','AQAR','1704767510.pdf','2024-01-09 02:31:50','2024-01-09 02:31:50',NULL),(454,26,612,69,'2022-2023','AQAR','1704768100.pdf','2024-01-09 02:41:40','2024-01-09 02:41:40',NULL),(455,26,612,71,'2022-2023','AQAR','1704768268.pdf','2024-01-09 02:44:28','2024-01-09 02:44:28',NULL),(456,26,612,71,'2022-2023','AQAR','1704768310.pdf','2024-01-09 02:45:11','2024-01-09 02:45:11',NULL),(457,26,612,71,'2022-2023','AQAR','1704768366.pdf','2024-01-09 02:46:06','2024-01-09 02:46:06',NULL),(458,26,612,71,'2022-2023','AQAR','1704768551.pdf','2024-01-09 02:49:11','2024-01-09 02:49:11',NULL),(459,26,612,71,'2022-2023','AQAR','1704768589.pdf','2024-01-09 02:49:49','2024-01-09 02:49:49',NULL),(466,27,612,73,'2022-2023','AQAR','1704868791.pdf','2024-01-10 06:39:51','2024-01-10 06:39:51',NULL),(467,27,612,73,'2022-2023','AQAR','1704868828.pdf','2024-01-10 06:40:28','2024-01-10 06:40:28',NULL),(474,32,613,NULL,'2023-2024','AQAR','1704903921.pdf','2024-01-10 16:25:21','2024-01-10 16:25:21',NULL),(475,2,607,6,'2022-2023','AQAR','1704960505.pdf','2024-01-11 08:08:25','2024-01-11 08:08:25',NULL),(476,21,611,55,'2022-2023','AQAR','1704963858.pdf','2024-01-11 09:04:18','2024-01-11 09:04:18',NULL),(477,27,612,76,'2022-2023','AQAR','1704993267.pdf','2024-01-11 17:14:27','2024-01-11 17:14:27',NULL),(478,21,611,55,'2022-2023','AQAR','1705037763.pdf','2024-01-12 05:36:04','2024-01-12 05:36:04',NULL),(484,21,611,56,'2022-2023','AQAR','1705040624.pdf','2024-01-12 06:23:44','2024-01-12 06:23:44',NULL),(485,27,612,72,'2022-2023','AQAR','1705040760.pdf','2024-01-12 06:26:00','2024-01-12 06:26:00',NULL),(486,27,612,72,'2022-2023','AQAR','1705040825.pdf','2024-01-12 06:27:05','2024-01-12 06:27:05',NULL),(489,21,611,55,'2022-2023','AQAR','1705044240.pdf','2024-01-12 07:24:00','2024-01-12 07:24:00',NULL),(490,21,611,55,'2022-2023','AQAR','1705046616.pdf','2024-01-12 08:03:36','2024-01-12 08:03:36',NULL),(493,21,611,55,'2022-2023','AQAR','1705047050.pdf','2024-01-12 08:10:50','2024-01-12 08:10:50',NULL),(497,5,608,13,'2023-2024','AQAR','1705053502.pdf','2024-01-12 09:58:22','2024-01-12 09:58:22','Consolidated grade card.pdf'),(498,5,608,13,'2023-2024','AQAR','1705053555.pdf','2024-01-12 09:59:15','2024-01-12 09:59:15','Consolidated grade card.pdf'),(499,5,608,13,'2023-2024','AQAR','1705053557.pdf','2024-01-12 09:59:17','2024-01-12 09:59:17','Consolidated grade card.pdf'),(500,5,608,13,'2022-2023','AQAR','1705053558.pdf','2024-01-12 09:59:18','2024-01-12 09:59:18','Consolidated grade card.pdf'),(501,5,608,13,'2022-2023','AQAR','1705053615.pdf','2024-01-12 10:00:15','2024-01-12 10:00:15','Consolidated grade card.pdf'),(512,57,612,NULL,'2018-2023','SSR','1705125694.pdf','2024-01-13 06:01:34','2024-01-13 06:01:34','6.1.1-Perspective plan and deployment .pdf'),(513,57,612,NULL,'2018-2023','SSR','1705126869.pdf','2024-01-13 06:21:09','2024-01-13 06:21:09','6.1.1 - Additional information-Governance  .pdf'),(514,64,613,NULL,'2018-2023','SSR','1705128527.pdf','2024-01-13 06:48:47','2024-01-13 06:48:47','7.4.Insti Distinctiveness 20mb file .pdf'),(515,59,612,NULL,'2018-2023','SSR','1705164307.pdf','2024-01-13 16:45:07','2024-01-13 16:45:07','6.3.1 SSR DATA .pdf'),(516,59,612,NULL,'2018-2023','SSR','1705164397.pdf','2024-01-13 16:46:37','2024-01-13 16:46:37','6.3.1 SSR SUPPORTING DOCUMENT.pdf');
/*!40000 ALTER TABLE `naac_report_data` ENABLE KEYS */;
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

-- Dump completed on 2024-01-14 12:22:21